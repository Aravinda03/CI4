<?php namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CustomModel;

class Dbs extends BaseController
{
	public function index()
	{

		$db1 = db_connect();
		$model = new CustomModel($db1);

		$db2 = db_connect('anotherDb');
		$model = new CustomModel($db2);


		echo '<pre>';
		 print_r($model->getUsers(3));
		echo '<pre>';

		echo '<pre>';
		 print_r($model2->getAnotherUsers(3));
		echo '<pre>';

		echo '<pre>';
		 print_r($model->getUsers(3));
		echo '<pre>';

		
	}



}
