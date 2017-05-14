<?php

use Illuminate\Database\Seeder;

class QuestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<9; $i++) {
            $quest = new \App\Quests();
            $quest->name = 'Wymiana klocków hamulcowych' . $i;
            $quest->content = 'Skomplikowana wymiana';
            $quest->prize = 1000;
            $quest->client = 'Jan Kowalski' . $i;
            $quest->tel = 781285872;
            $quest->save();
        }
    }
}
