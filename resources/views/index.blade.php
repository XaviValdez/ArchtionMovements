@extends('template')

@section('body')
<!--CSS GRIDS-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/collage.css') }}">

<div class="container mb-5 mt-3">
	<div class="wrapper">
		
		<div class="box a hover_img_big cut-right">  
			<div class="card text-white">
				<img class="card-img border-sharp" src="{{ asset('img/index/proyecto.jpg') }}" alt="Card image">
				<div class="card-img-overlay overlay-green d-flex flex-column justify-content-end p-0">
					<div class="text p-3">
						<h1 class="card-text font-weight-bold" id="adjust-title">Proyecto del mes</h1>
						<p class="card-text lead" id="hide-mobile">Puebla, Mex.</p>
					</div>
				</div>
			</div>
		</div> <!--A-->

		<div class="box b hover_img">
			<div class="card text-white">
				<img class="card-img border-sharp" src="{{ asset('img/index/acerca_de.jpg') }}" alt="Card image">
				<div class="card-img-overlay overlay-red d-flex flex-column justify-content-end p-0">
					<div class="text p-3">
						<h3 class="card-text font-weight-bold">Acerca de</h3>
					</div>
				</div>
			</div>
		</div> <!--B-->

		<div class="box c hover_img cut-left-down">
			<div class="card text-white">
				<img class="card-img border-sharp" src="{{ asset('img/index/convocatoria.jpg') }}">
				<div class="card-img-overlay overlay-pink d-flex flex-column justify-content-end p-0">
					<div class="text p-3">
						<h3 class="card-text font-weight-bold text-right">Eventos</h3>
					</div>
				</div>
			</div>
		</div> <!--c-->

		<div class="box d hover_img cut-right-2">
			<div class="card text-white">
				<img class="card-img border-sharp" src="{{ asset('img/index/evento.png') }}">
				<div class="card-img-overlay overlay-orange d-flex flex-column justify-content-end p-0">
					<div class="text p-3">
						<h3 class="card-text font-weight-bold">Evento del mes</h3>
					</div>
				</div>
			</div>
		</div> <!--D-->
		<div class="box e hover_img cut-left">
			<div class="card text-white">
				<img class="card-img border-sharp" src="{{ asset('img/index/investigacion.jpg') }}">
				<div class="card-img-overlay overlay-orange d-flex flex-column justify-content-end p-0">
					<div class="text p-3">
						<h3 class="card-text font-weight-bold">Investigación</h3>
					</div>
				</div>
			</div>
		</div> <!--e-->
		<div class="box f hover_img">
			<div class="card text-white">
				<img class="card-img border-sharp" src="{{ asset('img/index/tienda.jpg') }}">
				<div class="card-img-overlay overlay-red d-flex flex-column justify-content-end p-0">
					<div class="text p-3">
						<h3 class="card-text font-weight-bold">Tienda</h3>
					</div>
				</div>
			</div>
		</div> <!--f-->
		<div class="box g hover_img cut-right-3">
			<div class="card text-white">
				<img class="card-img border-sharp" src="{{ asset('img/index/red_de_trabajo.jpg') }}">
				<div class="card-img-overlay overlay-blue d-flex flex-column justify-content-end p-0">
					<div class="text p-3">
						<h3 class="card-text font-weight-bold">Red de trabajo</h3>
					</div>
				</div>
			</div>
		</div> <!--g-->
		
	</div>
</div>

<br>

<div class="container mt-3 mb-5">
	<div class="row">
		<div class="col-sm-5 mt-5">
			<h1 class="mt-5 mr-5"><b>Mejorar el mundo a través de una arquitectura sustentable y pertinente.</b></h1>
			<br>
			<p class="lead mt-3 mr-5">Nuestra misión es recopilar proyectos, obras investigación y conectar personas que tengan el objetivo de mejorar una situación particular en el mundo.</p>
		</div>
		<div class="col-sm-7 pl-5"><img src="{{ asset('img/index/index.png') }}" class="big_img disapear"></div>
	</div>
</div>

@endsection