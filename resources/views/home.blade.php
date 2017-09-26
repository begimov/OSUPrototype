@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <ul class="list-inline">
              <li><h4><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;<router-link :to="{ name: 'search-panel' }">В КАТАЛОГЕ</router-link></h4></li>
              <li><h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;<router-link :to="{ name: 'map-panel' }">НА КАРТЕ</router-link></h4></li>
            </ul>
            <router-view></router-view>
            <div id="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
