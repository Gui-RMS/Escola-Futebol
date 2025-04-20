<?php require_once"conecta.php"; 
$sql1="SELECT * FROM Inicio where Cod = 1";
$sql2="SELECT * FROM Sobre where Cod = 1";
$sql3="SELECT * FROM Manual where Cod = 1";
$sql4="SELECT * FROM Campeonatos where Cod = 1";
$sql7="SELECT * FROM Login where Cod = 1";


$res1=mysqli_query($conexao, $sql1); 
$res2=mysqli_query($conexao, $sql2); 
$res3=mysqli_query($conexao, $sql3); 
$res4=mysqli_query($conexao, $sql4); 
$res7=mysqli_query($conexao, $sql7); 

$registro=mysqli_fetch_row($res1);

$InicioLogo=$registro[1];
$InicioImg1=$registro[2];
$InicioImg2=$registro[3];
$InicioImg3=$registro[4];
$InicioImg4=$registro[5];
$InicioImg5=$registro[6];
$InicioImg6=$registro[7];
$InicioTexto1=$registro[8];
$InicioLink1=$registro[9];
$InicioLink2=$registro[10];
$InicioLink3=$registro[11];
$InicioLink4=$registro[12];

$registro=mysqli_fetch_row($res2);

$SobreTitulo1=$registro[1];
$SobreTexto1=$registro[2];
$SobreTexto2=$registro[3];
$SobreImg1=$registro[4];

$registro=mysqli_fetch_row($res3);

$ManualImg1=$registro[1];
$ManualImg2=$registro[2];
$ManualImg3=$registro[3];
$ManualImg4=$registro[4];
$ManualImg5=$registro[5];
$ManualImg6=$registro[6];

$registro=mysqli_fetch_row($res4);

$CampeonatosImg1=$registro[1];
$CampeonatosTitulo1=$registro[2];
$CampeonatosImg2=$registro[3];
$CampeonatosTitulo2=$registro[4];
$CampeonatosImg3=$registro[5];
$CampeonatosTitulo3=$registro[6];
$CampeonatosImg4=$registro[7];
$CampeonatosTitulo4=$registro[8];
$CampeonatosImg5=$registro[9];
$CampeonatosTitulo5=$registro[10];
$CampeonatosImg6=$registro[11];
$CampeonatosTitulo6=$registro[12];

$registro=mysqli_fetch_row($res7);

$Usuario=$registro[1];
$Senha=$registro[2];

?>