<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;

class Dashboard extends Component
{
    protected $listeners = ['$refresh'];
    public function render()
    {
        $cars = Car::get(['id' , 'is_sold']);
        return view('livewire.dashboard' , ['cars' => $cars]);
    }
}
