<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <title>Document</title>
</head>
<body class="bg-black">
    <div class="container-fluid" id="root">
        <div class="logo">
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="">
            </div>
            <div>
                <select v-model="selected">
                    <option value="All">All</option>
                    <option v-for="genere in generi" :value="genere">{{genere}}</option>
                </select>
            </div>
        </div>
        <div class="container">
            <div class="albums justify-content-center d-flex flex-wrap">
                    <div class='album' v-for="disco in genresHeaderFilter">
                        <img :src="disco.poster" alt="">
                        <div class='info'>
                            <h2>{{disco.title}}</h2>
                            <h3>{{disco.author}}</h3>
                            <h4>{{disco.year}}</h4>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="js_vue/main.js"></script>
</body>
</html>