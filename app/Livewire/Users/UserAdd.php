<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;

class UserAdd extends Component
{
    #[Validate('required')]
    public $name = '';
    #[Validate('required|email|unique:users,email')]
    public $email = '';
    #[Validate('required|min:6')]
    public $password = '';
    public function render()
    {
        return view('livewire.users.user-add');
    }

    public function handleAdd()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->save();
        session()->flash('msg', 'Thêm người dùng ' . $user->name . ' thành công');
        return $this->redirect('/users', true);
    }
}
