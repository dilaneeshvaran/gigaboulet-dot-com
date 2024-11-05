<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Contact; 
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMessageToEndUser;

use Illuminate\Support\MessageBag;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        // Créer un nouveau contact avec les données du formulaire
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $name = $request->name;
		$email = $request->email;
		$message= $request->message;

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
          ];
          $mailData = [
            'url' => 'https://afrofrenchtouch.com/',
            ];
          $send_mail = "contact@afrofrenchtouch.com";
		
          Mail::to($send_mail)->send(new SendMail($name,$email,$message,$mailData));

          $senderMessage = "thanks for your message , we will reply you in later";
          Mail::to( $email)->send(new SendMessageToEndUser($name,$senderMessage,$mailData));
          
        // Enregistrez le contact en base de données
        $contact->save();

        // Redirection ou réponse à l'utilisateur
        return redirect('/contact')->with('status', 'Votre message a été envoyé avec succès!');
    }


    public function storeEmail(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'email' => 'required|email|unique:emails|max:255',
        ]);
    
        // Créer un nouveau contact avec les données du formulaire
        $email = new Email();
        
        $email->email = $request->input('email');
       
            // Enregistrez le contact en base de données
            $email->save();
            
            // Notification de succès
            notify()->success('Succès, veuillez vérifier votre courrier électronique et cliquer sur le lien de confirmation');
        // Redirection ou réponse à l'utilisateur
        return back();
    }
    
    
}