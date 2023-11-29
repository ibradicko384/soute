<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTimestampsFromAidemenageTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('aidemenage', function (Blueprint $table) {
            // Supprimer les colonnes created_at et updated_at
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Si vous avez besoin de revenir en arrière, vous pouvez rétablir les colonnes ici
    }
}
