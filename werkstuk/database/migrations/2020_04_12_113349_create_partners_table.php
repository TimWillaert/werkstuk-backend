<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('level');
            $table->string('website');
            $table->timestamps();
            $table->string('imgname');
        });

        //Scheme builder kan enkel blob toevoegen, geen longblob
        //blob laat enkel zeer kleine file sizes toe, dus moet ik manueel een longblob column toevoegen.
        DB::statement('ALTER TABLE partners ADD img LONGBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
