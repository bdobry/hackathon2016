
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="main.php"><img class="img-responsive logo" src="images/horizontallogo.png" alt="logo" ></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a class="inlineb" href="profile.php">My Account</a>

                        <a href="profile.php" class="inlineb navbar-form navbar-avatar-wrap"><img src="https://nu.aeon.co/assets/avatar-placeholder-1595e26c68347a14a51c9a5bcc34c6a26e97ff5218ce74c79db21df9fb808210.png" alt="" class="img-responsive avatar-nav"></a>
                    </li>
                        <form class="navbar-left navbar-form" action="mainquiz.php">
                        <button  class="btn btn-primary navbar-button">Quiz</button>
                        </form>
                        <form class="navbar-left navbar-form" action="rquestion.php">
                        <button  class="btn btn-success navbar-button">Ask question</button>
                        </form>
                        <form class="navbar-left navbar-form" action="logout.php" method="post">
                        <button class="btn btn-danger navbar-button" type="submit">Logout</button>
                        </form>
                </ul>                   
                
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container -->
    </nav>