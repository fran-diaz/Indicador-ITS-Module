<?php
init_ITEC();


$detail_report_id = $_ITE -> components -> get_config( $_REQUEST['c'], 'contenido/detail_report' )['value'];
if( (int)$detail_report_id >= 1 ){
	$details_url = '/informes/'.$detail_report_id;
	echo $details_url;
} else {
}