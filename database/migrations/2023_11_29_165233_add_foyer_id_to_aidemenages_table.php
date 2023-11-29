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
        $table->foreignId('foyer_id')->nullable()->constrained(); // Assurez-vous que le type de la clé étrangère est approprié
    });
}

public function down()
{
    Schema::table('aidemenages', function (Blueprint $table) {
        $table->dropForeign(['foyer_id']);
        $table->dropColumn('foyer_id');
    });
}

};
