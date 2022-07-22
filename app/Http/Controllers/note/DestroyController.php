<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;

class DestroyController extends BaseController
{

    public function __invoke(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index');
    }

}
