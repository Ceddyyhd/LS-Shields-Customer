
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::connection('mysql2')->create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->date('birth_date');
            $table->text('address');
            $table->string('position');
            $table->text('experience');
            $table->text('motivation');
            // Bewerbungsfragen
            $table->text('question1')->nullable(); // Warum möchten Sie bei uns arbeiten?
            $table->text('question2')->nullable(); // Haben Sie Erfahrung im Sicherheitsdienst?
            $table->text('question3')->nullable(); // Sind Sie bereit im Schichtdienst zu arbeiten?
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('applications');
    }
};