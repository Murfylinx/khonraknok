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
        .counterimg {
            width: 150px;
            height: auto;
            border-radius: 0 !important;
        }
    </style>
</head>
<body>


    <?php include('components/top.php'); ?>
    <?php include('components/navbar.php'); ?>

    <div class="container mt-5">
        <h1 class="mb-4">คอมเมนต์จากผู้ใช้งาน & คะแนนรีวิว</h1>
        
        <!-- Comment Form -->
        <form>
            <div class="mb-3">
            <label for="commentInput" class="form-label">แสดงความคิดเห็น 📄</label>
            <textarea class="form-control" id="commentInput" rows="3" required></textarea>
            </div>
            <div class="mb-3">
            <label for="ratingInput" class="form-label">คะแนน ⭐</label>
            <input type="number" class="form-control" id="ratingInput" min="1" max="5" required>
            </div>
            <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </form>

        <script src="js/visitor.js"></script>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">ผู้เยี่ยมชมเว็บไซต์ทั้งหมด</h6>
                    <p class="card-subtitle">
                        <div class="card-subtitle">
                            <a href='https://www.free-counters.org/' class="visitor"></a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=86725029e8bf142b932f96edb8329e4802a1fb6b'></script>
                            <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1169494/t/2"></script>
                        </div>
                    </p>
                </div>
            </div>
        </div>

        <!--  -->
        <!-- Comments Section -->
        <div class="mt-5">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">รีวิวจากผู้ใช้งานที่ 1</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rating: 5/5 ⭐⭐⭐⭐⭐</h6>
                <p class="card-text">สินค้าสวยตรงปก ราคามิตรภาพ</p>
            </div>
            </div>
            <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">รีวิวจากผู้ใช้งานที่ 2</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rating: 5/5 ⭐⭐⭐⭐⭐</h6>
                <p class="card-text">สินค้าราคามิตรภาพจริงๆครับ 👍💯</p>
            </div>
            </div>
            <!-- Add more comments as needed -->
        </div>
    </div>

    <?php include('components/footer.php'); ?>
    <!-- JS Bootstrap 5 -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>