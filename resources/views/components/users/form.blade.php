<div class="grid grid-cols-6 gap-4">
    <div class="col-span-6">
        <div class="flex items-center gap-3">
            <div class="border-2 border-primary-500 rounded-full h-10 w-10 flex items-center justify-center">
                <x-wireui-icon name="user" class="h-6 text-primary-500" />
            </div>
            <h2 class="text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Creación de Usuario
            </h2>
        </div>
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-wireui-input label="Nombres" placeholder="Nombres del Usuario" wire:model="form.name" />
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-wireui-input label="Apellidos" placeholder="Apellidos del Usuario" wire:model="form.surname" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-wireui-input label="Correo electronico" placeholder="@example.com" wire:model="form.email" />
    </div>
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-select
            label="Grupo Sanguineo"
            placeholder="Seleccione un grupo sanguineo"
            :options="App\Enums\RH::select()"
            option-label="label"
            option-value="value"
            wire:model="form.rh"
            autocomplete="off"
        />
    </div>  
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-select
            label="Tipo de documento"
            placeholder="Seleccione un tipo de documento"
            :options="App\Enums\DocumentType::select()"
            option-label="label"
            option-value="value"
            wire:model="form.document_type"
            autocomplete="off"
        />
    </div>
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-input label="Numero Documento" placeholder="1.115.918.673" wire:model="form.document_number" />
    </div>
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-input label="Numero de Licencia" placeholder="COL-689-PG" wire:model="form.license" />
    </div>
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-select
            label="Estado Civil"
            placeholder="Seleccione un tipo de estado civil"
            :options="App\Enums\CivilStatus::select()"
            option-label="label"
            option-value="value"
            wire:model="form.civil_status"
            autocomplete="off"
        />
    </div>    
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-select
            label="Roles"
            placeholder="Seleccione roles a asignar"
            :options="$roles"
            option-label="display_name"
            option-value="id"
            wire:model="form.roles"
            autocomplete="off"
            multiselect
        />
    </div>
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-datetime-picker label="Fecha de nacimiento" placeholder="Fecha de nacimiento" wire:model="form.birthday" without-time />
    </div>
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-inputs.phone label="Telefono (Incluir codigo Pais)" placeholder="(+57) 321 202 8286" mask="['(+##) ### ### ####', '(+##) ##### ####']" wire:model="form.phone_one" />
    </div>
    <div class="col-span-6 sm:col-span-2">
        <x-wireui-inputs.phone label="Telefono Alternativo"  placeholder="(+57) 321 202 8286" mask="['(+##) ### ### ####', '(+##) ##### ####']" wire:model="form.phone_two" />
    </div>
    <div class="col-span-6">
        <x-wireui-input label="Dirección" placeholder="Carrera 34 # 12 - 34" wire:model="form.address" />
    </div>
    <div class="col-span-6 mt-5">
        <div class="flex items-center gap-3">
            <div class="border-2 border-orange-500 rounded-full h-10 w-10 flex items-center justify-center">
                <x-wireui-icon name="lock-closed" class="h-6 text-orange-500" />
            </div>
            <h2 class="text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Asignación de Contraseña
            </h2>
        </div>
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-wireui-inputs.password label="Contraseña" placeholder="Contraseña" wire:model="form.password" />
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-wireui-inputs.password label="Confirmar Contraseña" placeholder="Repite la contraseña" wire:model="form.password_confirmation" />
    </div>
</div>