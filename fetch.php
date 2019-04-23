<?php

function jumprl() {
	if(isset($_POST['access'])) {
		if($_POST['access'] !== "realworld") {
			echo "World is Awesome, isn't it?";
			exit();
		}
	}else {
		echo "I love you, Love is blind";
		exit();
	}
}

jumprl();

function msgs($fr,$to) {
	$msgtd = file("msg.php");
	for($i=1;$i<count($msgtd);$i++) {
		$curmsg = explode(" ", $msgtd[$i]);
		$curfr = $curmsg[0];
		$curto = $curmsg[1];
		if(($curfr ==$fr && $curto == $to)||
		($curfr == $to && $curto == $fr)) {
			echo $msgtd[$i];
		}
	}
}

if(isset($_POST['query'])) {
	if($_POST['query'] == "users") {
		$users = file("users.php");
		for($i=1;$i<count($users)-1;$i++) {
			print $users[$i].",";
		}
		echo $users[count($users)-1];
		exit();
	}elseif($_POST['query'] == "newuser") {
		$hand = fopen("users.php",'a');
		$hand2 = fopen("pass.php",'a');
		if(count(file("users.php"))==1) {
			fwrite($hand, $_POST['uname']);
			fwrite($hand2,hash('sha1',$_POST['upass']));
			echo 1;
			exit();
		}
		fwrite($hand, "\n".$_POST['uname']);
		fwrite($hand2,"\n".hash('sha1',trim($_POST['upass'])));
		fclose($hand);
		echo 1;
		exit();
	}elseif($_POST['query'] == "passes"){
		$passes = file("pass.php");
		for($i=1;$i<count($passes)-1;$i++) {
			print $passes[$i].",";
		}
		echo $passes[count($passes)-1];
		exit();
	}elseif($_POST['query'] == "msg") {
		$handm = fopen("msg.php",'a');
		if(count(file("msg.php")) == 1) {
			fwrite($handm,$_POST['uid']." ".$_POST['to']." ".$_POST['msg']);
			exit();
		}
		fwrite($handm, "\n".$_POST['uid']." ".$_POST['to'].' '.$_POST['msg']);
		fclose($handm);
		exit();
	}elseif($_POST['query'] == 'msgd') {
		msgs(htmlspecialchars($_POST['from']),$_POST['to']);
		exit();
	}elseif($_POST['query'] == 'hash') {
		$hs = hash('sha1',$_POST['txt']);
		echo $hs;
		exit();
	}elseif($_POST['query'] =='lgn') {
		$usrs = file("users.php");
		$pass = file("pass.php");
		$iu = $_POST['usern'];
		$ip = $_POST['userp'];

		#echo new string("1");
		for($l=1;$l<count($usrs);$l++) {
			if($iu == trim($usrs[$l])) {
				if(hash('sha1',$ip) == trim($pass[$l])) {
					echo 1;
					exit();
				}
				echo 0;
				exit();
			}
		}
		echo -1;
		exit();
	}else {
		echo "Creator of universe is imperfect but GOD is truely perfect";
		exit();
	}
}
echo "Oops...";
?>
