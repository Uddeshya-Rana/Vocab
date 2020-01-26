<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style>
    .active-pink-2 input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #f48fb1;
box-shadow: 0 1px 0 0 #f48fb1;
}
.active-pink input[type=text] {
border-bottom: 1px solid #f48fb1;
box-shadow: 0 1px 0 0 #f48fb1;
}
.active-purple-2 input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #ce93d8;
box-shadow: 0 1px 0 0 #ce93d8;
}
.active-purple input[type=text] {
border-bottom: 1px solid #ce93d8;
box-shadow: 0 1px 0 0 #ce93d8;
}
.active-cyan-2 input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #4dd0e1;
box-shadow: 0 1px 0 0 #4dd0e1;
}
.active-cyan input[type=text] {
border-bottom: 1px solid #4dd0e1;
box-shadow: 0 1px 0 0 #4dd0e1;
}
.active-cyan .fa, .active-cyan-2 .fa {
color: #4dd0e1;
}
.active-purple .fa, .active-purple-2 .fa {
color: #ce93d8;
}
.active-pink .fa, .active-pink-2 .fa {
color: #f48fb1;
}
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li class="active">
                    <a href="typography.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.php">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Typography</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" >
                            <div class="header">
                                <h3 class="title">Search a new word!</h3>
                                
                            </div>
                            <div class="content">

                                <!-- Search form -->
                            <form class="form-inline md-form form-sm active-purple active-purple-2 mt-2" style="padding-top:30px;" method="POST">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                                aria-label="Search" name="word">
                            </form>

                            <!-- end search-->
                           
                            <?php
    
    function getElementsByClass(&$parentNode, $tagName, $className) {
        $nodes=array();
    
        $childNodeList = $parentNode->getElementsByTagName($tagName);
        for ($i = 0; $i < $childNodeList->length; $i++) {
            $temp = $childNodeList->item($i);
            if (stripos($temp->getAttribute('class'), $className) !== false) {
                $nodes[]=$temp;
            }
        }
    
        return $nodes;
    }
    
            if(isset($_POST['word']))
            {
                    $word=$_POST['word'];
                    $word=strtolower($word);
                    $doc = new DOMDocument();
                    $link="https://www.oxfordlearnersdictionaries.com/definition/english/".$word."?q=".$word;
                    $wtitle=$word."_h_1";
                    $wdef1=$word."_sng_1";
                    $wdef2=$word."_sng_2";
                    libxml_use_internal_errors(true);
    
                    if(@file_get_contents($link) && $word!="")
                    {
                    $doc->loadHTMLFile($link);
                    
                    $h1 = $doc->getElementById($wtitle)->textContent;
    
                    $res= $doc->getElementById($wdef1);
                    $res2=$doc->getElementById($wdef2);
                    $wtype=getElementsByClass($doc,"span","pos");
                    $defs=getElementsByClass($res,"span","def");
                    $ex=getElementsByClass($res,"ul","examples");
                    $examples=getElementsByClass($ex[0],"span","x");
                    
                    echo "<div class='typo-line'>
                    <h1><p class='category'>word</p>".$h1."</h1>
                </div>";
    
                    //wtype= noun, verb ....
                    foreach($wtype as $w)
                    {
                        //echo "<p>(".$w->textContent.")</p>";
                       echo "<div class='typo-line'>
                       <h3><p class='category'>type</p>(".$w->textContent.")</h3>
                   </div>" ;
                    }
                    
                    foreach($defs as $d)
                    {
                       
                        echo "<div class='typo-line'>
                        <h4><p class='category'>Definition 1</p>".$d->textContent."</h4>
                    </div>";
                    }
                if($res2)
                    {
                        $defs2=getElementsByClass($res2,"span","def");
                         foreach($defs2 as $d)
                        {
                            echo "<div class='typo-line'>
                            <h4><p class='category'>Definition 2</p>".$d->textContent."</h4>
                        </div>";
                        }
    
                    }
                    $cnt=1;
                    foreach($examples as $e)
                    {
                       
                        echo "<div class='typo-line'>
                        <p><span class='category'>example ".$cnt."</span></p>".$e->textContent." </div>";
                         $cnt++;
                    }


                    echo "<button type='button' class='btn btn-outline-primary'>Add to vocabulary</button>";
    
            }
    
            else{
                echo "<p>enter a valid word</p>";
            }
    
    
            }
    
    
        
    
         
       
         
        ?>
       
                           

                            



                        </div>
                    </div>
                            

                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    
    <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Vocab Builder</b> - a personalized web application to help you build your vocabulary. Search a new word now"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
