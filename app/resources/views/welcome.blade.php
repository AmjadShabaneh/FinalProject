<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
     integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
     crossorigin="anonymous"
    />
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<nav class="mx-auto block w-full max-w-screen-xl rounded-xl border border-white/80 bg-white bg-opacity-80 py-2 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
  <div>
    <div class="container mx-auto flex items-center justify-between text-gray-900">
      <a
        href="#"
        class="mr-4 block cursor-pointer py-1.5 font-sans text-sm font-normal leading-normal text-inherit antialiased"
      >
        <span>Material Tailwind</span>
      </a>
      <ul class="hidden items-center gap-6 lg:flex">
        <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
          <a class="flex items-center" href="#">
            Pages
          </a>
        </li>
        <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
          <a class="flex items-center" href="#">
            Account
          </a>
        </li>
        <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
          <a class="flex items-center" href="#">
            Blocks
          </a>
        </li>
        <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
          <a class="flex items-center" href="#">
            Docs
          </a>
        </li>
      </ul>
      <button
        class="middle none center hidden rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-2 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block"
        type="button"
        data-ripple-light="true"
      >
        <span>Buy Now</span>
      </button>
      <button
        class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
        data-collapse-target="navbar"
      >
        <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              d="M4 6h16M4 12h16M4 18h16"
            ></path>
          </svg>
        </span>
      </button>
    </div>
    <div
      class="block h-0 w-full basis-full overflow-hidden text-blue-gray-900 transition-all duration-300 ease-in lg:hidden"
      data-collapse="navbar"
    >
      <div class="container mx-auto pb-2">
        <ul class="mt-2 mb-4 flex flex-col gap-2">
          <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
            <a class="flex items-center" href="#">
              Pages
            </a>
          </li>
          <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
            <a class="flex items-center" href="#">
              Account
            </a>
          </li>
          <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
            <a class="flex items-center" href="#">
              Blocks
            </a>
          </li>
          <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
            <a class="flex items-center" href="#">
              Docs
            </a>
          </li>
        </ul>
        <button
          class="middle none center mb-2 block w-full rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-2 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          type="button"
          data-ripple-light="true"
        >
          <span>Buy Now</span>
        </button>
      </div>
    </div>
  </div>
</nav>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit lorem id orci gravida convallis. Nulla nec aliquet massa. Nunc consequat accumsan finibus. Vivamus mauris ligula, rhoncus sit amet libero ut, posuere facilisis dolor. Sed aliquet rhoncus libero quis rhoncus. Mauris ac magna viverra, volutpat risus at, vehicula dui. Vivamus pellentesque eleifend metus. Suspendisse tortor nulla, ultricies ut commodo eget, interdum quis metus. Aliquam id pulvinar felis. Vestibulum rutrum dignissim est vitae vulputate. Nulla faucibus fermentum ante, at cursus nisl convallis a. Nunc orci odio, euismod a tempus ut, luctus vitae orci. Suspendisse varius, quam eget varius consequat, lorem nisi vestibulum velit, a aliquet erat leo ac dui. Duis sed vestibulum risus.

Donec suscipit viverra nibh, ut dignissim nulla rhoncus et. Etiam et ultrices odio. Praesent eu ante quis nunc posuere pretium. Mauris enim lorem, venenatis eget lacus eu, venenatis ullamcorper lorem. Cras neque nunc, ornare ac feugiat non, semper a justo. Quisque ut sollicitudin odio, volutpat vestibulum lacus. Aliquam mollis id lectus ac mattis. Phasellus vitae lacus gravida, varius elit nec, rutrum tortor. Proin posuere interdum ipsum, quis condimentum nibh molestie vel. Nam sed faucibus orci. Fusce vitae hendrerit quam. Ut semper ligula at viverra sodales.

Morbi iaculis volutpat molestie. Praesent id turpis nec augue euismod tristique. Vestibulum vel eleifend ante. Nullam vel pretium quam, a lobortis tortor. Mauris a bibendum arcu. Cras ligula risus, varius eu pretium quis, vulputate eu dui. Sed a lobortis metus. Vivamus sed dignissim elit. Morbi sed auctor sem. Duis vel metus euismod, vestibulum neque sed, rutrum erat. Suspendisse non velit sem. Pellentesque dapibus, nibh pretium finibus pretium, neque ex varius velit, nec laoreet arcu est non tortor. Duis semper sed dolor eget pellentesque.

Aliquam a auctor lectus, eu blandit sapien. Donec urna massa, placerat quis scelerisque id, porttitor et nunc. Aliquam semper, turpis quis condimentum ornare, massa sem porta urna, ut iaculis mauris tortor in sem. Etiam condimentum dapibus pulvinar. Proin viverra elit magna, non imperdiet purus molestie ut. Aenean consequat vehicula ex finibus elementum. Fusce ullamcorper aliquam quam non malesuada. Cras commodo finibus metus sed elementum. Etiam nunc nunc, dictum ac urna id, scelerisque ullamcorper turpis. Nulla porta enim in massa consequat, a lacinia elit sagittis. Donec vel dolor sodales, tincidunt sem et, dapibus dolor. Curabitur at luctus dui.

Donec ac velit dui. Duis semper, est ac varius accumsan, enim metus lacinia nulla, non ullamcorper dui sapien malesuada nisi. Praesent eget ligula aliquam, rutrum nibh in, luctus enim. Nam cursus velit nulla. In sed nisi vitae nisi placerat pulvinar quis ac dui. Fusce convallis justo vel lectus iaculis tristique. Curabitur sed fermentum lorem, a porta felis. Nulla vehicula lectus accumsan est pharetra aliquet. Integer aliquam urna suscipit elit luctus, quis faucibus nisl auctor. Nulla augue urna, vulputate in euismod eget, sodales a nibh. Praesent consectetur enim ultrices leo mattis, et volutpat ante laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Praesent cursus, arcu in porttitor sodales, nibh erat lobortis neque, ut feugiat turpis nunc nec nunc. Quisque ac velit tortor. Quisque eget dui id justo dignissim ultricies nec mattis felis. In pulvinar, massa vitae luctus egestas, augue odio gravida diam, at vulputate justo odio vel dui. Proin tempor augue eget blandit cursus. Integer efficitur, sem nec eleifend facilisis, tellus eros vestibulum sapien, in consequat libero odio et velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec sagittis justo et mauris scelerisque, sed feugiat justo ultricies. Cras facilisis leo at est laoreet gravida. Ut euismod ac purus congue ultrices. Vivamus lobortis nunc ut nibh vulputate lacinia. Quisque sit amet ullamcorper arcu, eget dignissim risus. Pellentesque rhoncus turpis nec felis bibendum suscipit. Aenean luctus, nisl ac venenatis posuere, risus velit malesuada risus, vel faucibus ipsum magna ut ligula. Ut nec erat fringilla, blandit tortor id, pharetra augue. Praesent ornare erat nec ullamcorper elementum.

Nullam interdum, tortor id placerat auctor, urna tortor lacinia nunc, ut molestie sem risus ut diam. Nullam sit amet lectus sollicitudin, viverra sem non, tincidunt elit. Curabitur dictum metus quis nisl gravida, nec cursus mauris molestie. Mauris a lorem massa. Morbi dictum, nisl nec tristique elementum, diam tellus malesuada orci, in congue neque tellus interdum odio. Donec vulputate dapibus sollicitudin. Maecenas ligula mauris, viverra in erat a, posuere mollis eros. Vestibulum mauris nulla, mattis ut nulla ac, posuere pulvinar ipsum. Curabitur pharetra sapien felis, in tincidunt felis tincidunt hendrerit. Cras sit amet neque facilisis, volutpat risus vitae, consequat felis. Mauris tempor felis purus. Fusce rutrum vitae tellus vel venenatis. Aliquam ut quam non tellus sagittis pharetra vitae eu lectus.

Suspendisse sollicitudin ipsum non purus hendrerit fermentum. Cras a risus fermentum, cursus dolor nec, posuere orci. Nullam eget cursus nunc. Nulla laoreet laoreet enim eget rhoncus. Sed ex ligula, placerat et dignissim blandit, aliquam sollicitudin urna. Phasellus eleifend tortor a est gravida pulvinar at in risus. Donec facilisis purus magna, et porta velit malesuada sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque id mollis tortor, at vehicula elit. Donec sit amet mollis lorem, ut vestibulum quam. Nulla volutpat elit vel imperdiet ultricies.

Proin vel justo leo.

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit lorem id orci gravida convallis. Nulla nec aliquet massa. Nunc consequat accumsan finibus. Vivamus mauris ligula, rhoncus sit amet libero ut, posuere facilisis dolor. Sed aliquet rhoncus libero quis rhoncus. Mauris ac magna viverra, volutpat risus at, vehicula dui. Vivamus pellentesque eleifend metus. Suspendisse tortor nulla, ultricies ut commodo eget, interdum quis metus. Aliquam id pulvinar felis. Vestibulum rutrum dignissim est vitae vulputate. Nulla faucibus fermentum ante, at cursus nisl convallis a. Nunc orci odio, euismod a tempus ut, luctus vitae orci. Suspendisse varius, quam eget varius consequat, lorem nisi vestibulum velit, a aliquet erat leo ac dui. Duis sed vestibulum risus.

Donec suscipit viverra nibh, ut dignissim nulla rhoncus et. Etiam et ultrices odio. Praesent eu ante quis nunc posuere pretium. Mauris enim lorem, venenatis eget lacus eu, venenatis ullamcorper lorem. Cras neque nunc, ornare ac feugiat non, semper a justo. Quisque ut sollicitudin odio, volutpat vestibulum lacus. Aliquam mollis id lectus ac mattis. Phasellus vitae lacus gravida, varius elit nec, rutrum tortor. Proin posuere interdum ipsum, quis condimentum nibh molestie vel. Nam sed faucibus orci. Fusce vitae hendrerit quam. Ut semper ligula at viverra sodales.

Morbi iaculis volutpat molestie. Praesent id turpis nec augue euismod tristique. Vestibulum vel eleifend ante. Nullam vel pretium quam, a lobortis tortor. Mauris a bibendum arcu. Cras ligula risus, varius eu pretium quis, vulputate eu dui. Sed a lobortis metus. Vivamus sed dignissim elit. Morbi sed auctor sem. Duis vel metus euismod, vestibulum neque sed, rutrum erat. Suspendisse non velit sem. Pellentesque dapibus, nibh pretium finibus pretium, neque ex varius velit, nec laoreet arcu est non tortor. Duis semper sed dolor eget pellentesque.

Aliquam a auctor lectus, eu blandit sapien. Donec urna massa, placerat quis scelerisque id, porttitor et nunc. Aliquam semper, turpis quis condimentum ornare, massa sem porta urna, ut iaculis mauris tortor in sem. Etiam condimentum dapibus pulvinar. Proin viverra elit magna, non imperdiet purus molestie ut. Aenean consequat vehicula ex finibus elementum. Fusce ullamcorper aliquam quam non malesuada. Cras commodo finibus metus sed elementum. Etiam nunc nunc, dictum ac urna id, scelerisque ullamcorper turpis. Nulla porta enim in massa consequat, a lacinia elit sagittis. Donec vel dolor sodales, tincidunt sem et, dapibus dolor. Curabitur at luctus dui.

Donec ac velit dui. Duis semper, est ac varius accumsan, enim metus lacinia nulla, non ullamcorper dui sapien malesuada nisi. Praesent eget ligula aliquam, rutrum nibh in, luctus enim. Nam cursus velit nulla. In sed nisi vitae nisi placerat pulvinar quis ac dui. Fusce convallis justo vel lectus iaculis tristique. Curabitur sed fermentum lorem, a porta felis. Nulla vehicula lectus accumsan est pharetra aliquet. Integer aliquam urna suscipit elit luctus, quis faucibus nisl auctor. Nulla augue urna, vulputate in euismod eget, sodales a nibh. Praesent consectetur enim ultrices leo mattis, et volutpat ante laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Praesent cursus, arcu in porttitor sodales, nibh erat lobortis neque, ut feugiat turpis nunc nec nunc. Quisque ac velit tortor. Quisque eget dui id justo dignissim ultricies nec mattis felis. In pulvinar, massa vitae luctus egestas, augue odio gravida diam, at vulputate justo odio vel dui. Proin tempor augue eget blandit cursus. Integer efficitur, sem nec eleifend facilisis, tellus eros vestibulum sapien, in consequat libero odio et velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec sagittis justo et mauris scelerisque, sed feugiat justo ultricies. Cras facilisis leo at est laoreet gravida. Ut euismod ac purus congue ultrices. Vivamus lobortis nunc ut nibh vulputate lacinia. Quisque sit amet ullamcorper arcu, eget dignissim risus. Pellentesque rhoncus turpis nec felis bibendum suscipit. Aenean luctus, nisl ac venenatis posuere, risus velit malesuada risus, vel faucibus ipsum magna ut ligula. Ut nec erat fringilla, blandit tortor id, pharetra augue. Praesent ornare erat nec ullamcorper elementum.

Nullam interdum, tortor id placerat auctor, urna tortor lacinia nunc, ut molestie sem risus ut diam. Nullam sit amet lectus sollicitudin, viverra sem non, tincidunt elit. Curabitur dictum metus quis nisl gravida, nec cursus mauris molestie. Mauris a lorem massa. Morbi dictum, nisl nec tristique elementum, diam tellus malesuada orci, in congue neque tellus interdum odio. Donec vulputate dapibus sollicitudin. Maecenas ligula mauris, viverra in erat a, posuere mollis eros. Vestibulum mauris nulla, mattis ut nulla ac, posuere pulvinar ipsum. Curabitur pharetra sapien felis, in tincidunt felis tincidunt hendrerit. Cras sit amet neque facilisis, volutpat risus vitae, consequat felis. Mauris tempor felis purus. Fusce rutrum vitae tellus vel venenatis. Aliquam ut quam non tellus sagittis pharetra vitae eu lectus.

Suspendisse sollicitudin ipsum non purus hendrerit fermentum. Cras a risus fermentum, cursus dolor nec, posuere orci. Nullam eget cursus nunc. Nulla laoreet laoreet enim eget rhoncus. Sed ex ligula, placerat et dignissim blandit, aliquam sollicitudin urna. Phasellus eleifend tortor a est gravida pulvinar at in risus. Donec facilisis purus magna, et porta velit malesuada sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque id mollis tortor, at vehicula elit. Donec sit amet mollis lorem, ut vestibulum quam. Nulla volutpat elit vel imperdiet ultricies.

Proin vel justo leo. Duis malesuada nibh et nulla malesuada ultrices. Donec tempus risus non nisi ultricies, vitae consectetur est ultricies. Proin elementum nulla a lorem volutpat suscipit. Duis sagittis efficitur velit sit amet euismod. Mauris suscipit pharetra ante non congue. Suspendisse imperdiet imperdiet neque eget rutrum. Vestibulum ipsum nunc, sollicitudin sit amet maximus at, pretium bibendum odio. Donec sagittis fringilla mi in interdum. Ut vestibulum scelerisque purus in varius. Donec convallis justo non tincidunt vestibulum.
</p>

Duis malesuada nibh et nulla malesuada ultrices. Donec tempus risus non nisi ultricies, vitae consectetur est ultricies. Proin elementum nulla a lorem volutpat suscipit. Duis sagittis efficitur velit sit amet euismod. Mauris suscipit pharetra ante non congue. Suspendisse imperdiet imperdiet neque eget rutrum. Vestibulum ipsum nunc, sollicitudin sit amet maximus at, pretium bibendum odio. Donec sagittis fringilla mi in interdum. Ut vestibulum scelerisque purus in varius. Donec convallis justo non tincidunt vestibulum.</p>
</body>
</html>