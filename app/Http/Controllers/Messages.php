<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Messages extends Controller
{
    public function add()
	{
	  echo '<pre>';
	  print_r($_GET);
	  echo '</pre>';
	   
	  echo '<pre>';
	  print_r($_POST);
	  echo '</pre>';

		if ($_POST != null) {
		return 'This is post ADD';
		}
		else {
		return 'This is ADD';
		}
	}

    public function del()
	{
		return 'This is DEL';
	}

    public function edit()
	{
		return 'This is EDIT';
	}

    public function all()
	{
		return 'This is ALL';
	}

    public function one()
	{
		return 'This is ONE';
	}
	
}
