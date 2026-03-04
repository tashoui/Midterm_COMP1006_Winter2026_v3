<?php
require "includes/connect.php"


$reviews = [];

?>

<main>
  <h1>Reviews</h1>

<?php if (count($reviews) === 0): ?>
    <p>No reviews yet</p>
<?php else: ?>
     <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>title</th>
          <th>author</th>
          <th>rating</th>
          <th>review_text</th>
          <th>created_at</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  <?php endif; ?>

  <p>
    <a href="index.php">Back to Review Form</a>
  </p>
</main>
    
    