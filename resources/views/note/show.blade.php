@extends('layouts.main')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 d-flex flex-column align-items-center">

                <a href="#" class="note-page__project">
                    Дипломная работа
                </a>
                <h1 class="note-page__heading">
                    {{ $note->title }}
                </h1>
                <p class="note-page__content">
                    {{ $note->content }}
                </p>
                <h2 class="note-page__origin-heading">
                    Источник заметки
                </h2>
                <p class="note-page__origin-content">
                    {{ $note->origin }}
                </p>
                <h2 class="note-page__tags-heading">
                    Тэги заметки
                </h2>
                <ul class="note__tags note-page__tags">
                    <li class="note__tag"><a href="#" class="note__tag-link">тэг1</a></li>
                    <li class="note__tag"><a href="#" class="note__tag-link">тэг2</a></li>
                </ul>

                <div class="note-page__buttons-wrapper">
                    <a href="{{ route('note.edit', $note->id) }}" class="note-page__edit-note">
                        Редактировать заметку
                    </a>
                    <form action="{{route('note.delete', $note->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="note-page__delete-note">
                            Удалить заметку
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection
