<?php 

class SiteController
{
	//Метод для виведення головної сторінки сайту
	public function actionIndex(){
		//Підключаються види головної сторінки
		include_once ROOT. '/views/Site/index.php';

		return true;
	}


}
?>