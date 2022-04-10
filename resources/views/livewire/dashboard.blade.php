@section('title', 'Cars')
<div>
    

    <div class="grid gap-4 grid-cols-4">
        @forelse($cars as $car)
            @livewire('car', ['car_id' => $car->id, 'sold' => $car->is_sold])
        @empty
            <div class="bg-gray-200 p-4">
                <p class="text-center">No cars found</p>
            </div>
        @endforelse
    </div>

</div>
