<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('customer_id');
            $table->integer('term');
            $table->string('vland_id');
            $table->string('circuit_no');
            $table->string('no_ips');
            $table->string('total_bandwidth');
            $table->string('local_bandwidth');
            $table->string('int_bandwidth');
            $table->string('accessType');
            $table->string('accessSpeed');
            $table->string('ei_option')->nullable();
            $table->string('bandwidth_scheduling')->nullable();
            $table->string('prioritisation')->nullable();
            $table->string('product_name');
            $table->string('username');
            $table->string('access_username');
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
        Schema::dropIfExists('products');
    }
}
