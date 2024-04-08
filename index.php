<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khonraknok Trang</title>
    <!-- CSS -->
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
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
        }
        .btn {
            border-radius: 5px;
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

        .btn-outline-primary {
            background-color: #0078d0;
            border: 0;
            border-radius: 56px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            /* font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif; */
            font-size: 18px;
            font-weight: 600;
            outline: 0;
            padding: 16px 21px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

            .btn-outline-primary:before {
            background-color: initial;
            background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
            border-radius: 125px;
            content: "";
            height: 50%;
            left: 4%;
            opacity: .5;
            position: absolute;
            top: 0;
            transition: all .3s;
            width: 92%;
        }

            .btn-outline-primary:hover {
            box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
            transform: scale(1.05);
        }

            @media (min-width: 768px) {
            .btn-outline-primary {
                padding: 16px 48px;
            }
        }
    </style>
    
</head>
<body>
    <?php include('components/top.php'); ?>
    <?php include('components/navbar.php'); ?>
    <?php include('components/banner.php'); ?>
    <?php include('components/main.php'); ?>
    <?php include('components/advert.php'); ?>
    <?php include('components/contact.php'); ?>
    <?php include('components/footer.php'); ?>


    <!-- JS Bootstrap 5 -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>