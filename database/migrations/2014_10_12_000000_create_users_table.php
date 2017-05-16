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
            $table->string('username')->nullable()->index();
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('avatar');
            $table->integer('github_id')->nullable()->index();
            $table->string('github_name')->nullable()->index();
            $table->string('github_url')->nullable();
            $table->string('city')->nullable();
            $table->string('company')->nullable();
            $table->string('job')->nullable();
            $table->string('real_name')->nullable();
            $table->timestamp('last_active_at')->nullable();
            $table->tinyInteger('admin_level')->default(0);
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
