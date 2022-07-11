<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->references('id')
            ->on('kategoris')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('vendor_id')->references('id')
            ->on('vendors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('jenis_event');
            $table->string('harga');
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
        Schema::dropIfExists('events');
    }
}
