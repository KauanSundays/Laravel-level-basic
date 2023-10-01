<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;
    
    public function createNewUser() 
    {
        User::create(
            [
                ' ' => "test user 2",
                'email' => "test@test2.com",
                'password' => "111222333",
            ]
        )    
    }

    public function render()
    {
        return view('livewire.clicker');
    }
}
