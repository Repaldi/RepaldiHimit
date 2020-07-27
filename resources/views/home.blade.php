@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="container-fluid">
    <div class="alert alert-info" role="alert">
    <h4> List Artikel</h4>
    </div>
    @if($datas->count() != 0) 
        <div class="row">
            @foreach($datas as $data)
            <div class="col-md-4">
            <div class="card mb-3">

                <div class="card-body">
                
                <img src="{{asset('assets/images/placeholder.jpg')}}" class="card-img-top" alt="...">
                    <h5 class="card-title"> <br/>{{$data->title}}</h5>
                    <p class="card-text">{{$data->excerpt}}</p>
                    
                </div>
            </div>
            </div>
            @endforeach
        </div>
    @else
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            Belum Artikel yang di publish
        </div>
    </div>
    @endif
    </div>
        
            
         </div>
    </div>
</div>
@endsection
