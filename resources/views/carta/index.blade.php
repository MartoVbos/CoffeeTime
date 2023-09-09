@extends('layouts.panel')

@section('content')
<style>
  .container {
    margin-left: 50px;
    margin-right: 50px;
    display: flex;
    flex-direction: row;
    margin-bottom: 10px;
  }

  .card {
    width: 15rem;
    height: 35rem;
    display: flex;
    border-radius: 6px;
    overflow: hidden;
    cursor: default;
    padding: 1;
  }

  .card p {
    text-align: center;
  }

  .card img {
    height: 17rem;
  }

  h3 {
    text-align: center;
  }
  h2 {
    color: white;
    text-align: center;
  }
</style>
<!-- Cafes -->
<h2 class="text-center text-white">Cafés</h2>
<div class="container">

  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 1 -->
      <img class="card-img-top" src="https://www.tasteofhome.com/wp-content/uploads/2018/01/exps37407_THE1213734_37407_WEB.jpg?fit=700%2C1024" alt="Card image cap">
      <div class="card-body">
        <h3>Cappuccino</h3>
        <p>$2600</p>
        <p class="card-text">Combinación de café solo con una gruesa capa de leche vaporizada y espumada encima.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 2 -->
      <img class="card-img-top" src="https://images.aws.nestle.recipes/original/49babf3c11f5d0d693ff869b532212e1_mocaccino.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>Moccacino</h3>
        <p>$2700</p>
        <p class="card-text">Café espresso sobre base de salsa de chocolate y gran capa de leche caliente emulsionada.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 3 -->
      <img class="card-img-top" src="https://www.elglobo.com.mx/cdn/shop/products/americano-1_500x.jpg?v=1618806696" alt="Card image cap">
      <div class="card-body">
        <h3>Americano</h3>
        <p>$2400</p>
        <p class="card-text">Un café que consiste en partes exactamente iguales de espresso y agua.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 4 -->
      <img class="card-img-top" src="https://www.browneyedbaker.com/wp-content/uploads/2021/06/iced-coffee-7-1200.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>Ice Coffee</h3>
        <p>$3100</p>
        <p class="card-text">Extracción de café negro servido con hielo.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 5 -->
      <img class="card-img-top" src="https://supercafeteros.com/wp-content/uploads/2021/07/cafe-frappe-frappuccino-sirope-500x750.webp" alt="Card image cap">
      <div class="card-body">
        <h3>Frappé</h3>
        <p>$3100</p>
        <p class="card-text">Bebida fría generalmente se prepara con agua, espresso, azúcar, leche y hielo y se agita.</p>
      </div>
    </div>
  </div>
</div>
<!-- Fin Cafes -->
<!-- Postres -->
</br>
<h2>Postres</h2>
<div class="container">

  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 1 -->
      <img class="card-img-top" src="https://www.cocinavital.mx/wp-content/uploads/2019/05/tiramisu-clasico-pasos.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>Tiramisú</h3>
        <p>$3600</p>
        <p class="card-text">Postre de origen italiano sabor café.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 2 -->
      <img class="card-img-top" src="https://assets.elgourmet.com/wp-content/uploads/2023/03/cover_w57l6qc9hj_iv-29-dic-54-1024x683.jpg.webp" alt="Card image cap">
      <div class="card-body">
        <h3>Cheesecake</h3>
        <p>$3500</p>
        <p class="card-text">Cremoso y compacto, se compone de una pasta a partir de bizcocho seco desmenuzado, mantequilla y azúcar.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 3 -->
      <img class="card-img-top" src="https://cdn0.recetasgratis.net/es/posts/1/7/1/baklava_74171_600.webp" alt="Card image cap">
      <div class="card-body">
        <h3>Baklava</h3>
        <p>$3450</p>
        <p class="card-text">Elaborado con una pasta de pistachos o nueces trituradas y bañado en almíbar o jarabe de miel.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 4 -->
      <img class="card-img-top" src="https://www.bakelschile.cl/wp-content/uploads/sites/25/2019/01/brownie.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>Brownie</h3>
        <p>$3150</p>
        <p class="card-text">Bizcocho de chocolate que contiene nueces y que se cuece al horno sobre una placa.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 5 -->
      <img class="card-img-top" src="https://mandolina.co/wp-content/uploads/2020/12/recetas-naviden%CC%83as-bun%CC%83uelos-dulces.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>Buñuelos</h3>
        <p>$1500</p>
        <p class="card-text">Consiste en una masa de harina frita con forma esférica.</p>
      </div>
    </div>
  </div>
</div>
</br>
<!-- Fin postres-->
<!-- Sandwichs-->
<h2>Sandwichs</h2>
<div class="container">

  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 1 -->
      <img class="card-img-top" src="https://www.65ymas.com/uploads/s1/66/40/24/bigstock-homemade-spanish-ham-bocadillo-402420050_1_621x621.jpeg" alt="Card image cap">
      <div class="card-body">
        <h3>Bocata Jamón Serrano</h3>
        <p>$5400</p>
        <p class="card-text">Simple preparación para que puedas degustar del sabor del jamón con tu pan, bañado con la salsa de tomate que le da su toque de sabor.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 2 -->
      <img class="card-img-top" src="https://natashaskitchen.com/wp-content/uploads/2020/02/Reuben-Sandwich-3.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>Reuben</h3>
        <p>$6950</p>
        <p class="card-text">sándwich fundido que consiste en una combinación de carne en conserva, pan de centeno, chucrut, aderezo ruso y queso suizo.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 3 -->
      <img class="card-img-top" src="https://therecipecritic.com/wp-content/uploads/2022/05/blt-1-750x1000.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>BLT</h3>
        <p>$5500</p>
        <p class="card-text">tocino, lechuga, tomate, mayonesa y pan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 4 -->
      <img class="card-img-top" src="https://bakeitwithlove.com/wp-content/uploads/2023/05/new-England-lobster-roll-sq.jpg.webp" alt="Card image cap">
      <div class="card-body">
        <h3>Lobster roll</h3>
        <p>$7350</p>
        <p class="card-text">Consiste en carne de langosta cocida, se rocía con mantequilla derretida junto pan hotdog.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <!-- Contenido de la tarjeta 5 -->
      <img class="card-img-top" src="https://www.muydelish.com/wp-content/uploads/2022/01/authentic-molletes.jpg" alt="Card image cap">
      <div class="card-body">
        <h3>Mollete</h3>
        <p>$4850</p>
        <p class="card-text">Consiste en una masa de harina frita con forma esférica.</p>
      </div>
    </div>
  </div>
</div>






@endsection