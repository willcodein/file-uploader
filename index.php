<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Claromentis test</title>
  </head>
  <body>
    <table>
      <?php foreach($data as $k => $line): ?>
        <tr>
          <td><?= $k ?></td>
          <td><?= $line ?></td>
        </tr>
      <?php endforeach ?>
    </table>
    <?php if(!empty($data)): ?>
      Download this form as CSV - <a href="#">click here</a>
    <?php endif ?>
    <form action="submit.php" method="post">
      Upload a new CSV file
      <input type="file" name="file" accept=".csv"/>
      <input type="submit" name="" value="submit">
    </form>
  </body>
</html>
