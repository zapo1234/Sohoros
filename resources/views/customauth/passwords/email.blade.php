@extends('layouts.dashbord')
@section('content')

<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Votre email</div>
                
               <div class="card-body">
                    @if (session('status'))
                         <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                   <form method="POST" action="/forget-password">
                        @csrf
                          <div class="row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Entrez votre E-mail</label>
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
						       <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    envoyer votre email
                                </button>
                            </div>
                        </div>
							
                        </div>

                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection