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
    
    
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loading.css">
<link rel="stylesheet" type="text/css" href="css/glider.css" />
<script src="js/glider.js"></script>
<!-- </Arquivos CSS> -->


<!-- <Carregamento> -->
<!--<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"> </div>
</div>

<!-- </Carregamento> -->

 <script>
      window.addEventListener('load',function(){
        document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
            var glider = Glider(this);
            console.log('Slide Visible %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
            console.log('Slide Hidden %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-refresh', function(event){
            console.log('Refresh')
        });
        document.querySelector('.glider').addEventListener('glider-loaded', function(event){
            console.log('Loaded')
        });

        window._ = new Glider(document.querySelector('.glider'), {
            slidesToShow: 1, //'auto',
            slidesToScroll: 1,
            itemWidth: 150,
            draggable: true,
            scrollLock: false,
            dots: '#dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 1800,
                    settings: {
                        slidesToScroll: 'auto',
                        itemWidth: 300,
                        slidesToShow: 'auto',
                        exactWidth: true
                    }
                },
                {
                    breakpoint: 1700,
                    settings: {
                        slidesToScroll: 4,
                        slidesToShow: 4,
                        dots: false,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2,
                        dots: false,
                        arrows: false,
                        scrollLock: true
                    }
                }
            ]
        });
      });
    </script>
</head>

<?php
require_once"conecta.php"; 
include 'alterar.php';
?> 

<body onload="plusDivs(1)">

<!-- <Barra de navegação> -->

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
	
		<div class="navbar-header">
		
	

		<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
	  </button>
			
             <a href="login.html" > <img src= "images/login.png" class= "login" /> </a>
			 <img src= "images/AlternateLogo.png" class= "logo" />

		</div>
		
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
			
				<li><a href="#">Início</a></li>
				<li><a href="#Sobre">Quem somos</a></li>
				<li><a href="#ManualUsuario">Manual do Usuário</a></li>
			    <li><a href="#Calendário">Calendário</a></li>
			
				<div class="dropdown">
				<li><a>Outros</a></li>
				<div class="dropdown-content">
				<a href="#Trofeus">Galeria de Troféus</a>
				<a href="#Noticias">Notícias</a>
				<a href="#Videos">Videos</a>
				<a href="#gallery">Galeria</a>
				<a href="#Cadastro">Ficha de Cadastro</a>

				</div>
				</div>
				
			</ul>
		</div>
		
	</div>
</div>

<!-- </Barra de navegação> -->

<!-- <Parte Inicial> -->

	<section id="home" class="main">
	
     <div class="overlay"> 
	 
	 </div>
	 
		<div class="container">
			
			<div class="row">

				<div class="col-md-6 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0">
			   
				<img src="<?php echo $InicioLogo; ?>" class="animated2 imgi animatedFadeInUp fadeInUp"  delay="0.2s" alt="Home">  <!-- Logo > -->
				 
				</div>

					<div class="col-md-6 col-sm-7 col-xs-12">
			   
						<div class="home-thumb">
					
						<div class="animated animatedFadeInUp fadeInUp">
						
						<h2> <?php echo $InicioTexto1; ?> </h2>   <!-- <Texto 1> -->
                       
						
<!-- <Arquivos CSS Usados em Carrossel> -->
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/manual_usu.css">
 
  <!-- </Arquivos CSS Usados em Carrossel> -->
  
 <!-- <SCRIPTS Usados em Carrossel> -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./js/bootstrap.js"> </script>
  <script src="js/Carrossel.js"></script>
  
 <!-- </SCRIPTS Usados em Carrossel> -->
 
 <!-- <Carrossel> -->
 
<div id="carousel" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
  
    <div id="CarouselPC">
    <div class="carousel-item active">
	  
	  <picture>
	   
      <img src="<?php echo $InicioImg1; ?>" >  <!-- <Imagem 1> -->
	  
	  </picture>
	  
    </div>

    <div class="carousel-item">
	  
      <picture>
	  
        <img src="<?php echo $InicioImg2; ?>" >  <!-- <Imagem 2> -->
	  
	  </picture>
	  
    </div>

    <div class="carousel-item">
	  
      <picture>
	   
        <img src="<?php echo $InicioImg3; ?>" >  <!-- <Imagem 3> -->
	  
	  </picture>
	  
    </div>
  

  <div class="carousel-item">
	
     <picture>
	  
        <img src="<?php echo $InicioImg4; ?>" >  <!-- <Imagem 4> -->
	  
	  </picture>
	  
    </div>
	
	  <div class="carousel-item">
	
      <picture>
	  
        <img src="<?php echo $InicioImg5; ?>" >  <!-- <Imagem 5> -->
	  
	  </picture>
	  
    </div>
	
	 <div class="carousel-item">
	
      <picture>
	    
        <img src="<?php echo $InicioImg6; ?>" >  <!-- <Imagem 6> -->
	  
	  </picture>
	  
    </div>
	
  </div> 
  
 
<!--   <Controladores | Botões> -->

  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"> Previous </span>
  </a>
  
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"> Next </span>
  </a> 
  
<!--   </Controladores | Botões> -->
  
</div> 
				
<!-- Fim do carrossel -->

  <BR> <BR> <BR>
  
			</div>
		</div>
		 <center>
		 <a href="<?php echo $InicioLink1; ?>"> <img src="images/faceicon.png" class="icon animated2 animatedFadeInUp fadeInUp"> </a> <!-- <link facebook> -->
		 <a href="<?php echo $InicioLink2; ?>"> <img src="images/xicon.png" class="icon2 animated2 animatedFadeInUp fadeInUp"> </a>   <!-- <link X> -->
		 <a href="<?php echo $InicioLink3; ?>"> <img src="images/instagramicon.png" class="icon animated2 animatedFadeInUp fadeInUp"> </a> <!-- <link Instagram> -->
		 <a href="<?php echo $InicioLink4; ?>"> <img src="images/zapicon.png" class="icon3 animated2 animatedFadeInUp fadeInUp"> </a> <!-- <link Whatsapp> -->
		 </center>
	</div>
	
 </div> 
						 
						  
						</div>
						 
						</div>
					
					</div>
			   
			</div>
		
		</div>
	
	</section>
<!-- </Parte Inicial> -->

<!-- <Parte Sobre> -->
	<section id="Sobre">
<div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container bottomContainer">
    <div class="ultimateImg">
      <img class="mainImg" src="<?php echo $SobreImg1; ?>">
      <div class="purpleBox">
        <p class="purpleText">
           <?php echo $SobreTexto1; ?>
        </p>

      </div>
    </div>
    <div class="allText bottomText">
      <p class="text-blk headingText">
        Quem somos
      </p>
      <p class="text-blk subHeadingText">
        <?php echo $SobreTitulo1; ?> 
      </p>
      <p class="text-blk description">
        <p> 
				<?php echo $SobreTexto2; ?> </p>
      </p>
    </div>
  </div>
</div>
	</section>
<!-- </Parte Sobre> -->

<!-- <Parte Manual do Usuário> -->

<section id="ManualUsuario">
	
    <div class="overlay"> 
   
	<div class="container">
			
		<div class="row">
 
 <!-- <Carrossel> -->
 
<div id="carousel" class="carousel slide" data-ride="carousel">

	
   <!-- <Arquivos CSS Usados em Carrossel> -->
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/manual_usu.css">
 
  <!-- </Arquivos CSS Usados em Carrossel> -->
  
 <!-- <SCRIPTS Usados em Carrossel> -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./js/bootstrap.js"> </script>
  <script src="js/Carrossel.js"></script>
  
 <!-- </SCRIPTS Usados em Carrossel> -->
 
 <!-- <Carrossel> -->
 
<div id="carousel" class="carousel slide" data-ride="carousel">

  <BR> <center> <h1> Manual do Usuário</h1> </center>
  <center> <h2> Veja aqui como utilizar as funcionalidades do nosso site. </h2> </center>
	
  <div class="carousel-inner">
  
    <div id="CarouselPC">
    <div class="carousel-item active">
	  
	  <picture>
	   
      <img src="<?php echo $ManualImg1; ?>" >
	  
	  </picture>
	  
    </div>

    <div class="carousel-item">
	  
      <picture>
	  
        <img src="<?php echo $ManualImg2; ?>" >
	  
	  </picture>
	  
    </div>

    <div class="carousel-item">
	  
      <picture>
	   
        <img src="<?php echo $ManualImg3; ?>" >
	  
	  </picture>
	  
    </div>
  

  <div class="carousel-item">
	
     <picture>
	  
        <img src="<?php echo $ManualImg4; ?>" >
	  
	  </picture>
	  
    </div>
	
	  <div class="carousel-item">
	
      <picture>
	  
        <img src="<?php echo $ManualImg5; ?>" >
	  
	  </picture>
	  
    </div>
	
	 <div class="carousel-item">
	
      <picture>
	    
        <img src="<?php echo $ManualImg6; ?>" >
	  
	  </picture>
	  
    </div>
	
  </div> 
  
 
<!--   <Controladores | Botões> -->

  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"> Previous </span>
  </a>
  
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"> Next </span>
  </a> 
  
<!--   </Controladores | Botões> -->
  
</div> 
				
<!-- Fim do carrossel -->
  
<div class="Space"> <BR> </div>
		
			</div>
		</div>
	</div>
  </div> 	
 </div> 

</section>

<!-- </Parte Manual do Usuário> -->


<!-- <	Campeonatos> -->

	<section id="Calendário" class="main">
	 

		<div class="container">
				
			<div class="row">
		  	
				<div class="overlay">
				
			    <h1 class="section-title"> Campeonatos </h1> <center> <FORM NAME="form1"> <input type="text" class="form-control" id="cmp_1" name="Campo_1" placeholder="Digite aqui"/> 
				<input type="button" id="btn_18" class="button-18" value="Procurar" onclick= "Searchbar()"/> <input type="button" id="btn_18" class="button-18" value="Atualizar" onclick= "Atualizar()"/> </form>
				  </center> 
				 
				 
			     </div> 
				
			 <div class="ret">
			 
		<!-- <Coluna de icones> -->
	
	
	<div id="div1" class="Colunas animated animatedFadeInUp fadeInUp">
	
		<center> 
		
			<a href="#jogos" > <img src="<?php echo $CampeonatosImg1; ?>" id="aImg" onclick="OpenJogos1()" class="img"> </a>
			<h4> <a id="aTt" href="#Jogos">  <?php echo $CampeonatosTitulo1; ?> </a> </h4> 
			
		</center> 
		
    </div>
  
    <div id="div2" class="Colunas animated animatedFadeInUp fadeInUp">
		
		<center> 
		
			<a href="#Jogos"> <img src="<?php echo $CampeonatosImg2; ?>" id="bImg" onclick="OpenJogos2();" class="img"> </a>
			<h4> <a id="bTt" href="#Jogos"> <?php echo $CampeonatosTitulo2; ?> </a> </h4> 
			
		</center> 
	
  </div>
  
	<div id="div3" class="Colunas animated animatedFadeInUp fadeInUp">
		
		<center> 
		
			<a href="#Jogos"> <img src="<?php echo $CampeonatosImg3; ?>" id="imgshow" id="cImg" onclick="OpenJogos3()" class="img"> </a>
			<h4>  <a id="cTt" href="#Jogos"> <?php echo $CampeonatosTitulo3; ?> </a> </h4> 
			
		</center> 

  </div> 
  
	<div id="div4" class="Colunas animated animatedFadeInUp fadeInUp">
		
		<center> 
		
			<a href="#Jogos"> <img src="<?php echo $CampeonatosImg4; ?>" id="dImg" onclick="OpenJogos4();" class="img"> </a>
			<h4>  <a id="dTt" href="#Jogos"> <?php echo $CampeonatosTitulo4; ?> </a> </h4> 
			
		</center> 
	
	</div>
  
	<div id="div5" class="Colunas animated animatedFadeInUp fadeInUp">
		
		<center> 
		
			<a href="#Jogos"> <img src="<?php echo $CampeonatosImg5; ?>" id="eImg" onclick="OpenJogos5()" class="img"> </a>
			<h4>  <a id="eTt" href="#Jogos"> <?php echo $CampeonatosTitulo5; ?>  </a> </h4> 
			
			</center> 
	
	</div>
  
   <div id="div6" class="Colunas animated animatedFadeInUp fadeInUp">
		
		<center> 
		
			<a href="#Jogos"> <img src="<?php echo $CampeonatosImg6; ?>" id="fImg" onclick="OpenJogos6()" class="img"> </a>
			<h4>  <a id="fTt" href="#Jogos">  <?php echo $CampeonatosTitulo6; ?>  </a> </h4> 
					
		</center> 
		
   </div>	

	<!-- <Coluna de icones> -->
	
			   </div>
			   
			</div>
		</div>
	
	</section>
<!-- </Manuais> -->

	 <!-- Jogos -->
	 
<section id="Jogos" >
	
	 <!-- <Arquivos CSS Usados em Carrossel> -->

 <link rel="stylesheet" href="css/news.css">
 
  <!-- </Arquivos CSS Usados em Carrossel> -->
  
    <div class="overlay"> 
   
	<div class="container">
			
		<div class="row">
		
  <BR> <BR> <BR>  <BR> 
  <center> <h1>Jogos</h1>
  <h3> Confira as datas e horários. </h3> </center>

<div class="row">

  <div class="scroll-container">

<?PHP 
  
$sql1="SELECT * FROM Jogos where campeonato = 1 ORDER BY Cod";
$res=mysqli_query($conexao, "$sql1");

while($registro=mysqli_fetch_row($res))
{
	
$Jogos1CampoDia=$registro[1];
$Jogos1CampoImg1=$registro[2];
$Jogos1CampoImg2=$registro[3];
$Jogos1CampoTime1=$registro[4];
$Jogos1CampoTime2=$registro[5];
$Jogos1CampoPlacar1=$registro[6];
$Jogos1CampoPlacar2=$registro[7];
$Jogos1CampoHorario=$registro[8];

echo (" <div class='column'>
    <div class='card'> 
      <h2 class='blue'> $Jogos1CampoDia </h2>
	  <img src='$Jogos1CampoImg1' class='img'> <BR> <h3> $Jogos1CampoTime1 <BR> </h3> <h3> X </h3> <BR>
	   <img src='$Jogos1CampoImg2' class='img'> <BR> <h3> $Jogos1CampoTime2 <BR> </h3> 
	  <h4> $Jogos1CampoPlacar1 - $Jogos1CampoPlacar2 </h4>
      <p>$Jogos1CampoHorario</p>
    </div>
  </div> ");
}

?>
	 </div>
	 </div>
	 
	<BR> 
	
	<div class="Space"> <BR> </div>
 	 
	</div>		 
		</div>
	</div>

</section>


<section id="Trofeus" >
	<BR>  <BR> <BR>  <BR>
	  <center> <h1>Troféus</h1>
  <h3> Confira as datas e horários. </h3> </center>
   <BR>  <BR>
			
<div class="scroll-container">

<?PHP 

$sql1="SELECT * FROM Trofeus ORDER BY Cod";
$res=mysqli_query($conexao, "$sql1");

while($registro=mysqli_fetch_row($res))
{
	
$TrofeusCampo1=$registro[1];

echo (" <img src='$TrofeusCampo1' alt='Avatar' class='img' > ");

}
  
?>

</div>

	
	 <div class="Space"> <BR> </div>
</section>

<section id="Noticias" >
	
    <div class="overlay"> 
	
		<BR>  <BR> <BR> <BR> 
  <center> <h1>Notícias</h1>
  <h2> Confira algumas Notícias.</h2> </center> <BR> 
  
<div class="scrolling-wrapper">

<?PHP 


$sql1="SELECT * FROM Noticias ORDER BY Cod";
$res=mysqli_query($conexao, "$sql1");

while($registro=mysqli_fetch_row($res))
{
	
$NoticiaCampo1=$registro[1];
$NoticiaCampo2=$registro[2];
$NoticiaCampo3=$registro[3];
$NoticiaCampo4=$registro[4];


echo ("  
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
          <h5>Eventos</h5>
          <small>01/05/2024</small>
        </div>
      </div>
    </div>
  </div>
  ");
  }
  ?>
</div>
	
</div>

	</div>

</section>

<section id="Videos">

<div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container bottomContainer">
    <div class="allText bottomText">
      <p class="text-blk headingText">
        Vídeos
      </p>
      <p class="text-blk subHeadingText">
        Consolidando nossa presença nos campos
      </p>
      <p class="text-blk description">
        Confira nosso conteúdo no youtube.
      </p>
      <a>
        <button class="explore">
          Ver mais
        </button>
      </a>
    </div>
    <div class="videoContainer">
      <iframe allowfullscreen="allowfullscreen" class="mainVideo" controls="controls" src="https://www.youtube.com/embed/svg%3E?">
      </iframe>
      <img class="dotsImg image-block" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/cw3.svg">
    </div>
  </div>
</div>

  </section>
  


<section id = "gallery">
 
 <iframe src="https://www.instagram.com/escoladefutebolunidos/embed"  class="myframe" frameborder="0">
</center> 
  </section>

<section id="Cadastro">
     <div class="overlay"> </div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                   
                   <br> <center> <h2>Venha fazer parte da nossa equipe</h2> </center>
                   
                    
                        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='#UserRate';}"></iframe>
      <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSd2h1cHi9FafmoYohQny6OQSI0sq79zPxcLGJ9ddSbUtGO8rA/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true;">
				  
								   <center>
							       <input name="entry.990279085" type="nome" class="form-control" id="Nome" placeholder="Nome"> <BR>
                                   <input name="entry.149934408" type="texto" class="form-control" id="texto" placeholder="Telefone"> <BR>
								   <input name="entry.869188093" type="texto" class="form-control" id="texto" placeholder="Endereço"> <BR>
                                   <input name="entry.1009369076" type="texto" class="form-control" id="texto" placeholder="Email"> <BR> <BR>
                                   <input name="submit" type="submit" class="button-18" id="submit" value="Enviar">
								   </center>
									
                         </form>
                  
				   <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd-lDji3iOKIKJXZaDLtadAriVIkLcCVn09YVpYCy-4KKkV2w/viewanalytics" width="640" height="983" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe> -->
			    
			</div>
			   
		</div>
	
    </div>
</section>

<script type="text/javascript">var submitted=false;</script>


<!-- <SCRIPTS Usados> -->
<script src="js/VideoSelect.js"></script>
<script src="js/searchbar.js"></script>
<script src="js/jquery.js"></script>
<script src="js/custom.js"></script>
<script src="js/item.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- </SCRIPTS Usados> -->

</body>
</html>