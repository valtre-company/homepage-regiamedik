<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Inspections\Spam;
use App\Jobs\SendMailJob;
use App\Models\MainCarousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

class IndexController extends Controller
{
    //
    public function index () 
    {
        $attachments = MainCarousel::all();
        return view('welcome', compact('attachments'));
    }

    public function contactSend (Request $request)
    {
        try {            
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:10',
                'email' => 'required|email|min:6',
                'phone' => 'required|min:10|max:20',
                'message' => 'required|min:20',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->action([IndexController::class,'index'],'#contacto')
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', '¡Oops! Los campos no son válidos.');
            }
            
            $data = [ // data to render on view
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
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
                'Nuevo Mensaje en www.regiamedik.com', // subject text
                env('APP_ENV') === 'local' ? "giancarlozapata13@gmail.com" : env('NOTIFICATION_EMAIL') ,
            );
            return redirect('/#contacto')
                ->with('success', '¡Gracias por tu mensaje! En breve te responderémos.');            

        } catch (\Throwable $th) {
            Log::debug($th->getMessage());
            return redirect('/#contacto')
                ->with('success', '¡Gracias por tu mensaje! En breve te responderémos.');
        }
    }
}
