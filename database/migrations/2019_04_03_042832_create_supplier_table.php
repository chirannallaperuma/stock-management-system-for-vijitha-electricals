<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comapany_name', 100);
            $table->string('contact_person', 100);
            $table->integer('telephone');
            $table->integer('fax')->nullable();
            $table->integer('mobile');
            $table->string('email', 30)->nullable();
            $table->integer('user_created')->nullable();
            $table->integer('user_modified')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
