<?php

 
  
  namespace App\Http\Controllers;
  use App\Models\User;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Session;
  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Hash;
  
  
  
  
  class loginCt extends Controller
{
   
    
    public function showInicio(){
      
      return view("layouts.inicio");
      
    }
    
    
    
    
    public function registerShow(){
     
      
      if(Session::has('user_id')){
        
        return redirect('/dashboard');
        
      }else{
        
        return view('auth.register');
        
      }
      
     
    }
    
    
    
    
    public function registrar(Request $request){
     
      
      //cargar datos
      $name = $request ->name;
      $email = $request->email;
      
      
      // Verificar si existe el nombre
      if (User::where("name", $name)->exists()) {
        
        return back()
          ->withInput()
          ->with('error', 'usuario');
        
      }
      
      
      // Verificar si existe el email
      if (User::where("email", $email)->exists()) {
        
        return back()
          ->withInput()
          ->with('error', 'email');
        
      }
      
      
      //crear usuario
      $user = User::create([
        
        'name' => $name,
        'email' => $email,
        'password' => Hash::make($request->password)
        
      ]);
      
      
      //abrir sesion
      Session::put('user_id', $user->id);
      return redirect('/dashboard');
      
     
    }
    
    
    
    
    public function login(Request $request){
     
      
      $name = $request -> name;
      $password = $request->password;
      
      
      $user = \App\Models\User::where("name", $name)->first();
      
      
      // Verificar contraseña
      if ($user && Hash::check($password, $user->password)) {
       
        
        Session::put('user_id', $user->id);
        
        return redirect('/dashboard');
        
       
      }else{
       
        
        return back()
          ->withInput()
          ->with('wrong', "wrong");
        
       
      }
      
     
    }
    
    
    
    
    public function loginShow(){
     
      
      if(Session::has('user_id')){
        
        return redirect('/dashboard');
        
      }else{
        
        return view('auth.login');
        
      }
      
    }
    
    
    
    
    public function dashboardUp(){
      
      $id = Session::get('user_id');
      $user = User::find($id);
      
      
      if(!$id || !$user){
        
        Session::forget('user_id');
        return redirect('/login');
        
      }
      
      
      return view('dashboard', compact('user'));
      
    }
    
    
    
    
    public function logout(){
     
      
      Session::forget('user_id');
      Session::invalidate();
      Session::regenerateToken();
      
      return redirect('/');
      
    }
    
    
  }
  
 
