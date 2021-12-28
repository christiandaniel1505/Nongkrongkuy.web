@extends('layouts.admin')

@section('content')

<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 ><a href="{{route('daftar.create')}}" class="tm-section-header gold-text tm-handwriting-font">Tambah Daftar Cafe</a></h2>
          </div>
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Daftar Cafe</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
          @foreach ($daftar as $data)
            <div class="tm-popular-item">
              <img src="{{ asset('img/'. $data->image) }}" alt="Popular" class="tm-popular-item-img" width="285px" height="200px">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{ $data->title}}</h3><hr class="tm-popular-item-hr">
                <p>{{ $data->content}}</p>
                <a href="{{ route('menu.show',$data->id) }}" class="tm-more-button tm-more-button-welcome">Menu</a>
                <form action="{{route('daftar.destroy', $data->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('daftar.edit', $data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <br>
                <div class="order-now">
                  <a href="{{ $data->link}}" class="tm-handwriting-font gold-text tm-popular-item-title">{{ $data->alamat}}</a>
                </div>
              </div>              
            </div>
          @endforeach 
          </div>     
        </section> 
    </div>
  </div> 
    @endsection