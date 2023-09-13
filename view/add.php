<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  
  <title>Add Data</title>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto mt-10">
    <h1 class="text-3xl font-semibold mb-4">Add Data</h1>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" enctype="multipart/form-data" action="../controller/addCheck.php">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Name
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="name"
          type="text"
          placeholder="Enter name"
          name="name"
        >
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="summary">
          Summary
        </label>
        <textarea
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="summary"
          rows="3"
          placeholder="Enter summary"
          name="summary"
        ></textarea>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
          Description
        </label>
        <textarea
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="description"
          rows="3"
          placeholder="Enter description"
          name="description"
        ></textarea>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="rule_time">
          Ruling Time
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="rule_time"
          type="text"
          placeholder="Enter ruling time"
          name="rule_time"
        >
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="dob">
          Year of Birth 
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="dob"
          type="text"
          placeholder="Enter date of birth "

          name="dob"
        >
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="dod">
          Year of Death 
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="dod"
          type="text"
          name="dod"
          placeholder="Enter date of death"

        >
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="pic">
          Picture
        </label>
        <input type="file" class="file-input file-input-bordered file-input-accent w-full max-w-xs" name="pic" />

      </div>
     
      <div class="flex items-center justify-between">
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="submit"
          name="submit"
        >
          Add article
        </button>
      </div>
    </form>
  </div>
</body>
</html>
