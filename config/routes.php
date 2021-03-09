<?php

//Маршрутизатор
return array(
//Зліва запрос із адресної строки
//Справа Розташування запросу
	'login' => 'login/index',
	'admnpanel/addauthor' => 'adminpanel/addauthor',
	'admnpanel/addwriting' => 'adminpanel/addwriting',
	'admnpanel/update/author/([1-9]+)' => 'adminpanel/updateauthor/$1',
	'admnpanel/update/writing/([1-9]+)' => 'adminpanel/updatewriting/$1',
	'admnpanel/update' => 'adminpanel/update',
	'admnpanel/delete/author/([1-9]+)' => 'adminpanel/deleteAuthor/$1',
	'admnpanel/delete/writing/([1-9]+)' => 'adminpanel/deleteWriting/$1',
	'admnpanel/delete' => 'adminpanel/delete',
	'admnpanel/select/author/([1-9]+)' => 'adminpanel/selectAuthor/$1',
	'admnpanel/select/writing/([1-9]+)' => 'adminpanel/selectWriting/$1',
	
	'admnpanel/logout' => 'adminpanel/logout',
	'admnpanel' => 'adminpanel/index', // //Викликається метод actionIndex в контроллері AdminpanelController
 	'authors/([1-9]+)' => 'authors/view/$1', //Викликається метод actionView в контроллері AuthorController
	'authors' => 'authors/index', //Викликається метод actionIndex в контроллері AuthorController
	'writings/([1-9]+)' => 'writings/view/$1', //Викликається метод actionView в контроллері WritingsController

	'' => 'site/index', //Викликається метод actionIndex в контроллері SiteController
);
