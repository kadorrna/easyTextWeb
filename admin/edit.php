<?php
session_start();
if(!isset( $_SESSION['myusername'])){
    header("location:login.php");
}

?>

<html>
<?php
    include ('../includes/header.php');
?>

<script src="/js/vendor/jquery.validate.min.js"></script>
<script>
    $("form").validate();
</script>
<body>
    Login Successful
    </br>


    <form class="form" id="formulario" method="POST" action="save.php">
        <fieldset>
            <legend>Validating a complete form</legend>
            <?php
                $string = file_get_contents("texts.json");
                $json_a = json_decode($string, true);

                foreach ($json_a as $key => $value) {

                    if (($key == "SECTION1") || ($key == "SECTION2") ||
                        ($key == "SECTION3") || ($key == "SECTION4")){
            ?>
                        <h1> "<?php echo $value;?>"</h1>
            <?php
                    }
                    else
                    {
            ?>
                        <label for="<?php echo $key;?>">
                            <?php echo $key?>
                        </label>
                        <input id ="<?php echo $key;?>"
                               name="<?php echo $key;?>"
                               type="text"
                               value="<?php echo $value;?>"
                                required>
                        </input>
                        </br>
            <?php
                    }
                }
            ?>
            <p>
                <input class="submit" type="submit" value="Submit">
                <input class="cancel" type="submit" value="Cancel">
            </p>
        </fieldset>
    </form>

</body>
</html>