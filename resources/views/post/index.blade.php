@extends('template.main')

@section('content')
@for ($i = 0; $i < $rows; $i++)
<div class="container-post">
    @foreach ($games->skip($skip)->take($limit) as $game)
    <div class="box position-relative border border-secondary rounded">
        <a href="/games/details/{{ $game->slug }}" class="position-absolute start-50 top-50 translate-middle" style="opacity: .5">
            <i class="fa fa-eye fs-2 text-light" aria-hidden="true"></i>
        </a>
        <img src="https://source.unsplash.com/1000x800" alt="..." title="{{ $game->title }}">
        <div class="d-flex justify-content-center align-items-center">
            <span>{{ $game->title }}</span>
        </div>
    </div>
    @endforeach
    @php
        $skip += $limit;
    @endphp 
</div>
@endfor
@endsection