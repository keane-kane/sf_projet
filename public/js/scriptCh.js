$(document).ready(function(){
    var choix;
    $("#chambre_batiment").on('change',function () {
        $( "select option:selected" ).val()
           choix = $( "select option:selected" ).val()
           let random =Math.floor((Math.random() * 10000) + 1);
           let num_ch ='00'+choix+'-'+random;
           alert ( num_ch)
           $("#chambre_Nchambre").attr('value',num_ch)    
     });
     
 });
 