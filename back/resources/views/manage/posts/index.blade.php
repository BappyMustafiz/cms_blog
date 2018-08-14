@extends('layouts.layouts')

@section('content')

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Posts index</h1>
    </div>
    <div class="column">
      <a href="{{route('manage.posts.create')}}" class="button is-primary is-pulled-right">Create new post</a>
    </div>
  </div>
  <hr class="m-t-10">
</div><!--.flex-container-->

@endsection
