
/*
function validaBusca(){
	if(document.querySelector('#q').value == ''){		
		document.querySelector('#form-busca').style.background = 'red';
		alert('Não podia ter deixado em branco a busca!');
		return false;
	}
}
*/

//usando funçoes anônimas(avançadas)
/*
document.querySelector('#form-busca').onsubmit = function() {
	if(document.querySelector('#q').value == ''){
		document.querySelector('#form-busca').style.background = 'red';
		alert('Não podia ter deixado em branco a busca!');
		return false;
	}
}
*/

//document.querySelector('#form-busca').onsubmit = validaBusca;

//Banner Rotativo
var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner() {
	bannerAtual = (bannerAtual + 1) % 2; //sempre retorna 0 ou 1
	document.querySelector('.destaque2 img').src = banners[bannerAtual];
}

//setInterval(trocaBanner, 2000);

//nao funciona
var timer = setInterval(trocaBanner, 2000);

var controle = document.querySelector('.pause');

controle.onclick = function(){
	if(controle.className == 'pause'){
		clearInterval(timer);
		controle.className = 'play';
	} else {
		timer = setInterval(trocaBanner, 2000);
		controle.className = 'pause';
	}
	
	return false;
}
