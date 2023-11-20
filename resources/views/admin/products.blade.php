<x-app-layout :title="'Products'">
    <div class="">
        @includeWhen($products ,'components.product-card')
    </div>
</x-app-layout>
