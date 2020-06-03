<?php
include('db/db.php');
include('instagram.php');
include('havadurumu.php');
include('date.php');




$query = $db->query("SELECT * FROM profile", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          if($row['insta_username']== "null"){
            header("Location: ./login");
          }else {?>
            <!DOCTYPE html>
            <html lang="en" >
            <head>
              <meta charset="UTF-8">
              <title>Personal Google Page</title>
              <link rel="stylesheet" href="assets/css/style.css">
              <script src="https://kit.fontawesome.com/2345f97192.js" crossorigin="anonymous"></script>


            </head>
            <body>
            <!-- partial:index.partial.html -->
            <body>

                    <div class="main-container">

                        <!-- HEADER -->
                        <header class="block">
                            <ul class="header-menu horizontal-list">
                                <li>
                                    <a class="header-menu-tab" href="#1"><span class="icon entypo-cog scnd-font-color"></span>Settings</a>
                                </li>
                                <li>
                                    <a class="header-menu-tab" href="#2"><span class="icon fontawesome-user scnd-font-color"></span>Account</a>
                                </li>
                                <li>
                                    <a class="header-menu-tab" href="#3"><span class="icon fontawesome-envelope scnd-font-color"></span>Messages</a>
                                    <a class="header-menu-number" href="#4">5</a>
                                </li>
                                <li>
                                    <a class="header-menu-tab" href="#5"><span class="icon fontawesome-star-empty scnd-font-color"></span>Favorites</a>
                                </li>
                            </ul>
                            <div class="profile-menu">
                                <p><?php echo $username; ?> <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>
                                <div class="profile-picture small-profile-picture">
                                    <img width="40px" alt="<?php echo $username; ?> picture" src="<?php echo $userphoto; ?>">
                                </div>
                            </div>
                        </header>

                        <!-- LEFT-CONTAINER -->
                        <div class="left-container container">
                            <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER) -->
                                <h2 class="titular">FAST SITES</h2>
                                <ul class="menu-box-menu">
                                    <li>
                                        <a class="menu-box-tab" target="_blank" href="https://www.instagram.com"><span class="icon"><i class="fab fa-instagram"></i></span>Instagram</a>
                                    </li>
                                    <li>
                                        <a class="menu-box-tab" target="_blank" href="https://www.facebook.com"><span class="icon"><i class="fab fa-facebook-square"></i></span>Facebook<!--<div class="menu-box-number">3</div>--></a>
                                    </li>
                                    <li>
                                        <a class="menu-box-tab" target="_blank" href="https://www.github.com/flysquare"><span class="icon"><i class="fab fa-github"></i></span>Github</a>
                                    </li>
                                    <li>
                                        <a class="menu-box-tab" target="_blank" href="https://www.hediyelikal.net"><span class="icon"><i class="fas fa-shopping-cart"></i></span>Hediyelik Al</a>
                                    </li>
                                    <li>
                                        <a class="menu-box-tab" target="_blank" href="https://www.youtube.com"><sapn class="icon"><i class="fab fa-youtube"></i></sapn>YouTube</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- MIDDLE-CONTAINER -->
                        <div class="middle-container container">
                            <div class="profile block"> <!-- PROFILE (MIDDLE-CONTAINER) -->
                                <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
                                <div class="profile-picture big-profile-picture clear">
                                    <img width="150px" alt="<?php echo $username; ?> picture" src="<?php echo $userphoto; ?>" >
                                </div>
                                <h1 class="user-name"><?php echo $username; ?></h1>
                                <div class="profile-description">
                                    <p class="scnd-font-color"><?php echo $userinsta; ?></p>
                                </div>
                                <ul class="profile-options horizontal-list">
                                    <li><a class="comments" href="#40"><p><span class="icon fontawesome-comment-alt scnd-font-color"></span><?php echo $posts; ?></li></p></a>
                                    <li><a class="views" href="#41"><p><span class="icon fontawesome-eye-open scnd-font-color"></span><?php echo $follower; ?></li></p></a>
                                    <li><a class="likes" href="#42"><p><span class="icon fontawesome-heart-empty scnd-font-color"></span><?php echo $followed; ?></li></p></a>
                                </ul>
                            </div>
                            <div class="weather block clear"> <!-- WEATHER (MIDDLE-CONTAINER) -->
                                <h2 class="titular"><span class="icon entypo-location"></span><strong><?php echo $city; ?></strong></h2>
                                <div class="current-day">
                                    <p class="current-day-date">Today</p>
                                    <p class="current-day-temperature"><?php echo $temp."°C"; ?><i class="fas fa-cloud-sun-rain"></i></p>
                                </div>

                            </div>
                      


                        </div>

                        <!-- RIGHT-CONTAINER -->
                        <div class="right-container container">
                          <form action="db/engine.php" method="post">
                            <div class="join-newsletter block"> <!-- JOIN NEWSLETTER (RIGHT-CONTAINER) -->
                                <h2 class="titular">SEARCH IN GOOGLE</h2>
                                <div class="input-container">
                                    <input type="text" name="searchword" placeholder="Type Anything..." class="email text-input">
                                    <div class="input-icon envelope-icon-newsletter"><span class="fontawesome-envelope scnd-font-color"></span></div>
                                </div>

                            </div>
                          </form>


                            <div class="calendar-day block"> <!-- CALENDAR DAY (RIGHT-CONTAINER) -->
                                <div class="arrow-btn-container">

                                    <h2 class="titular"><?php echo $date; ?></h2>

                                </div>
                                    <p class="the-day"><?php echo $day; ?></p>

                            </div>




                        </div> <!-- end right-container -->
                    </div> <!-- end main-container -->
                </body>
            <!-- partial -->

            </body>
            </html>

        <?php } }}?>
