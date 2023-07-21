<?php
    session_start();

    !$_SESSION['user'] && header("location: /authentication_app/public/login.php");
    $photo = $_SESSION['user']['photo'];
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/tailwind.css" rel="stylesheet" />
    <title>Edit Info</title>
  </head>

  <body class="min-h-screen flex flex-col w-full bg-[#FAFAFB]">
    
    <?php require_once "../components/header.php"?>
    <?php require_once "../components/menu.php"?>
    

    <div class="w-full max-w-[845px] mx-auto">
      <span>
        <a
          href="profile.php"
          class="flex items-center text-[#2D9CDB] text-lg gap-1 mx-5"
        >
          <img src="./icons/arrowBack.svg" alt="arrow back icon" />

          Back
        </a>
      </span>

      <div
        class="flex flex-col w-full md:max-w-[845px] md:border md:border-[#E0E0E0] rounded-3xl md:px-10"
      >
        <div class="px-5 mb-3 md:my-5">
          <h2 class="text-2xl">Change Info</h2>
          <p class="text-sm text-[#828282]">
            Changes will be reflected to every services
          </p>
        </div>

        <form
          action="../handles/update.php" method="POST" enctype="multipart/form-data"
          class="px-5 text-[#4F4F4F] text-[13px] flex flex-col max-w-[420px]"
        >
          <div class="mb-4 flex items-center gap-x-5">
            <label style="background-image: url(../handles/<?=$photo?>)" for="photo" class="bg-slate-500 rounded-xl bg-cover cursor-pointer">

              <span class="w-[72px] h-[72px] flex items-center justify-center">
                <img src='../public/icons/camera.svg' alt='Camera Icon'>
              </span>

            </label>

            <input type="file" name="photo" id="photo" class="hidden" />

            <label for="photo" class="hover:underline cursor-pointer">CHANGE PHOTO</label>
          </div>

          <label for="name"> Name </label>

          <input
            type="text"
            name="name"
            id="name"
            value="<?=$_SESSION['user']['name']?>"
            placeholder="Enter your name..."
            class="h-12 bg-transparent border border-[#828282] rounded-xl pl-3 focus:border-2 outline-none mb-2 font-medium text-base"
          />

          <label for="bio">Bio</label>
          <textarea
            name="bio"
            id="bio"
            placeholder="Enter your bio..."
            class="resize-none h-24 bg-transparent border border-[#828282] rounded-xl focus:border-2 outline-none p-3 mb-2 font-medium text-base"
          >
        <?=$_SESSION['user']['bio']?></textarea
          >

          <label for="phone">Phone</label>
          <input
            type="tel"
            name="phone"
            id="phone"
            value="<?= $_SESSION['user']['phone']?>"
            placeholder="Enter your phone..."
            class="h-12 bg-transparent border border-[#828282] rounded-xl pl-3 focus:border-2 outline-none mb-2 font-medium text-base"
          />

          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            value="<?= $_SESSION['user']['email']?>"
            readonly
            placeholder="Enter your email..."
            class="h-12 bg-transparent border border-[#828282] rounded-xl pl-3 focus:border-2 outline-none mb-2 font-medium text-base"
          />

          <label for="password">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Enter your new password..."
            class="h-12 bg-transparent border border-[#828282] rounded-xl pl-3 focus:border-2 outline-none"
          />

          <button
            class="w-20 h-9 bg-[#2F80ED] rounded-lg my-3 text-base font-medium text-[#fff]"
          >
            Save
          </button>
        </form>
      </div>
      <?php require_once "../components/footer.php" ?>
    </div>
  </body>
</html>
