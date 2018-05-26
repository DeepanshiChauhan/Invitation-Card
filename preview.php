<?php
include_once 'lib/header.php';
include_once 'f_col.php'; 
$col= $_GET['card_color'];
@$cname=$_POST['cn'];
@$uname=$_POST['username'];
@$add=$_POST['address'];
@$uid=$_POST['user_id'];
 
 
 
 
?>
<div class="mid">
    <div class="mid_mid_left">
      <div class="major">
    
    <div class="minor">
        <center><br><br><form method="post" action="preview.php?card_color=<?php echo($col);?>">
                <p><input type="text" name="cn" placeholder="enter the company_name" ></p>
                <p><input type="text" name="username" placeholder="enter your name" ></p>

                <p><input type="text" name="address" placeholder="enter your address" ></p>
                <p><input type="email" name="user_id" placeholder="enter your email-id" pattern="/^[a-z0-9.-%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/" title="the email id is not valid" required></p>
                <p><select name="font_color">
                    <option >FONT COLOR</option>
                    <option >green</option>
                    <option >red</option>
                    <option >black</option>
                    <option> yellow</option>
                    <option>orange</option>
                    </select></p>
                <p><select name="font_family">
                    <option >FONT STYLE</option>
                    <option >arial</option>
                    <option >cursive</option>
                    <option >sanserif</option>
                    <option>serif</option>
                    </select></p>
                
                <input type="submit" name="register">
                <input type="reset" name="reset">
            </form></center>
        
        
    </div>
    </div>  
    </div>
    <div class="mid_mid_rigth">
        <div class="card_final">
            <?php
                
                
                if($col=='col1')
                {
                    echo '<div class="col1 card">';
                    echo '<div class="image2">';
                                        echo'<img src="images/FILE032.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:       ";
                    echo ($uname);
                    echo '<br>';
                    echo "address:         ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:        ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                    
                }
                else if($col=='col2')
                {
                    echo '<div class="col2 card">';
                    echo '<div class="image2">';
                         echo'<img src="images/FILE220.PNG" >';
                    
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:     ";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:       ";
                    echo ($uname);
                    echo '<br>'; 
                    echo "address:        ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:       ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else if($col=='col3')
                {
                    echo '<div class="col3 card">';
                    echo '<div class="image2">';
                          echo'<img src="images/FILE005.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:   ";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:     ";
                    echo ($uname);
                    echo '<br>';     
                    echo "address:       ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:      ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else if($col=='col4')
                {
                    echo '<div class="col4 card">';
                    echo '<div class="image2">';
                            echo'<img src="images/FILE220.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:    ";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:       ";
                    echo ($uname);
                    echo '<br>';
                    echo "address:         ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:        ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else if($col=='col5')
                {
                    echo '<div class="col5 card">';
                    echo '<div class="image2">';
                            echo'<img src="images/FILE220.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:    ";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:       ";
                    echo ($uname);
                    echo '<br>';    
                    echo "address:         ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:        ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else if($col === 'col6')
                {
                    echo '<div class="col6 card">';
                    echo '<div class="image2">';
                            echo'<img src="images/FILE220.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:     ";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:        ";
                    echo ($uname);
                    echo '<br>';      
                    echo "address:          ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:         ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else if($col === 'col7')
                {
                    echo '<div class="col7 card">';
                    echo '<div class="image2">';
                            echo'<img src="images/FILE220.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:      ";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:         ";
                    echo ($uname);
                    echo '<br>';    
                    echo "address:           ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:          ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else if($col === 'col8')
                {
                    echo '<div class="col8 card">';
                    echo '<div class="image2">';
                            echo'<img src="images/FILE220.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:        ";
                    echo ($cname);
                    echo '<br>';
                    echo "user name:           ";
                    echo ($uname);
                    echo '<br>';
                    echo "address:             ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:            ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else if($col === 'col9')
                {
                    echo '<div class="col9 card">';
                    echo '<div class="image2">';
                            echo'<img src="images/FILE220.PNG" >';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo "<style=color:'$f_color'; font-family:$f_family;>"; 
                    echo "</style>";
                    echo '<div class="fill">';
                    echo "company name:         ";
                    echo '&nbsp';
                    echo ($cname);
                    echo '<br>';
                    echo "user name:            ";
                    echo ($uname);
                    echo '<br>';      
                    echo "address:              ";
                    echo ($add);
                    echo '<br>';
                    echo "email-id:             ";
                    echo ($uid);
                    echo '</div>';
                    echo '</div>';
                }
                else
                {
                    echo '<div class="col2 card">';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>