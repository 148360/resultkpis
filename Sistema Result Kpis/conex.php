<?phpfuntion Conectarse()
{

    $link=mysql_connect("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
    if(!$link)
   exit();
   $con=mysql_select_db("kpis",$link);
   if(!$con)
   exit();
   return $link;
}