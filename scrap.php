<?php
include "simple_html_dom.php";

if (isset($_POST['cari']))
{
    $cari = $_POST['cari'];
}
else{
    $cari = 'terpopuler' ;
}
$keyword = preg_replace("/ /", "+", $cari);
$toko = "https://iprice.co.id/search/?term=" . $keyword . "";
$List = array();
$html = new simple_html_dom;
$html->load_file($toko);
foreach ($html->find('div.i5') as $e) {
    foreach ($e->find('div.pu') as $b) {
        $keyword = $cari;
        if ($b->find('a.go')) {
            $url = $b->find('a.go', 0)->href;
        } else {
            $url = $b->find('a', 0)->href;
        }
        $harga = $b->find('span.hF', 0)->text();
        $hargaFix = preg_replace("/Rp /", "", $harga);
        $hargaAsli = preg_replace("/[^0-9]/", "", $hargaFix);
        $fix = "https://iprice.co.id$url";
        $gambar = $b->find('amp-img', 0)->src;
        if ($b->find('div.dU')) {
            $judul = $b->find('div.dU', 0)->text();
        } else {
            $judul = $b->find('span.dU', 0)->text();
        }
        foreach ($b->find('div.ca') as $d) {
            $logo = $d->find('amp-img', 0)->src;
            $isi = array(
                // 'Keyword' => $keyword,
                'Gambar' => $gambar,
                'Harga' => $harga,
                'HargaAsli' => $hargaAsli,
                'Produk' => $judul,
                'URL' => $fix,
                'Logo' => $logo
            );
            array_push($List, $isi);
        }
    }
    
}
?>