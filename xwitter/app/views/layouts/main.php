<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?? 'Xwitter'; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-slate-900 flex flex-col items-center justify-center min-h-screen">
  <div class="container mx-auto p-4">
    <?php echo $content; ?>
  </div>
</body>

</html>