@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <router-link :to="{ name: 'search-panel' }">В каталоге</router-link>
          <router-link :to="{ name: 'map-panel' }">На карте</router-link>
            <router-view></router-view>
        </div>
    </div>
</div>
@endsection
