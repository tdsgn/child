<?php

class SiteController extends FrontEndController
{

	public function actionIndex()
	{
    $this->pageTitle = 'Главная';
		$this->render('index');
	}

}