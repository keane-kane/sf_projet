
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
     $("#habite").hide()
     $("#etudiant_etre").on('change',function () {

       let option = $( "#etudiant_etre option:selected" ).val()
         if(option ==1){
              $("#boursier").show()
              $("#habite").show()
              $("#loger").hide()
         }else if(option ==2){
              $("#boursier").show()
              $("#loger").hide()
              $("#habite").hide()
         }else if(option ==3){
              $("#loger").show()
              $("#boursier").hide()
              $("#habite").hide()
         }
     })
     

 //etudiant_boursier
 //etudiant_boursier
 //etudiant_loger
 //etudiant_habite
 //etudiant_etre