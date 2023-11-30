<x-app-layout title="Address Book">
    <x-content>
        <h1 class="font-semibold text-3xl w-full border-b py-5 px-10">Address Book</h1>
        <x-address-card :userAddresses="$userAddresses"/>
    </x-content>
</x-app-layout>
