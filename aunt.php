<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $number = " ";
            $login = " ";
            $password = " ";
            $emailN = " ";
    
            if(isset($_POST['number'])) $number = $_POST['number'];
            if(isset($_POST['login'])) $login = $_POST['login'];
            if(isset($_POST['password'])) $password = $_POST['password'];
            if(isset($_POST['emailN'])) $emailN = $_POST['emailN'];
            echo "Vash nomer: $number <br> Vash login: $login <br> Vash email: $emailN <br> Vash parol: $password";
            ?>
            <h3>Войти в Личный Аккаунт</h3>
            <form method="POST" class="form45">
            Номер телефона: <input type="tel" name="number" pattern="[0-9]{11}" required/><br><br>
            Логин: <input type="text" name="login" required /><br><br>
            Email: <input type="email" name="emailN" required  /><br><br>
            Пароль: <input type="text" name="password" required /><br><br>
            <input type="submit" value="Отправить">
            </form>

          <a href="regist.php" class="anchor4" >
            Вернуться
          </a>
        <br><br>
        
    </body>
</html>
