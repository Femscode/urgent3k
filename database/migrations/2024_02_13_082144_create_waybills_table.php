<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaybillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // STATUS OF A WAYBILL
    // 0 as default
    // 1 for payment made
    // 2 for waybill sent
    // 3 for waybill received
    // 4 for canceled
    // 5 for uncanceled
    // 6 for deleted

    //7 for withdrawed 
    public function up()
    {
        Schema::create('waybills', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('reference');
            $table->integer('user_id');
            $table->integer('client_id');
            $table->string('product_name');
            $table->decimal('subamount');
            $table->decimal('charges');
            $table->decimal('totalamount');
            $table->integer('status')->default(0);
          
            $table->string('payment_method');
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
        Schema::dropIfExists('waybills');
    }
}
