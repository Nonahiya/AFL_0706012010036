<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bundesliga
        DB::table('clubs')->insert([
            'name' => 'FC Augsburg',
            'city' => 'Augsburg',
            'stadium' => 'WWK Arena',
            'apparel' => 'Nike',
            'sponsor' => 'WWK',
            'coach' => 'Markus Weinzierl',
            'captain' => 'Jeffrey Gouweleeuw',
            'in_league' => 'bundesliga',
            'img_name' => 'FCAugsburg.png',
            'description' => 'Fußball-Club Augsburg 1907 e. V., commonly known as FC Augsburg or Augsburg, is a German football club based in Augsburg, Bavaria. FC Augsburg play in the Bundesliga, the top tier of the German football league system. The team was founded as Fußball-Klub Alemania Augsburg in 1907 and played as BC Augsburg from 1921 to 1969. With over 18,800 members, it is the largest football club in Swabian Bavaria.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Hertha BSC',
            'city' => 'Berlin',
            'stadium' => 'Olympiastadion Berlin',
            'apparel' => 'Nike',
            'sponsor' => 'Autohero',
            'coach' => 'Pál Dárdai',
            'captain' => 'Dedryck Boyata',
            'in_league' => 'bundesliga',
            'img_name' => 'HerthaBSC.png',
            'description' => 'Hertha, Berliner Sport-Club e. V., commonly known as Hertha BSC, and sometimes referred to as Hertha Berlin, Hertha BSC Berlin, or simply Hertha, is a German professional football club based in the locality of Westend of the borough of Charlottenburg-Wilmersdorf of Berlin. Hertha BSC plays in the Bundesliga, the top tier of German football. Hertha BSC was founded in 1892, and was a founding member of the German Football Association in Leipzig in 1900.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Union Berlin',
            'city' => 'Berlin',
            'stadium' => 'Stadion An der Alten Försterei',
            'apparel' => 'Adidas',
            'sponsor' => 'Aroundtown',
            'coach' => 'Urs Fischer',
            'captain' => 'Christopher Trimmel',
            'in_league' => 'bundesliga',
            'img_name' => 'UnionBerlin.png',
            'description' => '1. Fußballclub Union Berlin e. V., commonly known as 1. FC Union Berlin or Union Berlin, is a professional German football club in Köpenick, Berlin. The club\'s origins can be traced to 1906, when its predecessor FC Olympia Oberschöneweide was founded. From 2009 until 2019, they competed in the 2. Bundesliga, the second tier of German football. In 2019, after defeating VfB Stuttgart in the relegation play-offs, Union won promotion to the Bundesliga top flight for the first time in the club\'s history, for the 2019–20 season.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Arminia Bielefeld',
            'city' => 'Bielefeld',
            'stadium' => 'Schüco-Arena',
            'apparel' => 'Macron',
            'sponsor' => 'Schüco',
            'coach' => 'Frank Kramer',
            'captain' => 'Fabian Klos/Manuel Prietl',
            'in_league' => 'bundesliga',
            'img_name' => 'ArminiaBielefeld.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'VfL Bochum',
            'city' => 'Bochum',
            'stadium' => 'Vonovia Ruhrstadion',
            'apparel' => 'Nike',
            'sponsor' => 'Vonovia',
            'coach' => 'Thomas Reis',
            'captain' => 'Anthony Losilla',
            'in_league' => 'bundesliga',
            'img_name' => 'VfLBochum.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Borussia Dortmund',
            'city' => 'Dortmund',
            'stadium' => 'Signal Iduna Park',
            'apparel' => 'Puma',
            'sponsor' => '1&1 Ionos',
            'coach' => 'Marco Rose',
            'captain' => 'Marco Reus',
            'in_league' => 'bundesliga',
            'img_name' => 'BorussiaDortmund.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Eintracht Frankfurt',
            'city' => 'Frankfurt',
            'stadium' => 'Deutsche Bank Park',
            'apparel' => 'Nike',
            'sponsor' => 'Indeed.com',
            'coach' => 'Oliver Glasner',
            'captain' => 'Sebastian Rode',
            'in_league' => 'bundesliga',
            'img_name' => 'EintrachtFrankfurt.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'SC Freiburg',
            'city' => 'Freiburg im Breisgau',
            'stadium' => 'Europa-Park Stadion',
            'apparel' => 'Nike',
            'sponsor' => 'Schwarzwaldmilch',
            'coach' => 'Christian Streich',
            'captain' => 'Christian Günter',
            'in_league' => 'bundesliga',
            'img_name' => 'SCFreiburg.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Greuther Fürth',
            'city' => 'Fürth',
            'stadium' => 'Sportpark Ronhof Thomas Sommer',
            'apparel' => 'Puma',
            'sponsor' => 'Hofmann Personal',
            'coach' => 'Stefan Leitl',
            'captain' => 'Branimir Hrgota',
            'in_league' => 'bundesliga',
            'img_name' => 'GreutherFürth.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => '1899 Hoffenheim',
            'city' => 'Sinsheim',
            'stadium' => 'PreZero Arena',
            'apparel' => 'Joma',
            'sponsor' => 'SAP',
            'coach' => 'Sebastian Hoeneß',
            'captain' => 'Benjamin Hübner',
            'in_league' => 'bundesliga',
            'img_name' => '1899Hoffenheim.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'FC Köln',
            'city' => 'Cologne',
            'stadium' => 'RheinEnergieStadion',
            'apparel' => 'Uhlsport',
            'sponsor' => 'REWE',
            'coach' => 'Steffen Baumgart',
            'captain' => 'Jonas Hector',
            'in_league' => 'bundesliga',
            'img_name' => 'FCKöln.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'RB Leipzig',
            'city' => 'Leipzig',
            'stadium' => 'Red Bull Arena',
            'apparel' => 'Nike',
            'sponsor' => 'Red Bull',
            'coach' => 'Jesse Marsch',
            'captain' => 'Péter Gulácsi',
            'in_league' => 'bundesliga',
            'img_name' => 'RBLeipzig.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Bayer Leverkusen',
            'city' => 'Leverkusen',
            'stadium' => 'BayArena',
            'apparel' => 'Jako',
            'sponsor' => 'Barmenia Versicherungen',
            'coach' => 'Gerardo Seoane',
            'captain' => 'Lukáš Hrádecký',
            'in_league' => 'bundesliga',
            'img_name' => 'BayerLeverkusen.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Mainz 05',
            'city' => 'Mainz',
            'stadium' => 'Mewa Arena',
            'apparel' => 'Kappa',
            'sponsor' => 'Kömmerling',
            'coach' => 'Bo Svensson',
            'captain' => 'Moussa Niakhaté',
            'in_league' => 'bundesliga',
            'img_name' => 'Mainz05.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Borussia Mönchengladbach',
            'city' => 'Mönchengladbach',
            'stadium' => 'Borussia-Park',
            'apparel' => 'Puma',
            'sponsor' => 'flatex',
            'coach' => 'Adi Hütter',
            'captain' => 'Lars Stindl',
            'in_league' => 'bundesliga',
            'img_name' => 'BorussiaMönchengladbach.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'Bayern Munich',
            'city' => 'Munich',
            'stadium' => 'Allianz Arena',
            'apparel' => 'Adidas',
            'sponsor' => 'Deutsche Telekom',
            'coach' => 'Julian Nagelsmann',
            'captain' => 'Manuel Neuer',
            'in_league' => 'bundesliga',
            'img_name' => 'BayernMunich.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'VfB Stuttgart',
            'city' => 'Stuttgart',
            'stadium' => 'Mercedes-Benz Arena',
            'apparel' => 'Jako',
            'sponsor' => 'Mercedes-Benz Bank',
            'coach' => 'Pellegrino Matarazzo',
            'captain' => 'Wataru Endo',
            'in_league' => 'bundesliga',
            'img_name' => 'VfBStuttgart.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clubs')->insert([
            'name' => 'VfL Wolfsburg',
            'city' => 'Wolfsburg',
            'stadium' => 'Volkswagen Arena',
            'apparel' => 'Nike',
            'sponsor' => 'Volkswagen',
            'coach' => 'Florian Kohfeldt',
            'captain' => 'Koen Casteels',
            'in_league' => 'bundesliga',
            'img_name' => 'VfLWolfsburg.png',
            'description' => 'Dummy data, please edit this description.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // EPL
        DB::table('clubs')->insert([
            'name' => 'Brighton Hove & Albion',
            'city' => 'Brighton',
            'stadium' => 'Falmer Stadium',
            'apparel' => 'Nike',
            'sponsor' => 'American Express',
            'coach' => 'Graham Potter',
            'captain' => 'Lewis Dunk',
            'in_league' => 'epl',
            'img_name' => '',
            'description' => 'Brighton & Hove Albion Football Club, commonly referred to simply as Brighton, is an English professional football club based in the city of Brighton and Hove. They compete in the Premier League, the top tier of the English football league system. The club\'s home ground is the 31,800-capacity Falmer Stadium, situated in Falmer to the north east of the city.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // La Liga
        DB::table('clubs')->insert([
            'name' => 'Real Sociedad',
            'city' => 'San Sebastián',
            'stadium' => 'Anoeta Stadium',
            'apparel' => 'Macron',
            'sponsor' => 'Finetwork',
            'coach' => 'Imanol Alguacil',
            'captain' => 'Asier Illarramendi',
            'in_league' => 'laliga',
            'img_name' => '',
            'description' => 'Real Sociedad de Fútbol, S.A.D., more commonly referred to as Real Sociedad or La Real, is a Spanish professional sports club in the city of San Sebastián, Basque Country, founded on 7 September 1909. It plays its home matches at the Anoeta Stadium. Real Sociedad won the Liga title in 1980–81 and 1981–82, and last finished runner-up in 2002–03. The club has also won the Copa del Rey three times, in 1909, 1987 and 2020. It contests the Basque derby against rivals Athletic Bilbao. Real Sociedad was a founder member of La Liga in 1929; its longest spell in the top flight was for 40 seasons, from 1967 to 2007.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // Ligue 1


        // Serie A
    }
}
