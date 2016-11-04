<?php include '_sessionCheck.php'; ?>
<?php

include '_setupS4sServer.php';

$apiClient = new \Swagger\Client\ApiClient();
//$apiClient->getConfig()->setHost('localhost:8080');
$api_instance = new Swagger\Client\Api\SsResourceApi($apiClient);

$customer_id = $_SESSION["s4sAccountId"]; // string | 
$resourceid = "ChatView"; // string | 
$value = new \Swagger\Client\Model\ResourcePatch(["op"=>"Inc", "value"=>1, "patch_what_is_possible" => false]);

$result = $api_instance->customerResourcePatch($customer_id, $resourceid, $value);

if ($result->getIsOk()){
    echo "OPEN CHAT SUCCESS WITH SUCCESS: " .  $result->__toString();
} else {
    echo "OPEN CHAT WITHOUT SUCCESS WITH SUCCESS: " . $result->__toString();
}
die;