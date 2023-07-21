<?php 

echo 

"

<ul id='menu' class='flex flex-col w-44 h-fit p-3 rounded-xl border border-[#E0E0E0] gap-1 shadow-md bg-white absolute right-[8%] top-12 ease-in-out hidden'>

    <li
        class='flex items-center gap-2 h-10 bg-[#F2F2F2] px-2 rounded-lg cursor-pointer text-xs font-medium text-[#4F4F4F]'>

        <span>
            <img src='../public/icons/profileIcon.svg' alt='profile Icon'>
        </span>

        <span>
            My Profile
        </span>

    </li>

    <li class='flex items-center gap-2 h-10 px-2 rounded-lg cursor-pointer text-xs font-medium text-[#4F4F4F]'>
        <span>
            <img src='../public/icons/GroupChat.svg' alt='Group Chat Icon'>
        </span>
        
        <span>
            Group Chat
        </span>
    </li>

    <div class='border-t p-1'>
        <li class='flex items-center gap-2 h-10 px-2 rounded-lg cursor-pointer text-xs font-medium  mt-2 text-[#EB5757]'>
            
            <span>
                <img src='../public/icons/logout.svg' alt='logout Icon'>
            </span>

            <a href='../handles/logout.php'>
                Logout
            </a>

        </li>
    </div>

</ul>

";