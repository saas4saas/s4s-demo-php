<b>Something failed</b>

<?php
include '_setupS4sServer.php';
session_start();

if (array_key_exists("s4s-error", $_GET) && $_GET["s4s-error"] == true) {
    echo "code: ". $_GET["s4s-error-code"] ." msg: ". $_GET["s4s-error-msg"];
    setcookie("s4s-session", json_encode([]));
    die;
}

// to be sure that token is real lets got to user check it
$apiClient = new \Swagger\Client\ApiClient();
//$apiClient->getConfig()->setHost('localhost:8080');
$userApi = new \Swagger\Client\Api\SsUserApi($apiClient);

$user = $userApi->authenticate($_GET["s4s-token"]);
var_dump($user->getAccountId());
if ($user->getAccountId() == $_GET["s4s-account-id"] && $user->getId() == $_GET["s4s-user-id"]){
    $_SESSION["s4sToken"] = $_GET["s4s-token"];
    $_SESSION["s4sUserId"] = $_GET["s4s-user-id"];
    $_SESSION["s4sAccountId"] = $_GET["s4s-account-id"];
    $_SESSION["s4sData"] = $user->getData();
    
    if (array_key_exists("s4sAccountId", $_SESSION)) {
        //setcookie("s4s-session", json_encode(["token" => $_SESSION["s4sToken"], "accountId" => $_SESSION["s4sAccountId"], "userId" => $_SESSION["s4sUserId"]]));
        header('Location: /app.php');
        die;
    }
}
?>
