<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\FinancialSummaryService;

class ManagementController extends Controller
{
    protected $financialSummaryService;

    public function __construct(FinancialSummaryService $financialSummaryService){
        $this->financialSummaryService = $financialSummaryService;
    }
    public function index(): View
    {
        return view('admin.index', ['totalSale' => $this->financialSummaryService->getTotalSales()]);
    }

    public function products(): View
    {
        $products = Product::with('productItems')->get();

        return view('admin.products', ['products'=> $products]);
    }
}
