<?php

include "form.php";
// echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("", "Input Form");
// $form->addField("txtnim", "Nim");
// $form->addField("txtnama", "Nama");
// $form->addField("txtalamat", "Alamat");
// $form->addField("intumur", "Umur");
// var_dump($form->getFields());
// echo "<h3>Silahkan isi form berikut ini :</h3>";
// $form->displayForm();
// echo "</body></html>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>OOP Implementation to FORM</h1>
    <h2>Please fill out the blank</h2>
    <?= $form->addField("txtnim", "NIM"); ?>
    <?= $form->addField("txtnama", "Nama"); ?>
    <?= $form->addField("txtfakultas", "Fakultas"); ?>
    <?= $form->addField("txtjurusan", "Jurusan"); ?>
    <?= $form->displayForm(); ?>
</body>

</html>