<?php
$pageTitle = 'Portal Home';
include 'include/header.php';
?>

<div class="container">
  <h1>Welcome! Choose a Page:</h1>
  <div class="buttons-container">
    <div class="button-group">
      <h2>For the Professors</h2>
      <br>
      <a href="src/professor_details.php" class="button">Professor Details</a>
      <a href="src/grade_counts.php" class="button">Grade Counts</a>
    </div>

    <div class="button-group">
      <h2>For the Students</h2>
      <br>
      <a href="src/section_listings.php" class="button student">Section Listings</a>
      <a href="src/student_schedule.php" class="button student">Student Schedule</a>
    </div>
  </div>
</div>
</div>

<?php include 'include/footer.php'; ?>
