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
        $request->validate([
            'name' => 'required|string|max:255',
            'phone-code' => 'required|string|max:10',
            'phone' => 'required|string|min:5|max:25',
            'message' => 'required|string|max:1000',
            'agreement' => 'accepted',
        ]);

        Mail::send('frontend.mail', [
                'name' => $request->get('name'),
                'phoneCode' => $request->get('phone-code'),
                'phone' => $request->get('phone'),
                'messageDetail' => $request->get('message'),
            ], function ($mail) use ($request) {
                $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $mail->subject(env('MAIL_SUBJECT'));
                $mail->to(env('MAIL_TO_ADDRESS'));
            }
        );

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
