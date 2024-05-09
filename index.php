<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <style>
        #app {
            background-color: #06131F;
            min-height: 100vh;
        }

        h1 {
            color: #18D860;
        }

        main {
            background-color: #1D2D3C;
        }

        .ms_card {
            background-color: #112030;
        }
    </style>

</head>

<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <header class="p-3">
            <h1>logo</h1>
        </header>
        <main class="p-5">
            <div class="container">
                <div class="row g-5 text-center text-white">
                    <div class="col-4" v-for="disc in discs">
                        <div class="ms_card p-5 h-100 rounded">
                            <img :src="disc.poster" class="w-100">
                            <h2 class="mt-3">{{disc.title}}</h2>
                            <p>{{disc.author}}</p>
                            <b class="h3">{{disc.year}}</b>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>