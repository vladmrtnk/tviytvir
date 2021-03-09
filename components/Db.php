<?php

class Db
{
	
	public static function getConnection(){
		$paramsPath = ROOT . '/config/db_params.php';
		$params = include($paramsPath);

		$connect = "mysql:host={$params['host']}; dbname={$params['dbname']}";
		$db = new PDO($connect, $params['user'], $params['password']);

		return $db;
	}
}

?>