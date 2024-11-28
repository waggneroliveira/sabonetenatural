@extends('client.core.client')

@section('content')
    <h2>Home</h2>

    <box-product
    :product="{
      name: 'SUSHI TAMAKI',
      japaneseName: '刺身',
      description: 'Salmão, camarão panado, queijo creme, cebolinho, olho francês e molho tarê',
      oldPrice: 79.00,
      newPrice: 59.00,
      image: 'caminho-para-imagem.jpg',
    }"
  ></box-product>
      
@endsection