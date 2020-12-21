<?php namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	function validation(){
		$shop = new shop();
		echo $shop->product('laptop', 'lenovo'). '<br>';

		$adminShop = new AdminShop();
		echo $adminShop->product('product', 'lenovo');
	}

	function show404(){
		echo 'This is a 404 page';
	}

	//--------------------------------------------------------------------

}
