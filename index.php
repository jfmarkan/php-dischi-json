<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our first API</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row p-5">
                    <div class="col-12">
                        <h1 class="mb-3">
                            Discs
                        </h1>
                    </div>
                    <div class="col-12">
                        <ul class="list-group">
                            <li v-for="(disc, index) in discs" :key="index">
                                {{ disc.title }}
                                {{ disc.author }}
                                {{ disc.year }}
                                {{ disc.poster }}
                                {{ disc.genre }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="./script/script.js"></script>
    </body>
</html>