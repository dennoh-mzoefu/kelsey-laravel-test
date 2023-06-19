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
        Schema::create('table_products', function (Blueprint $table) {
            $table->id();
            $table->string('Product_name');
            $table->string('Description') ->default('N/A');
            $table->string('Price');
            $table->string('Owner_email');
            //$table->dropColumn('Price');
            $table->timestamp('Price')->nullable();
            $table->timestamps();
            $table->timestamp("deleted_at");


            Schema::table('table_product', function(Blueprint $table){
                $table->softDeletes();
            });

            Schema::table('table_product', function(Blueprint $table){
                $table->dropSoftDeletes();
            });


        });


        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');


        
    }

};
