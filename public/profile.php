<?php
    session_start();
    !$_SESSION['user'] && header("location: /authentication_app/public/login.php");

    $photo= $_SESSION['user']['photo']; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Profile</title>
</head>

<body class="min-h-screen flex flex-col w-full bg-[#FAFAFB]">

    <?php require_once "../components/header.php"?>
    <?php require_once "../components/menu.php"?>

    <div class='bg-[#FAFAFB] flex flex-col w-full h-full md:w-4/5 md:max-w-4xl md:h-[640px] mx-auto'>

        <div class='flex flex-col items-center my-6 px-5'>
            <h2 class='text-2xl '>Personal info</h2>
            <p class='text-sm'>Basic info, like your name and photo</p>
        </div>

        <div class='flex flex-col md:border md:border-[#BDBDBD] rounded-3xl md:h-[580px] overflow-hidden'>

            <div class='grid grid-cols-2 px-5 md:border-b border-[#E0E0E0] md:h-28 items-center md:py-7'>

                <div>
                    <h2 class='text-2xl '>Profile</h2>
                    <p class='text-sm text-[#828282]'>
                        Basic info, like your name and photo
                    </p>
                </div>

                <span
                    class='w-24 h-10 border border-[#828282] rounded-xl text-base text-[#828282] justify-self-end mr-4 self-center'>

                    <a class="w-full h-full flex items-center justify-center" href="edit.php">
                        Edit
                    </a>

                </span>


            </div>

            <ul class='flex flex-col p-0'>

                <li class='grid grid-cols-1/3 items-center py-4 px-5 border-b border-[#E0E0E0]'>

                    <span class='text-[#BDBDBD] text-[13px]'>
                        PHOTO
                    </span>

                    <img src='../handles/<?=$photo?>' alt=''
                        class='w-[72px] h-[72px] justify-self-end md:justify-self-start mr-4 rounded-lg'>

                </li>

                <li class='grid grid-cols-1/3 items-center px-5 border-b border-[#E0E0E0] py-5'>

                    <span class='text-[#BDBDBD] text-[13px]'>NAME</span>

                    <p class='text-lg font-medium  text-right md:text-left'>

                        <?= $_SESSION["user"]["name"] ?>

                    </p>
                </li>

                <li class='grid grid-cols-1/3 items-center px-5 border-b border-[#E0E0E0] py-5'>

                    <span class='text-[#BDBDBD] text-[13px]'>

                        BIO

                    </span>

                    <p class='text-lg font-medium text-right md:text-left whitespace-nowrap 
                    overflow-hidden overflow-ellipsis'>

                        <?= $_SESSION["user"]["bio"] ?>

                    </p>

                </li>

                <li class='grid grid-cols-1/3 items-center px-5 border-b border-[#E0E0E0] py-5'>

                    <span class='text-[#BDBDBD] text-[13px]'>

                        PHONE

                    </span>

                    <p class='text-lg font-medium text-right md:text-left whitespace-nowrap 
                    overflow-hidden overflow-ellipsis'>

                        <?= $_SESSION["user"]["phone"] ?>

                    </p>

                </li>

                <li class='grid grid-cols-1/3 items-center px-5 border-b border-[#E0E0E0] py-5'>

                    <span class='text-[#BDBDBD] text-[13px]'>
                        EMAIL
                    </span>

                    <p class='text-lg font-medium text-right md:text-left'>
                        <?= $_SESSION["user"]["email"] ?>
                    </p>
                </li>

                <li class='grid grid-cols-1/3 items-center px-5 border-b border-[#E0E0E0] py-5'>

                    <span class='text-[#BDBDBD] text-[13px]'>PASSWORD</span>

                    <p class='text-lg font-mediumv text-right md:text-left'>
                        ************
                    </p>
                </li>
            </ul>
        </div>

        <?php require_once "../components/footer.php"?>

    </div>

    

</body>

</html>