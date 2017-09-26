@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <ul class="nav nav-tabs">
              <li role="presentation">
                <router-link :to="{ name: 'search-panel' }">В каталоге</router-link>
              </li>
              <li role="presentation">
                <router-link :to="{ name: 'map-panel' }">На карте</router-link>
              </li>
            </ul>
            <router-view></router-view>
            <div id="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
