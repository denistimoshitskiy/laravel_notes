@extends('layouts.main')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 d-flex flex-column align-items-center">

                <h1 class="note-page__heading">
                    Создание заметки
                </h1>

                <form class="form" action="{{ route('note.store') }}" method="post">
                    @csrf

                    <div class="form__inner-wrapper">
                        <label class="form__label" for="title">Заголовок заметки</label>
                        <input value="{{old('title')}}" type="text" name="title" id="title" placeholder="Глава №1">

                        @error('title')
                        <p class="form__error-message">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form__inner-wrapper">
                        <label class="form__label" for="content">Содержание заметки</label>
                        <textarea name="content" id="content" cols="30" rows="10"
                                  placeholder="Люблю грозу в начале мая...">
                            {{old('content')}}
                        </textarea>
                        @error('content')
                        <p class="form__error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form__inner-wrapper">
                        <label class="form__label" for="origin">Источник заметки</label>
                        <input value="{{old('origin')}}" type="text" name="origin" id="origin" placeholder="Книга “Пиши и сокращай”">
                        @error('origin')
                        <p class="form__error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form__inner-wrapper">
                        <label class="form__label" for="project">Проект</label>
                        <select name="category_id" id="project">

                            @foreach($categories as $category)
                            <option

                                {{ old('category_id') == $category->id ? ' selected' : '' }}

                                value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form__inner-wrapper">
                        <label class="form__label" for="tags">Тэги</label>
                        <select multiple name="tags[]" id="tags">

                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach

                        </select>
                    </div>

                    <button class="form__button" type="submit">Создать заметку</button>

                </form>

            </div>
        </div>
    </div>

@endsection
