<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function changeLocale($locale): \Illuminate\Http\RedirectResponse
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function sendMail(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required_without:email',
            'email' => 'required_without:phone',
        ]);

        if ($validator->fails())
        {
            return response()->json(['status' => false]);
        }

        $to      = 'ggp.thailand@gmail.com';
        $subject = 'Обращение с контактной формы сайта gg-pharm.com';
        $message = "Имя пользователя: " . $request->get('name') . "<br>Номер телефона: " . $request->get('phone') . "<br>Электронная почта: " . $request->get('email');
        $headers = "From: noreply@gg-pharm.com\r\n"
            ."Content-type: text/html; charset=utf-8\r\n"
            ."X-Mailer: PHP mail script";

        mail($to, $subject, $message, $headers);
        return response()->json(['status' => true]);
    }
}
