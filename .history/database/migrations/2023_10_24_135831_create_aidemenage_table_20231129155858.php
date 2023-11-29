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
        Schema::create('aidemenage', function (Blueprint $table) {
            $table->id(); // Laravel gère automatiquement la clé primaire 'id'
            $table->string('nom')->unique();
            $table->string('prenom');
            $table->text('date_de_naissance')->nullable();
            $table->string('quartier')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aidemenage');
    }
};
