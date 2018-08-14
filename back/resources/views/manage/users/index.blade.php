@extends('layouts.layouts')

@section('content')

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Manage Users</h1>
    </div>
    <div class="column">
      <a href="{{route('manage.users.create')}}" class="button is-primary is-pulled-right">Create new user</a>
    </div>
  </div>
  <hr class="m-t-10">
  <div class="card">
    <div class="card-content">
      <table class="table is-fullwidth">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->toFormattedDateString()}}</td>
            <td>
              <a class="button ls-outlined" href="{{route('manage.users.show', $user->id)}}">View</a>
              <a class="button ls-outlined" href="{{route('manage.users.edit', $user->id)}}">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  {{$users->links()}}
</div>

@endsection
