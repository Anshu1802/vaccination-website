<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('client_id');
            $table->string('username');
            $table->string('email');                            //
            $table->string('phone');
            $table->string('address');
            $table->string('aadhar');
            $table->string('vacinated_dose');
            $table->string('Dose');
            $table->string('symptom');
            $table->string('fmail')->nullable();;
            $table->string('message')->nullable();;
            $table->string('ip')->nullable();
            $table->string('browser name')->nullable();
            $table->string('operatingsystem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
