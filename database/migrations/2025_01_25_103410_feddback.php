<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::connection('mysql2')->create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rating');
            $table->text('comment');
            $table->string('status')->default('Neu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('feedback');
    }
};