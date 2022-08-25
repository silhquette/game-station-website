@extends('template/main')

@section('content')
<!-- Page content-->
<div class="bg-light">
    <div class="container-md pt-3">
        <div class="row">
            <div class="col-lg-9">
                <!-- Post content-->
                <article>
                    @if (session('success'))
					<div class="alert alert-success alert-dismissible fade show mt-3 py-2" role="alert">
						<strong>Nice Buddy!</strong> {{ session('success') }}
						<button type="button" class="btn-close py-0 top-50 translate-middle-y" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1 fs-1">{{ $game->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{ $postDate }} by AuthorsName</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $game->genre->name }}</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $game->platform->name }}</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-3">
                        <p class="fs-6 mb-4">{{ $game->excerpt }}</p>
                        <p class="fs-6 mb-4">{{ $game->description }}</p>
                        <p class="fs-6 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                        <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                        <p class="fs-6 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                        <p class="fs-6 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                    </section>
                </article>
                
                {{-- download button --}}
                <form action="/games/details/{{ $game->slug }}" method="post">
                    @csrf
                    <div class="w-100 text-center">
                        <input type="hidden" name="game_id" value="{{ $game->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <button type="submit" class="btn effect04 py-2 w-50 mb-5 {{ (auth()->user()->games->find($game->id)) ? 'disabled' : '' }}" data-sm-link-text="Download">
                            <span>{{ (auth()->user()->games->find($game->id)) ? 'Item added' : 'Add to library' }}</span>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-3">
                @include('partials/aside')
            </div>
        </div>
    </div>
</div>
@endsection