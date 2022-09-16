<div style="background:black">


<div class="container">
    <div class="row">
        <div class="col-6" style="color:white; background: rgb(0, 0, 102)">
            <br><h1 align="center"><font face="Monotype Corsiva"> Laboratorio de Análisis Clínicos </font></h1><br>
            <h2 align="center"><font face="Felix Titling">San Martín de Porres</font></h2>
            <br><br><div align="center"><img class="img-fluid" src="img/ImagenMicroscopio.png"></div>
        </div>
        
        <div class="col-6" style="background: rgb(245, 245, 245)">
            <x-guest-layout>
    
                <x-jet-authentication-card>
                
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>
            
                    <x-jet-validation-errors class="mb-4" />
            
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            
                        <div align="center">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-fluid" src="img/icono_usuario.png">
                                </div>
                                
                                <div class="col-10">
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                            </div>
                            
                        </div>
            
                        <div class="mt-4" align="center">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-fluid" src="img/password_1.png">
                                </div>
                                <div class="col-10">
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div>
                            </div>
                            
                        </div>
            
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
            
                            <x-jet-button class="ml-4">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </form>
                </x-jet-authentication-card>
            
                
            
            
        </x-guest-layout>
        </div>
    </div>

</div>


</div>



<link rel="stylesheet" href="/css/admin_custom.css">

<script> console.log('Hi!'); </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
