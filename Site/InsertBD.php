<?php
header('Content-Type: text/html; charset=utf-8');
$dbnome = "Unidos";
$conexao= mysqli_connect('localhost','root','') or die("Erro de conexão");
$abre=mysqli_query ($conexao, "USE $dbnome "); 


$table1 = "INSERT INTO inicio (Logo, Img1, Img2, Img3, Img4, Img5, Img6, Texto1) VALUES (
'images/fundo.png', 
'Screenshots/placeholder1.png', 
'Screenshots/placeholder2.png', 
'Screenshots/placeholder3.png', 
'Screenshots/placeholder4.png', 
'Screenshots/placeholder5.png', 
'Screenshots/placeholder6.png', 
'Venha ter o seu sonho realizado com a melhor escola da região, a Unidos J.R.F.C.')";

$table2 = "INSERT INTO sobre (Titulo1, Texto1, Texto2, Img1) VALUES (
'Bem-vindos à Escolinha de Futebol Unidos do Jardim Resende!', 
'Nossos jogadores são o coração de tudo o que fazemos.
Cada chute, cada gol e cada celebração marcam a jornada de jovens talentos 
que têm o potencial de brilhar nos campos e na vida.', 
'Há 7 anos, estamos moldando jovens talentos no coração de Pindamonhangaba.
Somos mais que um time, somos uma família apaixonada pelo esporte, 
dedicada a cultivar o amor pelo futebol em meninos e meninas com idades 
entre 6 e 15 anos. Fundada em 2017, no vibrante bairro Jardim Rezende. 
Com empenho e paixão, temos levado nossas cores e nosso espírito 
competitivo a diversas categorias, erguendo troféus e consolidando 
nossa presença nos campos por onde passamos. 
Aqui, não apenas ensinamos habilidades técnicas e táticas do jogo, mas também cultivamos valores 
fundamentais, como trabalho em equipe, respeito e superação. Cada partida 
é uma oportunidade de aprendizado, e cada treino é uma chance de crescimento 
pessoal e esportivo.', 
'images/Unidos.jpg')";
 
 $table3 = "INSERT INTO manual (Img1, Img2, Img3, Img4, Img5, Img6) VALUES (
'Screenshots/placeholder1.png', 
'Screenshots/placeholder2.png', 
'Screenshots/placeholder3.png', 
'Screenshots/placeholder4.png',
'Screenshots/placeholder5.png', 
'Screenshots/placeholder6.png')";
 
 $table4 = "INSERT INTO campeonatos (Img, Titulo) VALUES (
'icons/iCON1.png', 
'Campeonato Municipal')";
 
 $table5 = "INSERT INTO Jogos (Dia, Img1, Img2, time1, time2, Placar1, Placar2, Horario, Campeonato) VALUES (
'19/03',
'assets/icon-brazil.svg', 
'assets/icon-serbia.svg', 
'Brasil', 
'Servia', 
'5', 
'0', 
'16:00',
'1')";
 
 
 $table6 = "INSERT INTO trofeus (Img1) VALUES (
'https://m.media-amazon.com/images/I/615muGzUCbL._AC_UF1000,1000_QL80_.jpg')";
 
 $table6A = "INSERT INTO trofeus (Img1) VALUES (
'https://m.media-amazon.com/images/I/615muGzUCbL._AC_UF1000,1000_QL80_.jpg')";

 $table7 = "INSERT INTO noticias (Titulo, Texto, Img, icon, Legenda, Dia, Titulo2) VALUES (
'Adilson visitará', 
'Adilson José Pinto: Uma Lenda do Futebol Brasileiro 🏆⚽ Adilson José Pinto é um nome que ecoa nos corações dos apaixonados pelo futebol brasileiro. Nascido em 6 de janeiro de […]', 
'images/noticia2.png', 
'images/logo.png', 
'Eventos', 
'01/05/2024', 
'Adilson.')";
 
 $table8 = "INSERT INTO Login (Usuario, Senha) VALUES (
'Unidos', 
'123Unidos')";
 
  $tables = [$table1, $table2, $table3, $table4, $table5, $table6, $table6A, $table7, $table8];

  $errors = [];
  
foreach($tables as $k => $sql){
    $query = @$conexao->query($sql);

    if(!$query)
       $errors[] = "Table $k : Criação Falhou! ($conexao->error)";
    else
       $errors[] = "Table $k : Criação Concluída!";
}


foreach($errors as $msg) {
   echo "$msg <br>";
}

mysqli_close($conexao);

?>