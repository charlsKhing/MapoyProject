<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumni;
use RealRashid\SweetAlert\Facades\Alert;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class AlumniWire extends Component
{
    public $firstName;
    public $middleName;
    public $lastName;
    public $gender;
    public $year;
    public $address;

    public function saveAlumni()
    {
        $validatedData = $this->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'year' => 'required|numeric',
            'address' => 'required',
        ]);

        $alumni = Alumni::create([
            'firstName' => $this->firstName,
            'middleName' => $this->middleName,
            'lastName' => $this->lastName,
            'gender' => $this->gender,
            'year' => $this->year,
            'address' => $this->address,
        ]);
        
        Alert::success('Success', 'Data has been saved successfully.');

        $this->firstName = '';
        $this->middleName = '';
        $this->lastName = '';
        $this->gender = '';
        $this->year = '';
        $this->address = '';
    }

    public function render()
    {
        return view('livewire.alumni-wire');
    }
}
