thawextends('judges.layout')
@section('content')
<div class="card">
  <div class="card-header">Judges Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $judges->name }}</h5>
        <p class="card-text">Court : {{ $judges->court }}</p>
  </div>
      
    </hr>
  
  </div>
</div>