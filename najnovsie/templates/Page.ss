<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<% base_tag %>
	$MetaTags	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--<script>
	$(document).ready(function(){
	    $("tr").click(function(){
	        window.document.location = $(this).data("href");
	    });
	});
	</script> Toto som skusal urobit cely riadok tabulky clickable -->
</head>
<body>
	<div id="wrapper">

		<header id="header">
			<% include TopBar %>
		</header>
		
		$Layout
				
		
	</div>	
</body>
</html>