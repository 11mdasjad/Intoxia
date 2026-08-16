<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndustryController extends Controller
{
    public function index(): View
    {
        $industries = Industry::published()
            ->orderBy('sort_order')
            ->get();

        return view('pages.industries.index', compact('industries'));
    }

    public function show(Industry $industry): View
    {
        abort_if(!$industry->is_published, 404);

        $otherIndustries = Industry::published()
            ->where('id', '!=', $industry->id)
            ->orderBy('sort_order')
            ->take(4)
            ->get();

        return view('pages.industries.show', compact('industry', 'otherIndustries'));
    }
}
