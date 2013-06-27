<!DOCTYPE html>
<html>
  <head>
    <title>SASE@Cornell</title>
    <meta charset='utf-8' />
    <meta content='IE=Edge,chrome=1' http-equiv='X-UA-Compatible' />
    <link href='stylesheets/base.css' rel='stylesheet' />
    <link href='stylesheets/skeleton.css' rel='stylesheet' />
    <link href='stylesheets/layout.css' rel='stylesheet' />
    <script type="text/javascript" src='js/jquery-1.9.1.min.js'></script>
    <script type="text/javascript" src='js/jquery-ui-1.10.2.custom.min.js'></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
    <script type="text/javascript" src='js/main.js'></script>
  </head>
  <body>
    <div class='container'>
      <header class='sixteen columns'>
        <div class='logo'>
          <a href='index.php'>home</a>
        </div>
      </header>
      <aside class='four columns'>
        <nav>
          <ul>
<?php
$navList = array('index','events','join','calendar','contact','resources');
foreach($navList as $k=>$v){
  $page = ($v == 'index') ? 'about' : $v;
  $class = ($PHP_SELF == '/sasecornell/'.$v.'.php') ? 'active' : 'inactive';
  echo '<li class="'.$class.'"><a href="'.$v.'.php">'.$page.'</a></li>';
}
?>
            <li id='fb'>
              <a href='http://www.facebook.com/groups/sasecornell/'></a>
            </li>
          </ul>
        </nav>
      </aside>
      <div class='content eleven columns'>
