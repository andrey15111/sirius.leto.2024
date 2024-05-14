<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SupportController extends Controller
{
    public function showForm()
    {
        return view('support');
    }

    public function sendMessage(Request $request)
    {
        // Логика отправки сообщения (например, отправка на почту)

        return redirect('/support')->with('success', 'Ваше сообщение отправлено в техподдержку.');
    }
}
