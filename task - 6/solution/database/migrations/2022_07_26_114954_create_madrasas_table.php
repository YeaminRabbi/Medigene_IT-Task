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
            $table->text('division')->nullable();
            $table->text('district')->nullable();
            $table->text('thana')->nullable();
            $table->text('eiin')->nullable();
            $table->text('name')->nullable();
            $table->text('post_office')->nullable();
            $table->text('address')->nullable();
            $table->text('mobile')->nullable();
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
