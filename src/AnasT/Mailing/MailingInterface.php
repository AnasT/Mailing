<?php namespace AnasT\Mailing;

use Illuminate\Database\Eloquent\Model;

interface MailingInterface {

    /**
     * Send email.
     *
     * @param Illuminate\Database\Eloquent\Model $receiver
     * @param string $subject
     * @param string $view
     * @param array $data
     */
    public function sendEmail(Model $receiver, $subject, $view, array $data = array());

}