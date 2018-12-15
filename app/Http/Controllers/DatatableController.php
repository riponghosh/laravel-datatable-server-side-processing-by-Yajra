<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class DatatableController extends Controller
{
    //
	
	public function getUsers(){
		return DataTables::of(User::query())->make(true);
	}
}
