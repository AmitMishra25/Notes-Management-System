<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/headerlinks.php' ?>

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="container">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">LOGIN</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header ">
                                        <h3 class="modal-title w-100 text-center">LOGIN</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div id="teacher" class="tab-pane active"><br>
                                                <div class="login-container">
                                                    <form action="logininfo.php" class="login-form" method="POST">
                                                        <div class="form-group">
                                                            <label for="email">E-mail</label><br>
                                                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password</label><br>
                                                            <input type="password" id="password" name="password" placeholder="password" class="form-control">
                                                        </div>
                                                        <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Log in</button>
                                                        <a href="#">forgot password?</a>
                                                        <span>Need an account.<a href="register.php"> Sign Up</a></span>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </nav>

    <svg class="bg-xl" style="margin:auto;background:#f1f2f3;display:block;z-index:-1;position:absolute" viewbox="0 0 1536 680" width="100%" height="100%" preserveAspectRatio="xMinYMin meet">
        <g transform="translate(768,340) scale(1,1) translate(-768,-340)">
            <linearGradient id="lg-0.0931351362582995" x1="0" x2="1" y1="0" y2="0">
                <stop stop-color="#157759" offset="0"></stop>
                <stop stop-color="#53ab8b" offset="1"></stop>
            </linearGradient>
            <path d="" fill="url(#lg-0.0931351362582995)" opacity="0.4">
                <animate attributeName="d" dur="25s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="0s" values="M0 0L 0 701.2850497264652Q 192 570.1080312699999  384 530.1220719146138T 768 309.4167153103558T 1152 211.27872948808073T 1536 64.3016593951337L 1536 0 Z;M0 0L 0 668.3927579259605Q 192 558.9169797082011  384 536.7791442174486T 768 342.3558143738608T 1152 111.86539290181452T 1536 81.97455579400958L 1536 0 Z;M0 0L 0 732.5997606730457Q 192 558.5764240304372  384 542.5465853269483T 768 375.56378860778153T 1152 120.51975098496439T 1536 -41.588236898748164L 1536 0 Z;M0 0L 0 701.2850497264652Q 192 570.1080312699999  384 530.1220719146138T 768 309.4167153103558T 1152 211.27872948808073T 1536 64.3016593951337L 1536 0 Z"></animate>
            </path>
            <path d="" fill="url(#lg-0.0931351362582995)" opacity="0.4">
                <animate attributeName="d" dur="25s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-6.25s" values="M0 0L 0 687.1918719693635Q 192 519.6297083848083  384 502.4763898129669T 768 314.1168636010762T 1152 160.10909867369128T 1536 87.26143495320855L 1536 0 Z;M0 0L 0 658.9858117032302Q 192 643.9652017945835  384 594.8679932042639T 768 406.5930243561324T 1152 264.7897259998879T 1536 40.46086299138267L 1536 0 Z;M0 0L 0 648.9610194494146Q 192 603.3867822848591  384 568.5831826415632T 768 357.42928375942716T 1152 146.839496486641T 1536 10.380782723570519L 1536 0 Z;M0 0L 0 687.1918719693635Q 192 519.6297083848083  384 502.4763898129669T 768 314.1168636010762T 1152 160.10909867369128T 1536 87.26143495320855L 1536 0 Z"></animate>
            </path>
            <path d="" fill="url(#lg-0.0931351362582995)" opacity="0.4">
                <animate attributeName="d" dur="25s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-12.5s" values="M0 0L 0 657.173384329888Q 192 572.545375087089  384 540.2959732414395T 768 386.7981571228663T 1152 296.9623131481247T 1536 95.35012093726709L 1536 0 Z;M0 0L 0 627.419532700829Q 192 500.1336531243581  384 463.27660679957637T 768 419.3883570241293T 1152 230.31886012562825T 1536 83.636348506172L 1536 0 Z;M0 0L 0 648.3706412918159Q 192 544.9903371815483  384 498.4819147976668T 768 352.45411736240476T 1152 173.37791769929055T 1536 93.84217729031707L 1536 0 Z;M0 0L 0 657.173384329888Q 192 572.545375087089  384 540.2959732414395T 768 386.7981571228663T 1152 296.9623131481247T 1536 95.35012093726709L 1536 0 Z"></animate>
            </path>
            <path d="" fill="url(#lg-0.0931351362582995)" opacity="0.4">
                <animate attributeName="d" dur="25s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-18.75s" values="M0 0L 0 718.4789662020199Q 192 580.1460294319452  384 557.6844920392518T 768 378.80059423487273T 1152 224.49993934363886T 1536 27.978771438196304L 1536 0 Z;M0 0L 0 610.7934550235885Q 192 562.0945491477232  384 544.1139122805885T 768 345.403264578453T 1152 193.92528640218472T 1536 -35.59486181554621L 1536 0 Z;M0 0L 0 726.9925828559552Q 192 597.482793683571  384 573.2859869178953T 768 295.49325759080136T 1152 228.2233650240811T 1536 -23.30233912998358L 1536 0 Z;M0 0L 0 718.4789662020199Q 192 580.1460294319452  384 557.6844920392518T 768 378.80059423487273T 1152 224.49993934363886T 1536 27.978771438196304L 1536 0 Z"></animate>
            </path>
        </g>
    </svg>

    <div class="container-fluid bg">

        <div class="row" style="height: 640px;">

            <div class="col-md-6" style="margin: auto;padding-left: 11%;color: white;">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <h4>Lorem ipsum dolor sit.</h4>
            </div>

            <div class="col-md-6" style="margin: auto;display: flex; flex-direction: row; justify-content: center;">
                <a href="register.php" type="button" class="btn btn-outline-success">Teacher</a>
                <a href="studentdashboard.php" type="button" class="btn btn-outline-success">Student</a>
            </div>

        </div>
    </div>


    <?php include 'includes/footerlinks.php' ?>

</body>

</html>