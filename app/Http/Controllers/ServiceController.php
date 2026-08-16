<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $categories = ServiceCategory::with(['services' => function ($q) {
            $q->published()->orderBy('sort_order');
        }])->orderBy('sort_order')->get();

        $services = Service::published()
            ->with('category')
            ->orderBy('sort_order')
            ->get();

        return view('pages.services.index', compact('categories', 'services'));
    }

    public function show(Service $service): View
    {
        abort_if(!$service->is_published, 404);

        $relatedServices = Service::published()
            ->where('id', '!=', $service->id)
            ->where('service_category_id', $service->service_category_id)
            ->take(3)
            ->get();

        if ($relatedServices->isEmpty()) {
            $relatedServices = Service::published()
                ->where('id', '!=', $service->id)
                ->take(3)
                ->get();
        }

        return view('pages.services.show', compact('service', 'relatedServices'));
    }
}
