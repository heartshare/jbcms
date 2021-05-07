<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 角色表
        Schema::create('auth_groups', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('')->comment('用户组名称');
            $table->text('rules')->comment('用户组拥有的规则id，多个规则","隔开');
            $table->tinyInteger('status')->default(1)->comment('状态：为1正常，为0禁用');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_groups');
    }
}
