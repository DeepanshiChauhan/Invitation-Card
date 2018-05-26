<?php
include_once 'lib/header.php';
?>
<body>
            <div class="mid">
                <div class="mid_left ">
                    <?php 
                        @$pid=$_GET['pid'];
                        if($pid=='page1')
                        {
                            include_once  'page1.php';
                        }
                        else if($pid=='page2')
                        {
                            include_once 'birth_cards.php';
                        }
                        else if($pid=='page3')
                        {
                            include_once  'wed_cards.php';
                        }
                        else if($pid=='page4')
                        {
                            include_once 'gen_cards.php';
                        }
                         else if($pid=='page5')
                        {
                            include_once 'anniv_cards.php';
                        }
                        else if($pid=='page6')
                        {
                            include_once 'about.php';
                        }
                        else 
                        {
                            include_once 'page1.php';
                        }
                    ?>
                </div>
                <div class="mid_rigth">
                    <div class="rigth_top">
                        <img src="images/<?php echo rand(2,5);?>.jpg" > 
                    </div>
                    <br>
                    
                    <div class="rigth_bottom">
                        <img src="images/<?php echo rand(2,5);?>.jpg" >
                      
                    </div>
                </div>
                <div class="clr"></div>
            </div>
    </body>
<?php
                include_once  'lib/footer.php';
?>
