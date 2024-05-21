<?php

namespace App\Livewire\Forms;

use App\Enums\CivilStatus;
use App\Enums\DocumentType;
use App\Enums\RH;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user;

    public $name;
    public $surname;
    public $email;
    public $birthday;
    public $rh = RH::A_POSITIVE;
    public $license;
    public $document_type = DocumentType::CC;
    public $document_number;
    public $civil_status = CivilStatus::SINGLE;
    public $phone_one;
    public $phone_two;
    public $address;
    public $roles = [];
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'birthday' => 'required|date',
            'rh' => [
                'required',
                Rule::enum(RH::class)
            ],
            'license' => 'nullable|string|max:255',
            'document_type' => [
                'required',
                Rule::enum(DocumentType::class)
            ],
            'document_number' => 'required|string|max:255|unique:users,document_number',
            'civil_status' => [
                'required',
                Rule::enum(CivilStatus::class)
            ],
            'phone_one' => 'required|string|max:255',
            'phone_two' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'roles' => 'required|array|min:1',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function editRules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->user->id,
            'birthday' => 'required|date',
            'rh' => [
                'required',
                Rule::enum(RH::class)
            ],
            'license' => 'nullable|string|max:255',
            'document_type' => [
                'required',
                Rule::enum(DocumentType::class)
            ],
            'document_number' => 'required|string|max:255|unique:users,document_number,' . $this->user->id,
            'civil_status' => [
                'required',
                Rule::enum(CivilStatus::class)
            ],
            'phone_one' => 'required|string|max:255',
            'phone_two' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'roles' => 'required|array|min:1',
            'password' => 'nullable|string|min:8|confirmed',
        ];
    }

    public function validationAttributes() 
    {
        return [
            'name' => 'nombres',
            'surname' => 'apellidos',
            'email' => 'correo electrónico',
            'birthday' => 'fecha de nacimiento',
            'rh' => 'factor RH',
            'license' => 'licencia de vuelo',
            'document_type' => 'tipo de documento',
            'document_number' => 'número de documento',
            'civil_status' => 'estado civil',
            'phone_one' => 'teléfono principal',
            'phone_two' => 'teléfono alternativo',
            'address' => 'dirección',
            'roles' => 'roles',
            'password' => 'contraseña',
        ];
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
        $this->fill($user->only([
            'name',
            'surname',
            'email',
            'birthday',
            'rh',
            'license',
            'document_type',
            'document_number',
            'civil_status',
            'phone_one',
            'phone_two',
            'address',
        ]));

        $this->roles = $user->roles->pluck('id')->toArray();
    }

    public function save()
    {
        $this->validate($this->rules());

        User::create($this->all())->assignRole($this->roles);

        $this->reset();

        return true;
    }

    public function update()
    {
        $this->validate($this->editRules());

        if (!$this->password)
            $this->password = $this->user->password;

        $this->user->update($this->all());
        
        $this->user->syncRoles($this->roles);

        $this->reset('password', 'password_confirmation');

        return true;
    }
}
