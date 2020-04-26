<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mon IP - Plumia</title>
        <link rel="stylesheet" href="css/output.css" />
    </head>
    <body class="bg-purple-700">
        <div class="container mx-auto">
            <div class="rounded bg-purple-600 shadow-lg xs:w-11/12 sm:w-11/12 md:w-8/12 lg:w-4/12 xl:w-4/12 mt-6 mx-auto">
                <p class="text-center text-6xl text-white"><?= $ip ?></p>
            </div>
            <p class="text-center text-purple-800 mt-2">Copyright &copy; Plumia <?= date('Y') ?></p>
        </div>
    </body>
</html>