<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use App\Models\Tag;

class CreateController extends BaseController
{

    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('note.create', compact('categories' ,'tags'));

    }

}
