<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthRuleSeeder extends Seeder
{
    public function run()
    {
        $result = DB::table('auth_rules')->count();
        if (empty($result)) {
            $menu = [
                ['title' => '全局设置', 'name' => 'setting', 'icon' => 'icon-slider',],
                ['title' => '内容管理', 'name' => 'content', 'icon' => 'icon-form',],
                ['title' => '扩展模块', 'name' => 'extension', 'icon' => 'icon-app',],
                ['title' => '权限管理', 'name' => 'permission', 'icon' => 'icon-user',],
                ['title' => '系统管理', 'name' => 'system', 'icon' => 'icon-set',]
            ];

            foreach ($menu as $key => $item) {
                DB::table('auth_rules')->insert([
                    'id' => $key + 1,
                    'parent_id' => 0,
                    'name' => $item['name'],
                    'title' => $item['title'],
                    'icon' => $item['icon'],
                    'menu' => 1,
                ]);
            }
        }
    }
}
