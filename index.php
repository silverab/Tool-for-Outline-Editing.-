<?php include 'includes/header.php'; ?>
</head>

<body onload="enableEditMode();">

	<?php include 'includes/navbar.php'; ?>

	<div class="container mt-5">
		<div class="jumbotron">
		  <h1 class="text-center">Outline Editor</h1>
			<button onclick="execCmd('bold');"><i class="fa fa-bold"></i></button>
			<button onclick="execCmd('italic');"><i class="fa fa-italic"></i></button>
			<button onclick="execCmd('underline');"><i class="fa fa-underline"></i></button>
			<button onclick="execCmd('strikeThrough');"><i class="fa fa-strikethrough"></i></button>
			<button onclick="execCmd('justifyLeft');"><i class="fa fa-align-left"></i></button>
			<button onclick="execCmd('justifyCenter');"><i class="fa fa-align-center"></i></button>
			<button onclick="execCmd('justifyRight');"><i class="fa fa-align-right"></i></button>
			<button onclick="execCmd('justifyFull');"><i class="fa fa-align-justify"></i></button>
			<button onclick="execCmd('cut');"><i class="fa fa-cut"></i></button>
			<button onclick="execCmd('copy');"><i class="fa fa-copy"></i></button>
			<button onclick="execCmd('indent');"><i class="fa fa-indent"></i></button>
			<button onclick="execCmd('outdent');"><i class="fa fa-dedent"></i></button>
			<button onclick="execCmd('subscript');"><i class="fa fa-subscript"></i></button>
			<button onclick="execCmd('superscript');"><i class="fa fa-superscript"></i></button>
			<button onclick="execCmd('undo');"><i class="fa fa-undo"></i></button>
			<button onclick="execCmd('redo');"><i class="fa fa-repeat"></i></button>
			<button onclick="execCmd('insertUnorderedList');"><i class="fa fa-list-ul"></i></button>
			<button onclick="execCmd('insertOrderedList');"><i class="fa fa-list-ol"></i></button>
			<button onclick="execCmd('insertParagraph');"><i class="fa fa-paragraph"></i></button>

			<select name="" id="" onchange="execCommandWithArg('formatBlock', this.value);">
				<option value="H1">H1</option>
				<option value="H2">H2</option>
				<option value="H3">H3</option>
				<option value="H4">H4</option>
				<option value="H5">H5</option>
				<option value="H6">H6</option>
			</select>
			<button onclick="execCmd('insertHorizontalRule');">HR</button>
			<button onclick="execCommandWithArg('createLink', prompt('Enter a URL', 'http://'));"><i class="fa fa-link"></i></button>
			<button onclick="execCmd('unlink');"><i class="fa fa-unlink"></i></button>
			<button onclick="toggleSource();"><i class="fa fa-code"></i></button>
			<button onclick="toggleEdit();"><i class="fa fa-edit"></i>Toggle</button>
			<select name="" id="" onchange="execCommandWithArg('fontName', this.value);">
				<option value="Arial">Arial</option>
				<option value="Comic Sans MS">Comic Sans MS</option>
				<option value="Courier">Courier</option>
				<option value="Georgia">Georgia</option>
				<option value="Tahoma">Tahoma</option>
				<option value="Times New Roman">Times New Roman</option>
				<option value="Verdana">Verdana</option>
			</select>
			<select name="" id="" onchange="execCommandWithArg('fontSize', this.value);">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
			</select>
			Fore Color: <input type="color" onchange="execCommandWithArg('foreColor', this.value);">
			Background Color: <input type="color" onchange="execCommandWithArg('hiliteColor', this.value);">
			<button onclick="execCmd('selectAll');">Select All</button>

		  <hr class="my-4">
		  <iframe name="rickTextField" style="width: 100%; height: 100%;" class="border-dark"></iframe>
		</div>
	</div>
<?php include 'includes/footer.php'; ?>