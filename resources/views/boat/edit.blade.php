@extends('layouts.app')
@section('content')
    <div  class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Update Boat</h3>
            </div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong>There where some problems with your input.
                <ul>
                    @foreach($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('boat.update',$boat->id)}}" method="post">
        @csrf
        @method('PUT')
            <div class="row"> 
                <div class="col-md-12"> 
                    <strong>Name Boat:</strong>
                    <input type="text" name="nameBoat" class="form-control" value="{{$boat->nameBoat}}">
                </div>
                <div class="col-md-4"> 
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" value="{{$boat->price}}">
                </div>
                <div class="col-md-4"> 
                    <strong>City: </strong>
                    <input type="text" name="cidade" class="form-control" value="{{$boat->cidade}}">
                </div>
                <div class="col-md-4"> 
                    <strong>Size Boat(pés): </strong>
                    <input type="number" name="boatSize" class="form-control" value="{{$boat->boatSize}}">
                </div>
                <div class="col-md-12"> 
                    <strong>Boat Description</strong>
                    <textarea class="form-control" name="boatDescription" >{{$boat->boatDescription}}</textarea>
                </div>
                <div class="col-md-12">
                    <a href="{{route('boat.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            <div>
        </form>
    </div>

@endsection