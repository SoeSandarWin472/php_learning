feature<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
      <li>person name is <?= ucwords($Bio['name']) ?></li>
      <li>person age is <?= $Bio['age'] ?></li>
      <li>He is
        <?php if ($Bio['isMarried']): ?>
                Married
                <?php else: ?>
                    not married
            <?php endif; ?>
      </li>
    </ul>
    
</body>
</html>