<?php

include_once ROOT. '/models/Authors.php';

class AuthorsController
{
//Метод який виводить список авторів 
	public function actionIndex()
		{

			$authorsList = Authors::getAuthorsList();
/*
			echo "<pre>";
			print_r($authorsList);
			echo "</pre>";
*/
			include_once ROOT. '/views/Authors/authorsList.php';

			return true;
		}


//Метод який виводить автора по його ID
	public function actionView($id)
	{

		if ($id) {

			$writingList = Authors::getAuthorsById($id);
			$author = Authors::getAuthorNameById($id);
/*	
			echo "<pre>";
			print_r($writingList);
			echo "</pre>";
*/

			include_once ROOT. '/views/Authors/authorInfo.php';
		}

		return true;
	}
}
