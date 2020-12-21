<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Validation</title>
  </head>
  <body>
    <div class="container">
        <h1>Form Validation</h1>
        <?php if (isset($validation)) : ?>
            <div class="text-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" value="<?=set_value('email') ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" value="<?=set_value('password') ?>" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Category</label>
                <select name="category" class="form-control">
                    <option value=""></option>
                    <?php foreach ($categories as $cat): ?>
                        <option <?= set_select('category',$cat) ?> value="<?= $cat ?>"><?= $cat ?></option>
                    <?php endforeach; ?>
                </select>

            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input name="date" value="<?=set_value('date') ?>" type="date" class="form-control" id="date">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Upload File</label>
                <input type="file" mulitiple name="theFile[]" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <?php
            echo '<pre>';
            print_r($_POST);
            echo '<pre>';
            ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>