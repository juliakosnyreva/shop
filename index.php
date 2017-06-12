<?php
require_once 'connect.php'; 

require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';

require_once 'application/core/route.php';
Route::start(); // запускаем маршрутизатор

require_once 'simple_html_dom.php';
$date = date('d.m.Y');
$url='http://www.cbr.ru/currency_base/D_print.aspx?date_req=' . $date; // URL страницы с курсами валют на сегодня
$html = file_get_html($url); // Читаем содержимое HTML страницы
$charset = 'UTF-8';

if($html->innertext!='' and count($html->find('table.data tr', 11))){
	$item['text'] = $html->find('table.data tr', 11)->last_child()->prev_sibling()->innertext;
	$item1['text'] = $html->find('table.data tr', 11)->last_child()->innertext;
	echo '1 ' . $item['text'].' = '. $item1['text'] . ' рублей';
}
