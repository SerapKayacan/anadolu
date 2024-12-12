<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {

        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order','ASC')->get();
        $types = ServiceCategory::types();
        return view('frontend.contact ', [
            "serviceCategories" => $serviceCategories,
            "types" => $types
        ]);
    }
    public function submit(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone-code' => 'required|string|max:10',
            'phone' => 'required|string|regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',
            'message' => 'required|string|max:1000',
            'agreement' => 'accepted',
        ]);


        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->from('kayacan.serap@gmail.com', 'Your Website');
            $mail->to('kayacan.serap@gmail.com');
            $mail->subject('New Contact Form Submission');
            $mail->replyTo($validated['phone-code'] . ' ' . $validated['phone'], $validated['name']);
        });

        // Provide feedback to the user
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
