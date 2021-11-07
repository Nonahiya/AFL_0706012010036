<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('leagues')->insert([
            'code' => 'epl',
            'name' => 'English Premier League',
            'original_name' => 'The Football Association Premier League Limited',
            'nation' => 'England',
            'pyramid_level' => 1,
            'season' => '2021/22',
            'img_name' => 'epl.png',
            'description' => 'The Premier League, often referred to as the English Premier League or the EPL (legal name: The Football Association Premier League Limited), is the top level of the English football league system. Contested by 20 clubs, it operates on a system of promotion and relegation with the English Football League (EFL). Seasons run from August to May with each team playing 38 matches (playing all 19 other teams both home and away). Most games are played on Saturday and Sunday afternoons.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('leagues')->insert([
            'code' => 'laliga',
            'name' => 'La Liga',
            'original_name' => 'Campeonato Nacional de Liga de Primera División',
            'nation' => 'Spain',
            'pyramid_level' => 1,
            'season' => '2021/22',
            'img_name' => 'laliga.png',
            'description' => 'The Campeonato Nacional de Liga de Primera División, commonly known simply as Primera División (Spanish Premier League) in Spain, and as La Liga in English-speaking countries and officially as LaLiga Santander for sponsorship reasons, stylized as LaLiga, is the men\'s top professional football division of the Spanish football league system. Administered by the Liga Nacional de Fútbol Profesional, is contested by 20 teams, with the three lowest-placed teams at the end of each season relegated to the Segunda División and replaced by the top two teams and a play-off winner in that division.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('leagues')->insert([
            'code' => 'bundesliga',
            'name' => 'Bundesliga',
            'original_name' => 'Fußball-Bundesliga',
            'nation' => 'Germany',
            'pyramid_level' => 1,
            'season' => '2021/22',
            'img_name' => 'bundesliga.png',
            'description' => 'The Bundesliga (Federal League), sometimes referred to as the Fußball-Bundesliga or 1. Bundesliga, is a professional association football league in Germany. At the top of the German football league system, the Bundesliga is Germany\'s primary football competition. The Bundesliga comprises 18 teams and operates on a system of promotion and relegation with the 2. Bundesliga. Seasons run from August to May. Most games are played on Saturdays and Sundays, with a few games played on weekdays. All of the Bundesliga clubs qualify for the DFB-Pokal. The winner of the Bundesliga qualifies for the DFL-Supercup.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('leagues')->insert([
            'code' => 'seriea',
            'name' => 'Serie A',
            'original_name' => 'Serie A TIM',
            'nation' => 'Italy',
            'pyramid_level' => 1,
            'season' => '2021/22',
            'img_name' => 'seriea.png',
            'description' => 'Serie A, also called Serie A TIM for sponsorship reasons, is a professional league competition for football clubs located at the top of the Italian football league system and the winner is awarded the Scudetto and the Coppa Campioni d\'Italia. It has been operating as a round-robin tournament for over ninety years since the 1929–30 season. It had been organized by the Direttorio Divisioni Superiori until 1943 and the Lega Calcio until 2010, when the Lega Serie A was created for the 2010–11 season. Serie A is regarded as one of the best football leagues in the world and it is often depicted as the most tactical and defensively sound national league. Serie A was the world\'s strongest national league in 2020 according to IFFHS, and is ranked third among European leagues according to UEFA\'s league coefficient, behind La Liga and the Premier League and ahead of the Bundesliga and Ligue 1, which is based on the performance of Italian clubs in the Champions League and the Europa League during the previous five years. Serie A led the UEFA ranking from 1986 to 1988 and from 1990 to 1999.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('leagues')->insert([
            'code' => 'ligue1',
            'name' => 'Ligue 1',
            'original_name' => 'Ligue 1 Uber Eats',
            'nation' => 'France',
            'pyramid_level' => 1,
            'season' => '2021/22',
            'img_name' => 'ligue1.png',
            'description' => 'Ligue 1, officially known as Ligue 1 Uber Eats for sponsorship reasons, is a French professional league for men\'s association football clubs. At the top of the French football league system, it is the country\'s primary football competition. Administrated by the Ligue de Football Professionnel, Ligue 1 is contested by 20 clubs and operates on a system of promotion and relegation from and to Ligue 2.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
