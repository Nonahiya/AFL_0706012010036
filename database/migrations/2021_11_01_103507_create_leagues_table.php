<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->string('code');
            $table->string('name');
            $table->string('original_name');
            $table->string('nation');
            $table->integer('pyramid_level');
            $table->string('season');
            $table->string('img_name');
            $table->text('description');
            $table->timestamps();
        });
        Schema::table('leagues', function (Blueprint $table) {
            $table->primary('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leagues');
    }
}
