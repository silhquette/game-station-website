@extends('template/main')

@section('content')
  <div class="bg-light">
    <!-- haro image -->
    <div style="position: relative">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-block hero-img hero-img-1" role="image"></div>
            <div class="carousel-caption d-none d-md-block">
              <h5>First Game Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. In
                officia repudiandae sapiente quae voluptatibus, amet quam!
                Debitis dolor dignissimos molestiae?
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-block hero-img hero-img-2" role="image"></div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Input Title Here</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Maxime, voluptas odio libero quasi esse tenetur quae beatae
                tempora aperiam culpa ab, illum nemo? Impedit dicta
                repellendus, accusamus maxime voluptas illo?
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-block hero-img hero-img-3" role="image"></div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Your Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eveniet eos, dolorem expedita, repudiandae quasi saepe
                exercitationem natus ab ipsam nisi odit fugiat nesciunt,
                tempora porro.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-block hero-img hero-img-4" role="image"></div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Missing Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Optio harum asperiores explicabo cupiditate exercitationem
                saepe commodi magnam? Culpa delectus cum sunt ab!
              </p>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev c-control"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next c-control"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
    <!-- content -->
    <div class="row">
      <!-- cards -->
      <div class="col-10 p-4">
        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach ($games as $game)
          <div class="col">
            <div class="card h-100">
              <div class="thumb-img">
                <img
                  src="https://w0.peakpx.com/wallpaper/146/687/HD-wallpaper-call-of-duty-modern-warfare-2020-mobile-game-poster.jpg"
                  class="card-img-top"
                  alt="..."
                  title="{{ $game->thumbnail }}"
                />
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $game->title }}</h5>
                <div class="rating">
                  <div class="star">
                    <input type="radio" name="star{{ $iIndex }}" id="star{{ $sIndex }}" /><label
                      for="star{{ $sIndex++ }}"
                    ></label>
                    <input type="radio" name="star{{ $iIndex }}" id="star{{ $sIndex }}" /><label
                      for="star{{ $sIndex++ }}"
                    ></label>
                    <input type="radio" name="star{{ $iIndex }}" id="star{{ $sIndex }}" /><label
                      for="star{{ $sIndex++ }}"
                    ></label>
                    <input type="radio" name="star{{ $iIndex }}" id="star{{ $sIndex }}" /><label
                      for="star{{ $sIndex++ }}"
                    ></label>
                    <input type="radio" name="star{{ $iIndex++ }}" id="star{{ $sIndex }}" /><label
                      for="star{{ $sIndex++ }}"
                    ></label>
                  </div>
                </div>
                <p class="card-text">
                  {{ $game->excerpt }}
                </p>
                <span class="link-details"
                  ><a href="/games/details/{{ $game->slug }}" class="link-secondary" id="liveToastBtn"
                    >see details</a
                  ></span
                >
              </div>
              <form action="/games/details/{{ $game->slug }}" method="post">
                @csrf
                <div class="card-footer">
                  <input type="hidden" name="game_id" value="{{ $game->id }}">
                  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                  <button type="submit" class="btn effect04 py-2 w-100 {{ (auth()->user()->games->find($game->id)) ? 'disabled' : '' }}" data-sm-link-text="Download">
                    <span>{{ (auth()->user()->games->find($game->id)) ? 'Items added' : 'Add to library' }}</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
          @endforeach 
        </div>
      </div>

      @if (session('success'))
					<div class="alert alert-success alert-dismissible fade show position-fixed start-50 translate-middle-x w-50" style="top: 15%" role="alert">
						<strong>Nice Buddy!</strong> {{ session('success') }}
						<button type="button" class="btn-close py-0 top-50 translate-middle-y" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
      @endif
  
      {{-- aside --}}
      <div class="col-2 py-4 ps-0 aside">
          @include('partials/aside')
      </div>      
    </div>
  </div>
@endsection 