<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;

class ShowController extends BaseController
{

    public function __invoke(Note $note)
    {
        return view('note.show', compact('note'));
    }

}
