<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->id();
            $table->string('surname')->nullable();
            $table->string('othername')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('occupation')->nullable();
            $table->string('gender')->nullable();
            $table->string('business_address')->nullable();
            $table->string('home_address')->nullable();

            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributors');

        Schema::table('distributors', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
