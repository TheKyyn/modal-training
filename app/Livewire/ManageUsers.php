<?php

namespace App\Livewire;

use Livewire\Component;

class ManageUsers extends Component
{
    public $showDeleteUserModal = false;

    public User $currentUser;

    public function mount()
    {
        $this->currentUser = new User();
    }

    public function confirmDelete(User $user)
    {
        $this->currentUser = $user;

        $this->showDeleteUserModal = true;
    }

    public function delete()
    {
        $this->currentUser->delete();

        $this->showDeleteUserModal = false;
    }
    
    public function render()
    {
        return view('livewire.manage-users')
            ->with('users', \App\Models\User::all());
    }
}
