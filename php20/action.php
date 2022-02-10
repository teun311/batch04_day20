<?php
require_once 'vendor/autoload.php';

use App\classes\Word;

if(issset($_GET['pages']))
{
    if($_GET['pages']=='home')
    {
        include 'pages/series.php';
    }
    elseif ($_GET ['pages']== 'series')
    {
        include 'pages/series.php';
    }
    elseif ($_GET ['pages']=='solution')
    {
        include 'pages/solution.php';
    }
}
elseif (isset($_POST['btn']))
{
   $word = new Word($_POST);
   $word ->index();
   //continue..
}
