var data = new Array();
var noteList = new Array();
var count = 0;
var range;
var selObj;
function init(){
	document.getElementById("mask").style.display = "none";
}
function onSelection(){
	selObj = window.getSelection();
	range  = selObj.getRangeAt();
	var text   = selObj.toString();
	if(inRange(range)){
		alert("You have choose a same range.Please recheck!");
		return;
	}
	if(text.length<3){
		alert("Too few charactor");
		return;
	}
	if(text != null){
		document.getElementById("selectedContents").innerHTML = text;
	}
	showMask();
}
function inRange(range){
	var start = range.startOffset;
	var end   = range.endOffset;
	for(i=0;i<data.length;i++){
		/*in the same range*/
		if( ( data[i][0]<start && data[i][1]>start )||( data[i][0]<end && data[i][1]>end ) )
			return 1;
		else
			return 0;
	}
}
function markRange(range){
	/*[start, end, text, comment ]*/
	data[count]
}
function setComment(){
	var noteBox = document.createElement("div");
	/*set range data*/
	data[count] = new Array();
	data[count][0] = range.startOffset;
	data[count][1] = range.endOffset;
	data[count][2] = selObj.toString();
	data[count][3] = nl2br(document.getElementById("comment").value);

	noteBox.innerHTML = data[count][2];
	noteBox.className = "noteClass";
	/**/
	noteBox.addEventListener('dblclick',test,false);
	/**/
	var comment = document.createElement("div");
	comment.innerHTML = data[count][3];
	comment.setAttribute("align","right");
	noteBox.appendChild(comment);
	document.getElementById("note").appendChild(noteBox);
	hideMask();
	count++;
	console.log(count);
}
function test(){
	alert("1");
}
function showMask(){
		document.getElementById("mask").style.display = "block";
}
function hideMask(){
		document.getElementById("mask").style.display = "none";
}
function nl2br(string){
	return string.replace(/\n/g,"<br/>");
}
function appendNote(selObj){
	var divTag = document.createElement("div");
	divTag.id = "note";
	divTag.setAttribute("align","center");
	divTag.innerHTML = selObj.toString();
	document.getElementById("note").appendChild(divTag);
}
