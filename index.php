<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>University Site</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- top section -->
    <section class="header">
     <?php if(file_exists('navbar.php')){include 'navbar.php';} ?>
      <div class="text-box">
        <h1>Career Compass</h1>
        <p>
          Best site to choose your career...!
          
        </p>
        <a href="course.php" class="hero-btn">Course</a>
        <a href="college.php" class="hero-btn">Colleges</a>
      </div>
    </section>

    
    <script src="script.js"></script>
  </body>
</html>
