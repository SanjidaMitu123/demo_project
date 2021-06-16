@extends('backend.master')
@section('main')
<h3>data view</h3>


    <div class="form-group">
        <p>
        <label for="">product Name:</label>{{$form->product_name}}
        </p>

        <p>
        <label for="">category:</label> {{ $form->category_id}}
        </p>


        <p>
        <label for="">price:</label>{{ $form->price}}
        </p>


    </div>
@stop
 