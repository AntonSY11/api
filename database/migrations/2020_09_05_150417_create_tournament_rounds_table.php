<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         *     id INT AUTO_INCREMENT PRIMARY KEY,
        tournament_id INT NOT NULL,
        round_name VARCHAR(255) NOT NULL,
        _order INT NOT NULL,
        is_live BOOLEAN DEFAULT false,
        started_at DATETIME,
        finished_at DATETIME NULL,
        CONSTRAINT foreign_tournament_id FOREIGN KEY (tournament_id) REFERENCES tournaments (Id)
         */
        Schema::create('tournament_rounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_id')->constrained();
            $table->string('round_name');
            $table->integer('order');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('finished_at')->nullable();
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
        Schema::dropIfExists('tournament_rounds');
    }
}
