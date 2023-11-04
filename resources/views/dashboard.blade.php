@php
    use App\Enums\RoleEnum;
@endphp

@if(Auth::user()->role == RoleEnum::ADMIN || Auth::user()->role == RoleEnum::SALE_MANAGER)
    @include('dashboards.admin-dashboard')
@endif
@if(Auth::user()->role == RoleEnum::USER)
    @include('dashboards.user')
@endif
