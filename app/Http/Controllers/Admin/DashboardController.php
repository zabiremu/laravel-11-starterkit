<?php

namespace App\Http\Controllers\Admin;

use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Http\Request;
use App\services\ShortURLService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShortURLRequest;
use AshAllenDesign\ShortURL\Models\ShortURL;

class DashboardController extends Controller
{
    protected $shortUrlService;
    protected $shortUrl;
    protected $shortUrlVisit;
    public function __construct(ShortURLService $shortUrlService, ShortURL $shortUrl, ShortURLVisit $shortUrlVisit)
    {
        $this->shortUrlService = $shortUrlService;
        $this->shortUrl = $shortUrl;
        $this->shortUrlVisit = $shortUrlVisit;
    }
    public function index()
    {
        $shortUrl = $this->shortUrl->get();
        $shortUrlVisit = $this->shortUrlVisit->get();

        return view('admin.layouts.dashboard', compact('shortUrl', 'shortUrlVisit'));
    }

    public function create()
    {
        return view('admin.layouts.ShortURL.create');
    }

    public function store(StoreShortURLRequest $request)
    {
        $shortUrl = $this->shortUrlService->generateShortURL($request->input('original_url'));
        return redirect()->route('admin.dashboard');
    }

    public function destroy($id)
    {
        $shortUrl = $this->shortUrl->findOrFail($id);
        $this->shortUrlService = $this->shortUrlService->deleteShortURL($shortUrl);
        return back();
    }
}
