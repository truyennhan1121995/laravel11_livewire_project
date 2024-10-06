<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;

class UserEdit extends Component
{
    public $user;
    public $name = '';
    public $email = '';
    public $password = '';
    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        // dd($this->user);
        return view('livewire.users.user-edit');
    }

    public function handleUpdate()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
        ];
        if ($this->password) {
            $rules['password'] = 'required|min:8';
        }
        $this->validate($rules);
        $this->user->name = $this->name;
        $this->user->email = $this->email;
        if ($this->password) {
            $this->user->password = bcrypt($this->password);
        }
        $this->user->save();
        session()->flash('msg', 'Cập nhật người dùng thành công');
        return $this->redirect('/users/edit/' . $this->user->id, true);
    }
}
