<?php

use Illuminate\Database\Capsule\Manager;

class Migration_Create_Books extends CI_Migration
{
    public function up()
    {
        Manager::schema()->create('books', function($table){
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->string('published_year');
            $table->integer('rack_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Manager::schema()->drop('books');
    }
}