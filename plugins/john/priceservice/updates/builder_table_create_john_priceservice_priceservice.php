<?php namespace John\Priceservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnPriceservicePriceservice extends Migration
{
    public function up()
    {
        Schema::create('john_priceservice_priceservice', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('price', 255);
            $table->string('image', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->dateTime(' deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('john_priceservice_priceservice');
    }
}
