"use strict";
var globalList;
var localList;
var selObj;
var range;
function init(){
	$('#mask').css('display','none');
	globalList = new NoteList("global");
	localList = new NoteList("local");
	$('#artical').mouseup(function(e){onSelected(e)});
	var input_note = $('#note').html();
	$('#submit').submit(function() {
		$('#global_input').val(collectNote("global"));
		$('#local_input').val(collectNote("local"));
		$('#artical_input').val( $('#artical').html() );
		return true;
	});
}
function collectNote (type) {
	var i=0;
	var output = "";
	var noteList;
	if (type == "global") {
		noteList = globalList;
	}else if (type == "local" ) {
		noteList = localList;
	}
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
		.show("fast");
	$('#selectedContents').html(text);
	$('#mask')
		.focus()
		.blur( function(){
				hideMask();
			}
		);
}
function hideMask(){
	$('#mask').hide("fast");
}
function onSelected(e){
	selObj = window.getSelection();
	range = selObj.getRangeAt(0);
	var error;
	/* setting */
	$('#global_button').css('display','inline');
	$('#local_button').css('display','inline');
	$('#comment').val("");
	if(error = illegalRange(range)){
		notice(error);
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
function setComment(type){
	hideMask();
	if( $('#comment').val() == "" ){
		notice("comments can't be null");
		return;
	}
	if (type == "global") {
		globalList.addList();
	}else if (type == "local") {
		localList.addList();
	}
}
function notice(text) {
	$('#selectNotice')
		.html(text)
		.show("slow")
		.delay(800)
		.fadeOut("slow");
}
function illegalRange(range){
	var content = range.cloneContents();
	while(content.firstChild){
		if (content.firstChild.nodeName=="SPAN") {
			return "You have marked a same range.";
		}
		content.removeChild(content.firstChild);
	}
	var className = range.endContainer.parentNode.className;
	if (className == "global") {
		$('#global_button').css('display','none');
	}else if (className == "local") {
		return "You can't comment between 'local' comment";
	};
	return false;
}
function NoteList(type){
	this.list = new Array();
	this.type = type;
	this.note = document.getElementById(this.type+"Note");
	this.divNumber=0;

	this.addList = function(){
		var divNumber = this.divNumber;
		this.list[divNumber] = new Note( this.type, this );
		this.list[divNumber].addNote();
		divNumber++;
		var note = document.getElementById(this.type+"Note");
		var tag = document.getElementsByClassName( this.type.toString() );
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
	this.remove = function(node){
		var note = this.findNote(node);
		this.removeTextChild(note);
		note.textBox.parentNode.removeChild(note.textBox);
		note.remove();
		var temp = this.list.indexOf(note);
		this.list.splice(temp,1);
		this.divNumber--;
		var tag = document.getElementsByClassName(this.type.toString());
		for (var j = 0; j < this.list.length; j++) {
			this.list[j].setNumber(j);
		};
	}
	this.findNote = function(node){
		for (var i = 0; i < this.list.length; i++) {
			if (this.list[i].noteBox == node || this.list[i].textBox == node) {
				return this.list[i];
			}
		}
	}
	this.removeTextChild = function(note){
		var textBox = note.textBox;
		var className = textBox.className;
		var child = textBox.firstChild;
		do {
			if (child.className != className) {
				if (child.className == "local") {
					localList.remove(child);
				}else if (child.className == "global") {
					globalList.remove(child);
				};
			};
		} while (child = child.nextSibling);
	}
}
function Note( type, list ){
	this.type = type;
	this.list = list;
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
		span.className = this.type.toString();
		span.appendChild(txt);
		span.appendChild(this.textNum);
		this.range.deleteContents();
		this.range.insertNode(span);
		this.textBox = span;
		var div = document.createElement("div");
		this.noteNum = document.createElement("span");
		var comment = document.createTextNode(this.comment);
		var img = document.createElement("img");
		list = this.list;
		img.addEventListener("click",function(){list.remove(this.parentNode)},false);
		img.src = "http://"+window.location.host+"/ats/img/close.gif";
		div.appendChild(this.noteNum);
		div.appendChild(comment);
		div.appendChild(img);
		this.noteBox = div;
		var note = document.getElementById(this.type+"Note");
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
		var note = document.getElementById(this.type+"Note");
		note.removeChild(this.noteBox);
	}
}
