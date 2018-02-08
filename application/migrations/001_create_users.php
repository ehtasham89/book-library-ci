<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager;

class Migration_Create_Users extends CI_Migration
{
    public function up()
    {
        Manager::schema()->create('users', function($table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Manager::schema()->drop('users');
    }
}