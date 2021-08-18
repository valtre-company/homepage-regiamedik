<?php

namespace App\Jobs;

use App\Mail\BaseMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendMailJob implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $htmlFile;
    protected $data;
    protected $fromEmail;
    protected $fromName;
    protected $subjectText;
    protected $toEmail;

    /**
     * Create a new job instance.
     *
     * @param string $htmlFile (file to render)
     * @param array $data (associative array)
     * @param string $fromEmail 
     * @param string $fromName
     * @param string $subjectText
     * @param string $toEmail (who's receiver)
     * 
     * @return void
     */
    public function __construct($htmlFile, $data, $fromEmail, $fromName, $subjectText, $toEmail)
    {
        $this->htmlFile = $htmlFile;
        $this->data = $data;
        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
        $this->subjectText = $subjectText;
        $this->toEmail = $toEmail;        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new BaseMail(
            $this->htmlFile, 
            $this->data, 
            $this->fromEmail, 
            $this->fromName, 
            $this->subjectText
        );
        Mail::to($this->toEmail)->send($email);
    }
}
