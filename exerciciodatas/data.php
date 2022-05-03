<?php
dataporextenso(isset($_POST['data'])?$_POST['data']:0);

function dataporextenso($DATA){
	echo date("l, d \d\e F \d\e Y", strtotime($DATA));
}

?>