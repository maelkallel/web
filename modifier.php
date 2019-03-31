<HTML>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
    <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">UI Elements</a></li>
                                    <li class="active">Tab</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="clearfix"></div>
<?PHP
include "../entities/eveent.php";
include "../core/event.php";
if (isset($_GET['title'])){
    $eventC=new eventC();
    $result=$eventC->recupererEvent($_GET['title']);
    foreach($result as $row){
        $title=$row['title'];
        $dd=$row['dd'];
        $df=$row['df'];
        $max=$row['max'];
        $des=$row['des'];
?> <div class="content">
<form method="POST">
<table class="table">
<caption>Modifier Event</caption>
<tr>
<td><strong>Title</strong></td>
<td><input type="text" class="form-control" name="title" value="<?PHP echo $title ?>"></td>
</tr>
<tr>
<td><strong>Date D.</strong></td>
<td><input type="date" class="form-control"name="dd" value="<?PHP echo $dd ?>"></td>
</tr>
<tr>
<td><strong>Date F.</strong></td>
<td><input type="date" class="form-control" name="df" value="<?PHP echo $df ?>"></td>
</tr>
<tr>
<td><strong>Max</strong></td>
<td><input type="number"class="form-control" name="max" value="<?PHP echo $max ?>"></td>
</tr>
<tr>
<td><strong>Des.</strong></td>
<td><input type="text"class="form-control" name="des" value="<?PHP echo $des ?>"></td>
</tr>
<td></td>
<td><input type="submit" class="btn btn-success" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idPini" value="<?PHP echo $_GET['title'];?>"></td>
</tr>
</table>
</form> </div>
<?PHP

    }
}
if (isset($_POST['modifier']))
{
    if($_POST['dd']<$_POST['df'])
    {$event=new event($_POST['title'],$_POST['dd'],$_POST['df'],$_POST['max'],$_POST['des']);
    $eventC->modifierEvent($promo,$_POST['idPini']);
    echo $_POST['idPini'];
    header('Location: afficher.php');}
    else  {
        ?>

                                <script>  
                                        

                                       alert("verifier dates");
                                     

                                </script>
                                <?php
    }
}
?> 
</div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2018 Ela Admin
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://colorlib.com">Colorlib</a>
            </div>
        </div>
    </div>
</footer>
</body>
</HTMl>

