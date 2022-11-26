<?php

namespace App\Http\Livewire;

use Livewire\Component;

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

        dd("validated");
    }
}
