<!DOCTYPE html>
  <head>
    <?php include'includeCss.html'?>
    <meta charset="UTF-8">
    <title>Hello world</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
<h1>BDD </h1>
<p>Le message de la base de données est : <?php echo $this->helloworld; ?></p>
<a href="?controller=index&action=index">Retour à l'index</a>
<a href="?"></a>
<?php include'includeJs.html'?>
</body>
</html>
