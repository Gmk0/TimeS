<?php

namespace App\Livewire;

use App\Models\Professeur as ModelsProfesseur;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class Professeur extends Component
{
    use WithPagination;

    public $query = '';


    protected $queryString = [

        'query',
    ];


    public function render()
    {
        return view('livewire.professeur', [
            'professeurs' => ModelsProfesseur::where('nom', 'like', '%' . trim($this->query) . '%')
                ->orWhere('prenom', 'like', '%' . trim($this->query) . '%')
                ->orWhere('postnom', 'like', '%' . trim($this->query) . '%')
                ->whereHas('courses', function ($q) {
                    $q->where('intitule', 'like', '%' . trim($this->query) . '%');
                })
                ->paginate(12),
        ]);
    }
}