<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car as CarModel;

class Car extends Component
{
    public $car_id;
    public $sold;
    public $car;

    public function sell($id){
        $car = CarModel::findOrFail($id);
        $car->is_sold = true;
        $car->save();
        $this->emit('$refresh');
    }

    public function mount($car_id , $sold){
        $this->car = CarModel::findOrFail($car_id);
    }
    
    public function render(){
        return view('livewire.car');
    }
}
