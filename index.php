<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require_once("lib/database.php");
require_once("lib/article.php");
require_once("lib/user.php");
require_once("lib/kitchen-type.php");
require_once("lib/ingredient.php");

/// INIT
$db = new database();
$article = new article($db->getConnection());
$user = new user($db->getConnection());
$kitchen_type = new kitchen_type($db->getConnection());
$ingredient = new ingredient($db->getConnection());
$articleList = new ingredient($db->getConnection());



/// VERWERK 
$data_article = $article->selectArticle(8);
$data_user = $user->selectUser(1);
$data_kitchen_type = $kitchen_type->selectKitchenType(10);
$data_ingredient = $ingredient->selectIngredient(17); // Select individual ingredient
$data_articleList = $articleList->selectIngredientsBurger(1); // Select ingredients for burger
// $data_articleList = $articleList->selectIngredientsSushi(1); // Select ingredients for sushi
// $data_articleList = $articleList->selectIngredientsRisotto(1); // Select ingredients for risotto
// $data_articleList = $articleList->selectIngredientsPizza(1); // Sleect ingredients for pizza


/// RETURN
// var_dump($data_article);
// var_dump($data_user);
// var_dump($data_kitchen_type);
// var_dump($data_ingredient);
var_dump($data_articleList);



