<?php
    require_once "./components/test.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        TestComponent();
    ?>
    <a href="#" onclick="getComponent('test', 2);">click</a>
<script>
    let xhttp = new XMLHttpRequest();
    const getComponent = (component, param) => {
        xhttp.onreadystatechange = () => {
            console.log(xhttp.responseText);
            const content = document.getElementById("TestComponent");
            content.innerHTML = xhttp.responseText;
        };
        xhttp.open(
            "GET",
            `/core/componentRender.php?component=${component}&param=${param}`,
            true
          );
        xhttp.send(); 
    };
</script>

</body>
</html>