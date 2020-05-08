<?php

function is_not_admin()
{
    $ci = get_instance();
    if ($ci->session->userdata('id_akses') != 2) {
        redirect('landing_home');
    }
}
function session()
{
	$ci = get_instance();
	return $ci->session->userdata('email');
}
function is_not_user()
{
	$ci = get_instance();
	if ($ci->session->userdata('id_akses') != 1) {
		redirect('dashboard');
	}
}

function is_login()
{
	$ci = get_instance();
	if ($ci->session->userdata('email')) {
		redirect('landing_home');
	}
}

function is_not_login()
{
	$ci = get_instance();
	if (!$ci->session->userdata('email')) {
		$ci->session->set_flashdata('message','<div class="alert alert-primary-bs small">Silahkan <strong>Login </strong>Terlebih dahulu!</div>');
		redirect('login');
	}
}

?>


