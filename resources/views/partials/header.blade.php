
 
  
  <header class="site-header">
   
    
    <button class="bt_menu" onclick="desplegar_menu()">
      <div></div>
      <div></div>
      <div></div>
    </button>
    
    <nav class="menu plegar">
     
      
      @if(!Session::has('user_id'))
       
        
        <a href="/register">
          Crear cuenta
        </a>
        
        <a href="/login">
          Iniciar sesión
        </a>
        
       
      @else
       
        
        <a href="/">
          Mi App
        </a>
        
        <a href="/dashboard">
          Dashboard
        </a>
        
        <a href="/logout">
          Salir
        </a>
        
       
      @endif
      
     
    </nav>
    
    
    <h3>
      
      <a href="/">
        Mi App
      </a>
      
    </h3>
    
   
  </header>
  
 

