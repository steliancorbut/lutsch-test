<?php

// date 2 variabile locale 
$EmailTo = "mobilalutsch@yahoo.ro";
$Subject = "De pe web site";
$Nume = Trim(stripslashes($_POST['Nume'])); 
$Adresa = Trim(stripslashes($_POST['Adresa'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Subiect = Trim(stripslashes($_POST['Subiect']));

// validare
$validationOK=true;
if (Trim($Adresa)=="") $validationOK=false;
if (Trim($Email)=="") $validationOK=false;
if (Trim($Subiect)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=err.html\">";
  exit;
}

// pregatire email body text
$Body = "";
$Body .= "Nume: ";
$Body .= $Nume;
$Body .= "\n";
$Body .= "Adresa: ";
$Body .= $Adresa;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Subiect: ";
$Body .= $Subiect;
$Body .= "\n";

// trimitere email 
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect 2 pagina succes 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=err.html\">";
}
?>
