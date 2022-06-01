<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function MessageView()
    {
        $contacts = Contact::all();

        return view('backend.message.message_view', compact('contacts'));

    } //end method
}
