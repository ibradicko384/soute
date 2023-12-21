<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFoyerIdToAidemenagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aidemenages', function (Blueprint $table) {
            $table->unsignedBigInteger('foyer_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aidemenages', function (Blueprint $table) {
            $table->dropColumn('foyer_id');
        });
    }
}

