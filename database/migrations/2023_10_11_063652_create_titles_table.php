<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     **/
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('姓名');
            $table->string('gender')->comment('性別');
            $table->tinyInteger('session')->comment('屆')->unsigned();
            $table->string('title')->comment('民意代表');
            $table->string('city')->comment('縣市');
            $table->date('birthday')->comment('生日');
            $table->string('area')->comment('選區');
            $table->string('cellphone')->comment('電話');
            $table->string('address')->comment('通訊處');
            $table->string('website')->comment('個人網站');
            $table->foreignId('tid')->comment('黨派(外部鍵)');
            $table->foreign('tid')->references('Id')->on('parties')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**test1
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titles');
    }
}
