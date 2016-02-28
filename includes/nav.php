

        <script>
            $(function(){
                $('#showSideBar').on('click', function(){
                    $('.ui.sidebar')
                        .sidebar('toggle')
                    ;
                });
                $('')
                $('.ui.dropdown')
                    .dropdown()
                ;
            });
        </script>

        <!-- START OF NAVIGATION BAR -->
        <nav id="tdd-nav-container">

            <body>

            <div class="ui sidebar inverted vertical menu">
                <h3 class="ui centered header">TechnoDream Admin Panel</h3>

                <div class="ui very padded content">
                    <img class="ui centered tiny circular image" src="../uploads/user_imgs/<?php echo $loggedInUser_image; ?>">
                </div>

                </br>

                <a href="index.php" class="item">
                    <i class="dashboard icon"></i>
                    Tableau de bord
                </a>
                <a href="orders.php" class="item">
                    <i class="bell icon"></i>
                    Effectuer un scan
                </a>
                <a href="posts.php" class="item">
                    <i class="write icon"></i>
                    Planification
                </a>
                <a href="promoCode.php" class="item">
                    <i class="barcode icon"></i>
                    Archives
                </a>
                <a href="users.php" class="item">
                    <i class="user icon"></i>
                    Patch
                </a>
                <a href="archives.php" class="item">
                    <i class="archive icon"></i>
                    Archives
                </a>
                <a href="settings.php" class="item">
                    <i class="gear icon"></i>
                    Parametres
                </a>
                <a href="logout.php" class="item">
                    <i class="gears icon"></i>
                    Deconnexion
                </a>
            </div>

            <?php
            if($loggedin == TRUE) {
                echo <<<_END

            <div class="pusher">
                <div class="ui top attached menu">
                    <div class="item" id="showSideBar">
                        <i class="sidebar icon"></i>
                    </div>
                    <div class="right menu">
                        <div class="ui right aligned category search item">
                            <div class="ui transparent icon input">
                                <input class="prompt" type="text" placeholder="en instance">
                                <i class="search link icon"></i>
                            </div>
                            <div class="results"></div>
                        </div>
                    </div>
                </div>


_END;
            }
            ?>


        </nav>
        <!-- END OF NAVIGATION BAR -->
