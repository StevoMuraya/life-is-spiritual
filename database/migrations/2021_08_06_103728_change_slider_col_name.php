<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSliderColName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('sliders', function (Blueprint $table) {
        //     $table->renameColumn('sub-title', 'sub_title');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('sliders', function (Blueprint $table) {
        //     $table->renameColumn('sub_title', 'sub-title');
        // });
    }
}
