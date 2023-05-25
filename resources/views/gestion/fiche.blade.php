<!--La page suit le modèle de page "modele_pages.blade.php"-->

@extends('layout.modele_pages_gest')

<!-- Commence ici le corps de la page -->
 
@section('content')

{{$Reserv->date}}
{{$Reserv->heuredeb}}
{{$Reserv->heurefin}}
{{$Reserv->motif}}
{{$Reserv->complements}}
{{$Reserv->codeClient}}
{{$Reserv->numéroSalle}}

<!-- termine le corps de la page -->

@endsection