<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogProductRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_product_relatives', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('product_relative_id');

            $table->index(['product_id', 'product_relative_id']);
            $table->primary(['product_id', 'product_relative_id']);

            $table->foreign('product_id')->references('id')->on('catalog_products')->onDelete('cascade');
            $table->foreign('product_relative_id')->references('id')->on('catalog_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_product_relatives');
    }
}
