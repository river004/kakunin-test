<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use APP\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tell',
            'address',
            'building',
            'content',
            'detail']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tell',
            'address',
            'building',
            'content',
            'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function login()
    {
        return view('login');
    }
}
