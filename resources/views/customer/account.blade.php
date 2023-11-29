@php
    $name = explode(' ', $user->name);
@endphp
<x-app-layout :title="'Account'">
    <div class='flex flex-col bg-white border border-gray-150 rounded-lg h-auto'>
        <h1 class="font-semibold text-3xl w-full border-b py-5 px-10">Account Overview</h1>
        <div class="px-10 py-10 flex flex-col gap-20">
            {{-- Profile --}}
            <div class="flex flex-col gap-8 ">

                <h1 class="font-semibold text-3xl flex justify-between w-full">Profile <a
                        href="{{ route('edit.profile') }}"
                        class="text-xl font-medium border border-primary-500 py-2 px-4 text-primary-500">
                        Edit Profile
                    </a>
                </h1>

                <div class="grid grid-cols-2 gap-10 xs:max-sm:grid-cols-1">
                    <div class="flex flex-col gap-5 capitalize">
                        <h1 class="text-2xl">First Name</h1>
                        <div class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px]">
                            {{ $name[0] }}</div>
                    </div>
                    <div class="flex flex-col gap-5 capitalize">
                        <h1 class="text-2xl">Last Name</h1>
                        <div class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px]">
                            {{ $name[1] }}</div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <h1 class="text-2xl">Email</h1>
                        <div class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px]">
                            {{ $user->email }}</div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <h1 class="text-2xl">Phone Number</h1>
                        <div class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px]">
                            {{ $user->phone_number }}</div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <h1 class="text-2xl">Date of Birth</h1>
                        <div class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px]">
                            {{ $user->dob }}</div>
                    </div>
                </div>
            </div>
            {{-- Security --}}
            <div class="flex flex-col gap-8">
                <h1 class="font-semibold text-3xl">Security</h1>
                <div class="grid grid-cols-2 gap-10 xs:max-sm:grid-cols-1">
                    <a href="/customer/update-password"
                        class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] justify-between w-full">
                        Change Password <i class="fas fa-arrow-up-right-from-square text-xl text-primary-700"></i>
                    </a>
                </div>
            </div>
            {{-- Address --}}
            <div class="flex flex-col gap-8">
                <h1 class="font-semibold text-3xl">Address Book</h1>

                <div class="flex flex-col gap-5">
                    <h1 class="text-2xl">Your Default Shipping Address:</h1>
                    @if ($address)
                        <div class="h-auto bg-gray-50 rounded flex flex-col px-6 py-10 text-[16px] relative">
                            <a href="/customer/address/edit"
                                class="text-xl font-medium border border-primary-500 py-2 px-4 text-primary-500 absolute right-8 top-6">Edit</a>
                            <p>{{ Auth::user()->name }}</p>
                            <p>{{ $address['address_line1'] }}, {{ $address['city'] }}, {{ $address['state'] }},
                                {{ $address['country'] }}.</p>
                            <p>{{ $user->phone_number }}</p>
                        </div>
                    @else
                        <div class="mt-8">
                            <a href="/customer/address/edit"
                                class="text-2xl font-medium border border-primary-500 py-4 px-6 text-primary-500">Add Address</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
