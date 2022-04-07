<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
include __DIR__. "/products.php";

$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);



echo $twig->render('products.html.twig',  ['products' => $products]);