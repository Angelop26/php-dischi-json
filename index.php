<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="app">
        <header>
            <i class="fa-brands fa-spotify ms-5 fs-1" style="color: #27d51e;"></i>
        </header>
        <main>
            <div class="container">
                <div class="row row-cols-3">
                    <div class="col mt-4" v-for="(disco , index) in dischi" :key="index">
                        <div class="card text-center text-white h-100" style="width: 18rem;">
                            <img :src="disco.poster" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ disco.title }}</h5>
                                <p class="card-text"> {{ disco.author }} </p>
                                <h6 class="card-title">{{ disco.year }} </h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <!-- script js -->
    <script src="./js/script.js"></script>
</body>

</html>