<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('main_view'))
{
    function main_view($controller, $view)
    {
        $view = $controller->load->view($view, '', true);
        $controller->load->view('layout', ['content' => $view]);
    }
}
