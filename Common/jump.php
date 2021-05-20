<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> 提示 </title>
    </head>
<body bgcolor="#e0ffff">

<h2 id="info" align="center" style="color: #e8543f; margin-top: 200px;" delay="<?php echo $delay ?>" link="<?php echo $path ?>" ><?php echo $info ?></h2>

<script>
    var h = document.getElementById('info');
    var delay = parseInt(h.getAttribute('delay'));
    setTimeout(function () {
        window.location.href = h.getAttribute('link');
    }, delay);
</script>
</body>
</html>