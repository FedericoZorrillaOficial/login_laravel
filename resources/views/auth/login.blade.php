
 
  
  @extends('layouts.my_app')
  
  
  @section('content')
    
    <div class="card">
      
      <h2>
        Iniciar sesión
      </h2>
      
      
      
      <form method="POST" action="/login" class="{{session('wrong') ?? ''}}">
        
        
        @csrf
        
        @if(session('wrong') == "wrong")
          <span class="alert_wrong">
            Usuario o contraseña incorrectos
          </span>
        @endif
        
        <input type="text" name="name" placeholder="Usuario" value="{{old('name')}}" required>
        
        <input type="password" name="password" placeholder="Contraseña" value="{{old('password')}}" required>
        
        
        <button type="submit">
          Entrar
        </button>
        
      </form>
      
    </div>
    
  @endsection
  
 

