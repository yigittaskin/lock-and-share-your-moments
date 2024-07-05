<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Hatirac</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <style type="text/tailwindcss">
        @layer base {
          html {
            @apply dark:bg-slate-900 bg-white;
          }
        }
      </style>
    </head>
    <body class="container mx-auto">
      <nav class="w-full text-white dark:bg-slate-900 flex p-4 items-center justify-between">
  <div class="inline-flex space-x-2 mr-4">
    <div class="h-8 w-auto">
      <svg width="32" height="32" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0_355_2996" maskUnits="userSpaceOnUse" x="0" y="20" width="43" height="44">
          <path d="M0 20.6841H42.4212V63.1383H0V20.6841Z" fill="white"></path>
        </mask>
        <g mask="url(#mask0_355_2996)">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.03937 26.9694L6.1608 22.846C8.87543 20.1275 13.3267 20.1275 16.0414 22.846L40.2557 47.0875C42.9723 49.8041 42.9723 54.2651 40.2557 56.9817L36.1382 61.1012C33.4177 63.8236 28.9664 63.8236 26.2557 61.1012L2.03937 36.8655C-0.67914 34.1431 -0.67914 29.6918 2.03937 26.9694Z" fill="#E11D48"></path>
        </g>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0574 11.5954L27.9458 1.70125C30.2063 -0.567084 33.9067 -0.567084 36.1731 1.70125L46.0575 11.5954C48.3259 13.8637 48.3259 17.5738 46.0575 19.8382L36.1731 29.7305C33.9067 31.9968 30.2063 31.9968 27.9458 29.7305L18.0574 19.8382C15.793 17.5738 15.793 13.8637 18.0574 11.5954Z" fill="#2563EB"></path>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.2442 33.2776L49.5949 20.9075C51.2307 19.2795 53.8949 19.2795 55.5229 20.9075L62.7761 28.1685C64.408 29.7985 64.408 32.4724 62.7761 34.1042L50.4215 46.4705C48.7896 48.1004 46.1216 48.1004 44.4897 46.4705L37.2442 39.2153C35.6123 37.5834 35.6123 34.9095 37.2442 33.2776Z" fill="#4F46E5"></path>
      </svg>
    </div>
    <span class="hidden md:block text-slate-900 dark:text-slate-100 font-bold text-2xl">Hatıraç</span>
  </div>
  <ul class="hidden md:flex space-x-2 dark:text-slate-100 text-slate-900">
    <a href="/"><li class="hover:cursor-pointer  rounded-md dark:text-slate-100 dark:bg-blue-800  px-4 py-2">Anasayfa</li></a>
    <a href="#features"><li class="px-4 py-2 hover:cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-800  rounded-md">Özellikler</li></a>
    <a href="#about"><li class="px-4 py-2 hover:cursor-pointer hover:bg-slate-100  dark:hover:bg-slate-800 rounded-md">Hakkımızda</li></a>
  </ul>
  <div class="space-x-1 hidden md:block">
    <a href="#cta"><button type="button" class="px-6 py-2 border rounded-full dark:text-slate-100 text-slate-900 dark:hover:bg-slate-800">Hatıraç Oluştur</button></a>
  </div>
  <button class="rounded-full bg-blue-600 p-2 md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-6 w-6 text-slate-100">
      <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
    </svg>
  </button>
</nav>
<div class="flex h-screen flex-col md:flex-row text-slate-900 dark:text-slate-100 items-center bg-white dark:bg-slate-900">
  <div class="w-full p-4 space-y-4">
    <h1 class="text-5xl font-bold leading-tight">Anılarınızı Kilitleyin
      <span class="text-blue-600"> ve Paylaşın.</span>
    </h1>
    <p class="text-slate-500 font-light text-lg">Anılarınızı doğru zamana kadar güvenle saklayın. İstediğiniz anıları istediğiniz tarihe kilitleyin ve istediğiniz kişiye hediye verin. Tarayın, Kilitleyin ve Anılarınızı paylaşın.</p>
    <a href="#cta"><button class="bg-blue-600 w-full mt-3 md:w-auto py-3 px-8 rounded-md text-lg text-slate-100">Hatıraç Satın Al</button></a>
  </div>
  <figure class="w-full">
    <img src="https://img.freepik.com/free-photo/charming-businesswoman-glasses-striped-shirt-working-with-laptop-computer-while-siting-home_171337-13027.jpg?w=1480&amp;t=st=1667380980~exp=1667381580~hmac=c5ee009e37cbc863c044578184ab0e6e2fe4f16fe237d3c02b1545cd0863ace5" class="w-full h-96 object-cover" alt="hero">
  </figure>
</div>
<div class="bg-white py-8 md:py-32 dark:bg-slate-900 dark:text-slate-100 text-slate-900 p-4">
  <div class="">
    <div class="text-center space-y-3">
      <h2 class="text-3xl font-bold ">3 Adımda <span class="text-blue-600">Hatıraç</span> nasıl kullanılır?</h2>
      </h2>
      <p class="text-slate-600">Anılarını hediye vermek sadece 3 adım uzağında.</p>
    </div>
    <ul class="grid md:grid-cols-3 gap-4 mt-16">
      <li class="flex">
        <h4>
          <span class="text-2xl font-bold">1</span>
        </h4>
        <div class="ml-4">
          <h3 class="text-lg font-semibold">Hatıraçı Satın Al.</h3>
          <p class="mt-2 text-gray-500 dark:text-gray-400">Hatıraç'ı ETSY mağazamızdan satın al. Size bir QR kod göndereceğiz.</p>
        </div>
      </li>
      <li class="flex">
        <h4>
          <span class="text-2xl font-bold">2</span>
        </h4>
        <div class="ml-4">
          <h3 class="text-lg font-semibold">QR Kodu Okut.</h3>
          <p class="mt-2 text-gray-500 dark:text-gray-400">Size gönderdiğimiz QR kodu telefonunuz ile taratın.</p>
        </div>
      </li>
      <li class="flex">
        <h4>
          <span class="text-2xl font-bold">3</span>
        </h4>
        <div class="ml-4">
          <h3 class="text-lg font-semibold">Hatıralarını Yükle ve Hatıraç'ın Hazır!</h3>
          <p class="mt-2 text-gray-500 dark:text-gray-400">Açılan sayfada fotoğraf, video, ses, mesajınızı girin ve dilediğiniz bir tarihe kadar anılarınızı kilitleyin. Hatıraç'ınız artık hazır. İstediğiniz kişiye hediyeyi verin.</p>
        </div>
      </li>
    </ul>
    <div class="flex justify-center items-center">
      <div class="mt-16 w-full max-w-xs">
        <button class="bg-blue-600 w-full px-6 py-3 text-white text-lg hover:bg-blue-700 rounded-full">Hatıraç Oluşturmaya Başla</button>
      </div>
    </div>
  </div>
</div>
<div class="bg-white py-8 md:py-32 dark:bg-slate-900 dark:text-slate-100 text-slate-900 px-4">
  <div class="space-y-8">
    <h2 class="text-5xl md:text-center font-semibold">Anılarınızı Güvenle Saklayın, Hatıralarınızı Sevdiklerinizle Paylaşın!</h2>
    <div class="flex flex-col md:flex-row gap-4">
      <div class="w-full md:px-4">
        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptas, quod, quia, voluptates quae voluptatem quibusdam necessitatibus quidem voluptatum quos quas. Quisquam, quae.</p>
        <ul class="space-y-4 mt-6">
          <li class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-6 w-6 ">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
            </svg>
            <p class="text-slate-800 dark:text-slate-100 font-medium ">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          </li>
          <li class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-6 w-6 ">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
            </svg>
            <p class="text-slate-800 dark:text-slate-100 font-medium ">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          </li>
          <li class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-6 w-6 ">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
            </svg>
            <p class="text-slate-800 dark:text-slate-100 font-medium ">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          </li>
        </ul>
        <div class="md:space-x-2  space-y-2 md:space-y-0 mt-12">
          <button class="w-full md:w-auto bg-slate-900 border border-slate-900 dark:border-slate-700 dark:bg-slate-700 text-white px-4 py-2 rounded-full">Get Started</button>
          <button class="w-full md:w-auto border border-slate-900 dark:border-slate-200 dark:text-slate-200 text-slate-900 px-4 py-2 rounded-full">See supported countries</button>
        </div>
      </div>
      <figure class="w-full">
        <img src="https://source.unsplash.com/random" alt="" class="h-80 rounded-md  w-full object-cover">
      </figure>
    </div>
  </div>
</div>
<div class="bg-slate-50 py-8 md:py-32  dark:bg-slate-900 dark:text-slate-100 text-slate-900">
  <div class="flex flex-col justify-center items-center p-4">
    <div class="max-w-2xl flex-col flex justify-center items-center">
      <p class="text-2xl text-center font-medium">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec aliquam aliquam, nibh nunc faucibus mauris, quis aliquet tortor nibh et lorem."</p>
      <figure class="flex-shrink-0 flex mt-8 items-center">
        <img class="h-10 w-10 rounded-full ring-2 ring-amber-500" src="https://i.pravatar.cc/150?img=1" alt="">
        <div>
          <p class="ml-2 font-medium dark:text-slate-100 text-slate-900">Alex Smith</p>
          <span class="text-sm ml-2 font-light dark:text-slate-400 text-slate-500">Project Manager</span>
        </div>
      </figure>
    </div>
  </div>
</div>
<footer class="bg-slate-50 pt-16 pb-4 dark:bg-slate-900">
  <div class="border-t dark:border-slate-600 ">
    <div class="flex  flex-col md:flex-row items-center justify-between px-6 py-4 space-y-2 text-center text-zinc-900 dark:text-zinc-100">
      <h2 class="inline-flex space-x-2">
        <div class="h-8 w-auto">
          <svg width="32" height="32" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_355_2996" maskUnits="userSpaceOnUse" x="0" y="20" width="43" height="44">
              <path d="M0 20.6841H42.4212V63.1383H0V20.6841Z" fill="white"></path>
            </mask>
            <g mask="url(#mask0_355_2996)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.03937 26.9694L6.1608 22.846C8.87543 20.1275 13.3267 20.1275 16.0414 22.846L40.2557 47.0875C42.9723 49.8041 42.9723 54.2651 40.2557 56.9817L36.1382 61.1012C33.4177 63.8236 28.9664 63.8236 26.2557 61.1012L2.03937 36.8655C-0.67914 34.1431 -0.67914 29.6918 2.03937 26.9694Z" fill="#E11D48"></path>
            </g>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0574 11.5954L27.9458 1.70125C30.2063 -0.567084 33.9067 -0.567084 36.1731 1.70125L46.0575 11.5954C48.3259 13.8637 48.3259 17.5738 46.0575 19.8382L36.1731 29.7305C33.9067 31.9968 30.2063 31.9968 27.9458 29.7305L18.0574 19.8382C15.793 17.5738 15.793 13.8637 18.0574 11.5954Z" fill="#2563EB"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M37.2442 33.2776L49.5949 20.9075C51.2307 19.2795 53.8949 19.2795 55.5229 20.9075L62.7761 28.1685C64.408 29.7985 64.408 32.4724 62.7761 34.1042L50.4215 46.4705C48.7896 48.1004 46.1216 48.1004 44.4897 46.4705L37.2442 39.2153C35.6123 37.5834 35.6123 34.9095 37.2442 33.2776Z" fill="#4F46E5"></path>
          </svg>
        </div>
        <span class="text-zinc-900 dark:text-zinc-100 font-bold text-2xl">Tailbuild</span>
      </h2>
      <p class="text-sm">© 2022 Tailbuild. All rights reserved.</p>
      <div class="flex space-x-4">
        <a href="#" class="text-zinc-900 dark:text-zinc-100 hover:text-blue-600 dark:hover:text-blue-400">
          <span class="sr-only">Facebook</span>
          <svg width="24" height="24" viewBox="0 0 24 24" class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_87_2493)">
              <path d="M22.0922 0.54834H1.91022C0.853707 0.54834 0 1.40125 0 2.45616V21.5447C0 22.5964 0.853707 23.4517 1.91022 23.4517H22.0922C23.1439 23.4517 24 22.5972 24 21.5447V2.45616C23.9992 1.40125 23.1431 0.54834 22.0922 0.54834ZM16.1323 7.34834C15.6361 7.05816 15.2425 6.8289 14.7479 6.8289C14.2637 6.8289 13.8501 6.94994 13.6385 7.15355C13.4269 7.35555 13.3218 7.74674 13.3218 8.32469V9.18H15.9102L15.3499 11.5592H13.3218V19.4646H10.0705V11.5592H8.55311V9.18H10.0721V8.27179C10.0721 7.31547 10.1868 6.74313 10.4128 6.27099C10.6381 5.80044 11.075 5.2762 11.6826 4.9796C12.2894 4.68381 13.1872 4.53471 14.1162 4.53471C15.0685 4.53471 15.8124 4.85215 16.7246 5.10786L16.1323 7.34834Z" fill="#BDBDBD"></path>
            </g>
            <defs>
              <clipPath id="clip0_87_2493">
                <rect width="24" height="24" rx="5" fill="white"></rect>
              </clipPath>
            </defs>
          </svg>
        </a>
        <a href="#" class="text-zinc-900 dark:text-zinc-100 hover:text-blue-600 dark:hover:text-blue-400">
          <span class="sr-only">Twitter</span>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_87_2496)">
              <path d="M17.9667 0.00952148H6.01427C2.70262 0.00952148 0 2.71214 0 6.0238V17.9952C0 21.2879 2.70262 23.9905 6.01427 23.9905H17.9857C21.2974 23.9905 24 21.2879 24 17.9762V6.0238C23.981 2.71214 21.2784 0.00952148 17.9667 0.00952148ZM17.9477 8.99287C17.9477 9.1261 17.9477 9.25932 17.9477 9.39255C17.9477 13.3894 14.8644 17.9952 9.21174 17.9952C7.47978 17.9952 5.86201 17.5004 4.51071 16.6439C4.75813 16.663 4.98652 16.682 5.23394 16.682C6.68041 16.682 7.99366 16.2062 9.04044 15.3878C7.68914 15.3688 6.56622 14.4933 6.16653 13.2942C6.35686 13.3323 6.54718 13.3513 6.73751 13.3513C7.023 13.3513 7.30849 13.3132 7.55591 13.2371C6.18557 12.9516 5.13878 11.7336 5.13878 10.268V10.23C5.51943 10.4584 6.01427 10.5916 6.50912 10.6106C5.69072 10.0777 5.13878 9.14513 5.13878 8.09834C5.13878 7.5464 5.29104 7.03252 5.55749 6.57574C7.0801 8.40286 9.32593 9.60191 11.8763 9.73514C11.8192 9.50675 11.8002 9.27836 11.8002 9.04997C11.8002 7.3751 13.1705 6.0238 14.8644 6.0238C15.7399 6.0238 16.5393 6.38541 17.1102 6.97542C17.8144 6.84219 18.4615 6.59477 19.0515 6.23315C18.8232 6.93736 18.3283 7.52736 17.7002 7.90801C18.3283 7.83188 18.9183 7.67962 19.4703 7.4322C19.0515 8.04124 18.5377 8.57415 17.9477 8.99287Z" fill="#BDBDBD"></path>
            </g>
            <defs>
              <clipPath id="clip0_87_2496">
                <rect width="24" height="24" rx="5" fill="white"></rect>
              </clipPath>
            </defs>
          </svg>
        </a>
        <a href="#" class="text-zinc-900 dark:text-zinc-100 hover:text-blue-600 dark:hover:text-blue-400">
          <span class="sr-only">Instagram</span>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM5 0C2.23858 0 0 2.23858 0 5V19C0 21.7614 2.23858 24 5 24H19C21.7614 24 24 21.7614 24 19V5C24 2.23858 21.7614 0 19 0H5ZM20.024 15.9758C20.024 18.2081 18.2081 20.024 15.9758 20.024H8.02422C5.79185 20.024 3.97604 18.2081 3.97604 15.9758V8.02422C3.97604 5.79185 5.79185 3.97604 8.02422 3.97604H15.9758C18.2081 3.97604 20.024 5.79185 20.024 8.02422V15.9758ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359ZM15.9758 5.72234H8.02422C6.75505 5.72234 5.72234 6.75505 5.72234 8.02422V15.9758C5.72234 17.2449 6.75505 18.2777 8.02422 18.2777H15.9758C17.2449 18.2777 18.2777 17.2449 18.2777 15.9758V8.02422C18.2777 6.75505 17.2449 5.72234 15.9758 5.72234ZM11.9997 16.1332C9.72102 16.1332 7.86676 14.279 7.86676 11.9997C7.86676 9.72102 9.72102 7.86676 11.9997 7.86676C14.279 7.86676 16.1332 9.72102 16.1332 11.9997C16.1332 14.279 14.279 16.1332 11.9997 16.1332ZM16.2659 8.72148C15.7267 8.72148 15.288 8.2828 15.288 7.74353C15.288 7.20427 15.7267 6.76558 16.2659 6.76558C16.8052 6.76558 17.2439 7.20427 17.2439 7.74353C17.2439 8.2828 16.8052 8.72148 16.2659 8.72148ZM11.9997 9.61359C10.6842 9.61359 9.61306 10.6842 9.61306 11.9997C9.61306 13.3158 10.6842 14.3869 11.9997 14.3869C13.3158 14.3869 14.3864 13.3158 14.3864 11.9997C14.3864 10.6842 13.3158 9.61359 11.9997 9.61359Z" fill="#BDBDBD"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>
    </body>
  </html>