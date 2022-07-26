<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMadrasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madrasas', function (Blueprint $table) {
            $table->id();
            $table->text('division');
            $table->text('district');
            $table->text('thana');
            $table->text('eiin');
            $table->text('name');
            $table->text('post_office');
            $table->text('address');
            $table->text('mobile');
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
        Schema::dropIfExists('madrasas');
    }
}
