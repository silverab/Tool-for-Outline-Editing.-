var autosave_timer = null;

		function save() {
		    // actual save code
		}

		function autosave() {
		    if(autosave_timer)
		        clearTimeout(autosave_timer);

		    autosave_timer = setTimeout(save, 5000);
		}


	var showingSourceCode = false;
	var isInEditMode = true;

	function enableEditMode(){
		rickTextField.document.designMode = 'On';
	}

	function execCmd(command){
		rickTextField.document.execCommand(command, false, null);
	}

	function execCommandWithArg(command, arg){
	 	rickTextField.document.execCommand(command, false, arg);
	}

	function toggleSource(){
		if (showingSourceCode) {
			rickTextField.document.getElementsByTagName('body')[0].innerHTML = rickTextField.document.getElementsByTagName('body')[0].textContent;
			showingSourceCode = false;
		}else {
			rickTextField.document.getElementsByTagName('body')[0].textContent = rickTextField.document.getElementsByTagName('body')[0].innerHTML;
			showingSourceCode = true;
		}
	}

	function toggleEdit(){
		if(isInEditMode){
			rickTextField.document.designMode = 'Off';
			isInEditMode = false;
		}else{
			rickTextField.document.designMode = 'On';
			isInEditMode = true;
		}
	}

// new.php

function update()
{
	var idoc = document.getElementById('iframe').contentWindow.document;
	idoc.open();
	idoc.write(editor.getValue());
	idoc.close();
}

function setupEditor()
{
  window.editor = ace.edit("editor");
  editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/html");
  editor.setValue(`<!DOCTYPE html>
<html>
<head>
</head>
<body>

</body>
</html>`,1); //1 = moves cursor to end

  editor.getSession().on('change', function() {
    update();
  });

  editor.focus();
  
  
  editor.setOptions({
    fontSize: "16pt",
    showLineNumbers: false,
    showGutter: false,
    vScrollBarAlwaysVisible:true,
    enableBasicAutocompletion: false, enableLiveAutocompletion: false
  });

  editor.setShowPrintMargin(false);
  editor.setBehavioursEnabled(false);
}

setupEditor();
update();

// auto save

	
	