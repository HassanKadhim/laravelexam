<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Car extends Component
{
    public $car_id;
    public $sold;

    public function render(){
        return view('livewire.car');
    }
}
