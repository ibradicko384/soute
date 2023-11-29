<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAidemenageTable extends Migration
{
    public function up()
    {
        Schema::create('aidemenage', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->default(''); // ou une autre valeur par défaut
            $table->string('prenom')->default('');
            $table->date('date_de_naissance')->default('');
            $table->string('quartier')->default('');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aidemenage');
    }
}
