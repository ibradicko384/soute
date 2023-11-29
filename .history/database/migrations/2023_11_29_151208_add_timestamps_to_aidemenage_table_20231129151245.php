<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToAidemenageTable extends Migration
{
    public function up()
    {
        Schema::table('aidemenage', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('aidemenage', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}

