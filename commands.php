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

$result = [];

for($delta = 0; $delta < sizeof($teams) - 1; $delta++) {
    for($cursor = 0; $cursor < sizeof($teams); $cursor++) {
        array_push(
            $result, 
            [
                $teams[$cursor], 
                $teams[ ($cursor + $delta + 1) % sizeof($teams) ]
            ]
        );
    }
}

$rounds = array_chunk($result, sizeof($result) / 2);
