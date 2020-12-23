<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookStore</title>
    <link rel="stylesheet" href="styles.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
  </head>
  <body class="bg-white">
    <header>
      <div class="container bg-white">
        <div class="flex justify-between items-center w-full h-full px-8 py-6">
          <a href="/" class="flex items-center"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-10 h-10"
              viewBox="0 0 512 512"
            >
              <path
                d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0116 16v288a16 16 0 01-16 16c-128 0-177.45 25.81-208 64-30.37-38-80-64-208-64-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0116-16c131.57.59 192 32.84 208 96zM256 160v288"
                fill="none"
                stroke="#f59b1d"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="32"
              />
            </svg>
            <h3 class="text-xl text-gray-700 font-medium ml-3">BookStore</h3>
          </a>

          <div class="px-6">
            <div>
              <ul
                class="list-reset justify-end flex items-center text-gray-600 text-md font-medium"
              >
                <li class="inline-flex w-full py-2 px-4">
                  <a href="MainView.php">Home</a>
                </li>
                <li class="inline-flex w-full py-2 px-4">
                  <a href="#">App</a>
                </li>
                <li class="inline-flex w-full py-2 px-4">
                  <a href="/">About</a>
                </li>
                <li class="inline-flex w-full py-2 px-4">
                  <a href="/">Contacts</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="flex items-center">
            <div class="flex items-center">
              <div class="bg-yellow-100 rounded-l-2xl text-center px-6 py-1.5">
                <a href="Checkout.php"
                  ><span class="mr-2 text-center">Checkout</span>
                </a>
              </div>
              <div
                class="rounded-full bg-yellow-500 h-10 w-10 text-white text-center -ml-5 flex justify-center items-center"
              >
                3
              </div>
            </div>
            <div
              class="flex justify-between items-center border rounded-lg border-gray-100 p-2 ml-5"
            >
              <div>
                <img
                  src="./image/Piranesi.jpg"
                  alt="image_one"
                  class="w-6 h-6 rounded-full"
                />
              </div>
              <div class="ml-3">
                <span>Profile</span>
              </div>

              <div
                @click.away="open = false"
                x-data="{ open: false }"
                class="ml-3 inline-block text-left relative"
              >
                <button
                  type="button"
                  @click="open = !open"
                  class="relative z-10 inline-flex justify-center w-full bg-white text-sm font-medium text-gray-600 hover:bg-gray-50 focus:outline-none"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 transition-transform duration-200 transform"
                    viewBox="0 0 512 512"
                    :class="{'rotate-180': open, 'rotate-0': !open}"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="48"
                      d="M112 184l144 144 144-144"
                    />
                  </svg>
                </button>

                <div
                  x-show="open"
                  class="py-1 origin-top-right absolute right-0 mt-3 ml-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                >
                  <a
                    href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                    >Account settings</a
                  >
                  <a
                    href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                    >Support</a
                  >
                  <a
                    href="Checkout.php"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                    >Checkout</a
                  >
                  <a
                    href="SignUp.php"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  >
                    Sign up
                  </a>
                  <a
                    href="SignIn.php"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  >
                    Sign in
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div>
        <div
          class="flex flex-col lg:flex-row lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 object-center"
        >
          <div class="lg:w-1/2 w-full">
            <img
              class="w-full object-cover object-center rounded border border-gray-100"
              src="./image/Piranesi.jpg"
            />
          </div>
          <div class="block lg:w-1/2 w-full relative">
            <div class="flex flex-col pl-4">
              <div class="mb-4">
                <span class="text-5xl text-gray-700 font-medium">Piranesi</span>
              </div>
              <div class="mb-4">
                <label class="block text-gray-600 text-sm font-medium">
                  Author
                </label>
                <span class="text-2xl text-gray-500 font-medium"
                  >Susanna Clarke</span
                >
              </div>
              <div class="flex mb-4">
                <div class="flex text-yellow-500 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="w-4 h-4 fill-current mr-1"
                  >
                    <path
                      d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="w-4 h-4 fill-current mr-1"
                  >
                    <path
                      d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="w-4 h-4 fill-current mr-1"
                  >
                    <path
                      d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="w-4 h-4 fill-current mr-1"
                  >
                    <path
                      d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="h-4 w-4 fill-current mr-1"
                  >
                    <path
                      d="M6.516,14.323l-1.49,6.452c-0.092,0.399,0.068,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22 c0.193,0,0.387-0.056,0.555-0.168L12,18.202l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082 l-1.829-6.4l4.536-4.082c0.297-0.268,0.406-0.686,0.278-1.064c-0.129-0.378-0.47-0.644-0.868-0.676L15.378,8.05l-2.467-5.461 C12.75,2.23,12.393,2,12,2s-0.75,0.23-0.911,0.589L8.622,8.05L2.921,8.503C2.529,8.534,2.192,8.791,2.06,9.16 c-0.134,0.369-0.038,0.782,0.242,1.056L6.516,14.323z M9.369,9.997c0.363-0.029,0.683-0.253,0.832-0.586L12,5.43l1.799,3.981 c0.149,0.333,0.469,0.557,0.832,0.586l3.972,0.315l-3.271,2.944c-0.284,0.256-0.397,0.65-0.293,1.018l1.253,4.385l-3.736-2.491 c-0.336-0.225-0.773-0.225-1.109,0l-3.904,2.603l1.05-4.546c0.078-0.34-0.026-0.697-0.276-0.94l-3.038-2.962L9.369,9.997z"
                    ></path>
                  </svg>
                </div>
                <div class="flex items-center pl-2">
                  <span class="lining-nums text-sm text-gray-400 font-medium"
                    >4/5</span
                  >
                </div>
              </div>
              <div class="flex mb-2 items-center">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Category
                  </label>
                </div>
                <div class="ml-7">
                  <a href="/"
                    ><span class="inline-flex text-md text-gray-700 font-medium"
                      >Fiction</span
                    ></a
                  >
                  <span class="text-md text-gray-700 font-medium"> - </span>
                  <a href="/"
                    ><span class="text-md text-gray-700 font-medium"
                      >Fantasy</span
                    ></a
                  >
                </div>
              </div>
              <div class="flex mb-2">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Format
                  </label>
                </div>
                <div class="ml-7">
                  <span class="inline-flex text-md text-gray-700 font-medium"
                    >Paperback</span
                  >
                </div>
              </div>
              <div class="flex mb-2 items-center">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Language
                  </label>
                </div>
                <div class="ml-7">
                  <a href="/"
                    ><span class="inline-flex text-md text-gray-700 font-medium"
                      >English</span
                    ></a
                  >
                </div>
              </div>
              <div class="flex mb-2 items-center">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Pages
                  </label>
                </div>
                <div class="ml-7">
                  <span class="inline-flex text-md text-gray-700 font-medium"
                    >272</span
                  >
                </div>
              </div>
              <div class="flex mb-2 items-center">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Illustration
                  </label>
                </div>
                <div class="ml-7">
                  <span class="inline-flex text-md text-gray-700 font-medium"
                    >Yes</span
                  >
                </div>
              </div>
              <div class="flex mb-2 items-center">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Published
                  </label>
                </div>
                <div class="ml-7">
                  <span class="inline-flex text-md text-gray-700 font-medium"
                    >2020</span
                  >
                </div>
              </div>
              <div class="flex mb-2 items-center">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Publishing house
                  </label>
                </div>
                <div class="ml-7">
                  <a href="/"
                    ><span
                      class="inline-flex text-md text-gray-700 font-medium"
                    >
                      Ebury Publishing</span
                    ></a
                  >
                </div>
              </div>
              <div class="flex mb-2 items-center">
                <div class="w-1/2">
                  <label class="inline-flex text-gray-600 text-sm font-medium">
                    Price
                  </label>
                </div>
                <div class="ml-7">
                  <span class="inline-flex text-md text-gray-700 font-medium"
                    >250 UAH</span
                  >
                </div>
              </div>
            </div>
            <div class="justify-end w-1/2">
              <div
                class="absolute bottom-0 right-0 inline-flex justify-center p-1 rounded-md rounded-br-md bg-gray-700 hover:bg-yellow-500 text-white"
              >
                <a href="/" class="text-sm px-2">
                  <span>Add to cart</span>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="h-4 w-6 fill-current inline-flex"
                  >
                    <path
                      d="M11.293 17.293L12.707 18.707 19.414 12 12.707 5.293 11.293 6.707 15.586 11 6 11 6 13 15.586 13z"
                    ></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full lg:pl-10 lg:py-2 mt-2 lg:mt-0">
          <h2 class="text-3xl text-gray-700 tracking-widest">Description</h2>

          <div class="block w-1/2">
            <p class="text-justify">
              The novel tells the story of Piranesi, who lives in a place called
              the House. The House is a collection of seemingly infinite halls
              and vestibules, filled with statues. These statues depict things
              that aren't present in the House. While the House only contains
              clouds, in the upper halls, and the sea, which fills the lower
              halls, as well as birds and fish in each, the statues depict
              everything from a beekeeper, to a man wreathed in snakes, to a
              gorilla. The House is occupied by only two living people....
            </p>
            <div
              class="flex mt-2 items-center pb-2 border-b-2 border-gray-200 mb-2"
            ></div>
          </div>
        </div>
        <div class="w-full lg:pl-10 lg:py-2 mt-2 lg:mt-0">
          <h2 class="text-3xl text-gray-700 tracking-widest">About authors</h2>
          <div class="block w-1/2">
            <img
              class="float-left object-cover object-left-top w-24 h-24 m-2 rounded-md"
              src="./image/Susanna Clarke.jpg"
            />
            <p class="text-justify">
              Susanna Mary Clarke (born 1 November 1959) is an English author
              best known for her debut novel Jonathan Strange & Mr Norrell
              (2004), a Hugo Award-winning alternative history. Clarke began
              Jonathan Strange in 1993 and worked on it during her spare time.
              For the next decade, she published short stories from the Strange
              universe, but it was not until 2003 that Bloomsbury bought her
              manuscript and began work on its publication. The novel became a
              best-seller.
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
