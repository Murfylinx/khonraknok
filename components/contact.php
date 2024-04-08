<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .top {
            margin-top: 100px;
            margin-bottom: 100px;
        }
        .contact {
            flex-direction: column;
        }
        .map {
            display: flex;

            & form {
                margin-left: 2rem;
            }
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .iframe-container iframe {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
<div class="container">
  <div class="d-flex align-items-center flex-column-reverse flex-lg-row">
    <div class="map flex-grow-1">
      <div class="iframe-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1021508932417!2d99.61622177568377!3d7.563840810198908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d8d648b3b5c83%3A0xb04a93b2ae127f5e!2z4Lij4LmJ4Liy4LiZIOC4hOC4meC4o-C4seC4geC4meC4gSDguJXguKPguLHguIc!5e0!3m2!1sth!2sth!4v1712508631997!5m2!1sth!2sth"
                width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
    <div class="form mt-3">
      <h2 class="float-start">ติดต่อ/สอบถาม</h2>
      <form action="#" method="post">
        <div class="mb-3">
          <input type="text" id="name" name="name" class="form-control" value="ชื่อ" required>
        </div>
        <div class="mb-3">
          <input type="email" id="email" name="email" class="form-control" value="อีเมล" required>
        </div>
        <div class="mb-3">
          <input type="text" id="number" name="subject" class="form-control" value="เบอร์โทร" required>
        </div>
        <div class="mb-3">
          <textarea id="message" name="message" class="form-control" rows="4" value="ระบุข้อความ" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>