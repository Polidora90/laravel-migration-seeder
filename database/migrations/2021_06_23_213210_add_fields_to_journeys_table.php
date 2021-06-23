<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journeys', function (Blueprint $table) {
            $table->string('destination', 255);
            $table->date('next_flight_date');
            $table->longText('description');
            $table->tinyInteger('lenght_of_stay');
            $table->integer('price');
            $table->string('kids_activities')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journeys', function (Blueprint $table) {
            $table->dropColumn('destination');
            $table->dropColumn('next_flight_date');
            $table->dropColumn('description');
            $table->dropColumn('lenght_of_stay');
            $table->dropColumn('price');
            $table->dropColumn('kids_activities');
        });
    }
}
