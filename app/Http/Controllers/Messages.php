<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Messages extends Controller
{
    public function add()
	{
		return 'This is ADD';
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
