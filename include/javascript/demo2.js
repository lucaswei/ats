"use strict";
var noteList;
var selObj;
var range;
function init(){
	$('#mask').css('display','none');
	noteList = new NoteList();
	$('#artical').mouseup(function(e){onSelected(e)});
	var input_note = $('#note').html();
	$('#submit').submit(function() {
		$('#note_input').val(collectNote());
		$('#artical_input').val( $('#artical').html() );
		return true;
	});
}
function collectNote () {
	var i=0;
	var output = "";
	while( noteList.list[i] ){
		output += noteList.list[i].comment+"/";
		i++;
	}
	return output;
}
function showMask(x,y,text){
	$('#comment').html("");
	$('#mask')
		.css('top',y+25)
		.css('left',x-150)
		.show("slow");
	$('#selectedContents').html(text);
}
function hideMask(){
	$('#mask').hide("fast");
}
function onSelected(e){
	selObj = window.getSelection();
	range = selObj.getRangeAt(0);
	if(noteList.illegalRange(range)){
		notice("You have marked a same range.");
		hideMask();
		return;
	}
	if(range.toString().length<5){
		if (range.toString().length == 0) {
			hideMask();
			return;
		}
		notice("You selected too few word");
		hideMask();
		return;
	}
	showMask(e.clientX, e.clientY, selObj.toString());
}
function setComment(){
	hideMask();
	noteList.addList();
}
function notice(text) {
	$('#selectNotice')
		.html(text)
		.show("slow")
		.delay(800)
		.fadeOut("slow");
}
function NoteList(){
	this.list = new Array();
	this.note = document.getElementById("note");
	this.divNumber=0;

	this.addList = function(){
		var divNumber = this.divNumber;
		this.list[divNumber] = new Note();
		this.list[divNumber].addNote();
		divNumber++;
		var note = document.getElementById("note");
		var tag = document.getElementsByClassName("marked");
		for (var i = 0; i < this.list.length; i++) {
			var text = tag[i].firstChild.nodeValue;
			for (var j = 0; j < this.list.length; j++) {
				if(this.list[j].text == text){
					this.list[j].setNumber(i);
					note.appendChild(this.list[j].noteBox);
				}
			}
		}
		this.divNumber = divNumber;
	}
	this.illegalRange = function (range){
		var content = range.cloneContents();
		if(range.endContainer.parentElement.nodeName == "SPAN"){
			return true;
		}
		while(content.firstChild){
			if (content.firstChild.nodeName=="SPAN") {
				return 1;
			}
			content.removeChild(content.firstChild);
		}
		return 0;
	}
	this.remove = function(node){
		for (var i = 0; i < this.list.length; i++) {
			if(this.list[i].noteBox==node){
				document.getElementById("artical").removeChild(this.list[i].textBox);
				this.list[i].remove();
				this.list.splice(i,1);
				this.divNumber--;
				var tag = document.getElementsByClassName("marked");
				for (var j = 0; j < this.list.length; j++) {
					this.list[j].setNumber(j);
				};
				break;
			}
		};
	}
}
function Note(){
	this.textBox;
	this.noteBox;
	this.textNum;
	this.noteNum;
	this.selObj = selObj;
	this.range  = range;
	this.text   = this.range.toString();
	this.comment= document.getElementById("comment").value;
	this.addNote = function(){
		var span = document.createElement("span");
		var txt = document.createTextNode(this.text);
		this.textNum = document.createElement("sup");
		span.className = "marked";
		span.appendChild(txt);
		span.appendChild(this.textNum);
		this.range.deleteContents();
		this.range.insertNode(span);
		this.textBox = span;
		var div = document.createElement("div");
		this.noteNum = document.createElement("span");
		var comment = document.createTextNode(this.comment);
		var img = document.createElement("img");
		img.addEventListener("click",function(){noteList.remove(this.parentNode)},false);
		img.src = "http://"+window.location.host+"/ats/img/close.gif";
		div.appendChild(this.noteNum);
		div.appendChild(comment);
		div.appendChild(img);
		this.noteBox = div;
		var note = document.getElementById("note");
		note.appendChild(div);
	}
	this.setNumber = function(num){
		num++;
		this.textNum.innerHTML = "["+num.toString()+"]";
		this.noteNum.innerHTML = "["+num.toString()+"]";
	}
	this.remove = function() {
		this.range.deleteContents();
		var txt = document.createTextNode(this.text);
		this.range.insertNode(txt);
		var note = document.getElementById("note");
		note.removeChild(this.noteBox);
	}
}
