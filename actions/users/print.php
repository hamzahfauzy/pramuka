<?php

use Spipu\Html2Pdf\Html2Pdf;

$conn = conn();
$db   = new Database($conn);
$user = $db->single('users',[
    'id' => $_GET['id']
]);

$user->biodata = $db->single('biodata',['user_id'=>$user->id]);

$path = $user->pic_url ?? 'assets/img/user-placeholder.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data_logo = file_get_contents($path);
$logo = 'data:image/' . $type . ';base64,' . base64_encode($data_logo);

$kta_bg = '';
if(app('kta_bg'))
{
    $path = app('kta_bg');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data_logo = file_get_contents($path);
    $kta_bg = 'data:image/' . $type . ';base64,' . base64_encode($data_logo);
}

ob_start();
require 'template/print.php';
$html = ob_get_contents(); 
ob_end_clean();

// echo $html;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output(); // ('kartu-user.pdf','D');

die();