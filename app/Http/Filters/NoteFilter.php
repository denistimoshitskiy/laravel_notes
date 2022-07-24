<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class NoteFilter extends AbstractFilter
{
public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
          self::CATEGORY_ID => [$this, 'categoryID'],
        ];
    }

    public function categoryID(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
