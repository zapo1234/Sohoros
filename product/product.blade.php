@extends('layouts.dashbord')

@section('content')
<div class="container">

<div class="header">

<h2>formulaire de l'article attaché à un produit</h2>

<form method="post" id="form1" action="{{ route('store') }}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom du produit</label>
    <input type="text" class="form-control" name="name" id="name"  placeholder="Nom de la categories">

              @if($errors->has('name'))
                    <div class="error">{{$errors->first('name') }}</div>
                @endif
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">famille de la catégories</label>
    <input type="text" class="form-control" name="famille"  id="famille" placeholder="famille">

               @if($errors->has('famille'))
                    <div class="error">{{$errors->first('famille') }}</div>
                @endif
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">categoris</label>
    <input type="text" class="form-control" name="categories"  id="categories" placeholder="numero id">
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



</div>
@endsection
