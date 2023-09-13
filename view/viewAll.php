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
  <link rel="stylesheet" type="text/css" href="../asset/styles.css">
  <title>Pharaoh Details</title>

</head>

<body class="bg-gray-100">


<div class="container mx-auto mt-1 p-1">
  <div class="container mx-auto mt-4 p-1 flex justify-start">
    <a href="main.html" class="text-s text-blue-700 hover:underline">
      Go to Main
    </a>
  </div>
  <?php if(mysqli_num_rows($result) > 0) {
    while($pharaoh = mysqli_fetch_assoc($result)) {
      $pharaohId = $pharaoh['id'];
      $comment_show = mysqli_query($conn, "SELECT * FROM comment WHERE pharaoh_id = $pharaohId ORDER BY comment_id DESC;");
  ?>
  <div class="container mx-auto mt-10 p-4">
    
    
    <div class="max-w-screen-lg mx-auto bg-white shadow-md rounded-lg p-6">
      
      <div class="mb-4">
        <img src="../asset/uploads/<?php echo $pharaoh['pic']; ?>" alt="<?php echo $pharaoh['name']; ?>"class="w-full max-w-md max-h-64 h-auto rounded-lg">
      </div>

      <!-- Display Pharaoh Name -->
      <h1 class="text-2xl font-semibold mb-4"><?php echo $pharaoh['name']; ?></h1>

      <!-- Display Summary -->
<!-- Display Summary -->
<!-- Display Summary -->
<div class="mb-4">
  <p class="font-semibold">Summary:</p>
  <p  ><?php echo $pharaoh['summary']; ?></p>
</div>



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

        <!-- Comment Textarea  -->
        <form method="post" enctype="multipart/form-data" action="../controller/addCommentCheck.php">
          <input type="hidden" name="pharaoh_id" value="<?php echo $pharaohId; ?>">
          <div id="commentBox_<?php echo $pharaoh['id']; ?>" class="hidden mt-2">
            <textarea class="w-full h-20 px-3 py-2 border rounded focus:outline-none focus:shadow-outline" placeholder="Add your comment..." name="comment"></textarea>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2" name="submit">Submit</button>
            <div class="mt-4">
               <h2 class="text-xl font-semibold mb-2">Comments</h2>

                  <?php if(mysqli_num_rows($comment_show) > 0) {
                         while($show = mysqli_fetch_assoc($comment_show)) {
                  ?>
                      <div class="mb-4 border-b py-2 flex justify-between items-center">
        <div class="comment">
            <?php echo $show['comment']; ?>
        </div>
        <div class="comment-time text-gray-00">
             <?php echo date('F j, Y', strtotime($show['time'])); ?>
            on <?php echo date('g:i a', strtotime($show['time'])); ?>
        </div>
    </div>
                   <?php
                      }
                          } else {
                              echo "No one commented yet";
                                 }
                    ?>
              </div>
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
</script>
</html>
