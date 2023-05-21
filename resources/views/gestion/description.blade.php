<!--La page suit le modèle de page "modele_pages.blade.php"-->

@extends('layout.modele_pages_gest')

<!-- Commence ici le corps de la page -->
 
@section('content')

{{$maSalle->nom}}
{{$maSalle->capacite}}
{{$maSalle->equipements}}
{{$maSalle->services}}
{{$maSalle->batiment}}

<!-- termine le corps de la page -->

@endsection