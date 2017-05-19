<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToUserResourceConnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pm_users_resource_conn', function(Blueprint $table) {
            $table->foreign('user_id', 'user_id')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('resource_id', 'fk_conn_user_resource_resource1_idx')->references('id')->on('pm_resource')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pm_users_resource_conn', function(Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('fk_conn_user_resource_resource1_idx');
        });
    }
}
