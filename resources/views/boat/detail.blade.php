@extends('layouts.app')
@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h3>About boat</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name Boat: </strong> {{$boat->nameBoat}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Price:</strong> R$ {{$boat->price}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>City: </strong> {{$boat->cidade}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Boat Size: </strong> {{$boat->boatSize}} pés
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Boat Description: </strong> {{$boat->boatDescription}}
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{route('boat.index')}}" class="btn btn-sm btn-success">Back</a>
            </div>
    </div>

@endsection