@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="container-fluid">
    <div class="alert alert-info" role="alert">
    <h4> Artikel</h4>
    </div>
    @if($datas->count() != 0)
        
        <div class="row justify-content-center">
            @foreach($datas as $data)
            @if($data->status == "published") 
            <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                <img src="{{asset('assets/images/placeholder.jpg')}}" class="card-img-top" alt="...">
                <p><small class="text-muted">{{$data->published_at}} by {{$data->author}} </small></p>
                <p class="card-text">{{$data->excerpt}}}</p>  
                    <h5 class="card-title">{{$data->title}}</h5>  
                    <small class="text-muted"> Status : <button class="btn btn-sm btn-info">{{$data->status}}</button> </small>
                    <br/></br>
                    <p class="card-text">{{$data->content}}</p>
                    
                </div>
            </div>
            </div>
            @endif
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
