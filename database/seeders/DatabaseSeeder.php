<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Note;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(10)->create();
        $tags = Tag::factory(10)->create();
        $notes = Note::factory(100)->create();

        foreach ($notes as $note) {
            $tagsIds = $tags->random(5)->pluck('id');
            $note->tags()->attach($tagsIds);
        }
    }
}
