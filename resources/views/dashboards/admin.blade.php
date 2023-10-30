<x-app-layout :title="'Dashboard'">
@if (session('message'))
    <div class="absolute bottom-5 right-5 z-20 py-3 bg-white drop-shadow-sm border-2 border-primary rounded-md px-4">
        {{ session('message') }}
    </div>
@endif
</x-app-layout>
