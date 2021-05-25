<head>
    <title>Pa Fresc</title>
    <meta charset="UTF-8"/>
    <meta name="description" content="Projecte Ramon i Ruben">
    <link href="styles/style.css?v1.0" rel="stylesheet"/>
    <?php require 'includes/mysql.php';?>



<style>
body {
  background-color: white;
  color: black;
}

.dark-mode {
  background-color: #23272a;
  color: white;
}
</style>
</head>
<body> 
<img src="Images/luna icon.png" onClick="modoOscuro()" width="35px"/>


<script>
function modoOscuro() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

</body>

</head>
