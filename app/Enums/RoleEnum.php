<?php

namespace App\Enums;

enum RoleEnum : string{
    case USER = 'USER';
    case ADMIN = 'ADMIN';
    case SALE_MANAGER = 'SALE_MANAGER';
    case SALE_REP= 'SALE_REP';

    public function permissions(): array
    {
        return match ($this) {
            self::ADMIN => [
                'add_product',
                'add_employee',
            ],
        };
    }

}
