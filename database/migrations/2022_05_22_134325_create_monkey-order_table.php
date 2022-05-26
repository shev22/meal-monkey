<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonkeyOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monkey-order', function (Blueprint $table) {
            $table->id();
            $table->string('food');
            $table->text('price');
            $table->float('qty');
            $table->string('total');
            $table->string('order_date');
            $table->string('status');
            $table->string('customer_name');
            $table->string('customer_contact');
            $table->string('customer_email');
            $table->string('customer_address');
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
        Schema::dropIfExists('monkey-order');
    }
}
