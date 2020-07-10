
    var choix;
    $("#chambre_batiment").on('change',function () {
           let nbchbre = $("#nbchbre").val().toString().padStart(4,'0');
           choix = $( "select option:selected" ).val().toString().padStart(3,'0')
           let num_ch =choix+'-'+nbchbre;
           alert ( num_ch)
           $("#chambre_Nchambre").attr('value',num_ch)    
    });

     $("#boursier").hide()
     $("#loger").hide()
     $("#address").hide()
     $("#etudiant_etre").on('change',function () {

       let option = $( "#etudiant_etre option:selected" ).val()
         if(option ==1){
              $("#boursier").show()
              $("#loger").show()
              $("#address").hide()
         }else if(option ==2){
              $("#boursier").show()
              $("#loger").hide()
              $("#address").hide()
         }else if(option ==3){
              $("#address").show()
              $("#loger").hide()
              $("#boursier").hide()
             
         }
     })
     

 //etudiant_boursier
 //etudiant_boursier
 //etudiant_loger
 //etudiant_address
 //etudiant_etre