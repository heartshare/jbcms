<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $result = DB::table('settings')->count();
        if (empty($result)) {
            $config = [
                ['parent_id' => 0, 'code' => 'setting', 'type' => 'hidden'],
                ['parent_id' => 0, 'code' => 'company', 'type' => 'hidden'],
                ['parent_id' => 0, 'code' => 'site', 'type' => 'hidden'],
                ['parent_id' => 0, 'code' => 'email', 'type' => 'hidden'],
            ];

            foreach ($config as $key => $item) {
                DB::table('settings')->insert($item);
            }

            $this->setting();
            $this->company();
            $this->site();
            $this->email();
        }
    }

    private function setting()
    {

    }

    private function company()
    {

    }

    private function site()
    {

    }

    private function email()
    {

    }
}
