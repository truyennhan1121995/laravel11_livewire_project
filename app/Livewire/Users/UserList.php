<?php

namespace App\Livewire\Users;

use livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    public $search = '';
    public function render()
    {
        $users = User::latest();
        if ($this->search) {
            $users->where('name', 'like', "%{$this->search}%");
            // dd($this->search);
        }
        $users = $users->paginate(3);
        return view('livewire.users.user-list', compact('users'));
    }

    public function handleRemove(User $user)
    {
        session()->flash('msg', "Xóa người dùng " . $user->name . " thành công");
        $user->delete();
        return $this->redirect('/users');
    }
}
