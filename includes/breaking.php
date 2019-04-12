<section id='breakingNews'>
    <div class="container">
        <div class="breakingNewsDiv">
            <div class="breakingNews__box">
                <h6 class='breakingNews__box--title'>Breaking News</h6>
            </div>
            <div class="marquee">

                <p class='breakingNews__box--para'> 
                <?php 
                $bs = "SELECT * FROM breaking_news ORDER BY id DESC LIMIT 1 ";
                $bsQ = mysqli_query($con, $bs);
                while ($r = mysqli_fetch_assoc($bsQ)) {

                    $content =  $r['content'];

                }
                echo $content;  ?>
                </p>
            </div>
        </div>
    </div>
</section>