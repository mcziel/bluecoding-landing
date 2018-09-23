<?php namespace OctoberStudio\Bluecoding\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOctoberstudioBluecodingContacts extends Migration
{
    public function up()
    {
        Schema::create('octoberstudio_bluecoding_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('email');
            $table->text('message');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('octoberstudio_bluecoding_contacts');
    }
}
