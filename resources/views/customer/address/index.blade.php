<x-app-layout title="Address Book">
    <x-content>
        <h1 class="font-semibold text-3xl w-full border-b py-5 px-10">Address Book</h1>
        <div class="grid grid-cols-1 xm:grid-cols-2 xm:p-10 p-4 gap-10">
            @foreach ($userAddresses as $userAddress)
                <x-address-card :userAddress="$userAddress" />
            @endforeach
        </div>
    </x-content>
</x-app-layout>
