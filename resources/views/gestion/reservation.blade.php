<!--La page suit le modèle de page "modele_pages.blade.php"-->
@extends('layout.modele_pages_gest')

<!-- Commence ici le corps de la page -->
@section('content')
<article>
  <header class="section background-primary">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Les réservations des salles</h1>
    </div>
  </header>


  <section class="section background-white">


  <div class="line text-center">

  <div class="s-12 m-12 l-10 margin-bottom-30 ">
  <a class="button button-black-stroke text-size-20 margin-bottom-30 " href="{{route('reservation.create')}}">Nouvelle réservation</a>
  </div>

            <div class="margin">


            @foreach($lesreservations as $reservation)



              <div class="s-12 m-12 l-5 margin-bottom-30 ">
                <div class="padding-2x background-dark" >
                  <!--<i class="icon-sli-shield icon3x text-white margin-bottom-30"></i>-->
                  <h2 class="text-thin"><a href="{{route('reservation.show',$reservation)}}">Reservation {{$reservation->id}} </a>: le {{$reservation->dateres}},de {{$reservation->heuredeb}}, à {{$reservation->heurefin}},{{$reservation->motif}},{{$reservation->codeclient}}</h2>

                </div>
              </div>
            @endforeach

            </div>
        </div>
 </section> 
      </article>
<!-- termine le corps de la page -->
@endsection