<?php
$Username = "admin";
$Password = "qwerty";
if ($Username == "admin" & $Password == "qwerty")
{
    echo "username dan password sesuai";
}
elseif ($Username != "admin" & $Password == "qwerty")
{
    echo "username tidak sesuai";
}
elseif ($Username == "admin" & $Password != "qwerty")
{
    echo "password tidak sesuai";
}
?>