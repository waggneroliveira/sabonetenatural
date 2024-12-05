@extends('client.core.client')

@section('content')
    <inner-banner></inner-banner>
    
    <filter-product></filter-product>

    <div class="w-100 flex justify-center">
        <div class="flex justify-center items-baseline flex-row flex-wrap gap-[20px] max-w-[1220px]">
            <box-product v-for="i in 12" :key="i" />
        </div>
    </div>
@endsection