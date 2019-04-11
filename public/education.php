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
    <section id="pageArea">
        <div class="container">
            <!-- small Links -->
            <div class="small_links">
                <ul>
                    <li>
                        <a href="">
                            Home
                        </a>
                    </li>
                    <span>/</span>
                    <li>
                        <a href="" class="act">
                            Business News
                        </a>
                    </li>
                    <span>/</span>
                    <li>
                        <a href=""> 
                            Sports News
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Page Pagination -->
            <div class="p_pagination">
                <div class="arrow-left">
                    <img src="./images/arrow.png" alt="arrow-left">
                </div>

                <div class="link-title">
                    <h4>Business News</h4>
                </div>

                <div class="arrow-right">
                    <img src="./images/arrowR.png" alt="arrow-right">
                </div>
            </div>
            
        </div>
    </section>

    <!-- Main News Articles -->
    <main id="newArticle">
        <div class="container">
            <?php 
                $news = "SELECT * FROM post WHERE category = 'education' ";
                $newsQ = mysqli_query($con, $news);
                $res = mysqli_num_rows($newsQ);

                if ($res > 0) {

                    while($row = mysqli_fetch_assoc($newsQ)) {

                        $title = $row['title'];
                        $content = $row['content'];
                        $img = $row['img'];
                        $date = $row['date'];

                    ?>


            <div class="newsArticle__Box">
                <p class='newsArticle__Title'><?php echo $title ?></p>
                <div class="newsArticleContent__Box">
                    <div class="newsArticle__Imgbox">
                        <img src="../newsImages/<?php echo $img ?>" alt="" class="img-fluid">
                    </div>
                    <div class="newsArticle__des">
                        <?php 
                        
                        echo $content;

                        ?>

                        <div class="share_social_links">
                            <ul>
                                <li>Share :- </li>
                               <li>
                                   <a href="">
                                    <img src="images/wt.png" alt="">
                                   </a>
                                </li> 
                               <li>
                                   <a href="">
                                        <img src="images/facebook.png" alt="">
                                   </a>
                                </li> 
                               <li>
                                   <a href="">
                                        <img src="images/insta.png" alt="">
                                   </a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


                    <?php
                    }

                    

                } else {
                    
                    echo "
                    
                    <div class='newsArticle_Box  text-center'>
                        <h3 class='newsArticle__Title text-white text-center'>No Result Found</h3>
                        <a href='index' class='text-white text-center'>Home</a>
                    </div>
                    
                    ";

                }
            ?>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>