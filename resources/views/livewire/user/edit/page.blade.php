<x-slot:header>
    <h2 class="text-3xl text-gray-800 dark:text-gray-200 leading-tight">
        Editar Usuario
    </h2>
</x-slot>

<div class="mx-auto sm:px-6 lg:px-8 grid grid-cols-12 gap-6">
    <div class="col-span-12 lg:col-span-7">
        <x-card>
            <form wire:submit.prevent="save">
                <x-users.form :$roles />
                <div class="flex items-center justify-end gap-2 mt-6">
                    <x-wireui-button lg amber label="Volver" href="{{ route('users') }}" icon="rewind" wire:navigate />
                    <x-wireui-button lg type="submit" spinner="save" lime label="Actualizar Usuario" icon="save-as" />
                </div>
            </form>
        </x-card>
    </div>
</div>
