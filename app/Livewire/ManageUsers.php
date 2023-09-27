<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $showDeleteUserModal = false;

    public ?User $currentUser;

    public function mount()
    {
        $this->currentUser = null;
    }

    public function confirmDelete($userId)
    {
        $this->currentUser = User::find($userId);

        $this->showDeleteUserModal = true;
    }

    public function delete()
{
    if($this->currentUser) { // Vérifie que $currentUser n'est pas null
        if ($this->currentUser->exists) {
            $this->currentUser->delete($userId);
            User::find($this->currentUser->id)->delete();
            $this->currentUser = null; // Réinitialise $currentUser à null
        }
        $this->showDeleteUserModal = false;
    }
}

    public function render()
    {
        return view('livewire.manage-users')
            ->with('users', User::all());
    }
}
