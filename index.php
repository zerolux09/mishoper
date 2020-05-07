<?php 

// header('refresh: 30'); 
@ $route = $_GET['route'];

require 'pages/header.php';


switch ($route){
case '';
require 'pages/main.php';
break;
case 'cart';
require 'cart.php';
break;
case 'contact-us';
require 'pages/contact-us.php';
break;
case 'blog-single';
require 'pages/blog-single.php';
break;
case 'blog';
require 'pages/blog.php';
break;
case 'cabinet';
require 'pages/cabinet.php';
break;
case '404';
require 'pages/404.php';
break;
case 'checkout';
require 'pages/checkout.php';
break;
case 'login';
require 'pages/login.php';
break;
case 'shop';
require 'pages/shop.php';
break;
case 'headerincab';
require 'pages/headerincab.php';
break;
case 'later';
require 'pages/later.php';
break;
case 'goods';
require 'goods.php';
break;
case 'aadminpage';
require 'pages/aadminpage.php';
break;
case 'aadmin';
require 'pages/admin.php';
break;
case 'comments';
require 'pages/comments.php';
break;
case 'category';
require 'pages/category.php';
break;
}
require 'pages/footer.php';