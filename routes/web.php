<?php

 
  
  use Illuminate\Support\Facades\Route;
  use App\Http\Controllers\loginCt;
  
  
  Route::get('/', [loginCt::class, "showInicio"]);
  
  
  Route::get('/register', [loginCt::class, "registerShow"]);
  
  
  Route::post('/registrar', [loginCt::class, "registrar"]);
  
  
  Route::post('/login', [loginCt::class, "login"]);
  
  
  Route::get('/login', [loginCt::class, "loginShow"]);
  
  
  Route::get('/dashboard', [loginCt::class, "dashboardUp"]);
  
  
  Route::get('/logout', [loginCt::class, "logout"]);
  
 

