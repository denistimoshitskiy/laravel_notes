@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">

            @foreach($notes as $note)

            <div class="col-xxl-3 col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="note">
                    <a href="#" class="note__project">
                        Дипломная работа
                    </a>
                    <h2 class="note__heading">
                        {{ $note->title }}
                    </h2>
                    <p class="note__lead">
                        {{ $note->content }}
                    </p>
                    <ul class="note__tags">
                        <li class="note__tag"><a href="#" class="note__tag-link">тэг1</a></li>
                        <li class="note__tag"><a href="#" class="note__tag-link">тэг2</a></li>
                    </ul>
                    <div class="note__links-wrapper">
                        <a href="{{ route('note.show', $note->id) }}" class="note__link">Перейти в заметку</a>
                        <form action="{{route('note.delete', $note->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="note__delete">
                                Удалить заметку
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            @endforeach



        </div>
        {{ $notes->withQueryString()->links() }}
    </div>
@endsection
