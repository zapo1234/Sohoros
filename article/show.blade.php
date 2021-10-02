@extends('layouts.dashbord')
@section('content')
<div class="container">

<div class="header">

<h2>liste article</h2>

 
   
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">image</label>
    <input type="text" class="form-control" name="image"  id="image" placeholder="numero id">
  </div>
  
   <button type="submit" class="btn btn-primary">Submit</button>
</form>

         @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                {{ session('failed') }}
            </div>
        @endif

</div>

<section>
<h2>Afficher les article</h1>
<ul>
@foreach($articles as $values) 
<li> {{ $values->name }}</li>

@endforeach
</ul>
</section>



</div>
@endsection
