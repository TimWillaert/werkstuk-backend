<?php

use App\Image;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('spreker_id');
            $table->timestamps();
        });

        //Scheme builder kan enkel blob toevoegen, geen longblob
        //blob laat enkel zeer kleine file sizes toe, dus moet ik manueel een longblob column toevoegen.
        DB::statement('ALTER TABLE images ADD src LONGBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
