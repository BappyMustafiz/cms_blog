@extends('layouts.layouts')

@section('content')

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Create New User</h1>
    </div>
  </div>
  <hr class="m-t-10">
  <form id="app" class="" action="{{route('manage.users.store')}}" method="post">
    <div class="field">
      <label for="name" class="label">Name</label>
      <p class="control">
        <input type="text" name="name" id="name" class="input">
      </p>
    </div>
    <div class="field">
      <label for="email" class="label">Email</label>
      <p class="control">
        <input type="text" name="email" id="email" class="input">
      </p>
    </div>
    <div class="field">
      <label for="password" class="label">Password</label>
      <p class="control">
        <input type="text" name="password" id="password" class="input" v-if="!auto_password" placeholder="Manually give a password...">
        <b-checkbox name="auto_generate" class="m-t-15"  v-model="auto_password">Auto Generate Password</b-checkbox>
      </p>
    </div>
    <button class="button is-success">Create New</button>
  </form>
</div>

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true
      }
    });
  </script>
@endsection
