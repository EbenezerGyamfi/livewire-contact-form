<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function saveContact(){

        $this->validate();

        $data  = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];

        Mail::to('ebenezer.gyamfi@regent.edu.gh')->send(new ContactFormMailable($data));

        session()->flash('message','Message sent successfully');

        $this->reset();





    }
}
