
var userSettings = {
	wheel: {},
	frein: {},
	guidon: {},
	poignee: {},
	garde:{},
	protege:{},
	deck:{},
	grip:{},
	amort:{},
	jantes:{},
	sonnette:{},
	franges:{},
	scale:{}
};

function GetWheelColor(color)
{
	userSettings.wheel.color = color;
	console.log("la première valeur stockée est " + userSettings.wheel.color);
}

function GetFreinColor(color){
	userSettings.frein.color = color;
	console.log("la 2e valeur stockée est " + userSettings.frein.color);
}

function GetGuidonColor(color){
	userSettings.guidon.color = color;
	console.log("la 3e valeur stockée est " + userSettings.guidon.color);
}

function GetPoigneeColor(color){
	userSettings.poignee.color = color;
	console.log("la 4e valeur stockée est " + userSettings.poignee.color);
}

function GetPoigneeMaterial(mat){
	userSettings.poignee.mat = mat;
	console.log("la 4e valeur stockée est " + userSettings.poignee.mat);
}

function GetGardeColor(color){
	userSettings.garde.color = color;
	console.log("la 5e valeur stockée est " + userSettings.garde.color);
}

function GetProtegeColor(color){
	userSettings.protege.color = color;
	console.log("la 6e valeur stockée est " + userSettings.protege.color);
}
function GetDeckColor(color){
	userSettings.deck.color = color;
	console.log("la 7e valeur stockée est " + userSettings.deck.color);
}

function GetGripColor(color){
	userSettings.grip.color = color;
	console.log("la 8e valeur stockée est " + userSettings.grip.color);
}

function GetGripMaterial(mat){
	userSettings.grip.mat = mat;
	console.log("la 8e valeur stockée est " + userSettings.grip.mat);
}

//couleur des amortisseurs
function GetAmortColor(color){
	userSettings.amort.color = color;
	console.log("la 9e valeur stockée est " + userSettings.amort.color);
}

//couleur des jantes
function GetJantesColor(color){
	userSettings.jantes.color = color;
	console.log("la 10e valeur stockée est " + userSettings.jantes.color);
}

function GetTrottiScale(num){
	userSettings.scale.age = num;
	console.log("la 10e valeur stockée est " + userSettings.scale.age);
}

function GetSonnetteStatut(bool){
	userSettings.sonnette.statut = bool;
	console.log("la 10e valeur stockée est " + userSettings.sonnette.statut);
}

function GetFreinGStatut(bool){
userSettings.frein.statut = bool;
	console.log("la 10e valeur stockée est " + userSettings.frein.statut);
}
function GetFrangesStatut(bool){
userSettings.franges.statut = bool;
	console.log("la 10e valeur stockée est " + userSettings.franges.statut);
}

function getSonnetteColor(color){
	userSettings.sonnette.color = color;
	console.log("la 10e valeur stockée est " + userSettings.sonnette.color);
}

function Screenshot(img){
	console.log(img);
}

function sendData()
{
	$.ajax({
		type: "POST",
  		url: '/send_JSON.php',
  		data: {
  			data : JSON.stringify(userSettings)
  		}
	});
}

function redir(){
	window.location = "/index.php";
}

window.addEventListener('keyup', function(evt){
	if(evt.keyCode==32){
		redir();
	}
});