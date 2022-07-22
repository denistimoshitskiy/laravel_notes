<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    protected $model = Note::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->text,
            'origin' => $this->faker->sentence(10),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
