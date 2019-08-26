<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Appointments', function (Blueprint $table) {
            $table->string('day')->nullable();
            $table->string('time')->nullable();
            $table->string('medium')->nullable();
            $table->string('issue')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Appointments', function (Blueprint $table) {
          Schema::dropIfExists('Appointments');
        });
    }
}
