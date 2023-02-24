<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Auth extends Component
{
    public $phone = '+79629071412';
    public $password = 'admin';
    protected function rules()
    {
        return [
            'phone' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }
    protected $listeners = ['phoneUpdated'];

    public function phoneUpdated($value)
    {

        $this->phone = $value;
    }

    public function login()
    {

        if (\Illuminate\Support\Facades\Auth::attempt($this->validate())) {
            Session::regenerate(true);
            return redirect()->route('index');
        } else {
            \session()->flash('error', 'Неверный пароль или email');
        }
    }

    public function render()
    {
        return view('livewire.components.auth');
    }
}
