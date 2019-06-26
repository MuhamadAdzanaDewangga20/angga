<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'controlerHome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Hapus/(:any)'] = 'HapusControler/HapusData/$1';
$route['Edit'] = 'EdittCountroller/Ubah';
$route['getData'] = 'controlerHome/getData';
$route['JudulBukuGet'] = 'JudulBukuCountroller/getData';
$route['tambahData'] = 'TambahDataCountroller/TambahData';
$route['Nom'] = 'TambahDataCountroller/NoOto';
$route['tampilPengarang/(:any)'] = 'JudulBukuCountroller/tampilPeng/$1';
$route['tampilEd/(:any)'] = 'controlerHome/tampilEdit/$1';
$route['Cari/(:any)'] = 'controlerHome/cariData/$1';
$route['Ujicoba'] = 'ujicobaCountroller';
