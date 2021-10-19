<?php


namespace src;


 class MyClass
{
public static function eindeutigeUndNotwendigeFelderPruefen($json){

echo("<pre>");
    ini_set("xdebug.var_display_max_children", '-1');
    ini_set("xdebug.var_display_max_data", '-1');
    ini_set("xdebug.var_display_max_depth", '-1');
    $array_notwendige_felder=array("att_mail" =>"Input", "att_mail_confirm"=>"Input");




    $array_temp_notwendige_felder = array();
    $array_json =json_decode($json);
    $feld_name_array_unic = array();
    $feld_name_array_doublete = array();

    foreach ($array_json as $key =>$value){
        $feld_name = $value->name;
        $feld_typ = $value->fe;
        if (array_key_exists($feld_name,$feld_name_array_unic)
            && $feld_name_array_unic[$feld_name] == $feld_typ)
        {
            $feld_name_array_doublete[$feld_name] = $feld_typ;
        }

 else{
     $feld_name_array_unic[$feld_name] = $feld_typ;
 }

 //notwendige Felder Prüfen

 if (array_key_exists($feld_name, $array_notwendige_felder)
     && $array_notwendige_felder[$feld_name] == $feld_typ) {
     $array_temp_notwendige_felder[$feld_name] = $feld_typ;
 }

 }

 if (!empty($feld_name_array_doublete)) {
     var_dump($feld_name_array_doublete);
     $text = "Es wurde folgende elemente als Duppletten gefunden:\n";
     foreach ($feld_name_array_doublete as $key => $value) {
         $text .= 'Name = ' . $key . ' Typ = ' . $value . "\n";

     }
     $text .= "\nAufgrund dieses Fehlers wird das Formular nicht gespeichert!";
     echo("<pre>");
     echo($text);
     die();

 }

 if ($array_notwendige_felder != $array_temp_notwendige_felder) {
     var_dump($array_temp_notwendige_felder);
     die("diferit");
 }


 }
}