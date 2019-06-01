<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Object-Oriented PHP for Beginners</title>
<style>
body {font-family: arial;font-size: 15px;line-height: 18px;margin: 0 auto;width: 850px;}

<?php foreach ($color as $key => $value) { ?>
  body{background: <?php echo $value['color']; ?>;}
<?php } ?>

a{color:#3399FF;}
.headeroption {background: #3399ff url("img/php.png") no-repeat scroll 56px 18px;height: 80px;overflow: hidden;padding-left: 160px;}
.headeroption h2 {color: #000;font-size: 30px;padding-top: 5px;text-shadow: 0 1px 1px #fff;}
.content{background: #f2f2ff;border: 6px solid #3399ff;font-size: 16px;line-height: 22px;margin-bottom: 3px;margin-top: 3px;min-height: 400px;overflow: hidden;padding: 10px;}
.subject {border-bottom: 1px solid #3399ff;font-size: 20px;margin-bottom: 10px;padding-bottom: 10px;}
.subject p{margin:0;}

.insert{color:#06960E;font-weight:bold;}
.delete{color:#DE5A24;font-weight:bold;}

.mainleft{border-right: 1px dotted #999;float: left;margin-right: 16px;width: 350px;}
.mainright{float:right;width:450px;}

.tblone{width:100%;border:1px solid #fff;}
.tblone td{padding:5px 10px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#fdf0f1 none repeat scroll 0 0;height:30px;}
input[type="text"] {border:1px solid #ddd;margin-bottom:5px;padding:5px;width:228px;font-size:16px}
input[type="submit"]{cursor: pointer}
.cat{border:1px solid #ddd;margin-bottom:5px;padding:5px;width:400px;font-size:16px;cursor: pointer;}
/*design admin pane;*/

.adminleft {
    width: 200px;
    float: left;
    border-right: 1px solid #ddd;
    margin-right: 10px;
    padding-right: 10px;
}
.widget{margin-bottom: 20px;}
.widget h3{background: #3399ff none repeat scroll 00;border-bottom: 2px solid #066cd2;color: #000;margin:  0 0 2px;
    padding: 5px; text-shadow: 0 1px 1px #fff;
    }
.widget ul{padding: 0; margin: 0;list-style: none;}
.widget li{display: block;}
.widget li a{background: #ddd none repeat scroll 00;border-bottom: 1px solid #fff;color: #000;display: block;padding: 5px 10px;text-decoration: none;}
.widget li a:hover{background: #bebebe;}


.adminright{width: 577px;float: right; padding: 5px 10px; background: #fafafa;}
.adminright h2{border-bottom: 2px dashed #666;color: #666;margin: 0 0 10px;padding-bottom: 10px;}



/*design admin pane;*/

.footeroption{height:90px;background:#177de3;overflow:hidden;padding-top:10px;overflow: hidden;}
.footerone {background: #3aa0ff;border-radius: 5px;float: left;font-size: 18px;line-height: 23px;margin-left: 10px;padding: 6px 10px;text-align: center;text-shadow: 1px 0 2px #fff;width: 390px;overflow: hidden;}
.footerone p{margin:0;}
</style>
</head>
<body>
  <header class="headeroption">
    <h2>Object-Oriented PHP for Beginners</h2>
  </header>
<div class="content">
 <!-- /*****************/ -->
 <h2>Admin panel </h2><hr>