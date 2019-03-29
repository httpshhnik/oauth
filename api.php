<?php
//todo
//mock api
//
header('Access-Control-Allow-Origin: *');

//pdo db connect or mysqli ?

function generate_hash(){
    return "abcd123";
}

$response = array();
$response["status"] = "error";

if( isset($_GET["method"])&&
     isset($_GET["login"])&&
     isset($_GET["password"])&&
    $_GET["method"]=="login"
){
    if(
        $_GET['login']=='undefined' ||
        $_GET['login']=='' ||
        $_GET['password']=='' || 
        $_GET["password"]=='undefined'
    )
        die("[]");

    //$response['username'] = $_GET["login"];
    $response['secret'] = generate_hash();
    $response["status"] = true?"success":"fail";//todo 
    $_GET['method'] = "sync";
    // die("ok!"); 
}
//todo отдавать акции всегда, личную инфу только авторизованым
//mock api
if(isset($_GET["method"])){
    switch($_GET["method"]){
        case "form":{
            die("ok!");
        }
        case "sync":{
            
           //all prop strings - public, objects private
            
            $response["status"] = "success";
            $response["token"] = 'jf85jgyejgif8thyjf7r';
            //20 symb
            $response["actions"] = json_decode('[{"image":"https://matrixhome.net/images/connect/connect-action/connect-action.png","title":"Весной еще дешевле","text":"Пользуйтесь скидкой 50%","k":"0.5"},{"image":"https://matrixhome.net/images/connect/connect-action/connect-action.png","title":"Весной еще дешевле","text":"Пользуйтесь скидкой 50%","k":"1"}]');
            $response["packets"] = json_decode('[{"title":"Комфорт","speed":"75","iptv":"121","cost":"300"},{"title":"Премиум","speed":"100","iptv":"221","cost":"390"}]');
            //todo ann merge in news \ actions
            $response["matrixNews"] = json_decode('[{"date":"11 Марта 2019","title":"Вниманию абонентов!","text":"MATRIX поздравляет с 8 марта!"},{"date":"11 Марта 2019","title":"Вниманию абонентов!","text":"MATRIX поздравляет с 8 марта!"},{"date":"11 Марта 2019","title":"Вниманию абонентов!","text":"MATRIX поздравляет с 8 марта!"}]');
            $response["matrixActions"] = json_decode('[{"img":"action_158.jpg","title":"Скидка на полгода","text":"-50% всем новым абонентам"},{"img":"action_158.jpg","title":"Скидка на полгода","text":"-50% всем новым абонентам"},{"img":"action_158.jpg","title":"Скидка на полгода","text":"-50% всем новым абонентам"}]');//https://matrixhome.net/upload/actions/action_158.jpg
            $response["lastNews"] = json_decode('[{"img":"action_158.jpg","title":"Скидка на полгода","text":"-50% всем новым абонентам"},{"img":"action_158.jpg","title":"Скидка на полгода","text":"-50% всем новым абонентам"},{"img":"action_158.jpg","title":"Скидка на полгода","text":"-50% всем новым абонентам"}]');
            $response["cityEvents"] = json_decode('[{"date":"11 Марта 2019","title":"Вниманию абонентов!","text":"MATRIX поздравляет с 8 марта!"},{"date":"11 Марта 2019","title":"Вниманию абонентов!","text":"MATRIX поздравляет с 8 марта!"},{"date":"11 Марта 2019","title":"Вниманию абонентов!","text":"MATRIX поздравляет с 8 марта!"}]');
//todo check token
            //billing
            $data = array();
            
            $data["username"] = "testusername";
            $data["anumber"] = "0105555768";
            $data["balance"] = "0.0 RUB";//mysql_fetch_assoc
            $data["plane"] = "Авансовый платеж";
            $data["payActions"] = "Отменить";

            $data["payCount"] = 195;
            $data["payCount2"] = 5;
            //пополнить, заблокировать
            //$data["iptvlink"] = "https://iptv.matrixhome.net/server/playlist.php?anumber=0105665208";//+download , edit
            //wifimap
            $data["callback"] = json_decode('[{"id":"0","text":"38-099-932-12-87"},{"id":"2","text":"38-071-932-12-87"}]');//all phones of all mans? family
            $data["paydate"] = "21.06.2019 г.";
            $data["supportHistory"] = json_decode('[{"number":"493765","department":"Первая линия", "state":"Завершена", "date":"26.08.2018 18:44"},{"number":"493765","department":"Первая линия", "state":"Завершена", "date":"26.08.2018 18:44"},{"number":"493765","department":"Первая линия", "state":"Завершена","date":"26.08.2018 18:44"}
                ]');//limit 3 [number state,text,date]";
            $response["billing"] = $data;


            //profile
            $data = array();
            $data["id"] = "m5665";
            $data["packet"] = "Доступный 30 / 30 Мбит/с - 195 руб/мес";
            $data["iptvPacket"] = "Базовый. - 0 руб/мес";
            $data["lip"] = "10.2.168.25";
            $data["ip"] = "109.2.168.88";
            $data["mac"] = "J2:K9:K0:C1";
            $data["trafficSum"] = "";
            $data["changePacketsHistory"] = json_decode('[{"date":"14.03.2017 20:56:48","account":"m8767","old":"Доступный - 10","new":"Эталон TV"},{"date":"14.03.2017 20:56:48","account":"m8767","old":"Доступный - 10","new":"Эталон TV"}]');
            //История изменения пакетов услуг

            $data["family"] = json_decode('[{"fio":"fio","address":"address","phones":[{"number":"phone11"},{"number":"phone22"},{"number":"phone33"}],"email":"email@gmail.com","userExp":"2 year","wifiCode":"lmt87u","userkey":"asd1wd2wd2d23d23"},{"fio":"fio2","address":"address2","phones":[{"number":"phone1"},{"number":"phone2"},{"number":"phone3"}],"email":"email2@gmail.com","userExp":"2 year","wifiCode":"l22mt87u","userkey":"22asd1wd2wd2d23d23"}]');//man


            //todo add page balance(payment) turnInet7/15 
            //balance, payDate,linkOnPayHistory, sumPayBill,galaxyCount,matrixDeposit
            //pay(){qiwi|visa|onix|CRB|terminal}

            $response["profile"] = $data;

            //support
            $data = array();
            //list of phones of all family $data["callback"]
            //callback,online,feedback,forum
            //обратный звонок, онлайн заявка, оставить отзык, на форуме
            //polls
            $data["polls"] = json_decode('[{"status":"off","title":" Источники информации о компании MATRIX ","price":"15","link":"49/1"}]');//http://survey-external.matrixhome.net/49/1/
            $data["jabberPass"] = "123";
            $response["support"] = $data;

            //services
            $data = array();
            $data["enabled"] = json_decode('[{"title":"Реальный IP-адрес (статический, бесплатный) ","cost":"195","date":"от 03.06.2018 до 03.06.2019","account":"m755"}]');
            //$data["available"] = "[]";
            //жестко прописать [депозит, защита , тестдрайв]
            $response["services"] = $data;
        }
    }
}
header('Content-Type: application/json');
die(json_encode($response));
/*
$data = array(
    'get' => $_GET,
    'post' => $_POST
);
echo json_encode($data);
