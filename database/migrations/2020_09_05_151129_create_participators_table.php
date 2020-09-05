<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * id INT AUTO_INCREMENT PRIMARY KEY,
            tournament_round_id INT NOT NULL,
            user_id INT NULL,
            position INT NOT NULL,
            full_name VARCHAR(255) NOT NULL,
            score INT NULL,
            CONSTRAINT foreign_tournament_round_id FOREIGN KEY (tournament_round_id) REFERENCES tournament_rounds (Id)
         */
        Schema::create('participators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_round_id')->constrained();
            $table->integer('user_id')->nullable(); //todo for future needs
            $table->integer('position');
            $table->string('full_name');
            $table->integer('score')->nullable();
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
        Schema::dropIfExists('participators');
    }
}
