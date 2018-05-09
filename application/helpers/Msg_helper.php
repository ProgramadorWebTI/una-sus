<?php

function msg($parametro=null,$msg=null)
{
	if($parametro == 'ok'){
		return '<div class="text text-success text-center">'.$msg.'</div>';
	}else{
		return '<div class="text text-danger text-center">'.$msg.'</div>';
	}
}
