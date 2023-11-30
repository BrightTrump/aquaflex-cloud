<x-app-layout title="Add Address">
    <div x-data="toast" class='flex flex-col bg-white border border-gray-150 rounded-lg min-h-[82vh]'>

        <form method="post" action="{{ route('address.store') }}" class="px-10 py-10 flex flex-col gap-20">
            @csrf


            {{-- Profile --}}
            <div class="flex flex-col gap-8">
                @if (session('status') === 'added-adrress')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 4000)"
                        class="text-2xl mb-2 bg-green-400 py-6 px-4 rounded-md text-white dark:text-gray-400 font-medium">
                        Added Address Successfully!</p>
                @endif


                <h1 class="font-semibold text-3xl flex justify-between w-full">Edit Address
                </h1>

                <div class="grid grid-cols-2 xs:max-sm:grid-cols-1 gap-10">
                    <!-- Address Line 1 -->
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">Delivery Address</label>
                        <input type="text" name="address_line1" value="{{ old('address_line1') }}" required
                            placeholder="Address you want your product to be delivery to."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                        <x-input-error class="mt-2 text-xl" :messages="$errors->get('address_line1')" />
                    </div>

                    <!-- Address Line 2 -->
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">Addition Information</label>
                        <input type="text" name="address_line2" value="{{ old('address_line2') }}" required
                            placeholder="Describe the area you leave."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                        <x-input-error class="mt-2 text-xl" :messages="$errors->get('address_line2')" />
                    </div>

                    <!-- State/Region -->
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">State/Region</label>
                        <input type="text" name="state" value="{{ old('state') }}" required placeholder="State."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                        <x-input-error class="mt-2 text-xl" :messages="$errors->get('state')" />
                    </div>

                    <!-- City/town -->
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">City/Town</label>
                        <input type="text" name="city" value="{{ old('city') }}" required
                            placeholder="Enter your current city/town."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                        <x-input-error class="mt-2 text-xl" :messages="$errors->get('city')" />
                    </div>

                    <!-- LGA -->
                    <div class="flex flex-col gap-5">
                        <label class="text-2xl">LGA of Origin</label>
                        <input type="text" name="lga" value="{{ old('lga') }}" required
                            placeholder="Local Gov't Area."
                            class="h-20 bg-gray-50 rounded flex items-center px-6 font-medium text-[16px] placeholder:font-normal placeholder:italic">
                        <x-input-error class="mt-2 text-xl" :messages="$errors->get('lga')" />
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center h-5">
                        <input aria-describedby="is_default" type="checkbox" name="is_default" value="1"
                            class="w-8 h-8 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                    </div>
                    <div class="ml-3 text-2xl font-medium">
                        <label for="remember" class="text-gray-500 dark:text-gray-300 uppercase">Set as Default</label>
                    </div>
                </div>
                <button type="submit"
                    class="flex bg-primary-500 text-white text-2xl w-fit py-5 px-10 font-medium">Save</button>
            </div>

        </form>
    </div>
</x-app-layout>
