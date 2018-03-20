<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Claromentis test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="body-container  d-block">
      <?php if(!empty($data['table'])): ?>
      <table class="table  table-striped">
        <thead>
          <tr>
            <td><strong>Category</strong></td>
            <td><strong>Cost</strong></td>
          </tr>
        </thead>
        <?php foreach($data['table'] as $category => $cost): ?>
          <tr>
            <td><?= $category ?></td>
            <td>£<?= $cost ?></td>
          </tr>
        <?php endforeach ?>
      </table>
      <form method="get" action="newData.csv">
         Download this form as CSV - <button type="submit">Download!</button>
      </form>
      <?php endif ?>
      <form action="submit.php" method="post">
        <label for="file">Upload a new CSV file</label>
        <input type="file" name="file" accept=".csv" id="file" class="d-block"/>
        <input type="submit" name="" value="Submit">
      </form>
    </div>
  </body>
</html>
