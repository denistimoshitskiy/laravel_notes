<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Http\Filters\NoteFilter;
use App\Http\Requests\Note\FilterRequest;
use App\Models\Note;

class IndexController extends BaseController
{

    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $query = Note::query();

        $filter = app()->make(NoteFilter::class, ['queryParams' => array_filter($data)]);
        $notes = Note::filter($filter)->paginate(5);

        return view('note.index', compact('notes'));
    }

}
