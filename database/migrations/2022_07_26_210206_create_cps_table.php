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
        Schema::create('cps', function (Blueprint $table) {
            $table->id();
            $table->string('cp');
            $table->foreignId('localities_id');
            $table->foreignId('federal_entity_id');
            $table->foreignId('settlements_id');
            $table->foreignId('municipalities_id');
            $table->softDeletes();
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
        Schema::dropIfExists('cps');
    }
};
