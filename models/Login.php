<?php 

class Login
{

	public static function Authorization($login, $password)
	{

		$db = Db::getConnection();
		if ($login == 'admin') 
		{
			$result = $db->query("SELECT psswrd FROM admins WHERE name = 'admin' ");
			$hash = $result->fetch(PDO::FETCH_ASSOC);
			
			if (password_verify($password, $hash['psswrd'])) {
				return true;
			}
			else
				return false;
		}
		


		
		
		
	}
}