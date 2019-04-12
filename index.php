<?php 
    include('includes/header.php');
?>
    <!-- subscribe us -->
    <div class="subscribe_us">
        <p>Subscribe Me</p>
    </div>
    <!--End Of subscribe us -->

    <div class="main-container">
        <!-- ============================ Header ======================================= -->
        <?php 
        require_once('includes/main-header.php');
        ?>
    
        <!-- ============================ Breaking News ======================================= -->
        
        <?php 
        require_once('includes/breaking.php');
        ?>
        <!-- ============================ News Area ======================================= -->
        <section id="newsArea">
            <div class="container-fluid">
                
                <ul>
                    <li>
                        <a href="business">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> Business</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="sports">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> Sports</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="politics">
                            <div class="newsbox" style='background: url(images/politics.png) no-repeat; background-position: top; '>
                                <h3 class="newsbox_heading"> Politics</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="entertainment">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> Entertainment</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="education">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> Education</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="world">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> World</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="technology">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> Technology</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="food">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> Food</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="fashion">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> Fashion</h3>
                            </div>
                        </a> 
                    </li>
                    <li>
                        <a href="more">
                            <div class="newsbox">
                                <h3 class="newsbox_heading"> More</h3>
                            </div>
                        </a> 
                    </li>
                </ul>
        </div>
      
        </section>
    </div>


    <!-- ========================================================================== -->
    <!-- subscribe us modal -->
    <!-- ========================================================================== -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form action="" method="POST">
                <div class="sub_box">
                    <input type="email" class="subscribe_e" name="email" placeholder="example@email.com">
                    <button class="sub_btn" name="sub">Subscribe</button>
                </div>
            </form>
          </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>