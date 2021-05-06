<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 27 : Pchart - PHP
// Day 27 | IG : https://www.instagram.com/benjivrik/
// Subject :  JPGraph - PHP
// ----------------------------------------------------
//  what would be the output of this program ?
// https://jpgraph.net/doc/howto.php
// pChart is a PHP library that will help you to create anti-aliased charts 
// or pictures directly from your web server.
// PHP 5+


require_once('jpgraph-4.3.4/src/jpgraph.php');
require_once('jpgraph-4.3.4/src/jpgraph_line.php');
 
// Some data
$ydata = array(11,3,8,12,5,1,9,13,5,7);
 
// Create the graph. These two calls are always required
$graph = new Graph(350,250);
$graph->SetScale('textlin');
 
// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetColor('blue');
 

$path = "img_data/day27.jpg";

if (file_exists($path)) {
    unlink($path);
} // to avoid the error : JpGraph Error: 25111 Can't delete cached image

// Add the plot to the graph
$graph->Add($lineplot);
 
// Display the graph
$graph->Stroke($path);

?>


