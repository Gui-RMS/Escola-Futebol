var input = document.getElementById("cmp_1");

Jogos.style.display = "none";
input.addEventListener("keypress", function(event) {

  if (event.key === "Enter") {
  
    event.preventDefault();
    document.getElementById("btn_18").click();
  }
});

function Atualizar() {
	
  var a = document.getElementById("div1");
  var aImg = document.getElementById("aImg");
  var aTt = document.getElementById("aTt");
  var b = document.getElementById("div2");
  var c = document.getElementById("div3");
  var d = document.getElementById("div4");
  var e = document.getElementById("div5");
  var f = document.getElementById("div6");

}

function Searchbar() {
  
  var a = document.getElementById("div1");
  var aImg = document.getElementById("aImg");
  var aTt = document.getElementById("aTt");
  
  var b = document.getElementById("div2");
  var bImg = document.getElementById("bImg");
  var bTt = document.getElementById("bTt");
  
  var c = document.getElementById("div3");
  var d = document.getElementById("div4");
  var e = document.getElementById("div5");
  var f = document.getElementById("div6");
  var y =  document.form1.Campo_1.value;

    a.style.display = "block";
    b.style.display = "block";
    c.style.display = "block";
    d.style.display = "block";
    e.style.display = "block";
    f.style.display = "block";

	
    if (y.toUpperCase() == "CAMPEONATO MUNICPAL") {

    a.style.visibility = "visible";
    b.style.visibility = "hidden";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

	else if (y.toUpperCase() == "CAMPEONATO") {

    a.style.visibility = "visible";
    b.style.visibility = "hidden";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

	else if (y.toUpperCase() == "MUNICIPAL") {

    a.style.visibility = "visible";
    b.style.visibility = "hidden";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

    else if (y.toUpperCase() == "COPA PAULISTA") {

    a.style.visibility = "visible";
	aImg.src = bImg.src;
	aTt.innerHTML = "Copa Paulista";
	bImg.href = bImg.src;
    b.style.visibility = "hidden";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}
	
	else if (y.toUpperCase() == "PAULISTA") {

    a.style.visibility = "hidden";
    a.style.display = "none";
    b.style.visibility = "visible";
	b.style.display = "none";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

    else if (y.toUpperCase() == "COPA SUL") {

    a.style.visibility = "hidden";
    a.style.display = "none";
    b.style.visibility = "hidden";
    b.style.display = "none";
    c.style.visibility = "visible";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";
	f.style.display = "none";

}

	else if (y.toUpperCase() == "SUL") {

    a.style.visibility = "hidden";
    a.style.display = "none";
    b.style.visibility = "hidden";
    b.style.display = "none";
    c.style.visibility = "visible";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";
	f.style.display = "none";
}

	 else if (y.toUpperCase() == "COPA") {

    a.style.visibility = "hidden";
    a.style.display = "none";
    b.style.visibility = "visible";
    c.style.visibility = "visible";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
	e.style.display = "none";
    f.style.visibility = "hidden";
	f.style.display = "none";


}
    else if (y.toUpperCase() == "IBER CUP SÃO PAULO") {

    z.style.visibility = "visible";
    z.style.display = "block";
    a.style.visibility = "hidden";
    b.style.visibility = "hidden";
    b.style.display = "none";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

	else if (y.toUpperCase() == "SÃO PAULO") {

    z.style.visibility = "visible";
    z.style.display = "block";
    a.style.visibility = "hidden";
    b.style.visibility = "hidden";
    b.style.display = "none";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

    else if (y.toUpperCase() == "IBER") {

    z.style.visibility = "visible";
    z.style.display = "block";
    a.style.visibility = "hidden";
    b.style.visibility = "hidden";
    b.style.display = "none";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

else if (y.toUpperCase() == "CUP") {

    z.style.visibility = "visible";
    z.style.display = "block";
    a.style.visibility = "hidden";
    b.style.visibility = "hidden";
    b.style.display = "none";
    c.style.visibility = "hidden";
    d.style.visibility = "hidden";
    e.style.visibility = "hidden";
    f.style.visibility = "hidden";

}

}

 function OpenJogos() {


  
  var Jogos = document.getElementById("Jogos"); 
  Jogos.style.display = "block";
      $(".Camp").val($(this).attr("500"));
});
  
 }
 