<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function get_user_profile()
    {
    	$user = User::first();
    	return json_encode($user);
    }

    public function add_user()
    {
    	User::create([
    		'name' => 'test',
    		'email' => 'test1@gmail.com',
    		'password' => bcrypt('password'),
    	]);
    }
}
