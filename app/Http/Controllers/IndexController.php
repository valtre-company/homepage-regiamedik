<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Inspections\Spam;
use App\Jobs\SendMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    //
    public function index () 
    {
        return view('welcome');
    }

    public function contactSend (Request $request)
    {
        try {            
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:10',
                'email' => 'required|min:6',
                'phone' => 'required|min:10|max:20',
                'message' => 'required|min:20',
                'direction' => 'required|min:20',
            ]);

            if ($validator->fails()) {
                return redirect('/#appointment-form')
                    ->with('error', '¡Oops! Los datos no son válidos.');
            }
            
            $data = [ // data to render on view
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'direction' => $request->direction,
                'date' => (new Carbon)->isoFormat('D/M/YYYY H:m'),
            ];
            
            /** Validate spam */
            resolve(Spam::class)->detect( request('message') );
            resolve(Spam::class)->detect( request('email') );

            SendMailJob::dispatch(
                'emails.contact', // view
                $data,
                env('MAIL_FROM_ADDRESS'), // from email
                env('MAIL_FROM_NAME'), // from name
                'Nuevo Mensaje en Hapec', // subject text
                $request->email, // mail recipient
            );

            return redirect()
                ->action([IndexController::class,'index'])
                ->with('success', '¡Gracias por tu mensaje! En breve te responderémos.');            

        } catch (\Throwable $th) {
            return redirect()
                ->action([IndexController::class,'index'])
                ->with('success', '¡Gracias por tu mensaje! En breve te responderémos.');
        }
    }
}
