<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Titre</title>

<!-- FONT -->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<style>
/* WRAPPER GLOBALE */
body { 
	width: 100%; 
	background-color: lightgrey;	
	margin: 0; 
	padding: 0; 
	font-family: 'Lato', sans-serif;
}
.wrapper { 
	width: 1100px;	
	height: 1000px; 
	background-color: white; 
	position: absolute;	
	margin: 0 auto;	
	padding: 0;	
	left: 0; bottom: 0; right: 0; top: 30px; 
	box-shadow: 0px 1px 2px 2px rgba(0,0,0,.1);
}
.wrapperinside {
	margin:2%;
}
/* TITLE */
#title {
	width: 100%;
	margin-bottom: 15px;
	padding-top: 15px;
	padding-bottom: 30px;
	border-bottom: 2px solid rgba(0,0,0,.1);
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	text-transform: uppercase;
}
.sub {
	font-size: 18px;
	font-weight: 700;
}
#caracrea {
	display: -webkit-flex;
	display: flex;

	-webkit-flex-direction: row;
	flex-direction: row;

	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;

	-webkit-justify-content: space-between; /* Safari */
    justify-content: space-between;

    -webkit-align-content: stretch; /* Safari */
    align-content:         stretch;

}
#caracrea p {
  width: 20%;
  text-align: center;
}
#caracrea input {
  margin-top: 15px;
  width: 75%;
}
#caracrea input {
  margin-top: 15px;
  width: 25%;
  height: 40px;
  text-align: center;
}
select {
  width: 90%;
  height: 40px;
  margin-left: 3%;
  font-size: 16px;
  margin-bottom: 15px;
}
.plus {
  width: 40px;
  height: 40px;
  margin-left: 32px;
  margin-top: 10px;
}
.plus img {
  height: 100%;
  margin-top: -10px;
}
.remove {
  height: 30px;
  width: 30px;
  position: absolute;
  left: 93%;
  margin-top: -50px;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-image: url('data:image/png;base64,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');  
}
</style>
<body>
<div class="wrapper">
<div class="wrapperinside">
	<p id="title">Équilibreur de Carte Magic the Gathering</p>
   	<p class="sub">Indiquez les stats de votre créature :</p>
    <form action="" method="post">
    <div id="caracrea">
        <p>Force: <br> <input placeholder="0" type="number" name="force" maxlength="3" id="force"/></p>
        <p>Endurance:<br> <input placeholder="0" type="number" name="endu" maxlength="3" id="endu"/></p>
        <p>Cout convertit de mana:<br><input placeholder="0" type="number" name="ccm" maxlength="18" id="ccm"/></p>
        <p>Nombre de mana coloré:<br> <input placeholder="0" type="number" name="nbmanacol" id="nbmanacol"/></p>
        <p>Nombre de type de la carte:<br><input placeholder="0" type="number" name="nbmanacol" id="nbtype"/></p>
	</div>
       <p class="sub">Avantages</p> 
       <div id="avantage">
         <select name="" placeholder="Capacités bonus" id="">
         	<option name="celer" id="celer" value="">Célérité</option>
         	<option name="vol" value="">Vol</option>
         	<option name="init" value="">Initiative</option>
         	<option name="contactm" value="">Contact Mortel</option>
         	<option name="piet" value="">Pietinement</option>
         </select>
      </div>
       <div class="plus"><img src="data:image/png;base64,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"/></div>

 		<p class="sub">Malus</p>
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


</div>
</div>


<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  /* ADD AND DELETE */
	$(".plus").click(function() {
    $("#avantage").append('<select name="" placeholder="Capacités bonus" id=""><option name="celer" id="celer" value="">Célérité</option><option name="vol" value="">Vol</option><option name="init" value="">Initiative</option><option name="contactm" value="">Contact Mortel</option><option name="piet" value="">Pietinement</option></select><div class="remove"></div>');
	});
  $("#avantage").on( "click", "div", function(){
    $(this).closest("div").remove();
    $(this).find("select").css("display", "none");
  });
  // $("#avantage").on( "click", "select", function(){
  //   $(this).closest("select").css("display", "none");
  //   console.log("fire");
  // });


  $("#button").click(function(){
if( $('input[name=celer]').is(':checked') ){
	$.celer = 1;
    alert("jQuery ok");
} else {
	$.celer = 0;
    alert("jQuery ok 0");
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

</body>
</html>

