@extends('layouts.main')

@section('title', 'Login')

@section('content')




<section class="vh-100" id='login'>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img style="width:100%;" src="/img/casa.png"
          class="img-fluid" alt="Logo da Casa">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="POST" action="{{ route('login') }}">
        @csrf
          

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Login</p>
          </div>
          <div>
          

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" type="email" name="email" :value="old('email')" required autofocus />
            <label class="form-label" for="email" value="{{ __('Email')}}">Email address</label>
          </div>

        

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control-lg"
              placeholder="Enter password" type="password" name="password" required autocomplete="current-password" />
            <label class="form-label" for="password" value="{{ __('password')}}">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="remember_me" name="remember_me" />
              <label class="form-check-label" for="remember_me">
                Remember me
              </label>
              
            </div>
            <x-jet-button
             
             class="ml-4 active btn btn-primary">
                        {{ __('Log in') }}
                    </x-jet-button>
          
          </div>
          <div>
                @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                  
            </div>
          

          <div class="text-center text-lg-start mt-4 pt-2">
            
            <p class="small fw-bold mt-2 pt-1 mb-0">não tem uma conta? <a href="/register"
                class="link-danger">Cadastrar</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>


@endsection

