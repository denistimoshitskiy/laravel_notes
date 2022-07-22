<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Http\Requests\Note\UpdateRequest;
use App\Models\Note;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Note $note)
    {
        $data = $request->validated();

        $this->service->update($note, $data);

        return redirect()->route('note.show', $note->id);
    }

}
