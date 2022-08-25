@extends('template/main')

@section('content')
<div class="row py-5 px-4">
    <div class="col-lg-6 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head d-flex">
                    <div class="profile ms-3 d-flex flex-column">
                        <img
                            src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                            alt="..."
                            width="130"
                            class="rounded mb-2 img-thumbnail"
                        /><a
                            href="/profile/edit/{{ auth()->user()->username }}"
                            class="
                                btn btn-outline-dark btn-sm
                            "
                            >Edit profile</a
                        >
                    </div>
                    <div class="media-body mb-5 text-white d-inline-block ms-3">
                        <h4 class="mt-0 mb-0">{{ $user->name }}</h4>
                        <p class="small mb-1">
                            <span class="text-muted">as </span> {{ $user->username }}
                        </p>
                        <p class="small mb-4">
                            <i class="fas fa-map-marker-alt me-2"></i
                            >{{ $user->country->name }} ({{ $user->country->code }})
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="
                    bg-light
                    p-4
                    d-flex
                    justify-content-end
                    text-center
                "
            >
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-2">
                        <h5 class="font-weight-bold mb-0 d-block">
                            215
                        </h5>
                        <small class="text-muted">
                            <i class="fas fa-image me-2"></i
                            >Photos</small
                        >
                    </li>
                    <li class="list-inline-item me-2">
                        <h5 class="font-weight-bold mb-0 d-block">
                            745
                        </h5>
                        <small class="text-muted">
                            <i class="fas fa-user me-2"></i
                            >Followers</small
                        >
                    </li>
                    <li class="list-inline-item me-2">
                        <h5 class="font-weight-bold mb-0 d-block">
                            340
                        </h5>
                        <small class="text-muted">
                            <i class="fas fa-user me-2"></i
                            >Following</small
                        >
                    </li>
                </ul>
            </div>
            <div class="pb-4 px-4 d-flex flex-column align-items-center">
                <div
                    class="
                        d-flex
                        align-items-center
                        justify-content-between
                        mb-3
                        w-100
                        px-3
                    "
                >
                    <h5 class="mb-0">Recently played</h5>
                    <a href="#" class="btn btn-link text-muted" id="show-all"
                        >Show all</a
                    >
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1">
                        <img
                            src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                    <div class="col-lg-6 mb-2 pl-lg-1">
                        <img
                            src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                    <div class="col-lg-6 pr-lg-1 mb-2">
                        <img
                            src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                    <div class="col-lg-6 pl-lg-1">
                        <img
                            src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
        