<?php 

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Client\Request;

class AuthController extends Controller 
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(Request $request)
    {
        $this->authService->registerUser($request->all());
        return redirect('login')->with('success','Usuario registrado!');
    }

    public function login(Request $request) {
        if($this->authService->login($request->only('email','password'))) {
            return redirect ('/dashboard')->with('success', 'Login realizado!');
        }
        return redirect('/login')->withErrors(['error' => 'Credenciais inválidas']);
    }

    public function logout()
    {
        $this->authService->logout();
    }

}