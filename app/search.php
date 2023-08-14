<?
if(isset($_POST['search_pr'])){

	if(!empty($_POST['search_pr'])){
		header('Location: /maptur.php?search='.$_POST['search_pr']);
	}else{
		header('Location: /maptur.php');
	}

}else if(isset($_POST['search_hl'])){

	if(!empty($_POST['search_hl'])){
		header('Location: /hotel.php?search='.$_POST['search_hl']);
	}else{
		header('Location: /hotel.php');
	}

}
else if(isset($_POST['search_hlp'])){

	if(!empty($_POST['search_hlp'])){
		header('Location: /hotel.php?search='.$_POST['search_hlp']);
	}else{
		header('Location: /hotel.php');
	}

}


else{
	header('Location: /');
}