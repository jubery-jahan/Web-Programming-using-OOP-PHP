<?php
function view($view, $data=[], $print=true)
{
    $output = "View not found";
    $filePath = "views/".$view.".php";
    if (file_exists($filePath))
    {
        extract($data); // array index ke variable e convert kore extract
        ob_start(); //check kore shob thik ache kina header section e
        include $filePath;
        $output = ob_get_clean(); //notun kore kaaje gele ager shob clean kore new vabe start kore
    }
    if ($print) //option rakha
    {
        print $output;
    }
}