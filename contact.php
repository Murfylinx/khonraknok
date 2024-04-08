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
        form {
            display: none !important;
        }
        .discript {
            display: flex;
            justify-content: center;
            align-items: center;
            & iframe {
                margin-top: 3rem;
                margin-right: 3rem;
            }
        }

        @media screen and (max-width: 600px) {
        .discript {
            display: flex;
            flex-direction: column;
            align-items: center;
            }
        }
        
        .text {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .img iframe {
            display: none !important;
        }
    </style>
</head>
<body>
    <?php include('components/top.php'); ?>
    <?php include('components/navbar.php'); ?>
    <?php include('components/advert.php'); ?>
    <div class="container">
        <div class="discript">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100071032692758&tabs&width=400&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <div class="text">
                <p>📌จำหน่ายกรงนก</p>
                <p>📌อาหารนก</p>
                <p>📌อุปกรณ์ตกแต่งกรงนก</p>
                <p>📌ปลีก/ส่ง ทั่วประเทศ 🚛📦🇹🇭</p> 
                <p>📞082-282-6981</p> 
            </div>       
        </div>
    </div>
    <?php include('components/footer.php'); ?>


    <!-- JS Bootstrap 5 -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>