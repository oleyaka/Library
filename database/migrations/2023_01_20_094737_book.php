<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('Book')) {
            Schema::create('Book', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->foreignId('author_id');
                $table->text('description');
                $table->integer('page_count');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Book');
    }
}
