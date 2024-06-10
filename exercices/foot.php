<?php

require_once 'Footballteam';

$team1 = new Footballteam('Real madrid', 'carlos acelotti', 'madrid');
$team2 = new Footballteam('manchester city', 'pep gardiola', 'manchester');

echo "Team 1 : " . $team1->getName(). "\n";
echo "Team 2 : " . $team2->getName(). "\n";