<?php

namespace App\Livewire\User\Index;

use App\Livewire\Traits\SoftDeletes;
use App\Livewire\Traits\Sortable;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Table extends Component
{
    use Actions;
    use WithPagination;
    use SoftDeletes;
    use Sortable;

    public $model = null;

    public function mount()
    {
        $this->model = new User(); // This is used for the SoftDeletes trait
        $this->sortCol = 'name';
        $this->sortAsc = true;
    }

    public function placeholder()
    {
        return view('components.table.placeholder');
    }

    public function render()
    {
        return view('livewire.user.index.table', [
            'users' => User::search($this->search)->sort($this->sortCol, $this->sortAsc)->trash($this->trash)->paginate($this->perPage),
        ]);
    }
}