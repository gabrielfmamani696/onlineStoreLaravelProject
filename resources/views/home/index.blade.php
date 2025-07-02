<!-- este template se muestra dentro de apps, la cual esta dentro de la carpeta layouts -->
@extends('layouts.app')
<!-- esta vista inyecta la variable $viewData["title"] en @yield('title') de layouts.app -->
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/game.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded">
    </div>
</div>
@endsection