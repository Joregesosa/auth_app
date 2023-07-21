<?php
    session_start();

    !$_SESSION['user'] && header("location: /authentication_app/public/login.php");
  
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
            <label for="photo" class="bg-slate-500 rounded-xl">
              <span class="w-[72px] h-[72px] flex items-center justify-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                >
                  <g clip-path="url(#clip0_570_336)">
                    <path
                      d="M12.2156 15.5459C13.8724 15.5459 15.2156 14.2028 15.2156 12.5459C15.2156 10.889 13.8724 9.5459 12.2156 9.5459C10.5587 9.5459 9.21558 10.889 9.21558 12.5459C9.21558 14.2028 10.5587 15.5459 12.2156 15.5459Z"
                      fill="white"
                    />
                    <path
                      d="M20.2156 4.5459H17.0456L15.8056 3.1959C15.4356 2.7859 14.8956 2.5459 14.3356 2.5459H10.0956C9.53558 2.5459 8.99558 2.7859 8.61558 3.1959L7.38558 4.5459H4.21558C3.11558 4.5459 2.21558 5.4459 2.21558 6.5459V18.5459C2.21558 19.6459 3.11558 20.5459 4.21558 20.5459H20.2156C21.3156 20.5459 22.2156 19.6459 22.2156 18.5459V6.5459C22.2156 5.4459 21.3156 4.5459 20.2156 4.5459ZM12.2156 17.5459C9.45558 17.5459 7.21558 15.3059 7.21558 12.5459C7.21558 9.7859 9.45558 7.5459 12.2156 7.5459C14.9756 7.5459 17.2156 9.7859 17.2156 12.5459C17.2156 15.3059 14.9756 17.5459 12.2156 17.5459Z"
                      fill="white"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_570_336">
                      <rect
                        width="24"
                        height="24"
                        fill="white"
                        transform="translate(0.215576 0.545898)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </label>

            <input type="file" name="photo" id="photo" class="hidden" />

            <label for="photo">CHANGE PHOTO</label>
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
