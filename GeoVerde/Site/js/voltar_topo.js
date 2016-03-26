// JavaScript Document
$(document).ready(function(e) {
    
	//Voltar ao topo
	$("#scroll_topo").click(function(e) {
        //Anulando algum possível efeito padrão do browser
		e.preventDefault();
		
		//Ir para o topo
		$("html,body").animate({scrollTop:0},500);
		
    });
	
	//Slider
	
});