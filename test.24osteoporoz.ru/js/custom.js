

var config = {
	fields: {
		"Name": "#name1xxx", // Name of a visitor, submitting the page
		"MobilePhone": "#phone1xxx", // Visitor's phone number
		"Email": "css-selector", // Visitor's email
		"Zip": "css-selector", // Visitor's ZIP code
		"Company": "css-selector", // Name of a company (for business landing pages)
		"Industry": "css-selector", // Company industry (for business landing pages)
		"FullJobTitle": "css-selector", // Visitor's job title (for business landing pages)
		"UseEmail": "css-selector" // Logical value: 'true' equals to visitor's opt-in to receive emails
	},
	landingId: "",
	serviceUrl: "https://polimax.bpmonline.com/0/ServiceModel/GeneratedWebFormService.svc/SaveWebFormLeadData",
	redirectUrl: ""
};
var config2 = {
	fields: {
			"Name": "#name2xxx", // Name of a visitor, submitting the page
		"MobilePhone": "#phone2xxx", // Visitor's phone number
				"Email": "css-selector", // Visitor's email
		"Zip": "css-selector", // Visitor's ZIP code
		"Company": "css-selector", // Name of a company (for business landing pages)
		"Industry": "css-selector", // Company industry (for business landing pages)
		"FullJobTitle": "css-selector", // Visitor's job title (for business landing pages)
		"UseEmail": "css-selector" // Logical value: 'true' equals to visitor's opt-in to receive emails
		},
	landingId: "",
	serviceUrl: "https://polimax.bpmonline.com/0/ServiceModel/GeneratedWebFormService.svc/SaveWebFormLeadData",
	redirectUrl: ""
};
function init_land(){

    

    $("#sticker form").attr("onSubmit","createLea(); yaCounter25029503.reachGoal('consultation'); ga('send', 'event', 'click2', 'submit2'); return false");
$("#cme-form-main form").attr("onSubmit","createLead2(); yaCounter25029503.reachGoal('mudak'); ga('send', 'event', 'zakazvonok', 'submit1'); return false");
$('#sticker form').submit(function(){createLead($(this)); return false});
$('#cme-form-main form').submit(function(){createLead2(); return false});

  $($("#sticker form").find("span.your-name > input")).attr("id","name1xxx");
  $($("#sticker form").find("span.your-phone > input")).attr("id","phone1xxx");
  
  $("form.cme .cme-txt[name*='Имя']").attr("id","name2xxx");
  $("form.cme .cme-txt[name*='Телефон']").attr("id","phone2xxx");
  
$($("#sticker form").find("input[type=submit]")).attr("onclick","createLead(); return false").prop("type","button");
$($("#cme-form-main form").find("button")).attr("onclick","createLead2(); return false");
    
    
	var landingIds=[];
		landingIds['o-kompanii']= "a643c070-124c-43b9-8a53-4e604f3d45cf";
		landingIds['montazh']= "be822544-b701-4d3b-8603-2b286c123507";
		landingIds['garantiya']= "57d06262-d90c-458e-a056-ab6be69ca828";
		landingIds['sertifikaty']= "d196a53c-3911-4def-ba39-61be2cdae076";
		landingIds['katalog/polikarbonat/sotovyj-polikarbonat']= "e4583672-3859-4fe3-b736-1b919e955274";
		landingIds['katalog/polikarbonat/monolitnyj-polikarbonat']= "5c23f3a3-7778-40f1-ae5a-3ea1cf1c5436";
		landingIds['katalog/polikarbonat/monolitnyj-volnistyj-polikarbonat']= "76b471c9-c94c-439f-8afc-f6a6c94903cc";
		landingIds['katalog/polikarbonat/sotovyj-polikarbonat-mnogokamernyj-so-strukturoj-titan']= "2740c298-5a89-4d48-a802-a7fe7793c564";
		landingIds['katalog/polikarbonat/sotovyj-polikarbonat-s-effektom-zhalyuzi']= "fb3df7cf-d185-4c4e-9118-327f29a4c631";
		landingIds['katalog/orgsteklo']= "4b51543c-2a57-41cf-82af-bf06f86e28a6";
		landingIds['katalog/komplektuyushhie']= "adeb5618-4048-4574-850c-7f8efbf2b57b";
		landingIds['katalog/sotovyj-polipropilen']= "adb85001-9042-44e6-a348-7c221cb3432d";
		landingIds['katalog/teplicy']= "3c206542-4757-4112-9c7e-c391123d70a7";
		landingIds['katalog/navesy']= "9782b5e7-d304-4f7d-804e-35c241fa07d5";
		landingIds['dostavka']= "f91fc299-6753-49c9-9abb-48e3ce7540e1";
		landingIds['prajs-list']= "32451367-a18d-4e00-9d83-de7f00449140";
		landingIds['poleznaya-informaciya/akcii']= "1b7d1818-7f17-422e-a96b-92e282ce2109";
		landingIds['optovikam']= "68b8a401-a237-43c2-952e-43f0b5c4b41f";
		landingIds['kontakty']= "a298a209-4602-4da4-b4bb-a367e87ff50a";

			config.landingId="286b3364-0b5f-4a8b-a4f1-73a4cc852306";
			config2.landingId="286b3364-0b5f-4a8b-a4f1-73a4cc852306";
			
	for(var i in landingIds){
		if(location.href.match(i)){
			config.landingId=landingIds[i];
			config2.landingId=landingIds[i];
		}
	}
}

function createLead(th) {
	landing.createLeadFromLanding(config);
	submitLeadForm(th);
	$("#sticker form")[0].reset();
	alert("Заявка отправлена");
}

function createLead2() {
	landing.createLeadFromLanding(config2);
//	$("#cme-form-main form")[0].reset();
//	alert("Заявка отправлена");
}

init_land();
$(window).load(function(){
    
    
init_land();
})

function submitLeadForm(th) {
	console.log(th);
}