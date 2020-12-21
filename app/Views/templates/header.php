<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?= (isset($meta_title) ? $meta_title : 'Codeigniter default title') ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class='container'>

  <a class="navbar-brand" href="/">CI4 Tutorial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog/post">Post</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
<div class='container'>
