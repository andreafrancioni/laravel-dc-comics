@extends('layouts.app')

@section('content')

<section class="show">
    <div class="container">
        <div class="row">
            <h2>{{$comic->title}}</h2>
            <div class="row">
                <img src="{{$comic->thumb}}" alt="">
                <p>{{$comic->description}}</p>
                <span>{{$comic->price}}</span>
                <span>{{$comic->series}}</span>
                <span>{{$comic->sale_date}}</span>
                <span>{{$comic->type}}</span>
                <a class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </div>
        </div>
    </div>
</section>

@endsection

<style>

    .show{

        margin-bottom: 100px;

        img{
            width:200px;
        }

        .btn{
            width: 100px;
            height: 50px;
        }
    }

</style>