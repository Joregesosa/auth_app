<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/jpg" href="./icons/dev.ico"/>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet" />

  <link href="./css/tailwind.css" rel="stylesheet" />
  <link href="/src/css/tailwind.css" rel="stylesheet" />

  <title>Login</title>
</head>

<body class="min-h-screen flex flex-col w-full bg-[#FAFAFB]">
  <div class="flex flex-col w-fit md:w-max m-auto">
    <div
      class="bg-[#FAFAFB] p-5 flex flex-col w-full md:w-[480px] md:h-[640px] m-auto md:border md:border-[#BDBDBD] rounded-3xl justify-center mx-auto">
      <div class="max-w-[356px] flex flex-col mx-auto">
        <span>
          <img src="../public/icons/devChallengMin.svg" alt="devChalleng icon" />
        </span>

        <h2 class="text-[#333] font-semibold text-lg w-80 my-3">
          Join thousands of learners from around the world
        </h2>

        <p class="text-[#333] text-base font-normal my-3 w-96">
          Master web development by making real-life projects. There are
          multiple paths for you to choose
        </p>
      </div>

      <form action="../handles/insert.php" method="POST" class="w-[356px] mx-auto">
        <div class="bg-[#FAFAFB] w-full border border-[#BDBDBD] h-12 flex items-center rounded-xl my-4 max-w-[356px]">
          <span class="w-6 h-6 mx-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
              <g clip-path="url(#clip0_570_396)">
                <path
                  d="M20.5187 4.86914H4.51868C3.41868 4.86914 2.51868 5.76914 2.51868 6.86914V18.8691C2.51868 19.9691 3.41868 20.8691 4.51868 20.8691H20.5187C21.6187 20.8691 22.5187 19.9691 22.5187 18.8691V6.86914C22.5187 5.76914 21.6187 4.86914 20.5187 4.86914ZM20.1187 9.11914L13.5787 13.2091C12.9287 13.6191 12.1087 13.6191 11.4587 13.2091L4.91868 9.11914C4.66868 8.95914 4.51868 8.68914 4.51868 8.39914C4.51868 7.72914 5.24868 7.32914 5.81868 7.67914L12.5187 11.8691L19.2187 7.67914C19.7887 7.32914 20.5187 7.72914 20.5187 8.39914C20.5187 8.68914 20.3687 8.95914 20.1187 9.11914Z"
                  fill="#828282" />
              </g>
              <defs>
                <clipPath id="clip0_570_396">
                  <rect width="24" height="24" fill="white" transform="translate(0.518677 0.869141)" />
                </clipPath>
              </defs>
            </svg>
          </span>

          <input type="email" name="email" id="email" placeholder="Email"
            class="bg-transparent font-normal text-base w-4/5 h-10 outline-none border-none" />
        </div>

        <div class="bg-[#FAFAFB] w-full border border-[#BDBDBD] h-12 flex items-center rounded-xl my-4 max-w-[356px]">
          <span class="w-6 h-6 mx-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
              <g clip-path="url(#clip0_570_401)">
                <path
                  d="M18.5187 8.36914H17.5187V6.36914C17.5187 3.60914 15.2787 1.36914 12.5187 1.36914C9.75868 1.36914 7.51868 3.60914 7.51868 6.36914V8.36914H6.51868C5.41868 8.36914 4.51868 9.26914 4.51868 10.3691V20.3691C4.51868 21.4691 5.41868 22.3691 6.51868 22.3691H18.5187C19.6187 22.3691 20.5187 21.4691 20.5187 20.3691V10.3691C20.5187 9.26914 19.6187 8.36914 18.5187 8.36914ZM12.5187 17.3691C11.4187 17.3691 10.5187 16.4691 10.5187 15.3691C10.5187 14.2691 11.4187 13.3691 12.5187 13.3691C13.6187 13.3691 14.5187 14.2691 14.5187 15.3691C14.5187 16.4691 13.6187 17.3691 12.5187 17.3691ZM9.51868 8.36914V6.36914C9.51868 4.70914 10.8587 3.36914 12.5187 3.36914C14.1787 3.36914 15.5187 4.70914 15.5187 6.36914V8.36914H9.51868Z"
                  fill="#828282" />
              </g>
              <defs>
                <clipPath id="clip0_570_401">
                  <rect width="24" height="24" fill="white" transform="translate(0.518677 0.369141)" />
                </clipPath>
              </defs>
            </svg>
          </span>

          <input type="password" name="password" id="password" placeholder="Password"
            class="bg-transparent font-normal text-base w-4/5 h-10 outline-none border-none" />
        </div>

        <button
          class="bg-[#2F80ED] w-full h-10 text-center font-semibold text-base text-[#FFF] rounded-lg my-4 max-w-[356px]">
          Start coding now
        </button>
      </form>

      <div class="w-full flex flex-col items-center justify-center mt-6 text-sm text-[#828282]">
        <span> or continue with these social profile </span>

        <ul class="flex items-center gap-5">
          <li class="w-11 h-11 my-5 rounded-full border border-[#828282] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
              <path
                d="M9.6893 4.13589C11.5746 4.13589 13.2799 5.10327 14.2573 6.43623L16.5738 4.10317C15.1883 2.3016 12.5218 0.873047 9.6893 0.873047C4.72983 0.873047 0.662109 4.88638 0.662109 9.84586C0.662109 14.8053 4.72983 18.8187 9.6893 18.8187C13.8006 18.8187 17.259 16.0616 18.3195 12.293C18.5478 11.5098 18.6621 10.6941 18.6621 9.84586V9.03015H10.505V12.2923H14.8283C13.931 14.2176 11.9569 15.5558 9.6893 15.5558C6.54074 15.5558 3.92495 12.9944 3.92495 9.84586C3.92495 6.6973 6.54074 4.13589 9.6893 4.13589Z"
                fill="#828282" />
            </svg>
          </li>

          <li class="w-11 h-11 my-5 rounded-full border border-[#828282] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
              <g clip-path="url(#clip0_570_412)">
                <path
                  d="M15.5757 0.689453H2.84912C1.39536 0.689453 0.212402 1.84355 0.212402 3.26186V15.678C0.212402 17.0963 1.39536 18.2504 2.84912 18.2504H8.15771V12.0423H6.04834V8.95546H8.15771V6.86323C8.15771 5.16102 9.57701 3.77634 11.3218 3.77634H14.521V6.86323H11.3218V8.95546H14.521L13.9937 12.0423H11.3218V18.2504H15.5757C17.0294 18.2504 18.2124 17.0963 18.2124 15.678V3.26186C18.2124 1.84355 17.0294 0.689453 15.5757 0.689453Z"
                  fill="#828282" />
              </g>
              <defs>
                <clipPath id="clip0_570_412">
                  <rect width="18" height="17.561" fill="white" transform="translate(0.212402 0.689453)" />
                </clipPath>
              </defs>
            </svg>
          </li>

          <li class="w-11 h-11 my-5 rounded-full border border-[#828282] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
              <g clip-path="url(#clip0_570_416)">
                <path
                  d="M7.22939 17.0733C6.45101 17.0733 5.64984 17.0103 4.84385 16.884C3.42429 16.6612 1.98728 15.9187 1.58065 15.6963L0.51416 15.1132L1.66882 14.7335C2.93101 14.3185 3.69881 14.061 4.64926 13.6578C3.69757 13.197 2.9641 12.3679 2.61103 11.2962L2.34242 10.4807L2.56269 10.5144C2.35381 10.3039 2.18888 10.0902 2.06103 9.89586C1.60633 9.20523 1.3656 8.36135 1.41682 7.63817L1.46736 6.9264L1.89349 7.09147C1.71373 6.75199 1.58381 6.38944 1.50746 6.00946C1.32138 5.08276 1.47711 4.09825 1.94609 3.23734L2.31728 2.55592L2.81373 3.1522C4.3838 5.03827 6.37246 6.15708 8.73273 6.48461C8.63632 5.82008 8.70856 5.17876 8.94764 4.6039C9.22601 3.93456 9.72122 3.36698 10.3793 2.96241C11.1102 2.51321 11.9965 2.29554 12.875 2.34951C13.807 2.40678 14.6532 2.75601 15.3253 3.36011C15.6535 3.27483 15.8954 3.18378 16.2222 3.06074C16.4189 2.98672 16.6419 2.90267 16.9209 2.80654L17.9493 2.45223L17.2787 4.36742C17.3229 4.36371 17.3685 4.36055 17.4161 4.35849L18.5142 4.30878L17.8652 5.19578C17.828 5.2466 17.8185 5.26102 17.8053 5.28093C17.753 5.35976 17.6879 5.45781 16.7971 6.64735C16.574 6.94521 16.4627 7.33317 16.4834 7.73993C16.5624 9.2857 16.3727 10.6843 15.9194 11.8966C15.4907 13.0436 14.8263 14.0277 13.9449 14.8216C12.8542 15.8037 11.4635 16.4762 9.81117 16.8201C9.00065 16.9887 8.13026 17.0733 7.22939 17.0733Z"
                  fill="#828282" />
              </g>
              <defs>
                <clipPath id="clip0_570_416">
                  <rect width="18" height="17.9999" fill="white" transform="translate(0.51416 0.689453)" />
                </clipPath>
              </defs>
            </svg>
          </li>

          <li class="w-11 h-11 my-5 rounded-full border border-[#828282] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
              <g clip-path="url(#clip0_570_414)">
                <path
                  d="M9.06494 0.689453C4.12164 0.689453 0.0649414 4.74615 0.0649414 9.68945C0.0649414 13.9078 3.02493 17.7397 6.95557 18.6895V15.7119C6.5661 15.7972 6.20767 15.7996 5.8112 15.6828C5.27933 15.5258 4.84715 15.1715 4.52635 14.6312C4.32187 14.2863 3.95946 13.9122 3.58139 13.9397L3.48869 12.8891C4.30621 12.819 5.01346 13.3872 5.43327 14.0925C5.61977 14.4062 5.83441 14.59 6.10989 14.6713C6.37617 14.7498 6.66209 14.7121 6.99525 14.5944C7.07889 13.9274 7.38445 13.6778 7.6153 13.3262V13.3257C5.27109 12.976 4.33684 11.7324 3.96605 10.7507C3.47469 9.44734 3.73836 7.81903 4.60724 6.79002C4.62413 6.76997 4.65462 6.71751 4.64281 6.68085C4.24442 5.47743 4.72987 4.48193 4.74773 4.37633C5.2075 4.51228 5.28221 4.23955 6.7449 5.1282L6.99773 5.28009C7.10347 5.34312 7.07024 5.30714 7.17598 5.29918C7.78668 5.13329 8.43048 5.04169 9.0648 5.03345C9.70393 5.04169 10.3436 5.13329 10.9796 5.30591L11.0614 5.31415C11.0543 5.31305 11.0837 5.30893 11.133 5.27954C12.9601 4.17281 12.8945 4.53453 13.3845 4.37523C13.4022 4.48097 13.8812 5.49268 13.4871 6.68085C13.4339 6.84454 15.0712 8.34377 14.1637 10.7503C13.7929 11.7324 12.8588 12.976 10.5146 13.3257V13.3262C10.8151 13.7842 11.1761 14.0278 11.1742 14.9726V18.6895C15.1049 17.7397 18.0648 13.9078 18.0648 9.68945C18.0649 4.74615 14.0082 0.689453 9.06494 0.689453V0.689453Z"
                  fill="#828282" />
              </g>
              <defs>
                <clipPath id="clip0_570_414">
                  <rect width="18" height="18" fill="white" transform="translate(0.0649414 0.689453)" />
                </clipPath>
              </defs>
            </svg>
          </li>
        </ul>

        <span>
          Adready a member?
          <a href="./login.php" class="text-[#2D9CDB]"> Login </a>
        </span>
      </div>
    </div>

    <?php require_once "../components/footer.php" ?>
  </div>
</body>

</html>