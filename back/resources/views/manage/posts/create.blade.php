@extends('layouts.layouts')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10 m-b-0">
      <div class="column">
        <h1 class="title is-admin is-4" style="font-weight: 300;">Add New Blog Post</h1>
      </div>
      <div class="column">
        <!-- <a href="{{route('manage.posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a> -->
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('manage.posts.store')}}" method="post">
      {{ csrf_field() }}
      <div class="columns">
        <div class="column is-three-quarters-desktop">
          <b-field>
            <b-input type="text" placeholder="Post Title" size="is-large">
            </b-input>
          </b-field>
          <p>
            <slug-widget></slug-widget>
          </p>
          <b-field class="m-t-40">
            <b-input type="textarea"
                placeholder="Compose your masterpiece..." rows="20">
            </b-input>
          </b-field>
        </div> <!-- end of .column.is-three-quarters -->

        <div class="column is-one-quarter-desktop is-narrow-tablet">
          <div class="card card-widget">
            <div class="author-widget widget-area" style="min-height: 75px;padding: 10px;border-bottom: 1px solid rgba(10, 10, 10, 0.1);">
              <div class="selected-author" style="display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-line-pack: start;align-content: flex-start;">
                <img src="https://placehold.it/50x50" style="border-radius: 25px;" />
                <div class="author" style="margin: auto 0 auto 10px;">
                  <h4>Alex Curtis</h4>
                  <p class="subtitle" style="font-weight: 300;font-size: 0.8em;">
                    (jacurtis)
                  </p>
                </div>
              </div>
            </div>
            <div class="post-status-widget widget-area" style="min-height: 75px;padding: 10px;border-bottom: 1px solid rgba(10, 10, 10, 0.1);">
              <div class="status" style="display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-line-pack: start;align-content: flex-start;">
                <div class="status-icon" style="min-width: 50px;">
                  <b-icon icon="assignment" size="is-medium" style="width: 100%;"></b-icon>
                </div>
                <div class="status-details" style="margin-left: 10px;">
                  <h4 style="font-weight: 400;"><span class="status-emphasis" style="font-weight: 800;">Draft</span> Saved</h4>
                  <p style="font-weight: 300;font-size: 0.8em;">A Few Minutes Ago</p>
                </div>
              </div>
            </div>
            <div class="publish-buttons-widget widget-area" style="display: -webkit-box;display: -ms-flexbox;display: flex;min-height: 50px; min-height: 75px;padding: 10px;border-bottom: 1px solid rgba(10, 10, 10, 0.1);">
              <div class="secondary-action-button" style="-webkit-box-flex: 1;-ms-flex: 1;flex: 1;margin: 0 5px;">
                <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
              </div>
              <div class="primary-action-button" style="-webkit-box-flex: 1;-ms-flex: 1;flex: 1;margin: 0 5px;">
                <button class="button is-primary is-fullwidth">Publish</button>
              </div>
            </div>
          </div>
        </div> <!-- end of .column.is-one-quarter -->
      </div>
    </form>


  </div> <!-- end of .flex-container -->

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {}
    });
  </script>
@endsection
