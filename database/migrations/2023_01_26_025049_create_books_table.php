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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_code')->unique()->nullable();  
            $table->string('title');  
            $table->string('author');  
            $table->string('release');    
            $table->string('foto'); 
            $table->char('date'); 
            $table->char('time'); 
            $table->string('cover')->nullable();  
            $table->string('status')->default('in stok');  
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
        Schema::dropIfExists('books');
    }
};
