<?php

class Router
{

	//Массив, в якому будуть зберігатись маршрути
	private $routes;

//Читає і запам'ятовує маршрути
	public function __construct()
	{
		//Вказуємо розташування файшла із маршрутами
		$routesPath = ROOT.'/config/routes.php';
		//Присвоюємо массив із маршрутами для свойства $routes
		$this->routes = include($routesPath);
	}

	// Метод повертає строку запроса
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	//Метод приймає управлєніє від FRONT CONTROLLER
	public function run()
	{
		// Отримуємо строку запроса
		$uri = $this->getURI();

		// Провіряємо наявність такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {
			// Провіряємо $uriPattern і $uri
			if(preg_match("~$uriPattern~", $uri)) {

				//Отримуємо внутрішнє розташування із зовнішнього згідно правилу:
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				// Виясняємо який контроллер і action обробляє запрос
				$segments = explode('/', $internalRoute);

				//Даємо назву контроллеру
				//Функція array_shift() використовує перший елемент массиву і потім видаляє його
				//Функція ucfirst() робить перший символ строки Великим
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
				//Даємо назву методу action
				$actionName = 'action'.ucfirst((array_shift($segments)));

				//Оскільки назви контроллера і екшена були використані і видалені, то залишились тільки параметри
				$paremeters = $segments;

				//Підключаємо файл класса-контроллера
				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
				//Провірюємо чи існує такий файл в каталозі
				if (file_exists($controllerFile)) {
					//Якщо існує, то викликаємо цей класс
					include_once($controllerFile);
				}

				//Створюємо новий об'єкт класса
				$controllerObject = new $controllerName;
				//Для створеного об'єкта викликаємо потрібний метод
				$result = call_user_func_array(array($controllerObject, $actionName), $paremeters);
				//Якщо метод спрацював (тобто дав якийсь резутьтат)
				if ($result != null) {
					//Зупиняємо наш цикл що шукає совпадєнія в наших маршрутах
					break;
				}
			}

		}
	}
}
