@extends('layouts.app')
@section('encabezado')
@stop
@section('content')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

				@foreach($articulo as $art)


<!--<div class="container" ng-init="IniciarArticulos({$articulo})">
  <div class="col-md-2">
    <div class="thumbnail">
    <img src="{{asset('data:img/images/jpg;base64')}},'.base64_encode($imagen->load()) .'" />
     

      <img src="{{asset('img/images/1.jpg' ) }}" height="242" width="200" alt="..." class="img-responsive">
      
<div>Codigo:	<a href=""> #XWZ-{{$art->id}} </a>	</div>
		<br>
      <div>{{$art->name}}</div>
      <div class="caption">
        <h3>${{number_format($art->precio)}} MXP</h3>
       <span>Descripcion:</span> 
        <p>{{$art->descripcion}}</p>
        <br>
        <p><a class="btn btn-primary" role="button" ng-click="mostrar('{{$art->id}}')">Agregar al carrito</a> </p>
      </div>
    </div>
  </div>  -->

<div class="row"  ng-init="IniciarArticulos({$articulo})">
    <div class="col s12 m6 l3"><p><img src="{{asset('img/images/1.jpg ')}}" height="180" width="180" alt=""> </p>
    <div>#XWZ-{{$art->id}} </div>
    <div>{{$art->name}}</div>
    <div>${{number_format($art->precio)}} MXP</div>
    <div>Descripcion: {{$art->descripcion}}</div>
    <br>
    <p><a class="btn btn-primary" role="button" ng-click="mostrar('{{$art->id}}')">Agregar al carrito</a> </p>

    </div>

    
  @endforeach

 <button type="button" class="btn btn-default btn-xs" data-toggle="modal" ng-click="guardar()" >
	<span class="glyphicon glyphicon-success" aria-hidden="true"> guardar</span>
</button>

</div>





@stop