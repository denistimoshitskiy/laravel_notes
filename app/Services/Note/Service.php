<?php

namespace App\Services\Note;

use App\Models\Note;

class Service
{
    public function store($data)
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $note = Note::create($data);
        $note->tags()->attach($tags);
    }

    public function update($note, $data)
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $note->update($data);
        $note->tags()->sync($tags);
    }
}
