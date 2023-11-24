<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Enums\RoleEnum;
use App\Models\Product;
use Illuminate\View\View;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use App\Enums\OrderStatusEnum;
use App\Services\FinancialSummaryService;

class ManagementController extends Controller
{
    protected $financialSummaryService;

    public function __construct(FinancialSummaryService $financialSummaryService)
    {
        $this->financialSummaryService = $financialSummaryService;
    }
    public function index(): View
    {
        return view('admin.index', [
            'totalSale' => $this->financialSummaryService->getTotalSales(),
            'totalOrder' => $this->financialSummaryService->getTotalOrder(),
            'customer' => User::where('role', RoleEnum::USER)->get(),
            'orders' => Order::with('user', 'orderLine.productItem', 'orderStatus')->latest()->get()
        ]);
    }

    public function products(): View
    {
        $products = Product::with('productItems')->get();

        return view('admin.products', ['products' => $products]);
    }
}
