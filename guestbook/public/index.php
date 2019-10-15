
<?php
require '../vendor/autoload.php';


// $array = [1, "apple", 2, "foo", "bar"];
// var_dump($array);

use Medoo\Medoo;

// Initialize
$file = '../storage/database.db';
if (is_writable('../storage/database.local.db')) {
$file = '../storage/database.local.db';
}
$database = new medoo([
'database_type' => 'sqlite',
'database_file' => $file
]);

    $comment = new SitePoint\Comment($database);
    $comment->setEmail('bruno@skvorc.me')
    ->setName('Bruno Skvorc')
    ->setComment('It works! Hooray! Saving comments works!')
    ->setComment('Hooray! Saving comments works!')
    ->save();

    // dump($database->error());

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <form method="post">
    <input type="submit" value="Save">
      <label>Name: <input type="text" name="name" placeholder="Yourname"></label>
      <label>Email: <input type="text" name="email" placeholder="your@email.com"></label>
      <label>Comment: <textarea name="comment" cols="30" rows="10"></textarea></label>
  </form>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
