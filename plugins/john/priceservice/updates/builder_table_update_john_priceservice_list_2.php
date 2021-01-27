<?php namespace John\Priceservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJohnPriceserviceList2 extends Migration
{
    public function up()
    {
        Schema::table('john_priceservice_list', function($table)
        {
            $table->string('icon', 255);
            $table->string('slug', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('john_priceservice_list', function($table)
        {
            $table->dropColumn('icon');
            $table->dropColumn('slug');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
