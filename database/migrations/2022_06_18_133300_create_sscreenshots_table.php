<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSscreenshotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sscreenshots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sproject_id')->unsigned()->index()->nullable();
            $table->foreign('sproject_id')->references('id')->on('sprojects')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('sscreenshots');
    }
}
