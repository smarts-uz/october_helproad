<?php namespace John\Priceservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteJohnPriceserviceList extends Migration
{
    public function up()
    {
        Schema::dropIfExists('john_priceservice_list');
    }
    
    public function down()
    {
        Schema::create('john_priceservice_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('price', 255);
            $table->string('image', 255);
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->dateTime(' deleted_at')->nullable()->default('NULL');
        });
    }
}
