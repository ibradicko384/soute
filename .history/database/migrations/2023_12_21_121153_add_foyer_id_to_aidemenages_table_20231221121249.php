<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('aidemenages', function (Blueprint $table) {
        $table->unsignedBigInteger('foyer_id')->nullable();
        // Ajoutez d'autres colonnes ou contraintes si nécessaire
    });
}

public function down()
{
    Schema::table('aidemenages', function (Blueprint $table) {
        $table->dropColumn('foyer_id');
        // Ajoutez d'autres instructions de suppression si nécessaire
    });
}

};
