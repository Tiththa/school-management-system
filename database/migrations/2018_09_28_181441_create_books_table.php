<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->longtext('name')->nullable();
            $table->string('category')->nullable();
            $table->string('author')->nullable();
            $table->string('bookshelf')->nullable();
            $table->string('isbn')->nullable();
            $table->longtext('summary')->nullable();
            $table->string('shelf')->nullable();
            $table->string('filename')->nullable();
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();


            $table->timestamps();
        });
        DB::update("ALTER TABLE books AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
