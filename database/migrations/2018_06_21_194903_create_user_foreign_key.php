<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('user_type_id')->references('user_type_id')->on('user_types')->onDelete('cascade');
            $table->foreign('user_history_id')->references('user_history_id')->on('user_histories')->onDelete('cascade');
            $table->foreign('financial_information_id')->references('financial_information_id')->on('financial_information')->onDelete('cascade');
        });

        Schema::table('reservations', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(blueprint $table)
        {
            $table->dropForeign('users_user_type_id_foreign');
            $table->dropForeign('users_user_history_id_foreign');
            $table->dropForeign('users_financial_information_id_foreign');
        });

        Schema::table('reservations', function(Blueprint $table)
        {
            $table->dropForeign('reservations_user_id_foreign');
        });
    }
}