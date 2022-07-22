<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Http\Requests\Note\StoreRequest;
use App\Models\Note;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);



        return redirect()->route('note.index');
    }

}
