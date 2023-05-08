<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name', 50);
            $table->string('station_name_departure', 50);
            $table->string('station_name_arrival', 50);
            $table->dateTimeTz('departure_date_time');
            $table->dateTimeTz('arrival_date_time');
            //uuid si autogenera
            $table->string('train_code');
            $table->unsignedTinyInteger('train_carriages')->default(1);
            $table->boolean('late_for_train_code')->default(0);
            $table->boolean('cancelled_for_train_code')->default(0);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
