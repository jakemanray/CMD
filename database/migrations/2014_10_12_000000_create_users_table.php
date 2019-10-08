<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastName');
            $table->date('nacimiento');
            $table->enum('position', ['Asesor Pedagógico (a)','Curriculista','Director (a)','Evaluador (a)','Informático','Metodólogo (a)','Secretaria']);
            $table->enum('escalafon',['B1','B2','B3','B4','B5','B6','B7','B8','B9','B10','B11','B12','B13','B14','C1','C2','C3','C4','C5','C6','C7','C8','C9',]);
            $table->string('titulo');
            $table->enum('tipoContrato',['Contrata','Honorario','Planta']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
