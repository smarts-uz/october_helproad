<?php namespace John\Priceservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnPriceserviceList extends Migration
{
    public function up()
    {
        Schema::create('john_priceservice_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->decimal('price', 10, 0);
            $table->string('image', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('john_priceservice_list');
    }
}
