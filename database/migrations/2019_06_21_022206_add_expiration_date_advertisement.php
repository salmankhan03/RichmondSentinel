<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExpirationDateAdvertisement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advertisement_details', function (Blueprint $table) { 
            $table->dateTime("expiryDate")->nullable()->after("publishDate");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advertisement_details', function (Blueprint $table) {
            $table->dropColumn("expiryDate");
        });
    }
}
