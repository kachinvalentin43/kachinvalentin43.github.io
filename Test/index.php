<?php require_once 'save_and_load.php'; 
if(isset($_GET['finish'])||isset($_GET['lock'])){
	header("Refresh:0; http://test/index.php");
	unset($_GET['finish']);
	
	
}



 ?>


<!DOCTYPE html>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="style.css" >
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
<script>

		function sty(){
			location=(location.href+'?color=replace');
			
			
	    
}


</script>
		<div class="container" >
		<div class="content"  STYLE="background: <?php echo $myFon;?> " >
		<p id="da"  style=" margin:10px 0 20px 0; font-size:20px;  text-align: center;" > поле ввода</p>
			
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input  id="show" autocomplete="off" value="<?=$reads[pole_1]?>" placeholder="Введите текст"maxlength="60" type="text" <?php if ($arr[1]=='on') : ?> readonly
<?php endif; ?>  name="pole_1" <?php if (!$reads[pole_1]=="") : ?> style="display:block;"
<?php endif; ?>  >

			<input id="show" oninput="sets(this)" class="hidden" value="<?=$reads[pole_2]?>" autocomplete="off" maxlength="60" placeholder="Введите числа" name="pole_2" type="text" <?php if ($arr[1]=='on') : ?> readonly
<?php endif; ?> <?php if (!$reads[pole_2]=="") : ?> style="display:block;"
<?php endif; ?> >

			<input  id="show" class="hidden" value="<?=$reads[pole_3]?>" autocomplete="off" maxlength="60" placeholder="Введите текст" <?php if ($arr[1]=='on') : ?> readonly
<?php endif; ?> name="pole_3"  type="text"  <?php if (!$reads[pole_3]=="") : ?> style="display:block;"
<?php endif; ?> >

				<input oninput="sets(this)" id="show" class="hidden"  value="<?=$reads[pole_4]?>" autocomplete="off" maxlength="60" <?php if ($arr[1]=='on') : ?> readonly
<?php endif; ?>  placeholder="Введите числа" name="pole_4" type="text" <?php if (!$reads[pole_4]=="") : ?> style="display:block;"<?php endif; ?> >
				
				<input <?php if ($arr[1]=='on') : ?> readonly
<?php endif; ?>  id="show" class="hidden" value="<?=$reads[pole_5]?>" autocomplete="off" maxlength="60" placeholder="Введите текст"name="pole_5" type="text"  <?php if (!$reads[pole_5]=="") : ?> style="display:block;"
<?php endif; ?> >

				<input onclick="addButton()"	style="margin-top: 30px;"  type="button" value="Добавить поле" class="but"></input>
				<input  name="modal"  type="submit" value="модальное окно" class="but"></input>
				</form>
			
			<script>
	
		
		function addButton(){	
			var element=$('.hidden'); 
			for(var i=0;i<4;i++){
			if(element[i].style.display!='block'){
			element[i].style.display='block';
			
			break;	}	}	}
		function sets(a){
 			if( a.value.search(`^[ 0-9]+$`)==0){
			a.style.color="black";}
			else{
			a.value = a.value.replace (/\D/gi, '');
			a.style.color="red";}}
 	



			</script>		
			</div>	
			</div>
			<div  id='obertka' onclick="exit()" <?php if ($modal_enable) : ?> style="display:flex;"<?php endif; ?>  >
			</div>
			<div id="modal" <?php if ($modal_enable): ?> style="display:flex; "<?php endif; ?>>
			<img onclick="exit()" style="width:25px; margin-left:0; height:25px; position: absolute; top:0; left:0;" src="https://pngicon.ru/file/uploads/cancel.png"/>
			<form class="fo" >
			<input class="texts"  readonly	 value="<?=$reads[pole_1]?>"  type="text" />		<input  class="texts" readonly  value="<?=$reads[pole_2]?>"  type="text" />		
			<input class="texts" readonly  value="<?=$reads[pole_3]?>"  type="text" />	
				<input class="texts" readonly  value="<?=$reads[pole_4]?>"  type="text" />		<input class="texts" readonly  value="<?=$reads[pole_5]?>"  type="text" />		
				<img onclick="sty()" class="back" style="width:25px; margin-left:0; height:25px; position: absolute; left: 45%; bottom:40%;" src="https://img-fotki.yandex.ru/get/170749/493212545.1d1/0_1c5d4e_360ed60e_XL.png"/>
			<input style="margin-top: 100px;"  class="textswr" value="Заблокировать" onclick="deisabled(this) "  type="button" />
			<input class="textsw" value="Разблокировать" onclick="enabled(this)" type="button" />
				</form>
	<script>
				
			
					var index_color;
					var c=  $("input#show");
					function deisabled(a){
						
						$(a).css("color","red");
						$('.textsw').css("color","black")
					for(var i=0 ;i<c.length;i++){
					c.get(i).disabled="disabled";}
					
					location=(location.href+'?lock=on');
			

					}
					
					
					function enabled(a){
					$(a).css("color","green");
					$('.textswr').css("color","black")
					for(var i=0 ;i<c.length;i++){
					c.get(i).disabled="";}
					location=(location.href+'?lock=off');
					}
					
					
	</script>
			</div>
		
	<script>
					function exit(){
					
					$('#obertka').hide(100,"linear");
					$('#modal').hide(100,"linear");
			}
		
		</script>
		
	</body>

</html>