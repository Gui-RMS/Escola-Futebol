var Inicio = document.getElementById("inicioEditor");
var Sobre = document.getElementById("SobreEditor");
var Manual = document.getElementById("ManualEditor");
var Campeonatos = document.getElementById("CampeonatosEditor");
var Trofeus = document.getElementById("TrofeusEditor");
var Noticias = document.getElementById("NoticiasEditor");
var Videos = document.getElementById("VideosEditor");
var Jogos = document.getElementById("JogosEditor");
var Cadastro = document.getElementById("CadastroEditor");

var clickCounter = 0;
var Counter = 0;

Inicio.style.display = "none";
Sobre.style.display = "none";
Manual.style.display = "none";
Campeonatos.style.display = "none";
Trofeus.style.display = "none";
Noticias.style.display = "none";
Videos.style.display = "none";
Jogos.style.display = "none";
Cadastro.style.display = "none";

function OpenInicio() {

Inicio.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Inicio.style.display = "none";
	 clickCounter = 0;
    }
};

function OpenSobre() {

Sobre.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Sobre.style.display = "none";
	 clickCounter = 0;
    }
};

function OpenManual() {

Manual.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Manual.style.display = "none";
	 clickCounter = 0;
    }
};

function OpenCampeonatos() {
	
Campeonatos.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Campeonatos.style.display = "none";
	 clickCounter = 0;
    }
};

function OpenTrofeus() {
	
Trofeus.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Trofeus.style.display = "none";
	 clickCounter = 0;
    }
};

function OpenNoticias() {

Noticias.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Noticias.style.display = "none";
	 clickCounter = 0;
    }
};

function OpenJogos() {

Jogos.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Jogos.style.display = "none";
	 clickCounter = 0;
    }
};

function OpenVideos() {
	
Videos.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Videos.style.display = "none";
	 clickCounter = 0;
    }
};



function OpenCadastro() {
	
Cadastro.style.display = "block";
clickCounter++;

if (clickCounter==2) {
     Cadastro.style.display = "none";
	 clickCounter = 0;
    }
};
