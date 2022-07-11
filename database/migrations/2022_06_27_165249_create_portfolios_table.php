<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->references('id')
            ->on('vendors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('id_kategori')->references('id')
            ->on('kategoris')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('image_product');
            $table->string('nama_event');
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
        Schema::dropIfExists('portfolios');
    }
}
