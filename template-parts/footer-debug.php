<section class="debug"><?php

global $mem_start;

$time_end = microtime();
$mem_end = memory_get_usage();

$mem_used = $mem_end - $mem_start;

function convert($size)
{
    $unit = array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

$time_taken = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

echo 'PHP Time taken: <em>', $time_taken, '</em> | Mem used: <em>', convert($mem_used, '</em>');

?></section>
