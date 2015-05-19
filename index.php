<html>
<script src="jquery-1.11.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $("#button").click(function(){

if( $('input[name=celer]').is(':checked') ){
	$.celer = 1;
    alert("jQuery c'est super");
} else {
	$.celer = 0;
    alert("jQuery c'est autre chose");
}

        $.post("dozer.php",
        {
          force: $("#force").val(),
          ccm: $("#ccm").val(),
          nbmanacol: $("#nbmanacol").val(),
          celer: $.celer,
          endu: $("#endu").val()
        },
        function(data){
        	$("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
        	$("#resultat").html("relustat: " + data);
            $("#div1").load("dozer.php", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                alert("External content loaded successfully!");
            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
        });
    });

});
</script>

<body>
   
   <p>Indiquez les stats de votre créature</p>
   
	<br />
	
	
    <form action="" method="post">
        Force: <input type="number" name="force" maxlength="3" id="force"/>
        <br/>
        Endurrance: <input type="number" name="endu" maxlength="3" id="endu"/>
        <br/>
        Cout convertit de mana : <input type="number" name="ccm" maxlength="18" id="ccm"/>
        <br />
        Nombre de mana coloré : <input type="number" name="nbmanacol" id="nbmanacol"/>
        (2UURB=3)
        <br>
        Nombre de type de la carte : <input type="number" name="nbmanacol" id="nbtype"/>
        (créature-artefact=2)

       Avantages -
       <br>
        Capacité : <br>
        Célérité<input type="checkbox" name="celer" id="celer" /><br>
     	Vol<input type="checkbox" name="vol"/><br>
     	Initiative<input type="checkbox" name="init"/><br>
     	Contact mortel<input type="checkbox" name="contactm"/><br>
     	Pietinement<input type="checkbox" name="piet"/><br>
        <br>
        <br>
 		Malus -
       <br>

       	
        Capacité : <br>
        Defensseur<input type="checkbox" name="def"/><br><br>

        Ne pas pas bloquer<input type="checkbox" name="nobloc"/><br>
     	
     	Legendaire<input type="checkbox" name="legend"/><br>

     	Arrive engage<input type="checkbox" name="arrivtap"/><br>

     	Sacrifie au ciblage<input type="checkbox" name="illu"/><br>

     	Autre maul perso :<br>
     	(vous avez redige une capacite qui selon vous reduit la puissance de votre carte:
     	<br>.noter de 1 a 10: <input type="number" name="malusp" id="malusp"/>
     	

        <div id="button" bg-color="red"><b>Noter</b></div>
<br>
        <div id="resultat" value="Load Data">note</div>
    </form>
	
</body>
</html>

