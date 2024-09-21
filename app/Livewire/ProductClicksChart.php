<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductClicksChart extends Component
{
    public $labels;
    public $data;

    public function mount($mostClickedToday)
    {
        $this->labels = $mostClickedToday->pluck('product_name');
        $this->data = $mostClickedToday->pluck('click_count');
    }

    public function render()
    {
        return view('livewire.product-clicks-chart');
    }
}
