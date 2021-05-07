<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 权限表
        Schema::create('auth_rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->default(0)->comment('父级ID');
            $table->string('name')->unique()->default('')->comment('规则标识');
            $table->string('title')->default('')->comment('规则名称');
            $table->string('icon')->default('')->comment('ICON图标');
            $table->boolean('menu')->default(0)->comment('是否为管理菜单');
            $table->tinyInteger('type')->default(1)->comment('验证类型');
            $table->tinyInteger('status')->default(1)->comment('状态：为1正常，为0禁用');
            $table->string('condition')->default('')->comment('规则表达式，为空表示存在就验证，不为空表示按照条件验证');
            $table->unsignedInteger('sort')->default(0)->comment('菜单排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_rules');
    }
}
