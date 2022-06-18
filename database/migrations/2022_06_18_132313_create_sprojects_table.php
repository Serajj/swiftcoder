<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprojects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('framework');
            $table->string('app_url')->nullable();
            $table->string('web_url')->nullable();
            $table->string('git_url')->nullable();
            $table->string('quote')->nullable();
            $table->string('days')->nullable();
            $table->string('description');
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
        Schema::dropIfExists('sprojects');
    }
}
