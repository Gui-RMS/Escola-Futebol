
function SectionChanger(){
	
let Shop1 = document.getElementById("Shop1");
let Shop2 = document.getElementById("Shop2");
let Shop3 = document.getElementById("Shop3");	

  if ( Manualicon.getAttribute('src') === "icons/image1.png" ) {
	  
	 document.getElementById("ManualEnd").innerHTML = "<h4> 1. Caso ainda não tenha instalado seu gramado ainda, leia nosso guia detalhado ou siga estas dicas básicas:" +
"Remova a grama antiga e as ervas daninhas usando uma enxada ou um cortador de grama. Se necessário, aplique glifosato ou outro herbicida para folhas largas para remover as ervas indesejadas. Sempre siga as instruções do fabricante, aguardando o tempo necessário após a aplicação para preparar o solo." +
"Prepare o solo, inclinando-o em 1% a 2% na direção oposta à da casa ou edifício. <BR> <BR>" +
"2. Analise todas as espécies disponíveis para você, dado que os cuidados com o gramado vão ser mais fáceis se a grama escolhida for adequada para o clima da região, o tipo de terra e os padrões de uso desejados. Pesquise as espécies especificas para obter informações precisas. <BR> <BR>" +
"3. Para plantar sementes: use um espalhador de gramado ou uma adubadeira manual para semear metade das sementes em fileiras paralelas. A outra metade deve ser semeada em ângulos retos com relação às primeiras fileiras. Com um ancinho, cubra as sementes com cerca de 3mm de terra. " +
"Para colocar tapetes de grama: remova alguns centímetros de terra, de forma que o novo gramado fique nivelado com os arredores. Disponha os tapetes, de ponta a ponta, em fileiras escalonadas, como se estivesse instalando tijolos. Apare as extremidades com um estilete.. <BR> <BR>" +
"4. Sementes: regue após o semear, usando pouca água para não acabar escoando as sementes. Repita a cada dois dias, ou com a frequência necessária para manter o solo úmido e evitar o ressecamento das sementes, que podem morrer. Após o germinar e o nascimento da grama, o que deve levar de 10 a 14 dias, você já não corre mais o risco de matar as sementes ressecadas." +
"Tapetes de grama: regue bem após a instalação. Em seguida, use um rolo de jardim para compactar os tapetes contra a terra embaixo. Depois, regue pela manhã do décimo dia após a instalação, usando água suficiente para umedecer a terra embaixo, mas sem exagerar, pois o excesso de água pode acabar soltando o tapete do solo. <BR> <BR>" +
"5.  É importante não caminhar sobre o gramado de tapete na primeira semana após a instalação e evitar o tráfego pesado no primeiro mês. Já as sementes precisam de ainda mais tempo de cuidado; não caminhe sobre elas até o surgimento das folhas de grama, e evite usar muito o jardim por seis meses. ";
  
  document.getElementById("TipsEnd").innerHTML = "<h4> 1. Para que o seu gramado fique saudável e bem exuberante, ele precisa de raízes profundas. Quer promover o crescimento das raízes? Regue de forma generosa e deixe que as camadas superficiais de terra (cerca de 5 cm) sequem antes de repetir a rega. A quantidade exata de água por semana depende, obviamente, do tipo de grama e do clima. Como regra geral, umedeça cerca de 2,5 a 3,5 cm (profundidade) da terra durante a época de crescimento da grama; durante épocas mais secas e quentes, umedeça cerca de 5 cm (profundidade) da terra. <BR> <BR>" +
"2. Muitas espécies de grama sobrevivem ao clima quente e seco do verão dormindo. As folhas ficam marrons, mas a parte sob a terra permanece viva por meses. Caso sua grama murche e fique marrom, independentemente da irrigação, é melhor deixá-la adormecer do que tentar 'ressuscitá-la'. <BR> <BR>" +
"3. Cortar a grama bem alta (algo entre 8 e 10 cm) é importante para a manutenção do gramado, principalmente durante as estações mais quentes. As folhas altas criam sombra, bloqueando o crescimento de ervas daninhas e promovendo o surgimento de micróbios benéficos. Deixar a grama alta também promove o crescimento das raízes, o que ajuda a aumentar a resistência contra doenças. Deixe as aparas de grama sobre a terra, de forma que o solo reabsorva os nutrientes delas. <BR> <BR>" +
"4. Os números na embalagem normalmente representam a porcentagem de nitrogênio, fósforo e potássio do produto, em ordem. O nitrogênio é o mais importante para o gramado, e deve estar sempre acima dos outros. Uma proporção de 3:1:2 é ideal, normalmente. Evite números acima de 10, ou você pode acabar queimando o gramado. <BR> <BR>" +
"5. Caso não tenha uma adubadeira manual, alugue uma para facilitar o trabalho. Os modelos que espalham gotas são ideais para jardins menores, ao passo que as rotatórias são melhores para gramados grandes — entretanto, elas não devem ser usadas nas beiradas do gramado, próximas de fontes de água e jardins com legumes e plantações, para evitar a poluição. Siga as instruções do maquinário e da embalagem do fertilizante, aplicando 0,5 kg de nitrogênio para cada 100 m2. Repita o procedimento anualmente, de preferência no fim do outono, quando o clima frio promove o crescimento das raízes. <BR> <BR>" +
"6. A aeração e a remoção da palha anuais são importantes para a manutenção da saúde do gramado. Remova pedaços de terra todos os anos usando um areador com dentes de 1,25 cm de diâmetro. Passe-o sobre o gramado, removendo cerca de 7,5 cm de profundidade, até ter cerca de 88 plugues de terra por metro quadrado. Assim, você evita a compactação do solo, doenças e o acúmulo de palha. </h4> ";

	
		document.getElementById("Lojas").innerHTML = " <center> " +
			"<a href='https://www.leroymerlin.com.br/regador-metasul-verde-5l_1567910971?region=outros'> <img src='Lojas/Regador.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.magazineluiza.com.br/regador-p-plantas-e-jardim-bico-chuveiro-removivel-5-litros-azul-metalsul/p/fd245g5c81/fj/rgpl/?seller_id=newlifeutilidades&srsltid=AfmBOoq-HdTm98SY3Nx3m6-XlTBh-yAHkX-pt_PX4xT3F7ElYQ2nKqe55g0'> <img src='Lojas/Regador2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.magazineluiza.com.br/regador-5-5-litros-policamp/p/ck4k9ggcce/fj/rgpl/?seller_id=lojaassumpcao&srsltid=AfmBOorXb0p_8mVsgffyB8ztcnuQV1Ute91gpmjdT02XHfSEX_3ujRLyoog'> <img src='Lojas/Regador3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>" +
												  " <center> " +
			"<a href='https://www.leroymerlin.com.br/kit-3-pa-de-lixo-plastica-color-cabo-horizontal-goulart_1569685536?region=outros'> <img src='Lojas/pázin.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.amazon.com.br/Unidade-Vassoura-Pequena-Escrit%25C3%25B3rio-Arm%25C3%25A1rios/dp/B0BYHD9VN7%3Fsource%3Dps-sl-shoppingads-lpcontext%26ref_%3Dfplfs%26psc%3D1%26smid%3DA2CHB2NZL95G98&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiiivy96PmCAxXWHrkGHQcxAHwQgOUECP0H&usg=AOvVaw2W0xV4Vql-Ipdgy2XwV5v7'> <img src='Lojas/pázin2.png'  id='Shop3' class='img'> </a>" +	
			"<a href='https://www.google.com/url?url=https://www.amazon.com.br/Unidade-Vassoura-Pequena-Escrit%25C3%25B3rio-Arm%25C3%25A1rios/dp/B0BYHD9VN7%3Fsource%3Dps-sl-shoppingads-lpcontext%26ref_%3Dfplfs%26psc%3D1%26smid%3DA2CHB2NZL95G98&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiiivy96PmCAxXWHrkGHQcxAHwQgOUECP0H&usg=AOvVaw2W0xV4Vql-Ipdgy2XwV5v7'> <img src='Lojas/pázin3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>" +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/dipfertil-organico-fertilizante-condicionador-de-solo-em-po-2-kg-dipil/p/jc057e7941/fj/ftlz/%3Fseller_id%3Dlojabichodomato%26srsltid%3DAfmBOoomiUZ45KnIEpIz5KSyJ4PZOAoDcbUN5XkFnCPuBVXSbgruvuqJV2c&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiBsKjX6PmCAxWvIbkGHbHQBM0QguUECK4G&usg=AOvVaw093FKJtErsULlwp-rjf4zV'> <img src='Lojas/fertilizante.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://produto.mercadolivre.com.br/MLB-4108669646-acido-borico-puro-soluvel-1kg-_JM%3Fmatt_tool%3D18956390%26utm_source%3Dgoogle_shopping%26utm_medium%3Dorganic&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwibrLnq6PmCAxXUHbkGHbF4B68QguUECPQH&usg=AOvVaw2IPH9fTk8xd_wvQMngjvkX'> <img src='Lojas/fertilizante2.png' id='Shop1' class='img'> </a> " +
												  "</center>" +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://www.leroymerlin.com.br/mangueira-jet-plus-trancada-verde-1-2-10m_1571468395%3Fregion%3Doutros&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwii0OGF6fmCAxVvLLkGHdk1D4IQguUECKYI&usg=AOvVaw2mYbLoEv64WU-J4-nEfRHI'> <img src='Lojas/Mangueira.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/aclk?sa=l&ai=DChcSEwif1tCR6fmCAxUDQUgAHSWpD4QYABADGgJjZQ&ase=2&gclid=Cj0KCQiAsburBhCIARIsAExmsu42wj4E6fgwMRV-hSGC4oqxAdOyESKjPWfXMrLoE7_D43u_dXraLTgaAsl4EALw_wcB&sig=AOD64_23PEGvL0J9W4SXZ3byoq2VsiePYg&ctype=5&q=&nis=4&ved=0ahUKEwijwMuR6fmCAxU8CbkGHZSPAFIQww8IoQk&adurl='> <img src='Lojas/Mangueira2.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.mercadolivre.com.br/mangueira-jardim-30-m-trancada-c-esguicho-irrigar-plasmang/p/MLB24080272%3Fmatt_tool%3D18956390%26utm_source%3Dgoogle_shopping%26utm_medium%3Dorganic%26from%3Dgshop&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiLo5yk6fmCAxWBIbkGHYPOAl4QguUECM4I&usg=AOvVaw0ZzXZBsSv8lqQXGrvlNRN9'> <img src='Lojas/Mangueira3.png' id='Shop1' class='img'> </a> " +
												  "</center>" +
											      " <center> " +
			"<a href='https://www.google.com/url?url=https://www.amazon.com.br/Cortador-Grama-El%25C3%25A9trico-1-300W-Coletor-TRAMONTINA-7966115/dp/B0776SQFBM%3Fsource%3Dps-sl-shoppingads-lpcontext%26ref_%3Dfplfs%26psc%3D1%26smid%3DA1ZZFT5FULY4LN&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiL0Mu36fmCAxX1OrkGHU3JA6AQguUECK8K&usg=AOvVaw1M3NITrC5dQxQprmhWZueB'> <img src='Lojas/Grasscutter.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.leroymerlin.com.br/cortador-de-grama-ce45m-127v-tramontina_89982235%3Fregion%3Dgrande_sao_paulo%26region_id%3D44500&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwj9w-vG6fmCAxUOGLkGHZaxBjEQguUECMMJ&usg=AOvVaw3e05io59XerwFaNL0XqPM_'> <img src='Lojas/Grasscutter2.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.mercadolivre.com.br/aparador-de-grama-tramontina-110v-ap1500t-com-dimetro-de-corte-280mm-1500w/p/MLB9086770%3Fmatt_tool%3D18956390%26utm_source%3Dgoogle_shopping%26utm_medium%3Dorganic%26from%3Dgshop&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwib_e3R6fmCAxWCK7kGHQ9vBkMQguUECMEK&usg=AOvVaw3oQLCDx8LxAN25vQrmkNVY'> <img src='Lojas/Grasscutter3.png' id='Shop1' class='img'> </a> " +
												  "</center>";
												  
	
	document.getElementById("InfoEnd").innerHTML = "<Pre>" +
"<h3>" +
"Ricardo Santos    Tel. 12996898623    Preço: 100 Reais <BR>" +
"Jardineiro    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>"  +
"Vitor Mendes    Tel. 12996898623    Preço: 80 Reais <BR>" +
"Jardineiro    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>" +
"Richard Pereira    Tel. 12996898623    Preço: 80 Reais <BR>" +
"Jardineiro    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"</Pre>";
	
  }
  
  
  
  else if( Manualicon.getAttribute('src') === "icons/image2.png" ) {
	  
  document.getElementById("ManualEnd").innerHTML = "<h4> 1. Use a escada para alcançar a calha, mas atenção: não a apoie diretamente na calha para evitar danos e acidentes. <BR> <BR> " +
"2. Use a pá de plástico para tirar folhas e galhos que podem estar dificultando a passagem da água; Coloque as no balde. Desça e mova a escada para os lados sempre que seu braço não alcançar com facilidade para que você não precise se debruçar; <BR> <BR> " +
"3. Além da parte que fica diretamente abaixo do telhado, é necessário checar os condutores (ou o 'cano' que lava a água para baixo). Para isso, use o jato de mangueira o quanto for necessário para garantir que todos os detritos se foram; <BR> <BR> " +
"4. Para deixar sua calha renovada, lave ela e os condutores também por fora, usando a mangueira e uma estopa. Se achar necessário, use também água com sabão neutro. </h4> ";
  
  
  document.getElementById("TipsEnd").innerHTML = "<h4> 1. Não faça a limpeza da calha em dias de chuvas; <BR> <BR> " +
"2. Separe todas as ferramentas que vai precisar antes de subir no telhado; <BR> <BR> " +
"3. Confira a calha frequentemente para verificar se já está na hora de fazer a limpeza; <BR> <BR>" +
"4. Se preferir, você também pode contratar uma empresa especializada. </h4>"; 

 document.getElementById("Lojas").innerHTML = " <center> " +
			"<a href='https://www.google.com/url?url=https://shopee.com.br/product/530672260/21797187178&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwi8l9306fmCAxWcGLkGHQsSC-0QgOUECMYI&usg=AOvVaw2yqStUyLCO6jewzuQeZb3E'> <img src='Lojas/luva latex1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://produto.mercadolivre.com.br/MLB-3391592347-luva-latex-ranhurada-punho-longo-sem-forro-anti-alergica-_JM%3Fmatt_tool%3D18956390%26utm_source%3Dgoogle_shopping%26utm_medium%3Dorganic&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjpiM2F6vmCAxV7LrkGHbEaBtsQguUECIwK&usg=AOvVaw3h68yk62IPHOgslgcQ33h0'> <img src='Lojas/luva latex2.png' id='Shop2' class='img'> </a> " +
												  "</center>"; 
												  

	
	document.getElementById("InfoEnd").innerHTML = "<Pre>" +
"<h3>" +
"Daniel Santos    Tel. 12996898623    Preço: 80 Reais <BR>" +
"Limpeza de Calhas    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>"  +
"Júlia Stephanie    Tel. 12996898623    Preço: 60 Reais <BR>"+
"Limpeza de Calhas    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>" +
"John Watson    Tel. 12996898623    Preço: 70 Reais <BR>" +
"Limpeza de Calhas    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"</Pre>";
  }
 
 else if( Manualicon.getAttribute('src') === "icons/image3.png" ) {
	  
    document.getElementById("ManualEnd").innerHTML = "<h4> 1. É sempre importante lixar as paredes com uma lixa, esse procedimento serve para nivelar a parede e não deixar aqueles excessos de reboco que podem ficar visíveis após a pintura. As lixas 220 ou 240 são as mais finas e devem ser utilizadas se a sua parede estiver firme e sem excesso de reboco. Já as lixas 80 ou 100 que são mais grossas, devem ser usadas nos casos em que esse desnível estiver maior e mais grosso. <BR> <BR>" +
"2. O selador é um importante componente no passo a passo de como pintar uma parede, pois ele servirá como uma camada preparadora para a tinta. Ele regulariza a parede e impedi que o acabamento fique manchado e por consequência a fixação da tinta da parede não fique adequada, prejudicando assim o resultado da pintura. O selador deve ser aplicado com o rolo de lã, através de movimentos de sobe e desce, devendo ser realizado em todas as paredes que serão pintadas. <BR> <BR>" +
"3. A massa corrida deve ser usada nas paredes para nivelar essas superfícies antes da aplicação de tinta, isso porque o produto uniformiza a área e ajuda na redução do consumo de tinta, pois ele diminui na porosidade da parede. A massa corrida deve ser aplicada com uma desempenadeira e uma espátula nos cantos. Após a aplicação você deve deixar o produto secar de duas a três horas, caso seja necessário, utilize a lixa novamente. <BR> <BR>" +
"4. Nesse passo é importante que você leia as instruções na lata de tinta escolhida, isso porque existem informações de como diluir e misturar para que a tinta fique uniforme e no tom escolhido. Coloque a mistura na bandeja e utilize o rolo de lã para a aplicação, evite encharcar o rolo, faça movimentos de vai e vem até que cubra toda a parede escolhida. <BR> <BR>" +
"5. Em muitos casos é necessário aplicar uma segunda mão de tinta, sendo recomendado após quatro horas da primeira aplicação. Nesse caso como pintar parede? Segue-se o mesmo princípio da primeira aplicação, faça movimentos de vai e vem com atenção, redobrando os cuidados nos cantos das paredes do ambiente e por fim, esperar secar. </h4>";  

  
  document.getElementById("TipsEnd").innerHTML = "<h4> 1. Uma dúvida que pode estar passando em sua mente agora, como pintar parede já pintada? Calma, vamos te ajudar! Ao pintar uma parede já pintada o importante é sempre retirar as camadas antigas de tinta que estejam mal pintadas. É preciso retirar toda a parte de tinta que esteja descascando, depois é hora de lixar a parede até deixá-la uniforme. <BR> <BR> " + 
"2. A seguir é preciso limpar o pó que ficou nas paredes, com uma vassoura e pano úmido isso é facilmente resolvido, depois só seguir os passos de uma pintura normal, usar o selador, massa corrida para nivelar a superfície e por fim aplicar a tinta escolhida, sem segredos. <BR> <BR> " + 
"3. Paredes com texturas ficam lindas em qualquer ambiente, porém requerem um cuidado especial na hora de sua pintura. Então, como pintar parede com textura? Existem duas formas de se pintar uma parede com textura, com um pincel ou com o rolo de lã. Os passos a passo de como pintar uma parede devem ser seguidos, porém o que muda são as formas de aplicação da tinta escolhida na superfície. <BR> <BR> " + 
"4. Caso você opte por um pincel, escolha um com as cerdas largas e macias, comece aplicando a tinta em uma direção diagonal, em seguida na outra, esse movimento é perfeito para cobrir toda parte texturizada. <BR> <BR> " + 
"5. Mas, como pintar parede com o rolo? Nesse caso a parede com textura pode ser mais trabalhosa, mas ainda é possível. Encharque o rolo com a tinta escolhida e aplique ele na parede com movimentos sobrepostos, caso você observe que ainda restaram lugares em que a tinta não penetrou de forma adequada, faça aplicações em movimentos em formas de “V” seguidas de pinceladas verticais na superfície. A dica de como pintar parede com rolo em texturas é ter paciência, mas o resultado fica incrível. </h4>"; 


	document.getElementById("Lojas").innerHTML = " <center> " +
			"<a href='https://www.google.com/url?url=https://www.anhangueraferramentas.com.br/produto/lixa-para-ferro-grao-100-folha-225x275mm-k-246-norton-78482&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjOpLma6vmCAxXdGLkGHTwoA0cQguUECL0H&usg=AOvVaw0OvXTRg-subvPUx6AaLUZz'> <img src='Lojas/lixa1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/lixa-d-agua-220-3m/p/bb47f77hc2/cj/lxag/%3Fseller_id%3Drennotintaseferramentas%26srsltid%3DAfmBOorfNokTiZK8Y5lMDrBrOVgzzgQjhu6jZWHj2wbWdxEImJbtl88kgL0&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjs8q2m6vmCAxVcGLkGHe66ASEQguUECPAH&usg=AOvVaw2DFNoyApNE7hRY8o7DNSCJ'> <img src='Lojas/lixa2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/lixa-d-agua-220-3m/p/bb47f77hc2/cj/lxag/%3Fseller_id%3Drennotintaseferramentas%26srsltid%3DAfmBOorfNokTiZK8Y5lMDrBrOVgzzgQjhu6jZWHj2wbWdxEImJbtl88kgL0&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjs8q2m6vmCAxVcGLkGHe66ASEQguUECPAH&usg=AOvVaw2DFNoyApNE7hRY8o7DNSCJ'> <img src='Lojas/lixa3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>" +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/rolo-la-roma-sem-respingo-05cm-822-05-roma-pinceis/p/hb82ahh885/cj/rpta/%3Fseller_id%3Dcomprespcom%26srsltid%3DAfmBOor3eqU4YMVdw10wKVWDtDizUJBWtbYMOqinsGGUHpyBDGyGeiB5U84&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwj3kdXE6vmCAxUaG7kGHWm5BI0QguUECPUJ&usg=AOvVaw2D3o-UlzBZWV1HKP35-CDh'> <img src='Lojas/rolão.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.leroymerlin.com.br/rolo-pintura-castor-la-hobby-09cm-s--respingo-c-cabo_1566931802%3Fregion%3Doutros&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjDsI7q6vmCAxWFIrkGHV5eCqcQguUECK0I&usg=AOvVaw3ML91MZLSghjY0BzjE80eb'> <img src='Lojas/rolão3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>" +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://www.leroymerlin.com.br/selador-acrilico-eucatex-balde-18l_1571732425%3Fregion%3Doutros&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwj96fX36vmCAxUzC9QKHX3uD2oQguUECOEI&usg=AOvVaw0P2ABM113QTwWFS37WzvIG'> <img src='Lojas/selador1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://produto.mercadolivre.com.br/MLB-2745757246-fundo-eucatex-pigmentado-pgesso-br-gl-_JM%3Fmatt_tool%3D18956390%26utm_source%3Dgoogle_shopping%26utm_medium%3Dorganic&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjMh_yJ6_mCAxVtILkGHQxBCZsQguUECIsI&usg=AOvVaw1j74ByFHgV46xTK4j2sJpH'> <img src='Lojas/selador2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.lojaeucatex.com.br/selador-acrilico-selador-acrilico-complementos-parede-alvenaria-5000057-18/p%3Fidsku%3D398%26utm_source%3Dgoogleshopping%26srsltid%3DAfmBOorGbNbfvULtz1x0vJ86se2MMtPzo-udToThI92w_gDYJr8ketOpQnY&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwi0ituT6_mCAxUVDrkGHXmcAZIQguUECJwH&usg=AOvVaw1Pb0EuFRObh6w8674qmhJC'> <img src='Lojas/selador3.png' id='Shop2' class='img'> </a> " +
												  "</center>";
	
	
	document.getElementById("InfoEnd").innerHTML = "<Pre>" +
"<h3>" +
"Jhony Santos    Tel. 12996898623    Preço: 300 Reais <BR>" +
"Pintor    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>"  +
"Joaquim Evangelista    Tel. 12996898623    Preço: 290 Reais <BR>"+
"Pintor    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>" +
"Vander Oliveira    Tel. 12996898623    Preço: 280 Reais <BR>" +
"Pintor    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"</Pre>";
  }
  
  else if( Manualicon.getAttribute('src') === "icons/image4.png" ) {
	  
  document.getElementById("ManualEnd").innerHTML = "<h4> 1. A primeira etapa do MIP é a identificar quais espécies de pragas estão presentes no local. Essa identificação possibilita o acesso ao acervo de informações técnicas e científicas sobre elas. <BR> <BR> " +
"Com a lista em mãos, é preciso compreender a biologia e o comportamento de cada praga. Aqui, qualquer informação sobre os hábitos do animal podem ajudar no controle, como informações sobre alimento, necessidades térmicas, umidade, habitat e aspectos de reprodução. <BR> <BR> " +
"2. O próximo passo, depois da identificação da praga, é determinar o grau de infestação. Embora seja uma avaliação subjetiva e relacionada com o tipo de atividade de cada cliente ou área, é importante determinar entre os graus: pouco crítico, crítico e muito crítico. <BR> <BR> " +
"Dessa forma, essa etapa terá valor na operacionalização das ações de controle, diferenciando-as em termos de técnica de controle, periodicidade, frequência e intensidade de eventuais aplicações de inseticidas e inspeções, e utilização de determinadas armadilhas e equipamentos de controle.  <BR> <BR>" +
"3. Esta é a fase de operacionalização do controle e conta com algumas medidas pré-combate. A primeira delas é preparar o local, permitindo a intervenção com máxima eficácia, total segurança aos dedetizadores, habitantes do local e danos mínimos ao patrimônio. <BR> <BR>" +
"Para isso, deve-se tomar medidas simples, como prover acesso às áreas de interesse, remover ou proteger alimentos, remover ou proteger itens delicados ou que possam deteriorar, limpeza prévia do local, acondicionamento correto do lixo, remoção de entulhos, entre outros.  <BR> <BR>" +
"Depois, dependendo do tipo de praga do local, deve-se realizar a instalação de armadilhas, entre elas as do tipo luminosa, porta iscas, placas de gaiolas, atrativos físicos e alimentares. Também é recomendado instalar nessa etapa outros tipos de dispositivos de medidas de controle ou barreiras físicas, como telas, grelhas, fios, vedações e cortinas de ar.  <BR> <BR>" +
"4. Após a realização dos métodos de controle químicos e biológicos, deve-se avaliar a eficiência do controle. Para isso, é necessário monitorar o nível de infestação após a aplicação e, se necessário, adotar medidas de controle complementares. <BR> <BR>" +
"As principais medidas preventivas para o controle de pragas visam eliminar ou minimizar as condições ambientais que propiciem sua proliferação, que são: Água, Abrigo, Alimento e Acesso </h4>"; 

  
  
  document.getElementById("TipsEnd").innerHTML = "<h4> 1. Manter a higienização e limpeza regular dos ambientes; <BR> <BR> " + 
"2. Instalar telas de proteção nas janelas e portas; <BR> <BR> " + 
"3. Aplicar telas de proteção em ralos e tubulações; <BR> <BR> " + 
"4. Vedar furos em azulejos e paredes; <BR> <BR> " + 
"5. Evitar o acúmulo de água em ralos, drenos e caixas; <BR> <BR> " + 
"6. Armazenar o lixo em locais cobertos; <BR> <BR> " + 
"7 Não acumular materiais e embalagens em desuso; <BR> <BR> " + 
"8. Não juntar entulho; <BR> <BR> " + 
"9. Realizar a manutenção regularmente de objetos e móveis de madeira; <BR> <BR> " + 
"10. Aparar matos e gramas; <BR> <BR> " + 
"11. Não deixar alimentos ou resíduos que sirvam como alimento para aves e roedores; <BR> <BR> " + 
"12. Limpar diariamente as áreas de refeição.  </h4>"; 

	
	document.getElementById("Lojas").innerHTML = " <center> " +
			"<a href='https://www.google.com/url?url=https://produto.mercadolivre.com.br/MLB-3077850542-mascara-respiratoria-pesticida-venenos-agrotoxico-gas-acido-_JM%3Fmatt_tool%3D18956390%26utm_source%3Dgoogle_shopping%26utm_medium%3Dorganic&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiCpeOs6_mCAxUJIrkGHdZ2AGAQgOUECO4J&usg=AOvVaw3Q_nJVPwyBet1bTD85dMNV'> <img src='Lojas/mascara dedetizadora2.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/mascara-respirador-1-4-facial-mastt-alltec-2001-p2-filtro-de-uma-via-pintura-poeira-po-10-refis/p/bgj7b05ejc/pi/prfc/%3Fseller_id%3Dtmacessorios%26srsltid%3DAfmBOorpggF8G7Ad9Tsx-v9xEafPSzuXBU2FEJkghiEv3RJvu2s1jC3S_Xc&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiCqa3l6_mCAxVuILkGHWHgBlgQgOUECJwM&usg=AOvVaw2UVA4yIwvY9xJoRYDJZycJ'> <img src='Lojas/mascara dedetizadora3.png' id='Shop1' class='img'> </a> " +
												  "</center>"  +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://www.mercadolivre.com.br/pulverizador-5-litros-borrifador-manual-lateral-dedetizaco-bomba-de-veneno-agricola-6240005000-vonder/p/MLB22341225%3Fmatt_tool%3D18956390%26utm_source%3Dgoogle_shopping%26utm_medium%3Dorganic%26from%3Dgshop&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiloP2P7PmCAxVPB7kGHZXfAbIQguUECM0J&usg=AOvVaw2vqRRAhB-snuUcQLuHJstG'> <img src='Lojas/pulverizador1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/pulverizador-borrifador-manual-costal-5l-647408-palisad/p/fkaj9d2j4f/fj/pvzd/%3Fseller_id%3Dddmaquinas%26srsltid%3DAfmBOoocQIzADGpKrSe1o38m7kVTPHcQ4agf6YYa8LTwTLPN_ii-_16_h_g&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiloP2P7PmCAxVPB7kGHZXfAbIQguUECN0J&usg=AOvVaw1ZWxC2GbDcALargMDqGEAB'> <img src='Lojas/pulverizador2.png'  id='Shop3' class='img'> </a>" +	
												  "</center>"; 
												 
	
	document.getElementById("InfoEnd").innerHTML = "<Pre>" +
"<h3>" +
"Celso Rodrigues    Tel. 12996898623    Preço: 200 Reais <BR>" +
"Controle de Pragas    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>"  +
"Denilson Almeida    Tel. 12996898623    Preço: 200 Reais <BR>"+
"Controle de Pragas    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>" +
"Michelle Brag    Tel. 12996898623    Preço: 180 Reais <BR>" +
"Controle de Pragas    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"</Pre>";
  }
  
  else if( Manualicon.getAttribute('src') === "icons/image5.png" ) {
	  
  document.getElementById("ManualEnd").innerHTML = "<h4> 1. Para reparar tubos de PVC com vazamentos ou rachaduras, você precisará de tubos de reposição, conectores, lixa, um serrote e cola de PVC. Reúna todos os materiais e mantenha-os por perto antes de iniciar o projeto. <BR> <BR> " +
"2. Examine o encaixe do tubo para detectar onde está o vazamento e meça o comprimento do tubo de substituição que você irá precisar. Use um serrote para cortar o comprimento necessário do tubo de PVC, deixando um pouco de comprimento extra em ambas as extremidades para encaixar um conector, se necessário. <BR>  <BR>" +
"3. Depois de cortar com o serrote, as bordas dos canos de PVC terão rebarbas. Esfregue suavemente com uma lixa para remover as rebarbas. <BR> <BR> " +
"4. Você também deve usar a lixa ao longo da superfície externa das bordas do tubo para fazer uma superfície áspera na qual a cola de tubo de PVC irá aderir melhor. <BR> <BR>" +
"5. Em seguida, passe a cola de PVC no interior dos conectores do tubo. <BR> <BR>" +
"6. Agora, cole o conector ou o comprimento do tubo de substituição à extremidade do tubo de PVC. <BR>  <BR>" +
"7. Faça o mesmo na outra extremidade do tubo danificado, prendendo o conector com cola para unir as duas extremidades do tubo. <BR>  <BR>" +
"8. Leia as instruções do fabricante na embalagem da cola de tubo de PVC para avaliar o tempo de secagem recomendado para garantir que a tubulação esteja bem colada. Após o tempo sugerido, verifique o tubo para ver se ele está bem fixado. </h4> ";
  
  
  document.getElementById("TipsEnd").innerHTML = "<h4> 1. É importante que você esteja muito atento ao sistema de drenagem dos ralos, sifão e o cano de escoamento. <BR> <BR>" +
"2. Evite ao máximo deixar detritos e sujeiras passarem pelos ralos da pia em direção ao esgoto. Esses detritos são responsáveis pela maioria dos entupimentos. Se você cuidar bastante dos ralos, vai economizar muito dinheiro com reparos. <BR> <BR>" +
"3. Sempre que você observar algum gotejamento e mau fechamento nas torneiras e registros troque-os. Se eles não forem trocados, além do desperdício de água podem causar infiltrações que prejudicam os rejuntes e azulejos, além da proliferação de microorganismos prejudiciais a saúde. <BR> <BR>" +
"4. Evite acumular pelos e cabelos no ralo, mesmo que isso seja natural, é preciso evitar que eles desçam pelo ralo. Existem modelos de ralo com grelhas especiais para peneiras os fios de cabelo evitando que eles escoam junto com a água. <BR> <BR>" +
"5. O vaso sanitário também precisa da sua atenção no dia a dia. Fique bem atento à vedação, pois se for mal feita pode ocasionar em vazamentos e mau cheiro. Certifique-se de que o vaso está bem fixado ao chão e a base corretamente alinhada à boca do cano. <BR> <BR>" +
"6. Não jogue objetos e materiais como: preservativos, absorventes, fio-dental e papel higiênico. Esses materiais podem se depositar na tubulação e causar entupimentos graves. </h4>"; 

	
	document.getElementById("Lojas").innerHTML = " <center> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/cola-de-pvc/p/fg8ae7ch03/am/pvcc%3Fseller_id%3Dmultinacional%26srsltid%3DAfmBOoo8JRTLfBROLQmMM5jTPEcLL1WwiB821F4CRMJkonEPvbbw55UV6MM&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjxsteg7PmCAxX3GrkGHcLEAYEQgOUECIYJ&usg=AOvVaw0SbY1JxKChUyKM9tUPHGtC'> <img src='Lojas/cola de pvc1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.americanas.com.br/produto/7408579247/adesivo-pvc-175g-com-pincel-tekbond%3Fopn%3DYSMESP%26offerId%3D64807c3f579fbc8d9135739e%26srsltid%3DAfmBOoqqq0UlcboT-1mrPtVTSVkCFkWaD07AYwJa4pO2tKuARIM_2Z9PWo0&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjxt9e37PmCAxUzCrkGHQEiC4EQguUECNsJ&usg=AOvVaw06LWjvWzCzk-7cSd4GS3Xw'> <img src='Lojas/cola de pvc2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=http://www.luitex.com.br/Adesivo-PVC-Cola-Tubo-17g-3130009-Brascola/p&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwj4z8HO7PmCAxU3G7kGHaJBA8gQguUECKcI&usg=AOvVaw2vQoe1mXfRBHbgjrWRx3J_'> <img src='Lojas/cola pvc3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>" +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://shopee.com.br/product/221509394/23597065039&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjC7q727PmCAxX2H7kGHWMTA5QQgOUECPkG&usg=AOvVaw3CvifaG_8syReYZtL-0WfL'> <img src='Lojas/conector1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.amazon.com.br/encaixe-cotovelo-conectores-Encaixe-conex%25C3%25A3o/dp/B0BQQYMD7X%3Fsource%3Dps-sl-shoppingads-lpcontext%26ref_%3Dfplfs%26psc%3D1%26smid%3DAFJIU69B9BM2C&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjf9o2P7fmCAxXLPbkGHdvqBdIQgOUECKcI&usg=AOvVaw3hc2Myf9s0P1nRM0jEx6xs'> <img src='Lojas/conector2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://s.click.aliexpress.com/deep_link.htm%3Faff_short_key%3DUneMJZVf%26dl_target_url%3Dhttps%253A%252F%252Fpt.aliexpress.com%252Fitem%252F32960891112.html%253F_randl_currency%253DBRL%2526_randl_shipto%253DBR%2526src%253Dgoogle&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiZztih7fmCAxX-LrkGHcLWCksQgOUECMUH&usg=AOvVaw3t0Fl7w28gvAo6ZA3z34Ve'> <img src='Lojas/conector3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>" +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://www.ferrazegomes.com.br/produtos/tubo-de-agua-25mm-6mts-classe-b-canaa/%3Fvariant%3D131973037%26pf%3Dmc&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiBl7-_7fmCAxUUCdQKHZawC2MQgOUECNIG&usg=AOvVaw2-PjHnJsR0CxbLIcewn-Hp'> <img src='Lojas/tubos1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.fcwdistribuidora.com.br/7096/cano-de-agua-20mm-(metro)-agua&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwi4sc3b7fmCAxUxD9QKHeFBBWgQgOUECM4G&usg=AOvVaw36NaO9nr9qPBfKIJ4ksb8w'> <img src='Lojas/tubos2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.bergaminiconstrucao.com/departamentos/hidraulica/tubo-soldavel-20mm-12-metro&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwi4sc3b7fmCAxUxD9QKHeFBBWgQgOUECOkH&usg=AOvVaw1NzX4Q2nY0ApPoZs65GeLj'> <img src='Lojas/tubos3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>" +
												  " <center> " +
			"<a href='https://www.google.com/url?url=https://www.lojadomecanico.com.br/produto/187349/31/274/Serrote-Profissional-500mm/153/%3Futm_source%3Dgoogleshopping%26utm_campaign%3Dxmlshopping%26utm_medium%3Dcpc%26utm_content%3D187349%26srsltid%3DAfmBOoq1nejbr_k8Ppr4faB1wvIKkogx9OLKusC35285mE4Gs3vnjmT7PpY&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiqysfz7fmCAxU_IbkGHadRBVEQguUECOQI&usg=AOvVaw3tTpw9SJhasg_qxpuTUiul'> <img src='Lojas/serrote1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.amazon.com.br/Tramontina-43242016-Serrote-Profissional-16/dp/B0778ZDQ33%3Fsource%3Dps-sl-shoppingads-lpcontext%26ref_%3Dfplfs%26psc%3D1%26smid%3DA1ZZFT5FULY4LN&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwjqk-3-7fmCAxViELkGHY31B7sQguUECMAL&usg=AOvVaw0KhXlhXmrc120HcNTPEhE_'> <img src='Lojas/serrote2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.google.com/url?url=https://www.magazineluiza.com.br/serrote-ramada-ouro-16/p/dke46khjh1/fs/fsrr/%3Fseller_id%3Duaiexpress1%26srsltid%3DAfmBOortTNnT6G5yHjnYj1MXtXhJxXGO27Cbc0VgTG1m9fb6-GH1i8TAWb0%26region_id%3D123481&rct=j&q=&esrc=s&opi=95576897&sa=U&ved=0ahUKEwiYxKeR7vmCAxV5O7kGHRStAwoQguUECOMI&usg=AOvVaw1nyP-IYRxDngzcLJeJS_se'> <img src='Lojas/serrote3.png'  id='Shop3' class='img'> </a>" +	
												  "</center>";
	
	document.getElementById("InfoEnd").innerHTML = "<Pre>" +
"<h3>" +
"Barbara Jones    Tel. 12996898623    Preço: 200 Reais <BR>" +
"Encanador    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>"  +
"Miguel Ântonio    Tel. 12996898623    Preço: 150 Reais <BR>"+
"Encanador    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>" +
"Ricardo Santos    Tel. 12996898623    Preço: 120 Reais <BR>" +
"Encanador    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"</Pre>";
  }
  
  else if( Manualicon.getAttribute('src') === "icons/image6.png" ) {
	  
  document.getElementById("ManualEnd").innerHTML = "<h4> 1. Para evitar qualquer choque e realizar a tarefa com segurança, desligue o disjuntor do chuveiro antes do manuseio do produto. <BR> <BR> " +
	 "2. Em seguida, abra a caixa do chuveiro e observe a posição da resistência queimada. O manual da resistência contém ilustrações com a posição correta. <BR> <BR>" +
"Alguns modelos de chuveiros utilizam a resistência montada em um suporte ou em um cartucho. <BR> <BR>" +
"3. Após, retire a resistência danificada e insira a nova. <BR> <BR>" +
"4. Feche o chuveiro. <BR> <BR>" +
"5. Ainda com o chuveiro desligado, abra o registro e deixe cair água fria por alguns minutos. Este procedimento evita a queima da resistência. <BR> <BR>" +
"Aproveite para verificar se existe algum vazamento de água.<BR> <BR>" +
"6. Feche o registro de água e ligue o disjuntor. <BR> <BR>" +
"7. Selecione uma temperatura e o chuveiro está pronto. </h4> ";
  
  
	document.getElementById("TipsEnd").innerHTML = "<h4> 1. Para evitar qualquer choque e realizar a tarefa com segurança, desligue o disjuntor do chuveiro antes do manuseio do produto.<BR> <BR>" +           
"2. Em seguida, abra a caixa do chuveiro e observe a posição da resistência queimada. O manual da resistência contém ilustrações com a posição correta. <BR> <BR>" +
"Alguns modelos de chuveiros utilizam a resistência montada em um suporte ou em um cartucho. <BR> <BR>" +                                                          
"3. Após, retire a resistência danificada e insira a nova. <BR> <BR>" +                                                                                           
"4. Feche o chuveiro. <BR> <BR>" +                                                                                                                                 
"5. Ainda com o chuveiro desligado, abra o registro e deixe cair água fria por alguns minutos. Este procedimento evita a queima da resistência. <BR> <BR>" +      
"Aproveite para verificar se existe algum vazamento de água. <BR> <BR>" +                                                                                          
"6. Feche o registro de água e ligue o disjuntor.<BR> <BR>" +                                                                                                   
"7. Selecione uma temperatura e o chuveiro está pronto.  </h4>"; 

	document.getElementById("Lojas").innerHTML = " <center> " +
			"<a href='https://www.leroymerlin.com.br/resistencia-para-chuveiro-220v-5500w-bello-banho-maxi-ducha-jet-set-e-torneiras-lorenzetti_85261421?store_code=55'> <img src='Lojas/Resistencia1.png' id='Shop1' class='img'> </a> " +
			"<a href='https://www.amazon.com.br/Resist%C3%AAncia-5500W-Lorenzetti-7589029-Pequeno/dp/B076PMPFZQ?source=ps-sl-shoppingads-lpcontext&ref_=fplfs&psc=1&smid=A1ZZFT5FULY4LN'> <img src='Lojas/Resistencia2.png' id='Shop2' class='img'> </a> " +
			"<a href='https://www.mercadolivre.com.br/resistencia-lorenzetti-maxi-bello-relax-nova-cor-cinza-escuro/p/MLB25433719?matt_tool=18956390&utm_source=google_shopping&utm_medium=organic&from=gshop'> <img src='Lojas/Resistencia3.png' id='Shop3' class='img'> </a>" +	
												  "</center>";
												
	
	
	document.getElementById("InfoEnd").innerHTML = "<Pre>" +
"<h3>" +
"Pedro Santos    Tel. 12996898623    Preço: 180 Reais <BR>" +
"Eletricista    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>"  +
"Rafael Almeida    Tel. 12996898623    Preço: 150 Reais <BR>" +
"Eletricista    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"<HR>" +

"<h3>" +
"Ricardo Melo   Tel. 12996898623    Preço: 100 Reais <BR>" +
"Eletricista    Segunda a Sexta Feira     8h ás 16h" +
"</h3>" +

"</Pre>";
  }
}
