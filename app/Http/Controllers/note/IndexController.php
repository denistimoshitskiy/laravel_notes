<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;

class IndexController extends BaseController
{

    public function __invoke()
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

}
