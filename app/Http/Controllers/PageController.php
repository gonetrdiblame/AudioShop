<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 'activ')->get();
        return view('pages.index', compact('services'));
    }
    public function show(Service $service) :View{
        return view('pages.show', ['service' => $service]);
    }
    public function home()
{
    $services = Service::where('status', 'activ')->get();

    return view('pages.index', compact('services'));
}

}
