<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> 提示 </title>
    </head>
<body bgcolor="#e0ffff">

<h2 id="info" align="center" style="color: #e8543f; margin-top: 200px;" delay="
<?php
    if (isset($delay)){
        echo $delay;
    }else{
        echo  0;
    }
?>
" link="
<?php
    if (isset($path)){
        echo $path;
    }else{
        echo '/';
    }
?>" >
    <?php
        if (isset($info)){
            echo $info;
        }else{
            echo '';
        }
    ?>
</h2>

<script>
    var h = document.getElementById('info');
    var delay = parseInt(h.getAttribute('delay'));
    setTimeout(function () {
        window.location.replace(h.getAttribute('link'));
    }, delay);
</script>
</body>
</html>