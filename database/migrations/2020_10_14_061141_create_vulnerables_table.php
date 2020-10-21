<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVulnerablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vulnerables', function (Blueprint $table) {
            $table->id();
            $table->string ('vulnerable_name');
             $table->string ('vulnerable_phone'); 
             $table->string ('vulnerable_location');
              $table->string ('vulnerable_income');
               $table->string ('vulnerable_family');
                $table->string ('vulnerable_status'); 
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
        Schema::dropIfExists('vulnerables');
    }
}
