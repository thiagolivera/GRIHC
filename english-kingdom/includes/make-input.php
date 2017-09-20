<?php 

function input($name,$nomeLabel,$class,$phr,$rq,$value,$tipo='text',$ext='',$help=''){

	if($rq == true) $rq = ' required ';

	$input = '<div class="form-group '. $cg . '">';
	$input .= '<label class="control-label" for="'. $name.'">'. $nomeLabel .'</label>';
	$input .= '<input type="'. $tipo .'" name="'.$name.'" class="form-control '. $class .'" id="'. $name .'" placeholder="'. $phr .'" '.$rq.'  value="'.$value.'" '. $ext.'/>';
	if($help) $input .= '<span class="help-block">'.$help.'</span>';
	$input .= '</div>';
	echo $input;
}

function alert($msg,$class,$h4=''){

	$alert = '<div class="alert alert-dismissible alert-'.$class.'">';
	$alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
	if($h4) $alert .= '<h4><i class="icon '.$h4[0].'"></i> '.$h4[1].'</h4>';
	$alert .= $msg;
	$alert .= '</div>';

	echo $alert;
}

?>