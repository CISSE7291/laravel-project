<?php
// <!-- resources/views/index.blade.php -->

@foreach ($apprenants as $apprenant)
    <p>{{ $apprenant->nom }} {{ $apprenant->prenom }}</p>
    <p>{{ $apprenant->email }}</p>
    <p>{{ $apprenant->telephone }}</p>
@endforeach
