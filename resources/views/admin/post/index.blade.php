@extends('layouts.app')

@section('content')
    <h1 class="text-center">Lista dei post</h1>

    <div class="container">

        @foreach ($posts as $elem)
            <div>
                <h3>{{ $elem->title }}</h3>
                <div>{{ $elem->body }}</div>
            </div>


            <div class="d-flex justify-items-between">
                <a href="{{ route('admin.post.show', $elem->id) }}">
                    <button class="btn btn-primary btn-sm me-4">
                        VISUALIZZA
                    </button>
                </a>
                <a href="{{ route('admin.post.edit', $elem->id) }}">
                    <button class="btn btn-warning btn-sm mx-2">
                        MODIFICA
                    </button>
                </a>
                <form action="{{ route('admin.post.destroy', $elem->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                        ELIMINA
                    </button>
                </form>
                </div>
        @endforeach

    </div>
@endsection
