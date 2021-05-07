<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->comment('用户名');
            $table->string('password')->comment('登录密码');
            $table->string('email')->unique()->comment('电子邮箱');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->unique()->comment('手机号码');
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('name')->comment('昵称');
            $table->string('avatar')->comment('头像');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
