<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('other_booking_type_id');
            $table->unsignedBigInteger('bank_account_id');
            $table->boolean('booking_type')->default(0);
            $table->string('sum',10)->nullable();
            $table->datetime('date')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();            
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
        Schema::dropIfExists('other_bookings');
    }
}
