<?php

namespace App\Livewire\Buyer\Index;

use App\Livewire\Traits\SoftDeletes;
use App\Livewire\Traits\Sortable;
use App\Models\Buyer;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

#[Lazy]
class Table extends Component
{
    use Actions;
    use WithPagination;
    use SoftDeletes;
    use Sortable;

    public $model = null;

    public function mount()
    {
        $this->model = new Buyer(); // This is used for the SoftDeletes trait
        $this->sortCol = 'names';
        $this->sortAsc = true;
    }

    public function placeholder()
    {
        return view('components.table.placeholder');
    }

    public function render()
    {
        return view('livewire.buyer.index.table', [
            'buyers' => Buyer::search($this->search)->sort($this->sortCol, $this->sortAsc)->trash($this->trash)->paginate($this->perPage),
        ]);
    }
}
