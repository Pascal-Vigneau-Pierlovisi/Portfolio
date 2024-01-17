<?php

// ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Ajoutez cette ligne pour utiliser la façade Mail
use Illuminate\Support\Facades\Log; // Ajoutez cette ligne pour utiliser la façade Log

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        // Dans votre méthode de contrôleur
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'messageContent' => $request->input('message'), // Renommé pour éviter la confusion avec l'objet $message
        ];

        try {
            Mail::send('emails.email', $data, function ($message) use ($data) {
                $message->from($data['email']);
                $message->to('pascal.vigneau.web@gmail.com'); // Remplacez par votre adresse email
                $message->subject('Contact from my portfolio');
            });

            // Redirection en cas de succès
            return redirect('/success');
        } catch (\Exception $e) {
            // Gestion des erreurs

            // Gestion des erreurs en loguant l'exception
            error_log('Email sending failed: ' . $e->getMessage());
            return redirect('/contact')->withErrors(['error' => 'Email could not be sent.']);
        }
    }
}

// ContactController.php
