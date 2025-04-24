<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nom_evenement');
            $table->string('organisateur');
            $table->text('presentation');
            $table->string('cible_principale');
            $table->string('domaine_artistique');
            $table->string('lieu')->nullable();
            $table->date('date_evenement')->nullable();
            $table->string('deja_lieu');
            $table->integer('nombre_editions')->default(0);
            $table->text('mesures_securitaires')->nullable();
            $table->string('frequence');
            $table->string('type_lieu');
            $table->integer('capacite_accueil')->default(0);
            $table->string('acces_pmr');
            $table->string('billetterie');
            $table->string('lien_visuel')->nullable();
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};


