<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mon IP - Plumia</title>
        <link rel="shortcut icon" type="image/jpg" href="https://plumia.net/images/favicon.png"/>
        <link rel="stylesheet" href="css/output.css" />
    </head>
    <body class="bg-purple-700">
        <div class="container mx-auto mt-12">
            <div class="rounded bg-purple-600 shadow-lg xs:w-11/12 sm:w-11/12 md:w-8/12 lg:w-5/12 xl:w-5/12 mt-6 mx-auto relative">
                <div id="alert" class="hidden w-1/2 p-2 m-auto absolute text-center text-indigo-700 rounded-full bg-white shadow-xs" style="top: -20px; left: 25%" role="alert">
                    <span class="font-semibold  px-2 py-1">Copié !</span>
                </div>
                <input class="w-full text-center text-6xl text-white copy bg-transparent cursor-pointer" value="<?= $ip ?>" />
            </div>
            <p class="text-center text-purple-800 mt-2">Copyright &copy; Plumia <?= date('Y') ?></p>
        </div>
        <script type="application/javascript">
            const copy = document.getElementsByClassName('copy');
            const alert = document.getElementById('alert');

            Array.from(copy).forEach(function(element) {
                console.log(element);
                element.addEventListener('click', function() {
                    element.select();
                    element.setSelectionRange(0, 99999);

                    document.execCommand("copy");

                    console.log('Le texte a été copié.');

                    alert.classList.add('block');
                    alert.classList.remove('hidden');
                });
            })
        </script>
    </body>
</html>