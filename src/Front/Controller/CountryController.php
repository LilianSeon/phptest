<?php

namespace App\Front\Controller;

use App\Front\Controller\AbstractController;

class CountryController extends AbstractController
{
	public function index(array $uriVars = [])
	{
		$this->render('country/index', [
			'id' => $uriVars['id'],
			'name' => $uriVars['name']
		]);
	}
}