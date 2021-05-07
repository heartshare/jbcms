<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 配置表
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->index()->default(0)->comment('父节点id');
            $table->string('code')->unique()->comment('配置code');
            $table->string('type')->default('')->comment('配置类型：text、select、file、hidden等');
            $table->string('store_range')->default('')->comment('配置数组索引');
            $table->string('value')->default('')->comment('该项配置的值');
            $table->tinyInteger('sort_order')->default(1)->comment('排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
