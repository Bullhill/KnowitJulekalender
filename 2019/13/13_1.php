<?php
$maze = json_decode(file_get_contents("MAZE.TXT"), true);

$been[0][0] = true;

goMaze(array('y' => 0, 'x' => 0),array('y' => 0, 'x' => 0));

function goMaze($curpos, $lastpos)
{
	global $maze;
	global $been;
	
	$been[$curpos['y']][$curpos['x']] = true;
		
	if(!is_array($maze[$curpos['y']][$curpos['x']]))
	{
		die;
	}
	elseif($maze[$curpos['y']][$curpos['x']]['bottom'] == false && $been[$curpos['y']+1][$curpos['x']] == false)
	{
		echo "Gå ned\n";
		goMaze(array('y' => $curpos['y']+1, 'x' => $curpos['x']), $curpos);
	}
	elseif($maze[$curpos['y']][$curpos['x']]['right'] == false && $been[$curpos['y']][$curpos['x']+1] == false)
	{
		echo "Gå høyre\n";
		goMaze(array('y' => $curpos['y'], 'x' => $curpos['x']+1), $curpos);
	}
	elseif($maze[$curpos['y']][$curpos['x']]['left'] == false && $been[$curpos['y']][$curpos['x']-1] == false)
	{
		echo "Gå venstre\n";
		goMaze(array('y' => $curpos['y'], 'x' => $curpos['x']-1), $curpos);
	}
	elseif($maze[$curpos['y']][$curpos['x']]['top'] == false && $been[$curpos['y']-1][$curpos['x']] == false)
	{
		echo "Gå opp\n";
		goMaze(array('y' => $curpos['y']-1, 'x' => $curpos['x']), $curpos);
	}
	
}
print_r($been);
?>