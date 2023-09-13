<?php
require_once '../model/db.php';
require_once '../model/model.php';

$result = mysqli_query($conn, "SELECT * FROM pharaohs ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <title>Pharaoh Details</title>
</head>

<body class="bg-gray-100">
  <?php if(mysqli_num_rows($result) > 0) {
    while($pharaoh = mysqli_fetch_assoc($result)) {
  ?>
  <div class="container mx-auto mt-10 p-4">
    <div class="max-w-screen-lg mx-auto bg-white shadow-md rounded-lg p-6">
      <!-- Display Picture at the Top -->
      <div class="mb-4">
        <img src="../asset/uploads/<?php echo $pharaoh['pic']; ?>" alt="<?php echo $pharaoh['name']; ?>"class="w-full max-w-md max-h-64 h-auto rounded-lg">
      </div>

      <!-- Display Pharaoh Name -->
      <h1 class="text-2xl font-semibold mb-4"><?php echo $pharaoh['name']; ?></h1>

      <!-- Display Description -->
      <p class="mb-4"><?php echo $pharaoh['description']; ?></p>

      <!-- Display Ruling Time -->
      <div class="mb-4">
        <p class="font-semibold">Ruling Time:</p>
        <p><?php echo $pharaoh['rule_time']; ?></p>
      </div>

      <!-- Display DOB and DOD -->
      <div class="mb-4">
        <p class="font-semibold">Year of Birth:</p>
        <p><?php echo $pharaoh['dob']; ?></p>
        <p class="font-semibold">Year of Death:</p>
        <p><?php echo $pharaoh['dod']; ?></p>
      </div>

      <!-- Display Posted Time -->
      <p class="text-xs text-blue-600">Posted on <?php echo date('F j, Y', strtotime($pharaoh['post_date'])); ?></p>
      <div class="mb-4">
  <!-- Comment Button -->
  <button class="text-blue-600 underline cursor-pointer" onclick="toggleComment(<?php echo $pharaoh['id']; ?>)">Comment</button>
  
  <!-- Comment Textarea (Initially Hidden) -->
  <form method="post" enctype="multipart/form-data" action="../controller/addCommentCheck.php">
  <input type="hidden" name="pharaoh_id" value="<?php echo $pharaoh['id']; ?>">
  <div id="commentBox_<?php echo $pharaoh['id']; ?>" class="hidden mt-2">
    <textarea class="w-full h-20 px-3 py-2 border rounded focus:outline-none focus:shadow-outline" placeholder="Add your comment..." name="comment"></textarea>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2" name="submit">Submit</button>
  </div>
</form>

</div>

    </div>
  </div>
  <?php
    }
  } else {
    echo "No Records Found";
  }
  ?>
</body>
<script>
  function toggleComment(pharaohId) {
    const commentBox = document.getElementById(`commentBox_${pharaohId}`);
    commentBox.classList.toggle('hidden');
  }

  function submitComment(pharaohId) {
    const commentBox = document.getElementById(`commentBox_${pharaohId}`);
    const textarea = commentBox.querySelector('textarea');
    const commentText = textarea.value;
    

    textarea.value = '';
    commentBox.classList.add('hidden');
  }
</script>

</html>
