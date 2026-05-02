
 
  @extends('layouts.my_app')
  
  
  
  @section('content')
   
    
    <div class="card">
     
      
      
      <h2>
        Crear cuenta
      </h2>
      
      
      
      <form action="/registrar" method="POST">
        
        @csrf
        
        
        
        @if(session('error') == "usuario")
          <span class="alerta">
            
            Este usuario ya está siendo utilizado
          </span>
        @endif
        
        
        <input type="text" name="name" placeholder="Usuario" value="{{old('name')}}" required>
        
        
        
        
        @if(session('error') == "email")
          <span class="alerta">
            
            Este email ya está siendo utilizado
          </span>
        @endif
        
        
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}" required>
        
        
        
        <input type="password" name="password" placeholder="Contraseña" value="{{old('password')}}" required>
        
        
        <button type="submit">
          Registrarse
        </button>
        
        
        
      </form>
      <p>
        <a href="/login">
          Ya tengo cuenta <span> Iniciar sesión </span>
        </a>
      </p>
      
    </div>
    
   
  @endsection
  
 

