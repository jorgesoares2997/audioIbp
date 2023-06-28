@extends('layouts.main')

@section('title', 'Register')

@section('content')
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form method="POST" action="{{ route('register') }}">
            @csrf

                  <div class="d-flex flex-row align-items-center mb-4">
                   <ion-icon name='person-sharp'></ion-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" id="name" class="form-control" />
                      <label class="form-label" value="{{ __('Name') }}" for="name">Seu Nome</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <ion-icon name='mail-sharp'></ion-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" :value="old('email')" required id="email"  class="form-control" />
                      <label class="form-label" value="{{ __('Email') }}" for="email">Seu Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <ion-icon name='lock-closed-sharp'></ion-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input  type="password" name="password" required autocomplete="new-password" id="password"  class="form-control" />
                      <label class="form-label" value="{{ __('Password') }}" for="password">Senha</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <ion-icon name='key-sharp'></ion-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password_confirmation" required autocomplete="new-password" id="confirm_password" class="form-control" />
                      <label class="form-label" value="{{ __('Confirm Password') }}" for="password">Repetir senha</label>
                    </div>
                  </div>
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                  
                  <div class="form-check d-flex justify-content-center mb-5">
                     <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <x-jet-button class="ml-4 btn btn-primary">
                    {{ __('Register') }}
                </x-jet-button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

              <img style="width:100%;" src="/img/casa.png"
          class="img-fluid" alt="Logo da Casa">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection