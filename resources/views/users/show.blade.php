<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Détails de l\'utilisateur') }}</div>

                    <div class="card-body">
                        <div>
                            <strong>Nom:</strong> {{ $user->nom }}
                        </div>
                        <div>
                            <strong>Prénom:</strong> {{ $user->prenom }}
                        </div>
                        <div>
                            <strong>Email:</strong> {{ $user->email }}
                        </div>
                        <div>
                            <strong>Numéro de téléphone:</strong> {{ $user->telephone }}
                        </div>
                        <!-- Ajoutez ici d'autres détails de l'utilisateur si nécessaire -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
