<?php
function current_url()
{
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}

function app_file_url($file_id)
{
  $CI =& get_instance();
	$CI->load->model('Appfile');
	return site_url('app_files/view/'.$file_id.'?timestamp='.$CI->Appfile->get_file_timestamp($file_id));
}

function tel($number)
{
	if ($number)
	{
		return '<a href="tel:'.$number.'">'.H($number).'</a>';
	}
	
	return '';
}


function address($address)
{
	if ($address)
	{
		return '<a href="https://www.google.com/maps/place/'.urlencode($address).'" target="_blank">'.H($address).'</a>';
	}
	
	return '';
}

?>