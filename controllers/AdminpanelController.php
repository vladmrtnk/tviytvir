<?php 
session_start();
include_once ROOT. '/models/Adminpanel.php';

class AdminpanelController
{	//Метод головної сторінки адмінпанелі
	public function actionIndex()
	{	//Провірка чи не активні сессія Адмін
		if(!$_SESSION['admin'])
		{	//Якщо не активна, то переадресація на сторінку авторизації
			header('Location: /login');
		}
		else
		{	//Якщо активна, то переадресація на головну сторінку адмінпанелі
			$authorsList = Adminpanel::getAuthorsList();
			include_once ROOT. '/views/Adminpanel/indexAdmin.php';
			
		}
		return true;
	}
	public function actionLogout()
	{
		unset($_SESSION['admin']);
		header('Location: /');
		return true;
	}
	//Метод додавання нового автора
	public function actionAddauthor()
	{
		//Якщо не нажата кнопка додати автора в формі:
		if (!isset($_POST['addAuthor'])) {
			//Переадресовується на сторінку додавання автора
			include_once ROOT. '/views/Adminpanel/addAuthor.php';
		}
		else
		{	//Якщо поля імені або прізвища пусті:
			if ($_POST['firstName'] == '' || $_POST['lastName'] == '') 
			{	////Переадресовується на сторінку додавання автора
				include_once ROOT. '/views/Adminpanel/addAuthor.php';
				//В сессію message додається повідомлення
				$_SESSION['message'] = 'Не залишайте поля пустими!';
			}
			//Якщо не пусті:
			else
			{	//То для метода addAuthor - моделі Adminpanel передаються такі параметри:
				Adminpanel::addAuthor($_POST['firstName'], $_POST['lastName'], $_POST['shortBiography'], $_POST['biography'], );
			}
				
		}
		return true;
	}
	//Метод додавання твору
	public function actionAddwriting()
	{ //Викликається метод і присвоюється для змінної(щоб ту змінну можна було викоритсти в скрипті "видів")
		$auth = Adminpanel::selectAuthor();
		//Якщо кнопка не нажата:
		if (!isset($_POST['addWriting'])) {
			include_once ROOT. '/views/Adminpanel/addWriting.php';
		}
		else
		{	//Якщо поля пусті:
			if ($_POST['title'] == '' || $_POST['fullText'] == '') 
			{
				include_once ROOT. '/views/Adminpanel/addWriting.php';
				$_SESSION['message'] = 'Не залишайте поля пустими!';
			}
			else
			{
				//То для метода addWriting - моделі Adminpanel передаються такі параметри:
				Adminpanel::addWriting($_POST['selectID'], $_POST['title'], $_POST['fullText']);
				
			}
				
		}
		return true;
	}
	//Метод видалення
	public function actionDelete()
	{	//Якщо не нажата кнопка видалення:
		if (!isset($_POST['deleteSubm']) ) 
		{	//Виводимо сторінку із формою видалення
			include_once ROOT. '/views/Adminpanel/delete.php';
		}
		else
		{	//Якщо вибраний автор:
			if ($_POST['whatDelete'] == 'author') 
			{	//Виконуємо метод видалення автора
				Adminpanel::deleteAuthor($_POST['howMethodDelete'], $_POST['infoDelete']);
				
			}
			//Якщо вибраний твір:
			else if ($_POST['whatDelete'] == 'writing') 
			{	//Виконуємо метод видалення твору
				Adminpanel::deleteWriting($_POST['howMethodDelete'], $_POST['infoDelete']);
			}
		}
		return true;
	}

	public function actionDeleteAuthor($id)
	{
		if ($id) {
			Adminpanel::deleteAuthor('byId', $id);
		}
		return true;
	}

	public function actionDeleteWriting($id)
	{
		if ($id) {
			Adminpanel::deleteWriting('byId', $id);
		}
		return true;
	}
	

	public function actionSelectAuthor($id)
	{
		if ($id) 
		{
			$author = Adminpanel::getAuthorInfoById($id);
			$writingList = Adminpanel::getWritingListByAuthorId($id);

			include_once ROOT. '/views/Adminpanel/selectAuthor.php';
		}
		return true;
	}

	public function actionSelectWriting($id)
	{
		if ($id) {
			$writing = Adminpanel::getWritingById($id);
			include_once ROOT. '/views/Adminpanel/selectWriting.php';
		}

		return true;
	}

	//Метод оновлення данних, який приймає на себе форму
	public function actionUpdate()
	{
		if (isset($_POST['updtAuthor'])) 
		{	//Передаємо для метода оновлення автора нові данні, для запису в таблицю		
			Adminpanel::updateAuthor($_POST['firstName'], $_POST['lastName'], $_POST['shortBiography'], $_POST['biography'], $_POST['id'], );
			//і переадресовуємо на сторінку виведення авторів
			header("location: /admnpanel/addauthor");	
		}

		else if(isset($_POST['updtWriting']))
		{	//Передаємо для метода оновлення твору нові данні, для запису в таблицю
			Adminpanel::updateWriting($_POST['writingId'], $_POST['authorId'], $_POST['title'], $_POST['fullText'] );
			//і переадресовуємо на сторінку виведення авторів
			header("location: /admnpanel/addwriting");
		}
		else
		{	//Якщо не нажата кнопка, то переадресовуємо на головну сторінку адмін панелі
			header('location: /admnpanel/');
		}
		return true;
	}
	//Метод оновлення данних, що виводить данні із таблиць
	public function actionUpdateauthor($id)
	{	
		if ($id) 
		{	//Якщо не відправленні данні:
			if (!isset($_POST['updtAuthor'])) 
			{	//Виводимо інформацію із таблиць - в поля
				$authorInfo = Adminpanel::getAuthorInfoById($id);
				include_once ROOT. '/views/Adminpanel/updateAuthor.php';
			}
			
		}
		return true;
	}
	
	public function actionUpdatewriting($id)
	{
		if ($id) 
		{
			if (!isset($_POST['updtWriting'])) 
			{	//Виводимо інформацію із таблиць - в поля
				$writingInfo = Adminpanel::getWritingById($id);
				include_once ROOT. '/views/Adminpanel/updateWriting.php';
			}
		}
		return true;
	}


}

?>