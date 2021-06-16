@extends('backend.master')
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRICE</th>
     
      <th scope="col">CATEGORY</th>
      <th scope="col">DESCRIPTION</th>
      
    </tr>

  </thead>
  <tbody>
  @foreach($list as $data)
    <tr>
      <th>{{$data -> id}}</th>
      <td >{{$data ->product_name}}</td>
      <td >{{$data ->price}}</td>
      <td >{{$data ->categoryR->name}}</td>
     
    </tr>
    <td >{{$data ->description}}</td>

    <td>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="{{route('form.delete',$data->id)}}">Delete</a>
                    <a class="btn btn-info" href="{{route('form.view',$data->id)}}">View</a>
                </td>
  @endforeach
    
  </tbody>
</table>


@stop