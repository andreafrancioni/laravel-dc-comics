@extends('layouts.app')

@section('content')

<section class="show">
    <div class="container">
        <div class="row">
            <h2>{{$detail->title}}</h2>
            <div class="row">
                <img src="{{$detail->thumb}}" alt="">
                <p>{{$detail->description}}</p>
                <span>{{$detail->price}}</span>
                <span>{{$detail->series}}</span>
                <span>{{$detail->sale_date}}</span>
                <span>{{$detail->type}}</span>
                <button>Edit</button>
                <button>Delete</button>
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

        button{
            width: 100px;
        }
    }

</style>