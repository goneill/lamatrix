@extends('judges.layout')
@section('content')
<div class="card">
  <div class="card-header">Judges Page</div>
  <div class="card-body">
      
      <form action="{{ url('Judge') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Court</label></br>
        <input type="text" name="court" id="court" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop