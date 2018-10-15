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
<ul>in the url try other queries
  <li><a href="?controller=index&action=index">Index</a></li>
  <li><a href="?controller=index&action=page">Page</a></li>
  <li><a href="?controller=index&action=list">List</a></li>
  <li><a href="?controller=index&action=your_choice">NotFound</a></li>
</ul>
<a href="?controller=index&action=partieGary" class="btn btn-primary">Partie ajoutée par Gary</a>
<a href="?controller=backOffice&action=index" class="btn btn-warning">Controller BackOffice</a>
<a href="?"></a>
<?php include'includeJs.html'?>
</body>
</html>
