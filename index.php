<?php
//require_once "vendor/autoload.php";
//
//use TournamentGenerator\Preset\DoubleElimination;
//
///**
// * Test the double elimination generator
// */
//class DoubleEliminationTest
//{
//
//    /** @test */
//    public function double_elimination_less_teams() : void {
//        $tournament = new DoubleElimination('Tournament name');
//
//        for ($i = 1; $i < 3; $i++) {
//            $tournament->team('Team '.$i);
//        }
//
//        $this->expectException(Exception::class);
//        $tournament->generate();
//    }
//
//    public function teamCounts() : array {
//        return [
//            [3, 5],
//            [4, 7],
//            [5, 9],
//            [6, 11],
//            [7, 13],
//            [8, 15],
//            [9, 17],
//            [10, 19],
//            [11, 21],
//            [12, 23],
//            [13, 25],
//            [14, 27],
//            [15, 29],
//            [16, 31],
//        ];
//    }
//
//    /**
//     * @test
//     * @dataProvider teamCounts
//     */
//    public function double_elimination(int $teams, int $games) : void {
//        $tournament = new DoubleElimination('Tournament name');
//
//        for ($i = 1; $i <= $teams; $i++) {
//            $tournament->team('Team '.$i);
//        }
//
//        $tournament->generate();
//
//        $tournament->genGamesSimulateReal();
//
//        $count = count($tournament->getGames());
//
//        echo "<pre>";
//        print_r($tournament->printBracket());
//        echo "</pre>";
//
//        // The last game can be repeated - therefore <games-1, games> count must be checked
//        // self::assertTrue($count === $games || $count === $games - 1, 'Expected: '.$games.', Actual: '.$count.PHP_EOL.$tournament->printBracket());
//    }
//
//    // TODO: Maybe test specific double elimination bracket, if correct games are generated
//
//}
//
//
//
//$double = new DoubleEliminationTest();
//
//$double->double_elimination(8,0);





$upper = [];

function genMatches(&$teams, int &$counter): void {
    $halfTeams = $teams / 2;
    $halfhalfTeams = $teams / 4;

    echo $counter . "\n";

    if ($teams >= 1) {
        $c = $counter + 1;
        $teams1 = $teams / 2;
        genMatches($teams1, $c);
    }

//    if(($teams / $counter) < $teams) {
//        $counter1 = $counter++;
//        genMatches($teams / 2, $counter1);
//    }

}

$i = 0;
$teams = 8;
genMatches($teams, $i);



