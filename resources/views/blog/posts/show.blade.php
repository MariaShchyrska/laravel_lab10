@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $post->title }}</h1>
                        <p>Автор: {{ $post->user->name }}</p>
                        <p>Категорія: {{ $post->category->name }}</p>
                        <p>Дата публікації: {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d.m.Y H:i') : 'Не вказана' }}</p>
                        <div>
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
