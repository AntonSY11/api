<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SportType;

class CreateSportTypesTable extends Migration
{
    private $sportTypes = [
        ['table-tennis', 'Table tennis', 'table-tennis.png'],
        ['dota2', 'Dota 2', 'dota.png'],
        ['cs-go', 'CS:GO', 'cs-go.png'],
        ['lol', 'League of Legend', 'lol.png'],
        ['fortnite', 'Fortnite', 'fortnite.png'],
        ['football', 'Football', 'football.png'],
        ['basketball', 'Basketball', 'basketball.png'],
        ['american-football', 'American football', 'american-football.png'],
        ['volleyball', 'Volleyball', 'volleyball.png'],
        ['hockey', 'Hockey', 'hockey.png'],
        ['tennis', 'Tennis', 'tennis.png'],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_types', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('name')->unique();
            $table->string('image_url')->nullable();
        });

        foreach ($this->sportTypes as $sportType) {
            SportType::create([
                'key' => $sportType[0],
                'name' => $sportType[1],
                'image_url' => $sportType[2],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sport_types');
    }
}
