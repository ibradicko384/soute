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
    Schema::table('aidemenage', function (Blueprint $table) {
        $table->id();
    });
}

public function down()
{
    Schema::table('aidemenage', function (Blueprint $table) {
        $table->dropColumn('id');
    });
}

};