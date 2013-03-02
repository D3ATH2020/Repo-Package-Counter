<?
$directory = "/downloads"; //change this to the directroy of your debs.
if (glob($directory . "*.deb") != false) //change to the extension of the file you want this to count.
{
 $filecount = count(glob($directory . "*.deb")); //change to the extension of the file you want this to count.
 echo $filecount;
}
else
{
 echo 0;
}
?>