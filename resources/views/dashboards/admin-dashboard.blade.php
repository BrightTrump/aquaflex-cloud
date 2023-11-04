{{-- <x-app-layout :title="'Dashboard'">
@if (session('message'))
    <div class="absolute bottom-5 right-5 z-20 py-3 bg-white drop-shadow-sm border-2 border-primary rounded-md px-4">
        {{ session('message') }}
    </div>
@endif
</x-app-layout> --}}

<x-app-layout :title="'Dashboard'">
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                <!-- Card Item Start -->

                <!-- Card Item End -->

            </div>
        </div>
    </main>
</x-app-layout>
