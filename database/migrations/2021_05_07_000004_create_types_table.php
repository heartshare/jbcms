<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 内容模型表
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('')->comment('模型名称');
            $table->string('intro')->default('')->comment('模型描述');
            $table->text('fields')->comment('模型附加字段');
            $table->boolean('system')->default(0)->comment('系统模型');
            $table->boolean('status')->default(0)->comment('状态');
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
        Schema::dropIfExists('types');
    }
}
