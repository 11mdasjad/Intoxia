<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\PortfolioCategory;
use App\Models\PortfolioProject;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(Request $request): View
    {
        $categories = PortfolioCategory::orderBy('sort_order')->get();
        $selectedCategory = $request->query('category');

        $query = PortfolioProject::published()
            ->with(['category', 'technologies', 'caseStudy'])
            ->orderBy('sort_order');

        if ($selectedCategory && $selectedCategory !== 'all') {
            $query->whereHas('category', function ($q) use ($selectedCategory) {
                $q->where('slug', $selectedCategory);
            });
        }

        $projects = $query->paginate(12)->withQueryString();

        return view('pages.portfolio.index', compact('projects', 'categories', 'selectedCategory'));
    }

    public function show(string $slug): View
    {
        // Try to find as a CaseStudy first, or as a PortfolioProject
        $caseStudy = CaseStudy::published()
            ->where('slug', $slug)
            ->with('project.technologies')
            ->first();

        if ($caseStudy) {
            $relatedCaseStudies = CaseStudy::published()
                ->where('id', '!=', $caseStudy->id)
                ->take(3)
                ->get();

            return view('pages.portfolio.case-study', compact('caseStudy', 'relatedCaseStudies'));
        }

        $project = PortfolioProject::published()
            ->where('slug', $slug)
            ->with(['category', 'technologies', 'caseStudy'])
            ->firstOrFail();

        if ($project->caseStudy) {
            return redirect()->route('work.show', $project->caseStudy->slug);
        }

        $relatedProjects = PortfolioProject::published()
            ->where('id', '!=', $project->id)
            ->take(3)
            ->get();

        return view('pages.portfolio.show', compact('project', 'relatedProjects'));
    }
}
