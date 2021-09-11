<?php 
$pdo=new PDO('mysql:dbname=taro0941_tuto;host=localhost','taro0941_tuto','virgile2020');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


