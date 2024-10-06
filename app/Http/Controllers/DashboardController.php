<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){


        $users = [
            [
                'name' => 'Joe',
                'age' => 30,
            ],
            [
                'name' => 'Dan',
                'age' => 25,
            ],
            [
                'name' => 'John',
                'age' => 17,
            ]
        ];
        
        return view(
            'dashboard',
             [
                'users' => $users
            ]
        );
      
    }
    
}
