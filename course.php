<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Course</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- top section -->
    <section class="sub-header">
    <?php if(file_exists('navbar.php')){include 'navbar.php';} ?>
     <h1>Our Courses</h1>
    </section>
    <!-- Course section -->
    <section class="course">
      <h1>Courses We Offer</h1>
      <p>Explore a wide variety of academic programs designed to empower your future!</p>

      <?php   // Include database configuration
        if (file_exists('config.php')) {
            include 'config.php';
        }
        ?>
        
      <div class="selection-box">
        <select id="course-select" onchange="selectedCourse()">
          <option value="" disabled selected>Select a Course</option>
        
          <!-- Undergraduate Courses -->
          <optgroup label="Undergraduate Courses">
            <option value="bsc">Bachelor of Science (B.Sc)</option>
            <option value="ba">Bachelor of Arts (B.A)</option>
            <option value="bcom">Bachelor of Commerce (B.Com)</option>
            <option value="be">Bachelor of Engineering (B.E)</option>
            <option value="btech">Bachelor of Technology (B.Tech)</option>
            <option value="bba">Bachelor of Business Administration (BBA)</option>
            <option value="llb">Bachelor of Laws (LLB)</option>
            <option value="mbbs">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
          </optgroup>
        
          <!-- Postgraduate Courses -->
          <optgroup label="Postgraduate Courses">
            <option value="msc">Master of Science (M.Sc)</option>
            <option value="ma">Master of Arts (M.A)</option>
            <option value="mcom">Master of Commerce (M.Com)</option>
            <option value="me">Master of Engineering (M.E)</option>
            <option value="mtech">Master of Technology (M.Tech)</option>
            <option value="mba">Master of Business Administration (MBA)</option>
            <option value="llm">Master of Laws (LLM)</option>
            <option value="md">Doctor of Medicine (M.D)</option>
          </optgroup>
        
          <!-- Professional and Other Courses -->
          <optgroup label="Professional Courses">
            <option value="ca">Chartered Accountant (CA)</option>
            <option value="cma">Cost and Management Accountant (CMA)</option>
            <option value="cs">Company Secretary (CS)</option>
            <option value="pgdm">Post Graduate Diploma in Management (PGDM)</option>
            <option value="dpharm">Diploma in Pharmacy (D.Pharm)</option>
            <option value="bpharm">Bachelor of Pharmacy (B.Pharm)</option>
          </optgroup>
        </select>
        
      
      </div>
      <div class="row">
       <?php

        // Fetch all data
        $fetchQuery = "SELECT * FROM career_combass_courses";
        $result = $conn->query($fetchQuery);
      
        if ($result->num_rows > 0): 
            while ($row = $result->fetch_assoc()): 
           

        ?> 
        <div class="course-col bsc" id="<?php echo $row['course_id'] ?>">
            <h3 class="course-col-h3"><?php echo $row['course'] ?></h3>
            <p><?php echo $row['description'] ?></p>
        </div>
        <?php 
            endwhile;
        else: 
        ?>
        <div>
          <h1 style="text-align:center">No Data Found</h1>
        </div>
        <?php endif; ?>
        
    </div>
    
    </section>
    

  
    
    </div>
  </section>

    <!-- footerll -->

    <section class="footer">
      <h4>About US</h4>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil saepe <br>
        sunt, sequi vero culpa aperiam ad nemo consequuntur debitis eius!
      </p>
      <div class="icons">
        <i class='bx bxl-facebook-circle'></i>
        <i class='bx bxl-twitter'></i>
        <i class='bx bxl-instagram'></i>
        <i class='bx bxl-linkedin-square' ></i>
      </div>
      <p>Made with by <i class='bx bx-heart' ></i> NK</p>
    </section>

    <script src="script.js"></script>
  </body>
</html>
