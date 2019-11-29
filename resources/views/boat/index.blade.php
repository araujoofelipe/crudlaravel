@extends('layouts.app')
@section('content')

<div class="container"> 
    <div class="row">
        <div class="col-md-10">
            <h3> List Boats </h3>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="{{ route('boat.create') }}">Create New Boat</a>
        </div>
    </div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p> {{$message}}</p>
    </div>
@endif
    <div class="table-responsive-md">
        <table class="table">
            <thead>
                <tr>
                    <th><b>N.</b></th>
                    <th>Nome</th>
                    <th>Price</th>
                    <th>City</th>
                    <th>Boat Size</th>
                    <th>Boat Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($boats as $boat)
                <tr>
                    <td><b>{{++$i}}.</b></td>
                    <td>{{$boat->nameBoat}}</td>
                    <td>{{$boat->price}}</td>
                    <td>{{$boat->cidade}}</td>
                    <td>{{$boat->boatSize}}</td>
                    <td>{{$boat->boatDescription}}</td>
                    <td>
                        <form  action="{{route('boat.destroy',$boat->id)}}" method="post">
                            <a class="btn btn-sm btn-success"href="{{route('boat.show',$boat->id)}}">Show</a>
                            <a class="btn btn-sm btn-warning"href="{{route('boat.edit',$boat->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            <tbody>
        </table>
        {!!$boats->links()!!}
    </div>
</div>
@endsection