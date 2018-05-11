var btnAtv = $('#btnAtivarAudio');
var btnDstv = $('#btnDstvAudio');
var iframe = $('#videoServicos');

btnAtv.on("click",function(){
	iframe.removeAttr("src");
	iframe.attr("src","https://www.youtube.com/embed/QwievZ1Tx-8?autoplay=1&mute=0&controls=0");
});

btnDstv.on("click",function(){
	iframe.removeAttr("src");
	iframe.attr("src","https://www.youtube.com/embed/QwievZ1Tx-8?autoplay=1&mute=1&controls=0");
});