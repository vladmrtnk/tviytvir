<?php 
include_once ROOT . '/models/Login.php';

class LoginController
{
	//Метод головної сторіки авторизації
	public function actionIndex()
	{	//Початок сессії
		session_start();
		if (!isset($_POST['enter'])) {
			include_once ROOT . '/views/Login/indexLogin.php';
		}
		else
		{	
		 	$auth = Login::Authorization($_POST['login'], $_POST['password']);
		 	
			if ($auth){
				$_SESSION['admin'] = true;
				header('Location: /admnpanel');
			}
			else
				header('Location: /admnpanel');
		}	
		return true;
	}

}