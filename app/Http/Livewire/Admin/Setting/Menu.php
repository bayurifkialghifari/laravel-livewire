<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Menu as Menus;

class Menu extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $search = '';
    private $searchable = ['title', 'icon', 'url'];

    public function render()
    {
        $data = Menus::latest()->paginate($this->paginate);

        // Search
        if ($this->search !== null) {
            $data = Menus::latest()->whereHas('parent', function (Builder $query) {
                $query->where('title', 'like', "%{$this->search}%");
            });

            foreach ($this->searchable as $field) {
                $data = $data->orWhere($field, 'like', "%{$this->search}%");
            }

            $data = $data->paginate($this->paginate);
        }

        return view('livewire.admin.setting.menu', compact('data'));
    }
}
