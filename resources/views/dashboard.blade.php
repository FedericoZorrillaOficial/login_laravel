
 
  
  @extends('layouts.my_app')
  
  
  @section('content')
  
  <div class="card">
    
    <h2>
      Bienvenido {{ $user->name }}
    </h2>
    
    
    <h3>
      Datos de tu cuenta
    </h3>
    
    
    <p>
      <strong>ID:</strong>
      {{ $user->id }}
    </p>
    
    <p>
      <strong>
        Nombre:
      </strong>
      {{ $user->name }}
    </p>
    
    <p>
      <strong>
        Email:
      </strong>
      {{ $user->email }}
    </p>
    
    <p>
      <strong>
        Desde:
      </strong>
      {{ $user->created_at }}
    </p>
    
    
    <p>
      
      Sesión activada correctamente.
    </p>
    
    <a href="/logout">
      Cerrar sesión
    </a>
    
   
  </div>
  
  @endsection