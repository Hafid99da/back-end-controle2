<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Cour;
use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Paiement;
use App\Policies\CourPolicy;
use App\Policies\EnseignantPolicy;
use App\Policies\EtudiantPolicy;
use App\Policies\PaiementPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Etudiant::class => EtudiantPolicy::class,
        Enseignant::class => EnseignantPolicy::class,
        Cour::class => CourPolicy::class,
        Paiement::class => PaiementPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
