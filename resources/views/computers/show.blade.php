@extends('layout')
@section('title','computer')
@section('content')


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                 <h1>computer </h1>
                </div>
<div class="mt-8">
    
<p>{{$computer['name']}} is from <strong>{{$computer['origin']}}</strong> - <strong>{{$computer['price']}}$</strong></p>
</div>
<div class="but">
<a class="edit-btn right " href="{{route('computer.edit',$computer->id)}}">edit</a>
<form class="k" action="{{route('computer.destroy',$computer->id)}}" method="post">
@csrf
@method('delete') 
<input class="edit-btn left" type="submit" value="delete"> 
</form>

</div> 
@endsection