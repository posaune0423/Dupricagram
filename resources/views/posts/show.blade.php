@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ml-5 pl-5">
        <div class="col-5 ml-5">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-50" style="max-width: 70px;">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        <a href="#" class="pl-2">Follow</a>
                    </div>
                </div>
            </div>

            <hr/>

            <p>
                <span class="font-weight-bold pr-1">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span>{{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection