@extends('layout')
@section('title','computer')
@section('content')


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                 <h1>computer </h1>
                </div>
<div class="">
    <ul>
     @foreach($computers as $computer)
    <a href="{{route('computer.show', ['computer' => $computer['id']]) }}">
    <li >
        <p>{{$computer['name']}} is from {{$computer['origin']}} - <strong>{{$computer['price']}}$</strong></p>
    </li>
    </a>
    @endforeach
    </ul>
</div>
<p class="note">you Can click for any items To delete Or edit value<br>and you can add items for click "add computer" on the bar</p>
@endsection 