<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // gestion usuarios y roles
        Gate::define('administrar-usuarios', function($user) {
            return $user->hasRol('admin');
        });

        Gate::define('editar-usuario', function($user) {
            return $user->hasRol('admin');
        });

        Gate::define('eliminar-usuario', function($user) {
            return $user->hasRol('admin');
        });

        // administracion hospital
        Gate::define('crear-hospital', function($user) {
            return $user->hasRol('admin');
        });

        Gate::define('editar-hospital', function($user) {
            return $user->hasRol('admin');
        });

        Gate::define('eliminar-hospital', function($user) {
            return $user->hasRol('admin');
        });

          // administracion medicos
          Gate::define('crear-medico', function($user) {
            return $user->hasRol('admin');
        });

          Gate::define('editar-medico', function($user) {
            return $user->hasRol('admin');
        });

        Gate::define('eliminar-medico', function($user) {
            return $user->hasRol('admin');
        });

          // administracion pacientes
          Gate::define('crear-paciente', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

          Gate::define('editar-paciente', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

        Gate::define('eliminar-paciente', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

          // administracion consultas
          Gate::define('crear-consulta', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);
        });

          Gate::define('editar-consulta', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);
        });

        Gate::define('eliminar-consulta', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);
        });

          // administracion salas
          Gate::define('crear-sala', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

          Gate::define('editar-sala', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

        Gate::define('eliminar-sala', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

          // administracion diagnostico
          Gate::define('crear-diagnostico', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

          Gate::define('editar-diagnostico', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

        Gate::define('eliminar-diagnostico', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

          // administracion laboratorios
          Gate::define('crear-laboratorio', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

          Gate::define('editar-laboratorio', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

        Gate::define('eliminar-laboratorio', function($user) {
            return $user->hasAnyRol(['admin','medico']);
        });

              // administracion servicios
        Gate::define('crear-servicio', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);            
        });

        Gate::define('editar-servicio', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);            
        });
    
        Gate::define('eliminar-servicio', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);
        });
    
            // administracion detdiag
        Gate::define('crear-detdiag', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);            
        });
      
        Gate::define('editar-detdiag', function($user) {
            return $user->hasAnyRol(['admin','medico','secretaria']);            
        });
          
        Gate::define('eliminar-detdiag', function($user) {
           return $user->hasAnyRol(['admin','medico','secretaria']);
        });
    }
}
