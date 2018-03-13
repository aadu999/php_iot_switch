<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var count=0;
		$('.change').click(function()
		{
			count++;
			if(count%2==1)
			{
				$.get("http://DOMAIN/switch.php?s1=1", function(){
				});
				$("span").text('on');
			}else{
				$.get("http://DOMAIN/switch.php?s1=0", function(){
		});
				$("span").text('off');
			}
			
			});
	});

	</script>

</head>
<body>
	<button class="change"><span>change</span></button>
</body>
</html>
