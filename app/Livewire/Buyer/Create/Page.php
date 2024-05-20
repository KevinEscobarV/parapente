<?php

namespace App\Livewire\Buyer\Create;

use App\Livewire\Forms\BuyerForm;
use App\Models\Buyer;
use Livewire\Component;
use WireUi\Traits\Actions;

class Page extends Component
{
    use Actions;
    
    public Buyer $buyer;

    public BuyerForm $form;

    public function save()
    {
        $create = $this->form->save();

        if ($create) {
            $this->notification()->confirm([
                'icon'        => 'success',
                'title'       => 'Cliente creado exitosamente',
                'description' => 'El cliente se ha creado correctamente',
                'accept'      => [
                    'label' => 'Volver a clientes',
                    'url' => route('buyers'),
                ],
                'rejectLabel' => 'Permanecer aquí',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.buyer.create.page');
    }
}
