function onselection(){
	count = 0;
	var selObj = window.getSelection();
	var range = selObj.getRangeAt();
	console.log(range.startOffset);

}
function addNote(id,note){
	document.getElementById(id).appendChild(note);
}
