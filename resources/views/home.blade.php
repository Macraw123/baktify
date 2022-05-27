@extends('layouts.index')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
<div class="home">
  <div class="section-1">
    <div class="title">
      <span>Level Up Your</span> 
      <span>Music Collection</span>
    </div>
  </div>
  <div class="section-2">
    <img src="assets/home-bg.jpg" alt="Home Background" class="home-bg">
  </div>
  <hr class="home-divider">
  <div class="section-3">
    <div class="title">
      <div class="main">One-stop store for all of your musical enthusiasm needs</div>
      <div class="description">We provide wide variety of music genre and album</div>
    </div>
    <div class="part-1">
      <div class="story">
        <div class="title">Buy Music Instruments: Securely and Comfortably</div>
        <div class="description">
          We are proud to offer fast and professional delivery services with 
          all major payment methods available through our online shop. Additionally, 
          if you require some flexibility regarding payment, 
          we provide finance options so you can pay in instalments 
        </div>
      </div>
      <img src="assets/home-secure-1.png" alt="Plant">
    </div>
    <div class="part-2">
      <img src="assets/home-secure-2.jpg" alt="Plant">
      <div class="story">
        <div class="title">Bulk Ordering Makes it Possible</div>
        <div class="description">
          Through the large purchasing volumes, DV and Music Store are able 
          to source containers directly from manufacturers worldwide allowing us 
          to offer a large range of products at sensationally low prices.
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var msg = '{{ Session::get('transaction_success') }}';
  var exist = '{{ Session::has('transaction_success') }}';
  if(exist){
    alert(msg);
    console.log('testing')
  }
</script>

@endsection