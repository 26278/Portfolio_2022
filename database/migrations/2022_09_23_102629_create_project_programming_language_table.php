<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_programming_language', function (Blueprint $table)
            {
                $table->id();
                $table->timestamps();
                $table->unsignedBigInteger('project_id')->unsigned();
                $table->unsignedBigInteger('programming_language_id')->unsigned();

                $table->foreign('project_id')->references('id')->on('projects')
                      ->onDelete('cascade');
                $table->foreign('programming_language_id')->references('id')->on('programming_languages')
                      ->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_programming_language');
    }
};
