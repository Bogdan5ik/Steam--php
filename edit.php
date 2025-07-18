<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div class="col-12  p-3" style="background-color: #171A21;">
    <div class="col-8 mx-auto" >
        <div class="row">
            <div class="col-3" >
                <a href="index.php">
                    <img src="logo.png" class="w-100">
                </a>
            </div>
            <div class="col-6 pt-4" >
                <a href="" class="text-light ms-4 text-uppercase">Магазин</a>
                <a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
                <a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
                <a href="" class="text-light ms-4 text-uppercase">Поддержка</a>
                                
            </div>
            <div class="col-3">
                <p class="text-light ms-4 "><?php echo $_GET['name'] ?></p>	
            </div>
        </div>			
    </div>
</div>
<div class="col-12" style="background-color: #212429; height: 100%;">
    <div class="col-8 mx-auto  p-5 d-block" style="background-color: #222431; height: 100%;">
        <div class="col-8" style="height: 8rem; color: white;">
            <h1>ОСНОВНОЕ</h1>
            <p>Укажите имя профиля и другую информацию -- например, настоящие имя. Это поможет друзьям найти вас в сообществе Steam.</p>
        </div>

        <form action="profile.php" method="GET">
        
        <div class="col-5" style="height: 5rem;">
            <p class="text-white m-0">Имя аккаунта Steam</p>
			<input type="text" name="name1" class="form-control bg-dark" style="color: white; width: 23rem;">
        </div>

        <div class="col-5" style="height: 7rem;">
            <p class="text-white m-0">Электронная почта</p>
			<input type="text" name="email1" class="form-control bg-dark" style="color: white; width: 23rem;">
        </div>

        <div class="col-5" style="height: 5rem;">
            <p class="text-white m-0">Возраст</p>
			<input type="number" name="age1" class="form-control bg-dark" style="color: white; width: 23rem;">
        </div>

        <button type="submit" class="btn-primary" style="border-radius: 5px; height: 3rem; width: 6rem;">
					<a href="profile.php" style="text-decoration: none; color: white;">Сохранить</a>
        </button>

        </form>
            
    </div>
</div>
</body>
</html>