<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Students;
use RealRashid\SweetAlert\Facades\Alert;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentsWire extends Component
{
    use LivewireAlert;
    public $firstName, $middleName, $lastName, $gender, $year, $address;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'year' => 'required|numeric',
            'address' => 'required',
        ]);
    }

    public function saveStudent()
    {
        
        $this->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'year' => 'required|numeric',
            'address' => 'required',
        ]);

        $student = new Students();
        $student->firstName = $this->firstName;
        $student->middleName = $this->middleName;
        $student->lastName = $this->lastName;
        $student->gender = $this->gender;
        $student->year = $this->year;
        $student->address = $this->address;
    
        $student->save();
    
        
        $this->alert('success', $this->firstName.' '.$this->lastName.' has been added', ['toast' => false, 'position' => 'center']);

        $this->firstName = '';
        $this->middleName = '';
        $this->lastName = '';
        $this->gender = '';
        $this->year = '';
        $this->address = '';
    
    }

    public function getAllStudents()
    {
        return Students::all();
    }

    public function deleteStudent($id)
    {
        Students::destroy($id);
        $this->alert('success','Successfully deleted!');
    }
    

    public function render()
    {
        return view('livewire.students-wire');
    }
}
