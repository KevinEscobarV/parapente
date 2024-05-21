<?php

namespace App\Livewire\User\Create;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class Page extends Component
{
    use Actions;
    
    public User $user;
    public $roles = [];

    public UserForm $form;

    public function mount()
    {
        $this->roles = Role::select('id', 'display_name')->get();
    }

    public function save()
    {
        $create = $this->form->save();

        if ($create) {
            $this->notification()->confirm([
                'icon'        => 'success',
                'title'       => 'Usuario creado exitosamente',
                'description' => 'El usuario se ha creado correctamente',
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
        return view('livewire.user.create.page');
    }
}
