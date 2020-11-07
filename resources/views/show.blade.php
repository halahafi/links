@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All products </div>
                <hr>
                <div class="card-body">   
                         
                    @foreach($products as $product)
                        <h2>{{$product->name}}</h2>
                        @if($product->u_speed < '100' )
                            <span class="label label-default">Upload < 100</span> @endif
                        @if($product->technology == 'fibre'  )
                            <span class="label label-default">Fibre Technology</span>   @endif                        
                        @if($product->d_speed > '100')
                            <span class="label label-default">Download > 100</span>                                              
                        @endif
                        <hr>
                        <!-- <img style="width:10%" src="/storage/image/{{$product->images}}"> -->
                        <img style="width:10%" height="10%" src="{{ url('/images/<? $product->images ?>') }}" alt="Image"/>
                        <br>                        
                        <hr>
                    @endforeach
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection