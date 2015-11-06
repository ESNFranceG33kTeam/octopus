<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('index', new Route('/list', array(
    '_controller' => 'AppBundle:List:index',
)));

return $collection;