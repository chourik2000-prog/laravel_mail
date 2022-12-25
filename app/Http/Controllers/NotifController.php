<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\NotifMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotifController extends Controller
{
   public function sendNotif()
   {
        $user = User::get();

        $notification = [
            'body' => 'Vous venez de recevoir une nouvelle notification',
            'test' => 'Vous êtes éligible pour le passe 2023',
            'url' => url('/'),
            'thanks' => 'Vous avez 12 jours pour soumettre vos dossiers'
        ];
    //   $user->notify(new NotifMail($notification));
       Notification::send($user, new NotifMail($notification));
       return "notification envoyé avec succès";
   }
}
