<?php

namespace App\Livewire\User\Edit;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;
use WireUi\Traits\Actions;

class Page extends Component
{
    use Actions;
    
    public User $user;

    public UserForm $form;

    public function mount()
    {
        $this->form->setUser($this->user);
    }

    public function save()
    {
        $update = $this->form->update();

        if ($update) {
            $this->notification()->confirm([
                'icon'        => 'success',
                'title'       => 'Usuario actualizado exitosamente',
                'description' => 'El usuario ha sido actualizado correctamente',
                'accept'      => [
                    'label' => 'Volver a pilotos y usuarios',
                    'url' => route('users'),
                ],
                'rejectLabel' => 'Permanecer aquí',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.user.edit.page');
    }
}
