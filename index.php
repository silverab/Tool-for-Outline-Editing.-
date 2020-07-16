<?php include 'includes/header.php'; ?>
</head>
<body>

<?php include 'includes/navbar.php'; ?>
		
		<div class="container my-5">
				<h3 class="bg-dark p-3 text-info border">Smart Outline Editor</h3>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="tool-list" class="list-unstyled">
						<li class="tool" class="list-inline">
						<button	type="button" data-command="bold" class="tool--btn">
							<i class=' fas fa-bold'></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command="italic" class="tool--btn">
							<i class="fa fa-italic"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command="underline" class="tool--btn">
							<i class="fa fa-underline"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button type="button" data-command='justifyLeft' class="tool--btn">
							<i class=' fas fa-align-left'></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='justifyCenter' class="tool--btn">
							<i class=' fas fa-align-center'></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='justifyFull' class="tool--btn">
							<i class="fa fa-align-justify"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='cut' class="tool--btn">
							<i class="fa fa-cut"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='copy' class="tool--btn">
							<i class="fa fa-copy"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='indent' class="tool--btn">
							<i class="fa fa-indent"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='outdent' class="tool--btn">
							<i class="fa fa-dedent"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='subscript' class="tool--btn">
							<i class="fa fa-subscript"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='superscript' class="tool--btn">
							<i class="fa fa-superscript"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='undo' class="tool--btn">
							<i class="fa fa-undo"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='redo' class="tool--btn">
							<i class="fa fa-repeat"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='insertUnorderedList' class="tool--btn">
							<i class="fa fa-list-ul"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='insertOrderedList' class="tool--btn">
							<i class="fa fa-list-ol"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='insertParagraph' class="tool--btn">
							<i class="fa fa-paragraph"></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='createlink' class="tool--btn">
							<i  class='fas fa-link'></i>
						</button>
					</li>
					<li class="tool" class="list-inline">
						<button	type="button" data-command='unlink' class="tool--btn">
							<i class="fa fa-unlink"></i>
						</button>
					</li>
				</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div id="output" contenteditable="true" class="p-5" name="name"></div>
				</div>
			</div>
		</div>
<?php include 'includes/footer.php'; ?>