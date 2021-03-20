<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormEmail;
use App\Rules\NotPresent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => ['required', 'min:10'],
            'name' => ['required', 'min:3'],
            'message' => ['required', 'min:20'],
            'hp_contact_form' => [new NotPresent],
        ]);

        try {
            Mail::to($request->get('email'))->send(new ContactFormEmail(
                $request->get('name'),
                $request->get('email'),
                $request->get('message')
            ));
            return response()->json([
                'message' => 'Email sent!',
            ]);
        } catch (\Exception $exception) {
            Log::error($exception);
        }
    }
}
