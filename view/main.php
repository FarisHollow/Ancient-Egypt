<?php 
	session_start();
	if(isset($_SESSION['status'])){

		require_once("../model/db.php");
	    require_once("../model/model.php");





		
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../asset/styles.css">
 

  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.3.1/dist/full.css" rel="stylesheet" type="text/css" />

  <script src="https://cdn.tailwindcss.com"></script>

  

  <title>Document</title>
</head>
<body >
  <div class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl ">Ancient Egypt </a>
    </div>
    <div class="flex-none gap-2">
      <form method="post" action="viewOne.php"> 
        <div class="form-control">
          <div class="input-group">
            <input type="text" placeholder="Search…" class="input input-bordered" name='name'/>
            <button class="btn btn-square" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </button>
          </div>
        </div>
      </form>
      
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img src="../asset/logo.png" />
          </div>
        </label>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52 ">
        
          <li><a href="viewAll.php">View all pharaohs</a></li>
          <li><a href="../controller/logout.php"> Logout-></a></li>

        </ul>
      </div>
    </div>
  </div>

  <center style="padding-top: 20px;">
  <div class="card card-side shadow-md " style="width: 600px; background-color: rgb(61, 5, 107);">
    <figure><img src="../asset/card.jpg" style="min-width: 100; height: 100;" alt="Movie"/></figure>
    <div class="card-body">
    <h2 class="card-title">Welcome </h2>
      <p>New information on Pharaoh</p>
      <div class="card-actions justify-end">
        <a href="add.php" class="btn btn-primary">Add</a>
      </div>
    </div>
  </div>

 
</center>
  


  
</body>
</html>

	 

<?php 
	}else{
		echo "invalid request";
	}  
?>