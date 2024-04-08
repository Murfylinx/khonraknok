<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khonraknok</title>
    <!-- CSS -->
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .first-text {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .card {
            border-radius: 15px;
            border: 1px solid rgba(0,0,0,.125);
            transition: box-shadow 0.3s;
            cursor: pointer;
        }
        .card:hover {
            box-shadow: 0 0 11px rgba(33,33,33,.2);
        }
        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            object-fit: cover;
            height: 300px;
        }
        .btn {
            border-radius: 5px;
        }

        .card img {
            border-radius: 0 !important;
            border-top-right-radius: 15px !important;
            border-top-left-radius: 15px !important;
        }
        
        .btn-danger {
            background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
            border: 0;
            border-radius: 7px;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            /* font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif; */
            font-size: 16px;
            font-weight: 500;
            /* line-height: 2.5; */
            outline: transparent;
            /* padding: 0 1rem; */
            text-align: center;
            text-decoration: none;
            transition: box-shadow .2s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            }

        .btn-danger:not([disabled]):focus {
            box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
        }

        .btn-danger:not([disabled]):hover {
            box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
        }

        .btn-primary {
            background-image: linear-gradient(#0dccea, #0d70ea);
            border: 0;
            border-radius: 4px;
            /* box-shadow: rgba(0, 0, 0, .3) 0 5px 15px; */
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            /* font-family: Montserrat,sans-serif; */
            font-size: 16px;
            font-weight: 500;
            /* margin: 5px; */
            /* padding: 10px 15px; */
            text-align: center;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }
    </style>
</head>

<body>
    <?php include('components/top.php'); ?>
    <?php include('components/navbar.php'); ?>

    <div class="container py-5">
        <h1 class="text-center mb-5">สินค้าทั้งหมด</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="image\a1.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\a2.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\a3.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\b1.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\b2.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\b3.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\c1.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\c2.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\c3.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\d1.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\d2.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="image\d3.jpg" class="card-img-top w-100 img-fluid" alt="">
                    <div class="card-body">
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-primary float-start" target="_blank">ข้อมูลเพิ่มเติม</a>
                        <a href="https://www.facebook.com/profile.php?id=100071032692758" class="btn btn-danger float-end heart" target="_blank">
                            สั่งซื้อ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('components/footer.php'); ?>




    <!-- JS Bootstrap 5 -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>