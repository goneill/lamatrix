@extends('judges.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('judge/' .$judges->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$judges->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$judges->name}}" class="form-control"></br>
        <label>Court</label></br>
        <input type="text" name="court" id="court" value="{{$judges->court}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop