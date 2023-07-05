<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our first API</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="./img/logo.png" alt="" class="py-2">
            </div>
        </header>
        <main>  
            <div id="app">
                <div class="container">
                    <div class="row p-5">
                        <div v-for="(disc, index) in discs" class="col-3 mx-5 mb-5">
                            <div class="card p-2 my_card-bg text-white " @click="openDisc(disc)">
                                <img :src="disc.poster" class="card-img-top" alt="Album Cover">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ disc.title }}</h5>
                                    <p class="card-text fw-light">{{ disc.author }}</p>
                                    <h5>{{ disc.year }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div :class="selectedDisc === null ? 'd-none' : 'd-block'">
                    <div class="my_album-details text-center" v-if="selectedDisc !== null">
                        <div class="my_close-btn" @click="closeInfo()">
                            <i class="fa-solid fa-xmark my_close-btn"></i>
                        </div>
                        <img :src="selectedDisc.poster" alt="Selected Disc Image">
                        <div class="my_album-info">
                            <h3>{{ selectedDisc.title }}</h3>
                            <h5 class="fw-light">{{ selectedDisc.author }}</h5>
                            <h3>{{ selectedDisc.year }}</h3>
                        </div>
                    </div>
                        
                
                </div>
            </div>
        </main>
        <script src="./script/script.js"></script>
    </body>
</html>