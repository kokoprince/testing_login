<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login0 extends Component
{
    public $name;
    public $pass;

    protected $rules = [
        'name' => 'required|email|min:1',
        'pass' => 'required|min:3',
    ];

    public function login()
    {
        $this->validate();
        if(Auth::attempt(['email' => $this->name, 'password' => $this->pass]))
        {
            return redirect()->route('go_user');

        }
    }
    public function render()
    {
        return view('livewire.login0');
    }
}
