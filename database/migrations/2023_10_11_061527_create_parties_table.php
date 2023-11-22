<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Party', function (Blueprint $table) {
            $table->id();
            $table->string('tname')->comment('黨名');
            $table->string('chairman')->comment('黨主席');
            $table->string('secretary')->comment('秘書長');
            $table->string('standpoint')->comment('政治立場');
            $table->string('link')->comment('官方網站');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Party');
    }
}
