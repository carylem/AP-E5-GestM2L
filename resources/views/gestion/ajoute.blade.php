@extends ('layout.modele_pages_gest')
@section('content')


<div class = "post">
    <h1>Ajout Réservation</h1><br>

    <form name = "nouvelle_reservation" method = "POST" action = " {{route('reservation.store')}}">

        {{csrf_field()}}


        <label for="date"> Date : </label>

        <input name = "dateres" type ="date" > </input>


        <label for="heured"> Heure de début : </label>

        <input name = "heuredeb" type ="time" > </input>


        <label for="heuref"> Heure de fin : </label>

        <input name = "heurefin" type ="time" > </input>


        <label for="motif"> Motif : </label>

        <input name = "motif" type ="text" > </input>

        
        <label for="complements"> Compléments : </label>

        <input name = "compléments" type ="text" > </input>


        
        <label for="codec"> Code Client : </label>

        <input name = "codeclient" type ="char" > </input>

        
        <label for="nums"> Numéro de la salle: </label>

        <input name = "numsalle" type ="int" > </input> 

        <input name = "_token" type = "hidden" value = " {{csrf_token() }}" />


    </div>

<div style = "text-align:center;padding-top:50px">

    <input type = "submit" value ="Enregistrer"></input>

</div>
</form>
</div>
@endsection