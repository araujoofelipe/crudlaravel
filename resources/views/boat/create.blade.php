@extends('layouts.app')
@section('content')
    <div  class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>New boat</h3>
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

        <form action="{{route('boat.store')}}" method="post">
        @csrf
            <div class="row"> 
                <div class="col-md-12"> 
                    <strong>Name Boat:</strong>
                    <input type="text" name="nameBoat" class="form-control" placeholder="Name Boat">
                </div>
                <div class="col-md-4"> 
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Price of Boat">
                </div>
                <div class="col-md-4"> 
                    <strong>City: </strong>
                    <input type="text" name="cidade" class="form-control" placeholder="City">
                </div>
                <div class="col-md-4"> 
                    <strong>Size Boat(pés): </strong>
                    <input type="number" name="boatSize" class="form-control" placeholder="Size Boat">
                </div>
                <div class="col-md-12"> 
                    <strong>Boat Description</strong>
                    <textarea class="form-control" placeholder="Description" name="boatDescription"></textarea>
                </div>
                <div class="col-md-12">
                    <a href="{{route('boat.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            <div>
        </form>
    </div>

@endsection