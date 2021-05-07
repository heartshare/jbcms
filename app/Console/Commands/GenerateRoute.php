<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionMethod;

/**
 * Class GenerateRoute
 * @package App\Console\Commands
 */
class GenerateRoute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gen:route';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate routes command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \ReflectionException
     */
    public function handle(): int
    {
        $routes = $this->getRoutes();
        $this->generateRoute($routes);
        $this->generateAuthRule($routes);
        Artisan::call('optimize:clear');
        return 0;
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    private function getRoutes(): array
    {
        $list = glob(app_path('Http/Controllers/Console/*.php'));

        $parent_id = 0;
        $routes = [];
        foreach ($list as $item) {
            $class = 'App' . Str::after(Str::substr($item, 0, -4), 'app');
            $class = str_replace('/', '\\', $class);
            $reflectionClass = new ReflectionClass($class);
            $reflectionMethods = $reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC);

            foreach ($reflectionMethods as $method) {
                if ($method->class === $class) {
                    $c = Str::substr(class_basename($class), 0, -10);
                    $a = $method->name;

                    // 跳过首页路由
                    if ($c == 'Index' && $a == 'index') {
                        continue;
                    }

                    // 默认的控制器方法路由
                    $m = 'get'; // 请求类型
                    $r = $c . ($a == 'index' ? '' : '/' . $a); // 路由
                    $title = ''; // 路由描述
                    $menu = 0; // 是否为菜单项

                    $comment = explode("\n", $method->getDocComment());
                    if (isset($comment[1])) {
                        preg_match('/\*(.+)/', $comment[1], $m0);
                        $title = trim($m0[1]);
                    }

                    // 获取路由方法
                    preg_match('/@(.+?)Mapping?(.+)/', $method->getDocComment(), $m1);
                    // 获取注解路由
                    if (isset($m1[1])) {
                        if (strtolower($m1[1]) == 'request') {
                            $m = 'any';
                        } else {
                            $m = strtolower($m1[1]);
                        }

                        // 注解路由
                        $s = str_replace(' ', '', $m1[2]);
                        $s = str_replace(',', '&', mb_substr($s, 1, -1));

                        $p = [];
                        parse_str($s, $p);

                        $r = $p['path'] ?? $r;
                        $title = $p['title'] ?? $title;
                        $parent_id = $p['parent_id'] ?? $parent_id;
                        $menu = $p['menu'] ?? $menu;
                    }

                    // 路由设置
                    $action = class_basename($class) . '@' . $a;
                    $name = Str::camel($c) . '.' . $a;

                    $routes[] = [
                        'method' => $m,
                        'rule' => Str::kebab($r),
                        'action' => $action,
                        'name' => $name,
                        'title' => $title,
                        'parent_id' => $parent_id,
                        'menu' => $menu,
                    ];
                }
            }
        }

        return $routes;
    }

    /**
     * @param $routes
     */
    private function generateRoute($routes)
    {
        // 组装路由配置
        $routeBuffer = "// Generate begin\n";
        foreach ($routes as $route) {
            $routeBuffer .= "    Route::" . $route['method'] . "('" . $route['rule'] . "', '" . $route['action'] . "')->name('" . $route['name'] . "');\n";
        }
        $routeBuffer .= "    // Generate end";

        // 更新路由配置
        $content = file_get_contents(base_path('routes/web.php'));
        $content = preg_replace('/\/\/ Generate begin[\S\s]+?\/\/ Generate end/', $routeBuffer, $content);
        file_put_contents(base_path('routes/web.php'), $content);
    }

    /**
     * @param $routes
     */
    private function generateAuthRule($routes)
    {
        // Clear auth rules
        DB::table('auth_rules')->where('parent_id', '!=', 0)->delete();

        $rules = [];
        foreach ($routes as $route) {
            $rules[] = [
                'parent_id' => $route['parent_id'],
                'name' => $route['name'],
                'title' => $route['title'],
                'menu' => $route['menu'],
            ];
        }

        DB::table('auth_rules')->insert($rules);
    }
}
