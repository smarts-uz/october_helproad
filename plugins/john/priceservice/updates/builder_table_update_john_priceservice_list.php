<?php namespace John\Priceservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJohnPriceserviceList extends Migration
{
    public function up()
    {
        Schema::table('john_priceservice_list', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('john_priceservice_list', function($table)
        {
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
