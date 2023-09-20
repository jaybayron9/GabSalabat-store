<?php  

use utils\Router;

Router::get('/', fn() => view('home'));