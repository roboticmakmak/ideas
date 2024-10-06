<?php

namespace App\Http\Controllers;
use App\Models\Idea;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    
    public function store() {
        $idea = Idea::create([
            'content' => request()->get('idea',''),
            'likes' => 0
        ]);
     return redirect()->back();  
    }
}
