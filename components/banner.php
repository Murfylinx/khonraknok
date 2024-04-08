<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .img-banner {
            border-radius: 0 !important;
            width: 95%;
            height: 60vh;
            margin: 0 auto;
            object-fit: cover;
        }
        
        .carousel-control-prev {
            & span {
                background-color: black;
                border-radius: 50%;
            }
        }
        .carousel-control-next {
            & span {
                background-color: black;
                border-radius: 50%;
            }
        }
    </style>
</head>
<body>
<!-- <div class="container"> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://scontent.fhdy4-1.fna.fbcdn.net/v/t39.30808-6/217553091_101314745579313_2052385514357115154_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=mwXZrDNxRjoAb7C8l_d&_nc_ht=scontent.fhdy4-1.fna&oh=00_AfBR_SZA994_p1Dnl_v22kq70rkNCTQm-9AgHFFXpxltOw&oe=661894B3" class="d-block img-banner img-fluid">
        </div>
        <div class="carousel-item">
        <img src="https://scontent.fhdy4-1.fna.fbcdn.net/v/t39.30808-6/433551291_442589294785490_1029049088948788177_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=XL6xZ_Z4MwsAb5S1Jdh&_nc_ht=scontent.fhdy4-1.fna&oh=00_AfB79LoAHfDBRkv7f3x71eMDfgBM6aoDNkT5ZVc3TBNVnw&oe=66187254" class="d-block img-banner img-fluid">
        </div>
        <div class="carousel-item">
        <img src="https://scontent.fhdy4-1.fna.fbcdn.net/v/t39.30808-6/430149566_426692393041847_8151423875414940016_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=aSl6p3TFGSoAb7Jx62W&_nc_oc=AdgptN3xaoJPbs5Zv7Rux_jZ_wdgtOtKk36IecCvBIt-YHVy-CN_it95I8UJ39GgM4lOZJEf6DAt6vN4FrLsObkb&_nc_ht=scontent.fhdy4-1.fna&oh=00_AfCDibEDBJzm7jzPXxjAVsGXnoe7uwk2iq13qJJ24T263w&oe=6618893E" class="d-block img-banner img-fluid">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <!-- </div> -->
</div>
</body>
</html>