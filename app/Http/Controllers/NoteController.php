<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use App\Models\NoteTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('note.index', compact('notes'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('note.create', compact('categories' ,'tags'));
    }

    public function store()
    {
        $data= \request()->validate([
            'title' => 'string',
            'content' => 'string',
            'origin' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $note = Note::create($data);
        $note->tags()->attach($tags);

        return redirect()->route('note.index');
    }

    public function show(Note $note)
    {
        return view('note.show', compact('note'));
    }

    public function edit(Note $note)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('note.edit', compact('note', 'categories', 'tags'));
    }

    public function update(Note $note)
    {
        $data= \request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'origin' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $note->update($data);
        $note->tags()->sync($tags);
        return redirect()->route('note.show', $note->id);
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index');
    }

}
