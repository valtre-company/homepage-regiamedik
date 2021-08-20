<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class BaseMail extends Mailable
{
    use Queueable, SerializesModels, Dispatchable, InteractsWithQueue;

    protected $htmlFile;
    protected $data;
    protected $fromEmail;
    protected $fromName;
    protected $subjectText;

    /**
     * Create a new message instance.
     * 
     * @return void
     */
    public function __construct($htmlFile, $data, $fromEmail, $fromName, $subjectText)
    {   
        $this->htmlFile = $htmlFile;
        $this->data = $data;
        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
        $this->subjectText = $subjectText;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from($this->fromEmail, $this->fromName)
            ->subject($this->subjectText)
            ->view($this->htmlFile)
            ->with('data', $this->data);
    }
}
