<?php
/**
 * Created by PhpStorm.
 * User: zakar
 * Date: 18/05/2017
 * Time: 15:14
 */

try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=larchitecture', 'root', '');

}catch (PDOException $exception){
    die($exception->getMessage());
}
$pdo->query("SET NAME UTF-8;");