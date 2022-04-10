@section('title', 'Cars')
<div>
    

    <div class="grid gap-4 grid-cols-4">
        @livewire('car', ['car_id' => 1, 'sold' => false])
    </div>

</div>
