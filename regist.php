<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>Регистрация на самолет</title>
    <script src="./JS/script.js" defer> </script>
</head>
<body>
    <header>
        <div class="kot">
            <img    src="img/regfon.jpg" alt="Фон" class="img1">
            <a href="menu.php" class="anchor4" >
                Вернуться
            </a>
            <a href="aunt.php" class="anchor5" >
                Авторизироваться
            </a>
            <div class="form">

                <form class="forma">
            
                <p>
                    <label for="userSName">
                        Фамилия: 
                    </label>
                    <input id="userSName" name="famil" class="FNameInput"  type="text" placeholder="Введите фамилию" required >
                </p>
                <p>
                    <label for="userName">
                        Имя: 
                    </label>
                    <input id="userName" name="imya" class="SNameInput" type="text" placeholder="Введите имя" required>
                </p>   
                <p>
                    <label for="userTName">
                        Отчество: 
                    </label>
                    <input id="userTName" name="otchestvo" type="text" placeholder="Введите отчество" required>
                </p>
                <p>
                    <label for="userEmail">
                        Email:
                    </label>
                    <input id="userEmail" name="emailN" class="ENameInput" type="email" placeholder="Введите email" required>
                </p> 
                <p>
                    <label for="city"> Выберите город отбытия </label><br>
                    <select name="" id="">
                        <option value="">  </option>
                        <option value=""> Сургут </option>
                        <option value=""> Москва </option>
                        <option value=""> Казань </option>
                        <option value=""> Владимир </option>
                    </select>
                </p>
                <p>
                    <label for="city"> Выберите город прибытия </label><br>
                    <select name="" id="">
                        <option value="">  </option>
                        <option value=""> Сургут </option>
                        <option value=""> Москва </option>
                        <option value=""> Казань </option>
                        <option value=""> Владимир </option>
                    </select>
                </p>
                <p>
                    <label for="dp1"> Дата вылета </label>
                    <input type="date" class="DNameInput">
                </p>
                <p>
                    <label for="dp2"> Дата прилета </label>
                    <input type="date">
                </p> 
                <p>
                    <input type="checkbox" id="cb1">
                    <label for="cb1">С завтраком</label><br>
                
                    
                    <input type="checkbox" id="cb2">
                    <label for="cb2">Премиум место</label>   
    
                </p>
                <p>
                    <input type="radio" name="mesta">
                    <label for="rad"> Место для одного </label>

                    <input type="radio" name="mesta">
                    <label for="rad"> Места для семьи </label>
                </p> 
                <p>
                    <label for="file"> Прикрипите копию паспорта </label><br>
                    <input type="file" id="file">
                </p>
            

                 <input type="submit" class="sb">
                 <input type="reset">
                </form>
            </div>
        </div>
        <div class="js">

        </div>
        <div class="knop">
            <button>
                Изменить фон
            </button>
        </div>
    </header>
</body>
</html>
