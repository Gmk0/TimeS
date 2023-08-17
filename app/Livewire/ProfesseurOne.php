<?php

namespace App\Livewire;

use App\Models\Professeur;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web-layout')]
class ProfesseurOne extends Component
{

    public $professeur;
    public function mount($id)
    {


        $user = Professeur::where('id', $id)->exists();

        if (!$user) {

            return $this->redirect('/professeur');
        }

        $this->professeur = Professeur::find($id);
    }
    public function render()
    {
        return view('livewire.professeur-one');
    }
}