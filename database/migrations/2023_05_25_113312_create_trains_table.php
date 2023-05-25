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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 10);
            $table->string('Stazione_di_partenza');
            $table->string('Stazione_di_arrivo');
            $table->string('Orario_di_partenza', 20);
            $table->string('Orario_di_arrivo', 20);
            $table->smallInteger('Codice_treno')->unsigned();
            $table->smallInteger('Numero_carrozze')->unsigned();
            $table->boolean('In_orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
