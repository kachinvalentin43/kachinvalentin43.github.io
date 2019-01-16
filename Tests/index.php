<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="style/style.css" >
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<div class="one_okno" >
		<form id="form" method="" action="" >
			<label><p class="lable" >Заполните поля</p></label>
			<input class="text" id="one" type="text"/>
			
<input class=but type="button" onclick="add_pole()" value="Добавить поле" />
<script type="text/javascript" >
b=4;
c=b;
for(b;(b!=0);b--){
	
	var abe = $("#one").clone();
	abe.attr("id","one"+String(b));
	abe.val(" ");
	$(abe).insertBefore("input.but");
	}
	function add_pole(){
		
		if(c>=4){
			return;
		}
		c++;
	var abe = $("#one").clone();
	abe.attr("id","one"+String(b));
	abe.val(" ");
	$(abe).insertBefore("input.but");
	
	
	}

</script>

<input class="sub"  type="button" value="Modal" />
<script>
	function()
</script>
		</form>	
	</div>	
	<div class="obertka" ></div>	
	<div class="modal_okno" ></div>	
	</body>
</html>