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
		return view('add', [
			'title' => 'POST This is ADD page',
		]);
		}
		else {
		return view('add', [
			'title' => 'GET This is ADD page',
		]);
		}
	}

    public function del()
	{
		return view('del', [
			'title' => 'This is DEL page',
		]);
	}

    public function edit()
	{
		return view('edit', [
			'title' => 'This is EDIT page',
		]);
	}

    public function all()
	{
		return view('second_all', [
			'title' => 'This is ALL page',
			'key1' => 'This is ALL1',
			'key2' => 'This is ALL2'
		]);
	}

    public function one()
	{
		return view('one', [
			'title' => 'This is ONE page',
		]);
	}
	
}
