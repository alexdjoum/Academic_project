<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(false);
            $table->decimal("price",10,2,true)->nullable(false);
            $table->text("description")->nullable(false);
            $table ->string("imagepath")->nullable(false);
            $table ->unsignedBigInteger("categorie_id")->nullable(false);
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
             
            //$table->foreign('department_id')->references('id')->on('departments');
            //$table ->boolval("confadmin");
            $table->timestamps();
        });

        //  Schema::create('produits', function ($table) {
            //  $table->foreign('categorie_id')->references('id')->on('categories');   
        //  });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
