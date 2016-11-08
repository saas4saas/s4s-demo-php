<?php include '_sessionCheck.php'; ?>
<?php include '_setupS4s.php'; ?>
<h1>Easy Chat</h1>

<a id="logout-url" href="/app/logout.php">logout</a></br>
<a href="profile.php">Profile</a></br>
</br>
<a href="newChat.php" target="iframe1">Create new Chat</a> </br>
<a href="open.php" target="iframe1">Open Chat</a> </br>

<iframe name="iframe1"></iframe>
<h3>DEBUG</h3>
<textarea style="margin: 0px; width: 700px; height: 85px;">
$_SESSION["s4sToken"] = <?php echo $_SESSION["s4sToken"]; ?>
$_SESSION["s4sUserId"] = <?php echo  $_SESSION["s4sUserId"]; ?>
$_SESSION["s4sAccountId"] = <?php echo $_SESSION["s4sAccountId"]; ?>
$_SESSION["s4sData"] = <?php ob_start();
var_dump( $_SESSION["s4sData"]);
$result = ob_get_clean(); echo $result ?>
</textarea></br>

<script>
 s4s.html.logout("#logout-url");
</script>
