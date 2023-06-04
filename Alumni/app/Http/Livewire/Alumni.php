<?php

namespace App\Http\Livewire;

use App\Models\Students;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Alumni extends Component
{
    public function getAllStudents()
    {
        return Students::all();
    }
 
    public function deleteStudent($id)
    {
        Students::destroy($id);
        session()->flash('message', 'Student deleted successfully.');
    }

    public function render()
    {
        return view('livewire.alumni');
    }
    
}
