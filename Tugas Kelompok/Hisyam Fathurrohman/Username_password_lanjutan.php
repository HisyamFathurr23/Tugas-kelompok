<?php
$Username = "Hisyam_fathurr";
$Password = "kalo ga gamon ya nt";
if ($Username == "Hisyam_fathurr" & $Password == "kalo ga gamon ya nt")
{
    echo "username dan password sesuai";
}
elseif ($Username != "Hisyam_fathurr" & $Password == "kalo ga gamon ya nt")
{
    echo "username tidak sesuai";
}
elseif ($Username == "Hisyam_fathurr" & $Password != "kalo ga gamon ya nt")
{
    echo "password tidak sesuai";
}
elseif ($Username != "Hisyam_fathurr" & $Password != "kalo ga gamon ya nt")
{
    echo "Username dan Password tidak sesuai";
}
?>