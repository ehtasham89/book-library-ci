<?php

use Illuminate\Database\Capsule\Manager;

class Migration_Create_Racks extends CI_Migration
{
    public function up()
    {
        Manager::schema()->create('racks', function($table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Manager::schema()->drop('racks');
    }
}