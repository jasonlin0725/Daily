<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('site_id')->nullable()->comment('站点编号');
            $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
            $table->string('name', 30)->nullable()->comment('昵称');
            $table->string('email')->unique()->nullable()->comment('邮箱');
            $table->string('mobile')->unique()->nullable()->comment('手机');
            $table->string('real_name', 20)->nullable()->comment('真实姓名');
            $table->string('password');
            $table->string('home')->nullable()->comment('个人主页');
            $table->string('icon')->nullable()->comment('头像');
            $table->string('token')->nullable()->comment('邮箱或手机验证码');
            $table->string('weibo')->nullable()->comment('微博帐号');
            $table->string('wechat')->nullable()->comment('微信');
            $table->string('github')->nullable()->comment('github地址');
            $table->string('qq')->nullable()->comment('QQ号');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->unsignedInteger('group_id')->comment('后台用户组');
            $table->timestamp('admin_end')->nullable()->comment('后台结束时间');
            $table->unsignedTinyInteger('lock')->comment('锁定后台操作权限');
            $table->rememberToken();
            $table->timestamps();
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
