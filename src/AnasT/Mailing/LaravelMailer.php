<?php namespace AnasT\Mailing;

use Illuminate\Database\Eloquent\Model;

abstract class LaravelMailer implements MailingInterface {

    /**
     * Laravel application.
     *
     * @var Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * Laravel Mailer.
     *
     * @var Illuminate\Mail
     */
    protected $mailer;

    /**
     *
     * Create a new LaravelMailer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->app = app();
        $this->mailer = $this->app['mailer'];
    }

    /**
     * Send email.
     *
     * @param Illuminate\Database\Eloquent\Model $receiver
     * @param string $subject
     * @param string $view
     * @param array $data
     */
    public function sendEmail(Model $receiver, $subject, $view, array $data = array())
    {
        $this->mailer->send($view, $data, function($message) use($receiver, $subject)
        {
            $message->to($receiver->email)
                    ->subject($subject);
        });
    }

}