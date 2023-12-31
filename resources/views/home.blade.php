@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center">{{ __('Bienvenido! ') }} {{ auth()->user()->name }}</div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<h1>Nuestra Visión</h1>
  <p>Ser reconocidos como líder en el mercado local como el mejor café-bar en Chile y crecer por Latinoamérica para luego llevar nuestros planes a mercados internacionales.</p>
  
  <p>Mantener un crecimiento constante en ventas, siendo de estar manera una empresa de éxito.</p>
  
  <p>Crear un ambiente donde los trabajadores sean capacitados y motivados a desarrollar el más alto potencial de productividad. Con gente orgullosa de sus valores y gente de éxito sin importar el puesto que desempeñe.</p>

  <h2>Misión:</h2>
  <p>Brindar a nuestros clientes un servicio de alimentos y bebidas de productos de calidad junto a una atmosfera agradable acompañada de música selecta y un excelente servicio.</p>
  
  <p>Un lugar a donde los clientes deseen regresar debido al servicio entregado, creando un crecimiento a nuestro café-bar cada día.</p>

<!-- Aca va el content de la pagina home -->

@endsection
