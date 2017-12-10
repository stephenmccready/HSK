function jLoadTones() {
	var c = document.getElementById("tone1"); c.width = 240; c.height = 120;
	var ctx = c.getContext("2d");
	ctx.moveTo(0,30); ctx.lineTo(240,30); ctx.stroke();
	ctx.moveTo(0,60); ctx.lineTo(240,60); ctx.stroke();
	ctx.moveTo(0,90); ctx.lineTo(240,90); ctx.stroke();ctx.beginPath();
	ctx.strokeStyle="red"; ctx.lineWidth=3;ctx.moveTo(0,5); ctx.lineTo(120,5); ctx.stroke();
	c = document.getElementById("tone2"); c.width = 240; c.height = 120;
	ctx = c.getContext("2d");
	ctx.moveTo(0,30); ctx.lineTo(240,30); ctx.stroke();
	ctx.moveTo(0,60); ctx.lineTo(240,60); ctx.stroke();
	ctx.moveTo(0,90); ctx.lineTo(240,90); ctx.stroke();ctx.beginPath();
	ctx.strokeStyle="red"; ctx.lineWidth=3; ctx.beginPath(); ctx.arc(0,-265,325,1.2*Math.PI,1.8*Math.PI,true); /*ctx.createRadialGradient(0,60,10,200,0,10);*/ ctx.stroke();
	c = document.getElementById("tone3"); c.width = 240; c.height = 120;
	ctx = c.getContext("2d");
	ctx.moveTo(0,30); ctx.lineTo(240,30); ctx.stroke();
	ctx.moveTo(0,60); ctx.lineTo(240,60); ctx.stroke();
	ctx.moveTo(0,90); ctx.lineTo(240,90); ctx.stroke();ctx.beginPath();
	ctx.strokeStyle="red"; ctx.lineWidth=3; ctx.beginPath(); ctx.arc(100,-25,145,1.2*Math.PI,1.8*Math.PI,true); /*ctx.createRadialGradient(0,60,10,200,0,10);*/ ctx.stroke();
	c = document.getElementById("tone4"); c.width = 240; c.height = 120;
	ctx = c.getContext("2d");
	ctx.moveTo(0,30); ctx.lineTo(240,30); ctx.stroke();
	ctx.moveTo(0,60); ctx.lineTo(240,60); ctx.stroke();
	ctx.moveTo(0,90); ctx.lineTo(240,90); ctx.stroke();ctx.beginPath();
	ctx.strokeStyle="red"; ctx.lineWidth=3; ctx.moveTo(0,0); ctx.lineTo(60,120); ctx.stroke();
	c=ctx=null;
}

$(function(){
	$(".dropdown-menu > li > a.trigger").on("click",function(e){
		var current=$(this).next();
		var grandparent=$(this).parent().parent();
		if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
			$(this).toggleClass('right-caret left-caret');
		grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
		grandparent.find(".sub-menu:visible").not(current).hide();
		current.toggle();
		e.stopPropagation();
		current=grandparent=null;
	});
	$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
		var root=$(this).closest('.dropdown');
		root.find('.left-caret').toggleClass('right-caret left-caret');
		root.find('.sub-menu:visible').hide();
	});
});

function play(id){
	var aud = document.getElementById(id);
	aud.play();
	aud.onended = function() {aud=null;};
	aud=null;
}
function setTitle() {
	var url=window.location.href;
	var currLesson=url.substr(40,2);
	var level=url.substr(37,1);
	if(currLesson.substr(1,1)==".") {
		currLesson=currLesson.substr(0,1);
	}
	$("#leveltitle").text("L"+level+"-"+currLesson.toString());
}
function prev() {
	var url=window.location.href;
	var currLesson=url.substr(40,2);

	if(currLesson.substr(1,1)==".") {
		currLesson=currLesson.substr(0,1);
	}
	var prevLesson=parseInt(currLesson)-1;
	if(prevLesson==0) {
		prevLesson=15;
	}
	var newurl=url.substr(0,40)+prevLesson.toString()+".php";
	window.location = newurl;
	var url=currLesson=prevLesson=newurl=null;
}
function next() {
	var url=window.location.href;
	var currLesson=url.substr(40,2);

	if(currLesson.substr(1,1)==".") {
		currLesson=currLesson.substr(0,1);
	}
	var nextLesson=parseInt(currLesson)+1;
	if(nextLesson==16) {
		prevLesson=1;
	}
	var newurl=url.substr(0,40)+nextLesson.toString()+".php";
	window.location = newurl;
	var url=currLesson=nextLesson=newurl=null;
}
function myToggle(id) {
	var x=document.getElementById('py'+id);
	if(id.substr(0,1)=="g"){
		x=document.getElementById('en'+id);
	} else if (id.substr(0,1)=="z") {
		x=document.getElementById('han'+id);
	}
    if (x.style.display != 'block') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
