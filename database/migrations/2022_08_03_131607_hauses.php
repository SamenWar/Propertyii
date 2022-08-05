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
        Schema::create('hauses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('bathrooms');
            $table->integer('badrooms');
            $table->integer('garage');
            $table->integer('Storeys');
            $table->integer('Prise');
            $table->timestamps();
                
        }
        );
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
