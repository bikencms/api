<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->longText('photo')->nullable();
            $table->text('duration')->nullable();
            $table->text('code')->nullable();
            $table->bigInteger('votes')->nullable();
            $table->longText('link')->nullable();
            $table->json('genres')->default('{}');
            $table->json('actresses')->default('{}');
            $table->json('tags')->default('{}');
            $table->dateTime('release_date');
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
        Schema::dropIfExists('movies');
    }
};
