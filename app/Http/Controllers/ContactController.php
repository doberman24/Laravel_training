<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
/*        $validation = $req->validate([
            'name' => 'required|max:30',
            'email' => 'required|max:50',
            'subject' => 'required|max:50',
            'message' => 'max:255'
        ]);
*/        dd($req->input('name'));
    }
}
