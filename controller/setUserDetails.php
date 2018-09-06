<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/6/2018
 * Time: 1:19 PM
 */

$cookie_name ='user';
if(isset($_COOKIE[$cookie_name])) {
    $userName = $_COOKIE[$cookie_name];
    ?>
    <script type="text/javascript">
        let userName = "<?php echo $userName; ?>";
        console.log(userName);
        $("#navUserName").wrapInner(userName);

    </script>
    <?php
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}