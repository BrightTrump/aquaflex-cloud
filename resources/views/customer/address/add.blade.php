<x-app-layout title="Edit Address">
    <div x-data="toast" class='flex flex-col bg-white border border-gray-150 rounded-lg min-h-[82vh]'>

        <form method="post" action="{{ route('address.store') }}"
            class="px-10 py-10 flex flex-col gap-20">
            @csrf
            @method('patch')

            {{-- Profile --}}
            <div class="flex flex-col gap-8">
                @if (session('status'))
                    <div x-data="setTimeout(()=>{
                        })" x-show="toast.show"
                        class=" py-6 px-10 bg-green-400  z-10  rounded-lg text-white font-medium text-2xl">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="font-semibold text-3xl flex justify-between w-full">Add Address
                </h1>

                <div class="grid grid-cols-2 xs:max-sm:grid-cols-1 gap-10">
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px]" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">Phone Number</label>
                        <input type="tel" name="phone_number" value="{{old('')}}" required
                            placeholder="+234 8000000000"
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                            <x-input-error class="mt-2 text-xl" :messages="$errors->get('phone_number')" />
                    </div>
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">Delivery Address</label>
                        <input type="text" name="address_line1" value="{{old('')}}" required placeholder="Address you want your product to be delivery to."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                            <x-input-error class="mt-2 text-xl" :messages="$errors->get('phone_number')" />
                    </div>
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">Addition Information</label>
                        <input type="text" name="addition_info" required placeholder="Describe the area you leave."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                            <x-input-error class="mt-2 text-xl" :messages="$errors->get('phone_number')" />
                    </div>
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">State/Region</label>
                        <input type="text" name="state" value="{{old('')}}" required placeholder="State."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                            <x-input-error class="mt-2 text-xl" :messages="$errors->get('phone_number')" />
                    </div>
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">LGA of Origin</label>
                        <input type="text" name="state" value="{{ old('')}}" required placeholder="Local Gov't Area."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                            <x-input-error class="mt-2 text-xl" :messages="$errors->get('phone_number')" />
                    </div>
                </div>
                <button type="submit"
                    class="flex bg-primary-500 text-white text-2xl w-fit py-5 px-10 font-medium">Save</button>
            </div>

        </form>
    </div>
</x-app-layout>
