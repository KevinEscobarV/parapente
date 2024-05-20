<?php

namespace App\Livewire\Forms;

use App\Enums\CivilStatus;
use App\Enums\DocumentType;
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
    public $document_type = DocumentType::CC;
    public $document_number;
    public $civil_status = CivilStatus::SINGLE;
    public $phone_one;
    public $phone_two;
    public $address;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'birthday' => 'required|date',
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
        ];
    }

    public function editRules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->user->id,
            'birthday' => 'required|date',
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
        ];
    }

    public function validationAttributes() 
    {
        return [
            'name' => 'nombres',
            'surname' => 'apellidos',
            'email' => 'correo electrónico',
            'birthday' => 'fecha de nacimiento',
            'document_type' => 'tipo de documento',
            'document_number' => 'número de documento',
            'civil_status' => 'estado civil',
            'phone_one' => 'teléfono principal',
            'phone_two' => 'teléfono alternativo',
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
            'document_type',
            'document_number',
            'civil_status',
            'phone_one',
            'phone_two',
            'address',
        ]));
    }

    public function save()
    {
        $this->validate($this->rules());

        User::create($this->all());

        $this->reset();

        return true;
    }

    public function update()
    {
        $this->validate($this->editRules());

        $this->user->update($this->all());

        return true;
    }
}
