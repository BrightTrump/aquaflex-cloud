<div class="border border-gray-150 p-5 relative">
    <a href="{{ route('address.edit', $userAddress->address->id) }}"
        class="flex absolute right-5 top-5 text-md font-medium border border-primary-500 py-2 px-4 text-primary-500">Edit</a>

    <h1 class="font-medium text-2xl capitalize">{{ $userAddress->user->name }}</h1>
    <div class="text-xl">
        <p>{{ $userAddress->address->address_line1 }}</p>
        <p>{{ $userAddress->address->address_line2 }}</p>
        <p>{{ $userAddress->address->city }}, {{ $userAddress->address->state }}.</p>
        @if ($userAddress->is_default)
            <p class="font-medium text-xl my-4 text-primary-500">Default Address</p>
        @endif
    </div>

</div>
