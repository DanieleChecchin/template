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
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->after('id'); //Aggiungo la colonna type_id e la posiziono dopo l'ID

            $table->foreign('type_id')->references('id')->on('types');

         //   $table->foreignId('type_id')->constrained(); Riassume entrambi i metodi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_type_id_foreign');

            $table->dropcolumn('type_id');
        });
    }
};
