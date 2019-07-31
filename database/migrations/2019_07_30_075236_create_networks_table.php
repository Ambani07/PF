<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('service_id');
            $table->integer('site_id');
            $table->integer('user_id');
            $table->string('circuit_no');
            // $table->string('ntu_no');
            $table->string('ntu_name');
            $table->string('physical_interface');
            $table->string('encapsulation');
            $table->integer('customer_facing_port');
            $table->string('customer_vlan');
            $table->string('ntu_ip_address');
            $table->string('link_subnet');
            $table->string('gateway_address');
            $table->integer('bandwidth');
            $table->string('ti_dis_int_bandwidth')->nullable();
            $table->string('me_access_type');
            $table->string('me_node');
            $table->integer('me_port');
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
        Schema::dropIfExists('networks');
    }
}
