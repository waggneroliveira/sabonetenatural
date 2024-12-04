@extends('client.core.client')

<style scoped>
    .description ul {
      list-style: none; 
      padding-left: 0;  
    }
  
    .description ul li {
      position: relative;
      padding-left: 10px; 
    }
  
    .description ul li::before {
      content: '•'; 
      position: absolute;
      left: 0; 
      top: 0; 
      font-size: 12px; 
      color: #2FB25E; 
    }
  
  </style>
@section('content')
    <banner-carousel-component></banner-carousel-component> 
    
    <div class="w-100 flex justify-center">
        <div class="flex justify-center items-baseline flex-row flex-wrap gap-[20px] max-w-[1220px]">
            <box-product v-for="i in 12" :key="i" />
        </div>
    </div>
      
@endsection