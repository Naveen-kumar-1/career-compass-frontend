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
    <!-- Top Section -->
    <section class="sub-header">
      <?php if (file_exists('navbar.php')) {
        include 'navbar.php';
      } ?>
      <h1>About Us</h1>
    </section>

    <!-- Search Bar -->
  
    </section>

    <!-- About Us Section -->
      <section class="course">
      <h1>Colleges To Choose</h1>
      <p>Explore a wide variety of academy to your future!</p>
      <div class="search-bar">
      <input
        type="text"
        id="searchInput"
        placeholder="Search colleges..."
      />
    </div>
      <div class="row" id="collegeList">
        <?php 
        // Include database configuration
        if (file_exists('config.php')) {
            include 'config.php';
        }

        // Fetch all data
        $fetchQuery = "SELECT * FROM career_combass_colleges";
        $result = $conn->query($fetchQuery);

        if ($result->num_rows > 0): 
            while ($row = $result->fetch_assoc()): 
        ?>
        <div class="course-col" data-name="<?php echo htmlspecialchars($row['college']); ?>" data-university="<?php echo htmlspecialchars($row['university']); ?>" data-state="<?php echo htmlspecialchars($row['state']); ?>" data-district="<?php echo htmlspecialchars($row['district']); ?>">
          <h3><?php echo htmlspecialchars($row['college']); ?></h3>
          <p><?php echo htmlspecialchars($row['university']); ?></p>
          <br>
          <div class="type-star">
            <div class="type">
              <span>Type: <?php echo htmlspecialchars($row['college_type']); ?></span>
              <span>State: <?php echo htmlspecialchars($row['state']); ?></span>
              <span>District: <?php echo htmlspecialchars($row['district']); ?></span>
            </div>
            <div class="star" style="display: flex; align-items:center; justify-content:center;">
              <?php 
              // Display star ratings dynamically
              $starCount = $row['star']; 
              for ($i = 0; $i < $starCount; $i++) {
                  echo '<img src="images/star_icon.png" alt="Star" style="width: 20px; height: 20px; margin-right: 5px;">';
              }   
              ?>
            </div>
          </div>
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
    </div>

    <!-- Footer Section -->
    <section class="footer">
      <h4>About Us</h4>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil saepe
        <br />
        sunt, sequi vero culpa aperiam ad nemo consequuntur debitis eius!
      </p>
      <div class="icons">
        <i class="bx bxl-facebook-circle"></i>
        <i class="bx bxl-twitter"></i>
        <i class="bx bxl-instagram"></i>  
        <i class="bx bxl-linkedin-square"></i>
      </div>
      <p>Made with by <i class="bx bx-heart"></i> NK</p>
    </section>

    <!-- Scripts -->
    <script>
      // JavaScript for Search Functionality
      const searchInput = document.getElementById('searchInput');
      const collegeList = document.getElementById('collegeList');
      const colleges = document.querySelectorAll('.course-col');

      searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();

        colleges.forEach(college => {
          const name = college.getAttribute('data-name').toLowerCase();
          const university = college.getAttribute('data-university').toLowerCase();
          const state = college.getAttribute('data-state').toLowerCase();
          const district = college.getAttribute('data-district').toLowerCase();

          if (
            name.includes(query) ||
            university.includes(query) ||
            state.includes(query) ||
            district.includes(query)
          ) {
            college.style.display = 'block';
          } else {
            college.style.display = 'none';
          }
        });
      });
    </script>
  </body>
</html>
