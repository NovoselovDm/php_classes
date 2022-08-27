<?php
#connect files
include_once 'GeoFigure.php';
include_once 'Sphere.php';
include_once 'Triangle.php';

#count the requared values GET
$params = ['figure'=>$_GET['figure']];

#create class transferred by figure
/** @var GeoFigure $figure */
$figure=new $params['figure']();

#perimeter and area data
echo $figure;






