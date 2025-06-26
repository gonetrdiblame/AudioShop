<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewsletterSubscribed;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validare email
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        // Trimiterea emailului de confirmare
        Mail::to($request->email)->send(new NewsletterSubscribed($subscriber));

        // Întoarcerea unui mesaj de succes
        return redirect()->back()->with('success', 'Te-ai abonat cu succes la newsletter!');
    }
}
