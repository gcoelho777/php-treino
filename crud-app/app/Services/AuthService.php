<?php 

namespace  App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;    

class AuthService 
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->create($data);
    }

    public function login(array $credentials) 
    {
        $user = $this->userRepository->findByEmail($credentials['email']);
        if($user && Hash::check($credentials['password'], $user->password)) {
            auth()->login($user);
            return true;
        }
        return false;
    }

    public function logout()
    {
        auth()->logout();
    }
}