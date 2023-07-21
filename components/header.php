<?php
    
    $name = $_SESSION['user']['name'];
    $photo = $_SESSION['user']['photo'];

    echo "

        <header class='h-12 w-full flex items-center justify-between'>

            <nav class='flex justify-between  items-center w-full px-[8%]'>
                <spa>
                    <img src='../public/icons/devChallengMax.svg' alt='devChalleng logo'>
                </spa>

                <div id='menuButton' class='flex items-center gap-4 cursor-pointer'>
                    <img src='../handles/$photo' alt='' class='w-8 h-9 rounded-lg'>

                    <span class='text-xs font-bold'>
                        $name
                    </span>

                    <span id='arrowDownIcon' class='rotate-180'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='25' height='24' viewBox='0 0 25 24' fill='none'>
                            <g clip-path='url(#clip0_570_387)'>
                            <path d='M8.71536 12.2898L11.3054 9.69976C11.6954 9.30976 12.3254 9.30976 12.7154 9.69976L15.3054 12.2898C15.9354 12.9198 15.4854 13.9998 14.5954 13.9998H9.41536C8.52536 13.9998 8.08536 12.9198 8.71536 12.2898Z' fill='#333333'/>
                            </g>
                            <defs>
                            <clipPath id='clip0_570_387'>
                            <rect width='24' height='24' fill='white' transform='translate(0.00537109 -0.000244141)'/>
                            </clipPath>
                            </defs>
                        </svg>
                    </span>
                </div>
            </nav>

        </header>

    ";
?>

    <script>

        menuButton.addEventListener("click", (e) => {

            menu.classList.toggle('hidden');
            
            arrowDownIcon.classList.toggle('rotate-180');

        });

    </script>