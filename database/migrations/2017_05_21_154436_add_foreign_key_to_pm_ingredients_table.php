<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToPmIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pm_ingredients', function(Blueprint $table) {
            $table->foreign('resource_id', 'resource_id')->references('id')->on('pm_resource')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pm_ingredients', function(Blueprint $table)
        {
            $table->dropForeign('resource_id');
        });
    }
}
