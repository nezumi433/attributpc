

$('#exampleModal2').on("click", ".exampleModal2", function () {
     var heure = $(this).data('heure');
     var date = $(this).data('date');
     // Si tu utilises des input (Champs de texte)
     $(".modal-body #heure").val( heure );
     $(".modal-body #date").val( date ); 
      /* Si tu utilises autres choses que des input (p, span, div, etc), 
      utilises les methodes .text(), .html(), ou encore append. C'est selon ;) */
       $("#exampleModal2").modal('toggle'); //Permet d'afficher la boîte modal après avoir ajouté les informations
});