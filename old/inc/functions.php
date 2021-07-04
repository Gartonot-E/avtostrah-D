<? 
session_start();

// Подключение к БД
require_once 'db.php';

// Отправки данных с формы обратной связи
if(isset($_POST['dataFeedBack'])){
    $request = $_POST['dataFeedBack'];
    
    $phone = $request['phone'];
    $name = $request['name'];
    $mail = $request['mail'];

    $db->query("INSERT INTO `feedback` (`phone`, `name`, `mail`) VALUES ('".$phone."', '".$name."', '".$mail."')");
}

// Регистрация 
if(isset($_POST['dataRegister'])){
    $request = $_POST['dataRegister'];


    $name = $request['name'];
    $phone = $request['phone'];
    $mail = $request['mail'];
    $password = password_hash($request['password'], PASSWORD_DEFAULT);


    $result = $db->query("SELECT `mail` FROM `users` WHERE `mail` = '".$mail."'");
    
    foreach ($result as $user) {
        if($user['mail'] == $mail) {
            $response['error'] = "Такой пользователь уже существует";
        } 
    }
    
    $putUser = $db->query("INSERT INTO `users` (`name`, `phone`, `mail`, `password`) VALUES ('".$name."', '".$phone."', '".$mail."', '".$password."')");
    if($putUser) {
        $response['ok'] =  "Вы успешно зарегистрированны";
    }
    echo json_encode($response);
}

// Авторизация

if(isset($_POST['dataLogin'])){
    $request = $_POST['dataLogin'];


    $mail = $request['mail'];
    $password = $request['password'];

    $result = $db->query("SELECT * FROM `users` WHERE `mail` = '".$mail."'");


    foreach ($result as $user) {
        if($user['mail'] == $mail && password_verify($password, $user['password'])) {
            $response['ok'] = 'OK';
            $_SESSION['user_name'] = $user['name'];
        } else {
            $response['error'] = "Не верный логин или пароль";
        }
        
    }
    if(!$response['ok']) {
        $response['error'] = "Такого пользователя не существует";
    }
    echo json_encode($response);
}