@extends('template/main')

@section('content')
<div class="">
    @if (session('updateSuccess'))
    <div class="alert alert-success alert-dismissible fade show mt-3 mb-1 mx-auto py-2 w-25" role="alert">
        <strong>Yeay!</strong> {{ session('updateSuccess') }}
        <button type="button" class="btn-close py-0 top-50 translate-middle-y" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row py-4 px-4 justify-content-center">
        <div class="col-md-3 border-end bg-white shadow rounded-start overflow-hidden">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5 mt-3">
                <img class="rounded-circle mt-5 mb-3" src="https://i.imgur.com/0eg0aG0.jpg" width="90">
                <span class="font-weight-bold">{{ auth()->user()->name }}</span>
                <span class="font-weight-bold">{{ auth()->user()->username }}</span>
                <span class="text-black-50">{{ auth()->user()->email }}</span>
                <span>{{ auth()->user()->country->name }}</span>
                <small>{{ auth()->user()->phone }}</small>
            </div>
        </div>
        <div class="col-md-4 bg-white shadow rounded-end overflow-hidden">
            <form action="/profile/edit/{{ auth()->user()->username }}" method="post">
                @csrf
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back">
                            <a href="/profile/{{ auth()->user()->username }}" class="link link-dark text-decoration-none">
                                <h6>Back to home</h6>
                            </a>
                        </div>
                        <h6 class="text-end pe-3">Edit Profile</h6>
                    </div>
        
                    <div class="row mt-2">
                        <div class="col-md-12"><label for="email" class="form-label">Name</label><input type="text" class="form-control" name="name" placeholder="first name" value="{{ auth()->user()->name }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label for="email" class="form-label">Email</label><input id="email" name="email" type="text" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}"></div>
                        <div class="col-md-6"><label for="username" class="form-label">Username</label><input id="username" name="username" type="text" class="form-control" placeholder="Username" value="{{ auth()->user()->username }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label for="phone" class="form-label">Phone</label><input id="phone" name="phone" type="text" class="form-control" value="{{ auth()->user()->phone }}" placeholder="Phone number"></div>
                        <div class="col-md-6">
                            <label class="from-label mb-2" for="inputGroupSelect02">Options</label>
                            <select class="form-select" id="inputGroupSelect02" name="country_id">
                                <option selected value="{{ auth()->user()->country->id }}">{{ auth()->user()->country->name }}</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="">
                        </div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button w-50" type="submit">Save Profile</button></div>
                </div>
            </form>
        </div>
    </div>   
</div>
@endsection
        