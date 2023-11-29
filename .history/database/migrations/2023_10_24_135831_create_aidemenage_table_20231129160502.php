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
            $table->string('nom')->unique();
            $table->string('prenom');
            $table->date('date_de_naissance')->nullable();
            $table->string('quartier')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aidemenage');
    }
}
