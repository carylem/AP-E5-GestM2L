@extends ('layout.modele_pages_gest')
@section('content')


<div class = "post">
    <h1> Ajout d'une nouvelle salle</h1><br>

    <form name = " nouvelle_salle " method = "POST" action = " {{route('salle.store')}}">

        {{csrf_field()}}


        <label for="num"> Numero Salle : </label>

        <input name = "numsalle" type ="integer" > </input>


        <label for="nom"> Nom : </label>

        <input name = "nom" type ="text" > </input>


        <label for="capacite"> Capacité : </label>

        <input name = "capacite" type ="integer" > </input>


        <label for="equipement"> Equipements : </label>

        <input name = "equipement" type ="varchar" > </input>

         <label for="service"> Services : </label>

        <input name = "service" type ="text" > </input>


        <label for="batiment"> Batiments : </label>

        <input name = "batiment" type ="text" > </input>

        <input name = "_token" type = "hidden" value = " {{csrf_token() }}" />


    </div>

<div style = "text-align:center;padding-top:50px">

    <input type = "submit" value ="Enregistrer"></input>

</div>
</form>
</div>
@endsection

