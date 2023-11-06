@extends('layout')
@section('title','edit computer')
@section('content')


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                 <h1>edit an old computer </h1>
                </div>
 <div class="flex justify-center">
 
  <form action="{{route('computer.update',['computer' => $computer->id])}}" method="post" class="form bg-white p6  boreder-1 dd">
       @csrf
       @method('PUT')
        <div>
        <label for="Compueter-name">Compueter name</label>
        <input id="Compueter-name" name="Compueter-name" value="{{$computer->name}}" type="text">
        @error('Compueter-name') 
        <div class="form-error">{{$message}}</div>
        @enderror
        </div>
                
        <div>
        <label for="Compueter-origin">Compueter origin</label>
        <input id="Compueter-origin" name="Compueter-origin" value="{{$computer->origin}}" type="text">
        @error('Compueter-origin')
        <div class="form-error">{{$message}}</div>
        @enderror    
    </div>

        <div>
        <label for="Compueter-price">Compueter price</label>
        <input id="Compueter-price" name="Compueter-price" value="{{$computer->price }}" type="text">
        @error('Compueter-price')
        <div class="form-error">{{$message}}</div>
        @enderror  
    </div>
        <div>
            <button type="submit">submit</button>
        </div>

</form>

 </div>
<div class="mt-8">
    </div>
@endsection