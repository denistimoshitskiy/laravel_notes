<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use App\Models\Tag;

class EditController extends BaseController
{

    public function __invoke(Note $note)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('note.edit', compact('note', 'categories', 'tags'));

    }

}
