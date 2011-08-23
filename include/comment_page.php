<script type="text/javascript" src="./javascript/demo2.js"></script>
	<div id="mask" onload="init()" >
		<div id="input">
			<div id="selectConetentsBox">
				<p id="selectedContents">this is what you selected.</p>
			</div>
			<textarea id="comment" >text area</textarea>
			<button onclick="setComment()">Note</button>
			<button onclick="hideMask()" >Cancel</button>
		</div>
	</div>
	<div id="main">
		<div id="artical" onmouseup="onSelected()">
			Javascript DOM provides number of methods to append Div tag contents dynamically. In Javascript code you can use innerHTML, innerText or appendChild methods to append the Div HTML tag’s contents. Same Javascript DOM methods can be used to append the content of other HTML elements also. You can concatenate the previous content and new content dynamically using document object along with its method getElementById.
			Javascript getElementById method allows you to access the properties of specified HTML tag through its id attribute value passed to the getElementById method.
		</div>
		<div id="note">
		</div>
	</div>
