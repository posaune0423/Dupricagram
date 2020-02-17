@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ml-5">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100 ml-5">
        </div>
        <div class="col-9 pl-5 mt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2 pl-5">
                    <div class="h4">{{$user->username}}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit" class="pl-5">Edit Profile</a>
            @endcan

            <div class="d-flex pl-5">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 pl-5 font-weight-bold">{{$user->profile->title}}</div>
            <div class="pl-5">{{$user->profile->description}}</div>
            <a href="{{ $user->profile->url }}" class="pl-5">{{ $user->profile->url }}</a>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
