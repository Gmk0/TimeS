<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professeur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'postnom', 'prenom', 'fonction', 'description', 'image', 'titre'];




    public function  courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public  function search($query)
    {
        $query = trim($query);

        // On crée une nouvelle requête Eloquent
        $query = $this->query();

        // On ajoute une condition pour la recherche sur le nom ou prénom ou postnom
        $query->where('nom', 'like', "%{$query}%")
            ->orWhere('prenom', 'like', "%{$query}%")
            ->orWhere('postnom', 'like', "%{$query}%");

        // On utilise la relation `Courses` pour ajouter une condition sur l'intitulé des cours
        $query->whereHas('courses', function ($q) use ($query) {
            $q->where('intitule', 'like', "%{$query}%");
        });

        // On exécute la requête et on retourne les résultats
        return $query->get();
    }
}