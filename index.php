<?php
require_once('vendor/autoload.php');

use src\MyClass;

$obj  = new MyClass();
$json = '
[
    {"fe":"HtmlBlock","html":"","json_string":"","label_tag":"<h5>","hr_before":true,"mandatory_info":true,"name":"","label":"Teilnehmerdaten","size":"12","is_required":false,"hide_in_mail":true,"hide_in_export":true,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"Herr Dr.","type":"text","name":"titleInput","label":"Anrede, Titel","size":"6","is_required":false,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"","type":"text","name":"klinikInput","label":"Praxis\/Klinik, Abteilung","size":"6","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"Max","type":"text","name":"att_vname","label":"Vorname","size":"6","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"max@mustermann.de","type":"email","name":"att_mail1","label":"E-Mail","size":"6","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"max@mustermann.de","type":"email","name":"att_mail_confirm","label":"E-Mail wiederholen","size":"6","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"Musterstr. 25","type":"text","name":"addrInput","label":"Stra\u00dfe\/Hausnr.","size":"6","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"12345","type":"text","name":"plzInput","label":"PLZ","size":"2","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"Musterstadt","type":"text","name":"ortInput","label":"Ort","size":"4","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Input","placeholder":"800000000000000","type":"text","name":"efnInput","label":"EFN","size":"6","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Select","selectElements":{"":"","Klinikarzt":"Arzt DHG pflichtig\/Klinikarzt","Niedergelassen":"Arzt Niedergelassen","MFA":"MFA","sonstige":"Sonstige","Mitarbeiter":"Mitarbeiter"},"name":"typeSelect","label":"Art","size":"6","is_required":true,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Textarea","placeholder":"","name":"hinweise","label":"Besondere Hinweise","size":"12","is_required":false,"hide_in_mail":false,"hide_in_export":false,"export_label":"","class_name":""},
    {"fe":"Checkbox","value":"ja","name":"mailOptIn","label":"Ja, ich erlaube AstraZeneca, meinem pers\u00f6nlichen AstraZeneca Ansprechpartner und\/oder Ansprechpartner im Auftrag AstraZenecas t\u00e4tigen Vertriebspartner (z.B. Santis) Materialien zu facharztspezifischen Themen (z.B. zu Kongressen, Referenten-Slidekits, Studien oder Patientenbrosch\u00fcren) mir mit der Ihnen vorliegenden E-Mail Adresse Kontakt aufzunehmen. Meine Einwilligung kann jederzeit z.B. per Email widerrufen werden.","size":"12","is_required":false,"hide_in_mail":false,"hide_in_export":false,"export_label":"E-Mail Kontakt","class_name":""}]

';

MyClass::eindeutigeUndNotwendigeFelderPruefen($json);