<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Service;
use App\Http\Requests\Admin\Services\StoreServiceRequest;
use App\Http\Requests\Admin\Services\UpdateServiceRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('status', 'activ')->get();
        return view('pages.admin.services.index', compact('services'));

    }
    

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.services.create');
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request): RedirectResponse
    {
        $imagePath = $request->hasFile('image')
            ? ImageController::upload($request)
            : null;
        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->image = $imagePath;
        $service->status = $request->input('status');
        $service->save();

        return redirect()
                ->route('services.index')
                ->with('success', 'Serviciul a fost adăugat cu succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service): View
    {
        return view('pages.admin.services.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = ImageController::upload($request);
            ImageController::delete($service);
        }
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->status = $request->input('status');

        if ($imagePath) {
            $service->image = $imagePath;
        }

        $service->save();

        return redirect()
                ->route('services.index')
                ->with('success', 'Serviciul a fost actualizat cu succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        ImageController::delete($service);
        $service->delete();
        
        return redirect()
                ->route('services.index')
                ->with('success', 'Serviciul a fost șters cu succes.');
    }
}
