<html>
<head>

 <link rel="icon" type= "imagem/png" href="images/minilogo.png" >
 <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Unidos J.R.F.C</title>


<link rel="stylesheet" href="css/bootstrap.css">
<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<!-- <Arquivos CSS> -->
<link rel="stylesheet" href="css/editor.css"> 
<link rel="stylesheet" href="css/navbar.css"> 
<link rel="stylesheet" href="css/news.css"> 
<link rel="stylesheet" href="css/login.css"> 
<link rel="stylesheet" href="css/loading.css">

<!-- </Arquivos CSS> -->


<!-- <Carregamento> -->
<!--<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"> </div>
</div>
<!-- </Carregamento> -->

</head>

<body>

<section id="menu">
<BR>
<center>
<ul class="Move">
  <li><a href="#" onclick="OpenInicio(); " >Inicio</a></li>
  <li><a href="#" onclick="OpenSobre();">Quem Somos</a></li>
  <li><a href="#" onclick="OpenManual();">Manual do Usuário</a></li>
  <li><a href="#" onclick="OpenCampeonatos();">Campeonatos</a></li>
    <li><a href="#" onclick="OpenJogos();">Jogos</a></li>
  <li><a href="#" onclick="OpenTrofeus();">Galeria de Troféus</a></li>
  <li><a href="#" onclick="OpenNoticias();">Notícias</a></li>
  <li><a href="#" onclick="OpenVideos();">Vídeos</a></li>
  <li><a href="#" onclick="OpenCadastro();">Ficha de cadastro</a></li>
</ul>
</center>
<BR>
|</section>

<?php require_once"conecta.php"; 
include "alterar.php";
?>

<!-- <Parte Inicial> -->
<section id="inicioEditor" >

<div classs="letters">
<center> <H1> <?php echo $InicioTexto1; ?> </H1> <br> <H1> Alterar texto de inicio </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioTexto1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button', $_POST)) { 
$AltInicioTexto1= $_POST["InicioTexto1"];
$sql="UPDATE inicio SET Texto1='$AltInicioTexto1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql");
header('Location: editor.php');
} 



?>

<div classs="letters">
<center> <img src="<?php echo $InicioImg1; ?>" class = "img1"> <br> <H1> Alterar 1º imagem do carrossel </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioImg1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button1"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button1', $_POST)) { 
$AltInicioImg1= $_POST["InicioImg1"];
$sql1="UPDATE inicio SET Img1='$AltInicioImg1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql1");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $InicioImg2; ?>" class = "img1"> <br> <H1> Alterar 2º imagem do carrossel </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioImg2"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button2"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button2', $_POST)) { 
$AltInicioImg2= $_POST["InicioImg2"];
$sql2="UPDATE inicio SET Img2='$AltInicioImg2' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql2");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $InicioImg3; ?>" class = "img1"> <br> <H1> Alterar 3º imagem do carrossel </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioImg3"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button3"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button3', $_POST)) { 
$AltInicioImg3= $_POST["InicioImg3"];
$sql3="UPDATE inicio SET Img4='$AltInicioImg3' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql3");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $InicioImg4; ?>" class = "img1"> <br> <H1> Alterar 4º imagem do carrossel </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioImg4"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button4"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button4', $_POST)) { 
$AltInicioImg4= $_POST["InicioImg5"];
$sql4="UPDATE inicio SET Img4='$AltInicioImg4' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql4");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $InicioImg5; ?>" class = "img1"> <br> <H1> Alterar 5º imagem do carrossel </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioImg5"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button5"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button5', $_POST)) { 
$AltInicioImg5= $_POST["InicioImg5"];
$sql5="UPDATE inicio SET Img5='$AltInicioImg5' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql5");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $InicioImg6; ?>" class = "img1"> <br> <H1> Alterar 6º imagem do carrossel </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioImg6"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button6"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button6', $_POST)) { 
$AltInicioImg6= $_POST["InicioImg6"];
$sql6="UPDATE inicio SET Img6='$AltInicioImg6' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql6");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $InicioLogo; ?>" class = "logo"> <br> <H1> Alterar logo do inicio </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioImg7"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button7"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button7', $_POST)) { 
$AltInicioImg7= $_POST["InicioImg6"];
$sql7="UPDATE inicio SET Logo='$AltInicioImg7' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql7");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $InicioLink1; ?>" </H1> <br> <H1> Alterar link do Facebook </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioLink1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button8"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button8', $_POST)) { 
$AltInicioLink1= $_POST["AltInicioLink1"];
$sql8="UPDATE inicio SET Link1='$AltInicioLink1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql8");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $InicioLink2; ?>" </H1> <br> <H1> Alterar link do X </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioLink2"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button9"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button9', $_POST)) { 
$AltInicioLink2= $_POST["AltInicioLink2"];
$sql9="UPDATE inicio SET Link2='$AltInicioLink2' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql9");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $InicioLink3; ?>" </H1> <br> <H1> Alterar link do Facebook </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioLink3"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button10"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button10', $_POST)) { 
$AltInicioLink3= $_POST["AltInicioLink3"];
$sql10="UPDATE inicio SET Link3='$AltInicioLink3' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql10");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $InicioLink4; ?>" </H1> <br> <H1> Alterar link do Whatsapp </H1>  <form method="POST" action="editor.php"> <input type="text" name="InicioLink4"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button11"> Alterar </button> </p> </form> <center>

<?php 
 if(array_key_exists('button11', $_POST)) { 
$AltInicioLink4= $_POST["AltInicioLink4"];
$sql11="UPDATE inicio SET Link4='$AltInicioLink4' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql11");
header('Location: editor.php');
} 

?>

</section>


<!-- <Parte Sobre> -->
<section id="SobreEditor" >

<div classs="letters">
<center> <H1> <?php echo $SobreTitulo1; ?> </H1> <br> <H1> Alterar Titulo </H1>  <form method="POST" action="editor.php"> <input type="text" name="SobreTitulo1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button01"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('button01', $_POST)) { 
$AltSobreTitulo1= $_POST["SobreTitulo1"];
$sql01="UPDATE Sobre SET Titulo2='$AltSobreTitulo1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql01");
header('Location: editor.php');
} 


?>

<div classs="letters">
<center> <H1> <?php echo $SobreTexto1; ?> </H1> <br> <H1> Alterar 1º texto </H1>  <form method="POST" action="editor.php"> <input type="text" name="SobreTexto1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button02"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('button02', $_POST)) { 
$AltSobreTexto1= $_POST["SobreTexto1"];
$sql02="UPDATE Sobre SET Texto1='$AltSobreTexto1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql02");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $SobreTexto2; ?> </H1> <br> <H1> Alterar 2º texto </H1>  <form method="POST" action="editor.php"> <input type="text" name="SobreTexto2"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button03"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('button03', $_POST)) { 
$AltSobreTexto2= $_POST["SobreTexto2"];
$sql03="UPDATE Sobre SET Texto2='$AltSobreTexto2' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql03");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $SobreImg1; ?>" class = "img"> <br> <H1> Alterar imagem </H1>  <form method="POST" action="editor.php"> <input type="text" name="SobreImg1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button04"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('button04', $_POST)) { 
$AltSobreImg1= $_POST["SobreImg1"];
$sql3="UPDATE inicio SET Img4='$AltSobreImg1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sql3");
header('Location: editor.php');
} 

?>

</section>

<!-- <Parte Manual> -->
<section id="ManualEditor" >

<div classs="letters">
<center> <img src="<?php echo $ManualImg1; ?>" class = "img"> <br> <H1> Alterar imagem  </H1>  <form method="POST" action="editor.php"> <input type="text" name="ManualImg1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonA1"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonA1', $_POST)) { 
$AltManualImg1= $_POST["ManualImg1"];
$sqlA1="UPDATE Manual SET Img1='$AltManualImg1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlA1");
header('Location: editor.php');
} 


?>

<div classs="letters">
<center> <img src="<?php echo $ManualImg2; ?>" class = "img"> <br> <H1> Alterar imagem  </H1>  <form method="POST" action="editor.php"> <input type="text" name="ManualImg2"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonA2"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonA2', $_POST)) { 
$AltManualImg2= $_POST["ManualImg2"];
$sqlA2="UPDATE Manual SET Img2='$AltManualImg2' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlA2");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $ManualImg3; ?>" class = "img"> <br> <H1> Alterar imagem  </H1>  <form method="POST" action="editor.php"> <input type="text" name="ManualImg3"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonA3"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonA3', $_POST)) { 
$AltManualImg3= $_POST["ManualImg3"];
$sqlA3="UPDATE Manual SET Img3='$AltManualImg3' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlA3");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $ManualImg4; ?>" class = "img"> <br> <H1> Alterar imagem </H1>  <form method="POST" action="editor.php"> <input type="text" name="ManualImg4"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonA4"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonA4', $_POST)) { 
$AltManualImg4= $_POST["ManualImg4"];
$sqlA4="UPDATE Manual SET Img4='$AltManualImg4' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlA4");
header('Location: editor.php');
} 
?>

<div classs="letters">
<center> <img src="<?php echo $ManualImg5; ?>" class = "img"> <br> <H1> Alterar imagem </H1>  <form method="POST" action="editor.php"> <input type="text" name="ManualImg5"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonA5"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonA5', $_POST)) { 
$AltManualImg5= $_POST["ManualImg5"];
$sqlA5="UPDATE Manual SET Img5='$AltManualImg5' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlA5");
header('Location: editor.php');
} 
?>

<div classs="letters">
<center> <img src="<?php echo $ManualImg6; ?>" class = "img"> <br> <H1> Alterar imagem </H1>  <form method="POST" action="editor.php"> <input type="text" name="ManualImg6"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonA6"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonA6', $_POST)) { 
$AltManualImg6= $_POST["ManualImg4"];
$sqlA6="UPDATE Manual SET Img6='$AltManualImg6' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlA6");
header('Location: editor.php');
} 
?>
</section>


<!-- <Parte Campeonatos> -->
<section id="CampeonatosEditor" >


<div classs="letters">
<center> <img src="<?php echo $CampeonatosImg1; ?>" class = "img"> <br> <H1> Alterar 1º logo </H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosImg1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB1"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB1', $_POST)) { 
$AltCampeonatosImg1= $_POST["CampeonatosImg1"];
$sqlB1="UPDATE Manual SET Img1='$AltCampeonatosImg1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB1");
header('Location: editor.php');
} 


?>

<div classs="letters">
<center> <H1> <?php echo $CampeonatosTitulo1; ?> </H1>  <br> <H1> Alterar 1º nome</H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosTitulo1"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB2"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB2', $_POST)) { 
$AltCampeonatosTitulo1= $_POST["CampeonatosTitulo1"];
$sqlB2="UPDATE Manual SET Titulo1='$AltCampeonatosTitulo1' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB2");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $CampeonatosImg2; ?>" class = "img"> <br> <H1> Alterar 2º logo </H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosImg2"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB3"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB3', $_POST)) { 
$AltCampeonatosImg2= $_POST["CampeonatosImg2"];
$sqlB3="UPDATE Manual SET Img2='$AltCampeonatosImg2' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB3");
header('Location: editor.php');
} 


?>

<div classs="letters">
<center> <H1> <?php echo $CampeonatosTitulo2; ?> </H1>  <br> <H1> Alterar 2º nome</H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosTitulo2"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB4"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB4', $_POST)) { 
$AltCampeonatosTitulo2= $_POST["CampeonatosTitulo2"];
$sqlB4="UPDATE Manual SET Titulo2='$AltCampeonatosTitulo2' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB4");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $CampeonatosImg3; ?>" class = "img"> <br> <H1> Alterar 3º logo </H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosImg3"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB5"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB5', $_POST)) { 
$AltCampeonatosImg3= $_POST["CampeonatosImg3"];
$sqlB5="UPDATE Manual SET Img3='$AltCampeonatosImg3' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB5");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $CampeonatosTitulo3; ?> </H1>  <br> <H1> Alterar 3º nome</H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosTitulo3"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB6"> Alterar </button> </p> </form> </center> <br>
 
<?php 
 if(array_key_exists('buttonB6', $_POST)) { 
$AltCampeonatosTitulo3= $_POST["CampeonatosTitulo3"];
$sqlB6="UPDATE Manual SET Titulo3='$AltCampeonatosTitulo3' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB6");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $CampeonatosImg4; ?>" class = "img"> <br> <H1> Alterar 4º logo </H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosImg4"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB7"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB7', $_POST)) { 
$AltCampeonatosImg4= $_POST["CampeonatosImg4"];
$sqlB7="UPDATE Manual SET Img4='$AltCampeonatosImg4' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB7");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $CampeonatosTitulo4; ?> </H1>  <br> <H1> Alterar 4º nome</H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosTitulo4"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB8"> Alterar </button> </p> </form> </center> <br>
 
<?php 
 if(array_key_exists('buttonB7', $_POST)) { 
$AltCampeonatosTitulo4= $_POST["CampeonatosTitulo4"];
$sqlB8="UPDATE Manual SET Titulo3='$AltCampeonatosTitulo4' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB8");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $CampeonatosImg5; ?>" class = "img"> <br> <H1> Alterar 5º logo </H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosImg5"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB9"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB9', $_POST)) { 
$AltCampeonatosImg5= $_POST["CampeonatosImg5"];
$sqlB9="UPDATE Manual SET Img5='$AltCampeonatosImg5' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB9");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $CampeonatosTitulo5; ?> </H1>  <br> <H1> Alterar 5º nome</H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosTitulo5"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB10"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB10', $_POST)) { 
$AltCampeonatosTitulo5= $_POST["CampeonatosTitulo5"];
$sqlB10="UPDATE Manual SET Titulo5='$AltCampeonatosTitulo5' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB10");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <img src="<?php echo $CampeonatosImg6; ?>" class = "img"> <br> <H1> Alterar 6º logo </H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosImg6"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonB11"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB11', $_POST)) { 
$AltCampeonatosImg6= $_POST["CampeonatosImg6"];
$sqlB11="UPDATE Manual SET Img6='$AltCampeonatosImg6' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB11");
header('Location: editor.php');
} 

?>

<div classs="letters">
<center> <H1> <?php echo $CampeonatosTitulo6; ?> </H1>  <br> <H1> Alterar 6º nome</H1>  <form method="POST" action="editor.php"> <input type="text" name="CampeonatosTitulo6"/>   </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="button12"> Alterar </button> </p> </form> </center> <br>

<?php 
 if(array_key_exists('buttonB12', $_POST)) { 
$AltCampeonatosTitulo6= $_POST["CampeonatosTitulo6"];
$sqlB12="UPDATE Manual SET Titulo6='$AltCampeonatosTitulo6' WHERE Cod=1";
$res2=mysqli_query($conexao,"$sqlB12");
header('Location: editor.php');
} 

?>
</section>

<!-- <Parte Campeonatos> -->
<section id="TrofeusEditor" >


<div class="letters">
<center> <H1> Escreva um link para inserir </H1> <br> 
<form method="POST" action="editor.php"> <input type="text" name="TrofeusImg1" /> </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonC1"> Inserir </button> </p> </form> </center>  <br> <br> <br> <br>  

<div class="letters">
<center> <br> 

<H1> Selecione um troféu para excluir </H1>

<form method="POST" > 
<select class="custom-select" name="taskOption" >
	
	<?php 
	$sqlCod="SELECT * FROM Trofeus ORDER BY Cod";
	$res2=mysqli_query($conexao, "$sqlCod");
	while($registro=mysqli_fetch_row($res2))
	{
	
	$codigo=$registro[0];

	echo (" <option value='$codigo'> $codigo </option>");
	
	}
	?> 

</select> </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonC2"> Excluir </button> </p> </form> </center> <br> <br> <br> <br>  
<?php 

echo (" <center> <H1> Troféis Atuais </H1> </center>");

$sql1="SELECT Img1 FROM Trofeus ORDER BY Cod";
$sql2="SELECT Cod FROM Trofeus ORDER BY Cod";
$res=mysqli_query($conexao, "$sql1");
$res2=mysqli_query($conexao, "$sql2");

while($registro=mysqli_fetch_row($res) and $registro2=mysqli_fetch_row($res2))
{
	
$TrofeuImg=$registro[0];
$TrofeuCod=$registro2[0];

echo("<center> <H1> Troféu $TrofeuCod </H1> <BR> </center> ");
echo ("  <center> <img src='$TrofeuImg' alt='Avatar' class='img' >");
}

if(array_key_exists('buttonC1', $_POST)) { 
$AltTrofeusImg1= $_POST["TrofeusImg1"];
$sqlFix="ALTER TABLE trofeus AUTO_INCREMENT = 0";
$sqlC1="insert into Trofeus (Img1) values ('$AltTrofeusImg1')";
$res2=mysqli_multi_query($conexao, "$sqlC1", "$sqlFix");
header('Location: editor.php');			
}

?>

<?php

if(array_key_exists('buttonC2', $_POST)) { 
$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
$sqlFix="ALTER TABLE trofeus AUTO_INCREMENT = 0";
$sqlC2="delete from Trofeus where cod=$option";
$res2=mysqli_query($conexao, "$sqlC2", "$sqlFix");
header('Location: editor.php#');			
}

?>

</section>


<!-- <Parte Campeonatos> -->
<section id="NoticiasEditor" >

<?php 

echo ("  
      <center> 
	  
	  <H1> Inserir Imagem</H1>
      <input type='text' name='NoticiasImg'/> <BR> <BR>

	  <H1> Inserir Título</H1>
	  <input type='text' name='NoticiasTitulo'/> <BR> <BR>

	  <H1> Inserir Texto</H1>
      <input type='text' name='NoticiasTexto'/> <BR> <BR>
	  
	  <H1> Inserir Ícone</H1>
      <input type='text' name='NoticiasIcone'/> <BR> <BR>
	  
	  <H1> Inserir Legenda</H1>
      <input type='text' name='NoticiasLegenda'/> <BR> <BR>
	  
	  <H1> Inserir Data</H1>
      <input type='text' name='NoticiasData'/> <BR> <BR>
	  
	

	  <BR> <button type='submit' value='Alterar' class='btnStyle' name='buttonD1'> Inserir </button> </center> <BR> <BR>
  ");
  
	if(array_key_exists('buttonD1', $_POST)) { 
	$NoticiasImg= $_POST["NoticiasImg"];
	$NoticiasTitulo= $_POST["NoticiasTitulo"];
	$NoticiasTexto= $_POST["NoticiasTexto"];
	$NoticiasIcone= $_POST["NoticiasIcone"];
	$NoticiasLegenda= $_POST["NoticiasLegenda"];
	$NoticiasData= $_POST["NoticiasData"];
	
	$sqlFix="ALTER TABLE trofeus AUTO_INCREMENT = 0";
	$sqlD1="INSERT INTO noticias (Titulo, Texto, Img, Icon, Legenda, Dia) VALUES ('$NoticiasImg', '$NoticiasTitulo', '$NoticiasTexto', '$NoticiasIcone', '$NoticiasLegenda', '$NoticiasData')";
	$res2=mysqli_query($conexao, "$sqlD1", "$sqlFix");
	header('Location: editor.php#');			
}
?>
<center>
<H1> Selecione uma notícia para excluir </H1> <BR>

<form method="POST" > 
<select class="custom-select" name="taskOption" >
	
	<?php 
	$sqlCod="SELECT * FROM Noticias ORDER BY Cod";
	$res2=mysqli_query($conexao, "$sqlCod");
	while($registro=mysqli_fetch_row($res2))
	{
	
	$codigo=$registro[0];

	echo (" <option value='$codigo'> $codigo </option>");
	
	}
if(array_key_exists('buttonD2', $_POST)) { 
$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
$sqlFix="ALTER TABLE Noticias AUTO_INCREMENT = 0";
$sqlD2="delete from Noticias where cod=$option";
$res2=mysqli_query($conexao, "$sqlD2", "$sqlFix");
header('Location: editor.php#');			
}
	
	?> 

</select> </center> <br>
</div> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonD2"> Excluir </button> </p> </form> </center> <br> <br> <br> <br> 

<?php
$sql1="SELECT * FROM Noticias ORDER BY Cod";
$res=mysqli_query($conexao, "$sql1");

echo (" <center> <H1> Notícias Atuais </H1> </center> <br> <br>");

while($registro=mysqli_fetch_row($res))
{

$NoticiaCampo0=$registro[0];	
$NoticiaCampo1=$registro[1];
$NoticiaCampo2=$registro[2];
$NoticiaCampo3=$registro[3];
$NoticiaCampo4=$registro[4];
$NoticiaCampo5=$registro[5];
$NoticiaCampo6=$registro[6];


echo (" <center> <H1> Notícia $NoticiaCampo0 </H1> </center> <br> <br> ");

echo ("  
<center>
  <div class='card'>
    <div class='card__header'>
      <img src=$NoticiaCampo3 alt='card__image' class='card__image'>
    </div>
    <div class='card__body'>
      <h2> $NoticiaCampo1 </h2>
      <p>$NoticiaCampo2</p>
    </div>
    <div class='card__footer'>
      <div class='user'>
        <img src='$NoticiaCampo4' alt='user__image' class='user__image'>
        <div class='user__info'>
          <h5>$NoticiaCampo5</h5>
          <small>$NoticiaCampo6</small>
        </div>
      </div>
    </div>
  </div>
  </center>
  ");
  }
  
?>

</section>



<!-- <Parte Campeonatos> -->
<section id="JogosEditor" >
 
      <center> 
	  
	  <H1> Inserir Data</H1>
      <input type='text' name='CampeonatosData'/> <BR> <BR>
	  
	  <H1> Inserir Time 1</H1>
	  <input type='text' name='CampeonatosTime1'/> <BR> <BR>
	  
	  <H1> Inserir Logo Time 1</H1>
      <input type='text' name='CampeonatosTime1Img'/> <BR> <BR>

	  <H1> Inserir Time 2</H1>
	  <input type='text' name='CampeonatosTime2'/> <BR> <BR>
	  
	  <H1> Inserir Logo Time 2</H1>
      <input type='text' name='CampeonatosTime2Img'/> <BR> <BR>
	  
	  <H1> Inserir Placar Time 1</H1>
      <input type='text' name='CampeonatosPlacar1'/> <BR> <BR>
	  
	  <H1> Inserir Placar Time 2</H1>
      <input type='text' name='CampeonatosPlacar2'/> <BR> <BR>
	  
	  <H1> Inserir Horário</H1>
      <input type='text' name='CampeonatosHorario'/> <BR> <BR>
	    
   <H1> Selecione o campeonato correspondente	</H1>

	<form method='POST' > 
	<select class='custom-select' name='taskOption' >
	
	<?php
	$sqlCamp='SELECT * FROM Campeonatos ORDER BY Cod';
	$res2=mysqli_query($conexao, 'sqlCamp');
	
	while($registro=mysqli_fetch_row($res2))
	{
	$Campeonato=$registro[2];
	echo (" <option value='$Campeonato'> $Campeonato </option>");
	}
	?>
	
	</select> </center> <br>   <center>  <BR> <button type='submit' value='Alterar' class='btnStyle' name='buttonE1'> Inserir </button> </center> <BR> <BR>
	
	<?php
	if(array_key_exists('buttonE1', $_POST)) { 
	$CampeonatosData= $_POST["CampeonatosData"];
	$CampeonatosTime1= $_POST["CampeonatosTime1"];
	$CampeonatosTime1Img= $_POST["CampeonatosTime1Img"];
	$CampeonatosTime2= $_POST["CampeonatosTime2"];
	$CampeonatosTime2Img= $_POST["CampeonatosTime2Img"];
	$CampeonatosPlacar1= $_POST["CampeonatosPlacar1"];
	$CampeonatosPlacar2= $_POST["CampeonatosPlacar2"];
	$CampeonatosHorario= $_POST["CampeonatosHorario"];
	$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
	
	$sqlFix="ALTER TABLE Jogos AUTO_INCREMENT = 0";
	$sqlE1="INSERT INTO Jogos (Dia, Img1, Img2, Time1, Time2, Placar1, Placar2, Horario, Campeonato) VALUES ('$CampeonatosData', '$CampeonatosTime1', '$CampeonatosTime1Img', '$CampeonatosTime2', '$CampeonatosTime2Img', '$CampeonatosPlacar1', '$CampeonatosPlacar2', $CampeonatosHorario, $option)";
	$res2=mysqli_query($conexao, "$sqlD1", "$sqlFix");
	header('Location: editor.php#');			
	}
	?>

<center>
<H1> Selecione um Jogo para excluir </H1> <BR>

<form method="POST" > 
<select class="custom-select" name="taskOption" >
	
	<?php 
	$sqlCod="SELECT * FROM Jogos ORDER BY Cod";
	$sqlNome="SELECT * FROM Campeonatos ORDER BY Nome";
	$res1=mysqli_query($conexao, "$sqlCod");
	$res2=mysqli_query($conexao, "$sqlNome");
	while($registro=mysqli_fetch_row($res1) and $registro2=mysqli_fetch_row($res2))
	{
	
	$codigo=$registro[0];
	$Nome=$registro2[0];
	
	echo (" <option value='$codigo'> Jogo: $codigo Campeonato: $Nome</option>");
	}
	?>
	
</select> </center> <br> <center> <button type="submit" value="Alterar" class="btnStyle" name="buttonE2"> Excluir </button> </form> </center> <br> <br> <br> <br> 

<?php
if(array_key_exists('buttonE2', $_POST)) { 
$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
$sqlFix="ALTER TABLE Jogos AUTO_INCREMENT = 0";
$sqlE2="delete from Jogos where cod=$option";
$res2=mysqli_query($conexao, "$sqlD2", "$sqlFix");
header('Location: editor.php#');			
}
	
$sql1="SELECT * FROM Jogos ORDER BY Cod";
$res=mysqli_query($conexao, "$sql1");

echo (" <center> <H1> Jogos Atuais </H1> </center> <br> <br>");

while($registro=mysqli_fetch_row($res))
{
	
$Jogos1CampoCod=$registro[0];
$Jogos1CampoDia=$registro[1];
$Jogos1CampoImg1=$registro[2];
$Jogos1CampoImg2=$registro[3];
$Jogos1CampoTime1=$registro[4];
$Jogos1CampoTime2=$registro[5];
$Jogos1CampoPlacar1=$registro[6];
$Jogos1CampoPlacar2=$registro[7];
$Jogos1CampoHorario=$registro[8];
$Jogos1CampoCampeonato=$registro[9];

echo (" <center> <H1> Campeonato: $Jogos1CampoCampeonato Jogo: $Jogos1CampoCod </H1> </center> <br> <br> ");

echo ("  
<div class='column'>
    <div class='card'> 
      <h2 class='blue'> $Jogos1CampoDia </h2>
	  <img src='$Jogos1CampoImg1' class='img'> <BR> <h3> $Jogos1CampoTime1 <BR> </h3> <h3> X </h3> <BR>
	   <img src='$Jogos1CampoImg2' class='img'> <BR> <h3> $Jogos1CampoTime2 <BR> </h3> 
	  <h4> $Jogos1CampoPlacar1 - $Jogos1CampoPlacar2 </h4>
      <p>$Jogos1CampoHorario</p>
    </div>
  </div>
  ");
  }
  
?>

</section>
<?php mysqli_close($conexao); ?>
<!-- partial -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
	
<!-- </Parte Inicial> -->


<!-- <SCRIPTS Usados> -->


<script src="js/jquery.js"></script>
<script src="js/DivEditor.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- </SCRIPTS Usados> -->

</body>
</html>