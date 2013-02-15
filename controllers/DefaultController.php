<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ekstazi
 * Date: 15.02.13
 * Time: 21:46
 * To change this template use File | Settings | File Templates.
 */
class DefaultController extends \CController
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionConnector()
	{

	}
}
