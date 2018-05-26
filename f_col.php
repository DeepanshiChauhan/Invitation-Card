
<?php
@$f_color=$_POST['font_color'];

if($f_color=="yellow")
{
    echo '<font color="yellow">';
}
else if($f_color=="red")
{
    echo '<font color="red">';
}
else if($f_color=="green")
{
    echo '<font color="green">';
}
else if($f_color=="black")
{
    echo '<font color="black">';
}
else if($f_color=="orange")
{
    echo '<font color="orange">';
}
?>
<?php
@$f_family=$_POST['font_family'];

if($f_family=="arial")
{
    echo '<font face="arial">';
}
else if($f_family=="cursive")
{
    echo '<font face="cursive">';
}
else if($f_family=="sanserif")
{
    echo '<font face="sanserif">';
}
else if($f_family=="serif")
{
    echo '<font face="serif">';
}






?>