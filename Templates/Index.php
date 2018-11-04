<!DOCTYPE html>
  <head>
    <?php include'includeCss.html'?>
    <meta charset="UTF-8">
    <title>Index</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
<h1>Hello <?php echo $this->name; ?></h1>
<p>Bienvenue sur le microframework de Deshayes Gary</p>
<a href="?controller=index&action=helloWorld">Vers le hello world</a>

<a href="?"></a>
<?php include'includeJs.html'?>
</body>
</html>
