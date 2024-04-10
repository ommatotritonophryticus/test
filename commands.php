<?php

$teams = Array(
    'Ливерпуль',
    'Челси',
    'Тоттенхэм Хотспур',
    'Арсенал',
    'Манчестер Юнайтед',
    'Эвертон',
    'Лестер Сити',
    'Вест Хэм Юнайтед',
    'Уотфорд',
    'Борнмут',
    'Бернли',
    'Саутгемптон',
    'Брайтон энд Хоув Альбион',
    'Норвич Сити',
    'Шеффилд Юнайтед',
    'Фулхэм',
    'Сток Сити',
    'Мидлсбро',
    'Суонси Сити',
    'Дерби Каунти',
);

shuffle($teams);

$first_round = [];
$numTeams = count($teams);


$halfNumTeams = $numTeams / 2;

$reverse = false;
for ($round = 1; $round < $numTeams; $round++) {
    $matchesInRound = array();

    for ($i = 0; $i < $halfNumTeams; $i++) {
        $team1 = $teams[$i];
        $team2 = $teams[$numTeams - $i - 1];


        if ($reverse) {
            $matchesInRound[] = array($team1, $team2);
        } else {
            $matchesInRound[] = array($team2, $team1);             
        }
    }

    $first_round[] = $matchesInRound;
    $reverse = !$reverse;

    $lastTeam = array_pop($teams);
    array_splice($teams, 1, 0, $lastTeam);
}

$second_round = [];

foreach($first_round as $tour) {
    $new_tour = [];
    foreach($tour as $match) {
        $new_tour[] = [$match[1], $match[0]];
    }
    $second_round[] = $new_tour;
}

$rounds = [$first_round, $second_round];
