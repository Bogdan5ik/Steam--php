<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
		.yes{
			color: red;
		}
		.no{
			color: green;
		}
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12 d-flex" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto p-5 d-flex" style="background-color: #222431; height: 100%;">
			<div class="col-3">
				<img src="profile.jfif" alt="">
			</div>
			<div class="col-5" style="color: white;">
				<h1><?php echo $_GET['name']?></h1>
				<p>электронная почта: <?php echo $_GET['email']?></p>
				<p>Возраст: <?php echo $_GET['age']?></p>
				<p><?php
				       if($_GET['age'] < 18){
						echo "<p class='yes'>ограничения есть</p>";
					   } else{
						echo "<p class='no'>ограничений нету</p>";
					   }
				?></p>
			</div>
			<div class="col-4" style="color: white;">
				<h1>Уровень 1</h1>
				<p>Вы можете отобразить один из ваших значков здесь. Выберите его на странице редактирования профиля.</p>
				<button style="background-color: black; color: white; border: 1px solid white; border-radius: 5px; height: 2rem; width: 13rem;">
					<a href="edit.php" style="text-decoration: none; color: white;">Редактировать Профиль</a></button>
			</div>
	</div>


	<script type="text/javascript">

	</script>
</body>
</html>