<?php  

$link = "https://animechan.vercel.app/api/random";
$result = file_get_contents($link);
$data = json_decode($result, true);


?>


<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../src/output.css" rel="stylesheet">
  <title>Random Quotes Anime</title>
</head>
<body>
  
  <section class="">
    <form method="post">
      <button class="btn btn-circle btn-outline absolute top-3 right-3" id="reset" type="submit" onclick="reset()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tropical-storm" viewBox="0 0 16 16">
          <path d="M8 9.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
          <path d="M9.5 2c-.9 0-1.75.216-2.501.6A5 5 0 0 1 13 7.5a6.5 6.5 0 1 1-13 0 .5.5 0 0 1 1 0 5.5 5.5 0 0 0 8.001 4.9A5 5 0 0 1 3 7.5a6.5 6.5 0 0 1 13 0 .5.5 0 0 1-1 0A5.5 5.5 0 0 0 9.5 2zM8 3.5a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
        </svg>
      </button>
    </form>
    <h1 class="say text-2xl font-bold top-5 left-5 absolute">Kata Anime!</h1>

    <div class="container flex justify-center items-start h-96" style="margin-top: 130px;">
      <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
          <h2 class="card-title mb-3"><?= $data['character'] ?></h2>
          <p class="mb-3"><?= $data['quote'] ?></p>
          <div class="card-actions flex text-right">
            <p>~ <?= $data['anime'] ?></p>            
          </div>
        </div>
      </div>
    </div>
    <p class="absolute bottom-1 right-3">Created with ☕ by <a href="https://www.instagram.com/figo_arbnsyh" class="text-dark underline">Figo</a></p>
  </section>

<script type="text/javascript">
  function reset() {
    document.reload()
  }
</script>
</body>
</html>