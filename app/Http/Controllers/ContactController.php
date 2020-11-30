<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-message')->with('success', 'Данные успешно добавлены');
    }

    public function all_data()
    {
        //Вывод всех записей из базы данных
        return view('messages', ['data' => Contact::all()]);

        //$contact = new Contact();
        //Вывод всех записей в произвольном порядке
        //return view('messages', ['data' => $contact->inRandomOrder()->get()]);

        //Вывод всех записей отсортированных по 'name'
        //return view('messages', ['data' => $contact->orderBy('name', 'asc')->get()]);

        //Вывод всех записей отсортированных по 'name' и не больше 2-х записей
        //return view('messages', ['data' => $contact->orderBy('name', 'asc')->take(3)->get()]);

        //Вывод записей c полем 'name = Дима'
        //return view('messages', ['data' => $contact->where('name', '=', 'Дима')->get()]);

        //Вывод записей c полем 'name <> Андрей'
        //return view('messages', ['data' => $contact->where('name', '<>', 'Андрей')->get()]);

//----------------------------------------------------------------------------------
        //Вывод по одной записи

        //Вывод 3-ей записи
        //return view('messages', ['data' => $contact->find(3)]);

        //Вывод произвольной записи
        //return view('messages', ['data' => $contact->inRandomOrder()->first()]);
    }
}
