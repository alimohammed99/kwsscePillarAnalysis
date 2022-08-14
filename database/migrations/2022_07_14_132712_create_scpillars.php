<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScpillars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scpillars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plan_number')->nullable;
            $table->string('name')->nullable;
            $table->string('location')->nullable;
            $table->string('size')->nullable;
            $table->string('pillar_number')->nullable;
            $table->string('eastings')->nullable;
            $table->string('northings')->nullable;
            $table->string('origin')->nullable;
            $table->string('height')->nullable;
            $table->string('remarks')->nullable;
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
        Schema::dropIfExists('scpillars');
    }
}
