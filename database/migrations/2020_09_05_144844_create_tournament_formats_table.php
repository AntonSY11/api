<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentFormatsTable extends Migration
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
        _key VARCHAR(50) NOT NULL,
        name VARCHAR(50) NOT NULL,
        handler VARCHAR(255) NOT NULL,
         */
        Schema::create('tournament_formats', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('name')->unique();
            $table->string('handler');
        });

        \App\Models\TournamentFormat::create([
            'key' => 'round-robin',
            'name' => 'Round Robin',
            'handler' => 'RoundRobinHandlerImpl'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament_formats');
    }
}
