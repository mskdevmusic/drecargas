<?php


class MainController
{
    public function getIndex()
    {
        include('app/View/page/mains.php');
        /* echo
        substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 14); */
        
        /* print_r(crypt('Msk123.', SECRET_KEY)); */
        /* echo hash_equals('p0kz/xBybSins', crypt('admin', $secretKey['SECRET_KEY']))
        ? "VALID" : "INVALID"; */
        /* $hola = new TipotransaccionController();
        var_dump($hola->ListarTipoTransaccion());  */
    }
}