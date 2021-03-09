<?php 

include_once ROOT. '/models/Writings.php';

class WritingsController
{
	//Метод виведення твору по id
	public function actionView($id)
	{	
		if ($id) {		
			//Викликаємо метод отримання творів по id
			$writing = Writings::getWritingById($id);
			include_once ROOT. '/views/Writings/indexWriting.php';
			return true;
		}
	}
}
?>