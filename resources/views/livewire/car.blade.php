<div>
    <div class="@if($sold) bg-red-50 @else bg-blue-50 @endif p-5 rounded-lg">
        <div class="flex justify-between border-b @if($sold) border-red-200 @else border-blue-200 @endif pb-3 items-center">
            <div>
                <button data-dropdown-toggle="dropdown" type="button" class="text-gray-900  focus:outline-none @if($sold) hover:bg-red-100 @else hover:bg-blue-100 @endif focus:ring-2 font-medium rounded-lg text-sm px-2.5 py-2.5">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        @if (!$sold)
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black flex justify-between">
                                <span>Edit</span>
                                <i class="fa fa-pen"></i>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black flex justify-between">
                                <span>Remove</span>
                                <i class="fa fa-trash"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="text-center @if($sold) text-red-500 @else text-blue-500 @endif font-semibold text-xl">
                Car Name
            </div>
            @if($sold)
                <span class="@if($sold) text-red-800 @else text-blue-800 @endif focus:outline-none @if($sold) hover:bg-red-100 @else hover:bg-blue-100 @endif focus:ring-2 font-medium rounded-lg text-sm px-2.5 py-2.5">
                    <i class="fa-solid fa-store-slash"></i>
                </span>
            @else
                <button type="button" class="@if($sold) text-red-800 @else text-blue-800 @endif focus:outline-none @if($sold) hover:bg-red-100 @else hover:bg-blue-100 @endif focus:ring-2 font-medium rounded-lg text-sm px-2.5 py-2.5">
                    <i class="fa-solid fa-store"></i>
                </button>
            @endif
        </div>

        <div class="flex flex-col">
            {{-- Car Price --}}
            <div class="flex justify-between mt-3">
                <span class="@if($sold) text-red-800 @else text-blue-800 @endif text-sm font-semibold mr-2 px-2.5 py-0.5 rounded">
                    Price
                </span>
                <span class="@if($sold) text-red-800 bg-red-200 @else text-blue-800 bg-blue-200 @endif text-sm font-semibold mr-2 px-2.5 py-0.5 rounded">
                    1,500 $
                </span>
            </div>

            {{-- Car Model --}}
            <div class="flex justify-between mt-3">
                <span class="@if($sold) text-red-800 @else text-blue-800 @endif text-sm font-semibold mr-2 px-2.5 py-0.5 rounded">
                    Model
                </span>
                <span class="@if($sold) bg-red-200 text-red-800 @else bg-blue-200 text-blue-800 @endif text-sm font-semibold mr-2 px-2.5 py-0.5 rounded">
                    BMW
                </span>
            </div>
        </div>
    </div>
</div>
