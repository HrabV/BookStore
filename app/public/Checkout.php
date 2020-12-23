<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookStore_Checkout</title>
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
    <div class="container">
      <div class="min-h-screen flex mb-4">
        <div class="w-1/4 h-12 row-right">
          <div class="flex flex-col items-center">
            <div class="flex pt-2 pb-4 px-4">
              <p
                class="w-full text-base font-medium sm:text-xs md:text-ms text-center lg:text-xl xl:text-2xl"
              >
                All books in one place <br />
              </p>
            </div>
            <div class="object-center w-4/5">
              <img
                src="./image/man-with-books.jpg"
                class="shadow rounded max-w-full h-auto align-middle border-none"
              />
            </div>
          </div>
        </div>
        <div class="flex flex-row">
          <div class="flex justify-center my-2">
            <div
              class="flex flex-col w-full p-2 text-gray-700 bg-white shadow-lg rounded-md pin-r pin-y md:w-4/5 lg:w-4/5"
            >
              <table class="w-full text-sm lg:text-base" cellspacing="0">
                <thead>
                  <tr class="h-12 uppercase text-center">
                    <th class="hidden md:table-cell"></th>
                    <th class="text-center">Item</th>
                    <th class="lg:text-right text-left pl-5 lg:pl-0">
                      <span class="hidden lg:inline">Quantity</span>
                    </th>
                    <th class="hidden text-center md:table-cell">Price</th>
                    <th class="text-center">Total price</th>
                  </tr>
                </thead>
                <tbody class="items-center">
                  <tr>
                    <td class="hidden pb-4 md:table-cell">
                      <a href="#">
                        <img
                          src="./image/A Black Womens History.jpg"
                          class="w-20 rounded"
                          alt="item"
                        />
                      </a>
                    </td>
                    <td>
                      <a href="#" class="text-gray-700">
                        <p class="mb-2 md:ml-4">A Black Womens History</p></a
                      >
                      <form action="" method="POST">
                        <button type="submit" class="text-gray-600 md:ml-4">
                          <small>(Remove item)</small>
                        </button>
                      </form>
                    </td>
                    <td class="justify-center md:justify-end md:flex mt-6">
                      <div class="w-20 h-10">
                        <div class="relative flex flex-row w-full h-8">
                          <input
                            type="number"
                            min="0"
                            value="1"
                            class="w-full font-semibold text-center rounded-md text-gray-700 bg-gray-100 outline-none focus:outline-none hover:text-black focus:text-black"
                          />
                        </div>
                      </div>
                    </td>
                    <td
                      class="hidden px-2 text-center justify-center md:table-cell"
                    >
                      <span class="text-sm lg:text-base font-medium">
                        230.00 UAH
                      </span>
                    </td>
                    <td class="text-center">
                      <span class="text-sm lg:text-base font-medium">
                        230.00 UAH
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td class="hidden pb-4 md:table-cell">
                      <a href="#">
                        <img
                          src="./image/Piranesi.jpg"
                          class="w-20 rounded-md"
                          alt="item"
                        />
                      </a>
                    </td>
                    <td>
                      <a href="#" class="text-gray-700">
                        <p class="mb-2 md:ml-4">Piranesi</p>
                      </a>
                      <form action="" method="POST">
                        <button type="submit" class="text-gray-700 md:ml-4">
                          <small>(Remove item)</small>
                        </button>
                      </form>
                    </td>
                    <td class="justify-center md:justify-end md:flex md:mt-4">
                      <div class="w-20 h-10">
                        <div class="relative flex flex-row w-full h-8">
                          <input
                            type="number"
                            min="0"
                            value="1"
                            class="w-full font-semibold text-center rounded-md text-gray-700 bg-gray-100 outline-none focus:outline-none hover:text-black focus:text-black"
                          />
                        </div>
                      </div>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <span class="text-sm lg:text-base font-medium">
                        270,00 UAH
                      </span>
                    </td>
                    <td class="text-right">
                      <span class="text-sm lg:text-base font-medium">
                        270,00 UAH
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td class="hidden pb-4 md:table-cell">
                      <a href="#">
                        <img
                          src="./image/Open An Autobiography.jpg"
                          class="w-20 rounded-md"
                          alt="item"
                        />
                      </a>
                    </td>
                    <td>
                      <a href="#" class="text-gray-700">
                        <p class="mb-2 md:ml-4">Open An Autobiography</p></a
                      >
                      <form action="" method="POST">
                        <button type="submit" class="text-gray-700 md:ml-4">
                          <small>(Remove item)</small>
                        </button>
                      </form>
                    </td>
                    <td class="justify-center md:justify-end md:flex md:mt-8">
                      <div class="w-20 h-10 r">
                        <div class="relative flex flex-row w-full h-8">
                          <input
                            type="number"
                            min="0"
                            value="1"
                            class="w-full font-semibold text-center rounded-md text-gray-700 bg-gray-100 outline-none focus:outline-none hover:text-black focus:text-black"
                          />
                        </div>
                      </div>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <span class="text-sm lg:text-base font-medium">
                        230.00 UAH
                      </span>
                    </td>
                    <td class="text-right">
                      <span class="text-sm lg:text-base font-medium">
                        230.00 UAH
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="ml-2 mt-2 flex bg-white shadow-lg rounded-md">
              <div class="lg:px-2">
                <div class="p-2">
                  <h1
                    class="ml-2 font-bold uppercase text-center text-gray-700"
                  >
                    Order Details
                  </h1>
                </div>
                <div class="p-4">
                  <div class="flex justify-between border-b">
                    <div
                      class="lg:px-2 lg:py-2 m-1 text-ms lg:text-lg font-bold text-center text-gray-700"
                    >
                      Total
                    </div>
                    <div
                      class="lg:px-2 lg:py-2 m-1 lg:text-lg font-bold text-center text-gray-700"
                    >
                      730,00 UAH
                    </div>
                  </div>
                  <div class="flex justify-between pt-2 border-b">
                    <div
                      class="flex lg:px-2 lg:py-2 m-1 text-ms lg:text-lg font-bold text-gray-700"
                    >
                      <form action="" method="POST">
                        <button type="submit" class="mr-2 mt-1 lg:mt-2">
                          <svg
                            aria-hidden="true"
                            data-prefix="far"
                            data-icon="trash-alt"
                            class="w-4 text-gray-700 hover:text-yellow-600"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                          >
                            <path
                              fill="currentColor"
                              d="M268 416h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12zM432 80h-82.41l-34-56.7A48 48 0 00274.41 0H173.59a48 48 0 00-41.16 23.3L98.41 80H16A16 16 0 000 96v16a16 16 0 0016 16h16v336a48 48 0 0048 48h288a48 48 0 0048-48V128h16a16 16 0 0016-16V96a16 16 0 00-16-16zM171.84 50.91A6 6 0 01177 48h94a6 6 0 015.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12z"
                            />
                          </svg>
                        </button>
                      </form>
                      Discount
                    </div>
                    <div
                      class="lg:px-2 lg:py-2 m-1 lg:text-lg font-bold text-center text-yellow-700"
                    >
                      -73,00 UAH
                    </div>
                  </div>
                  <div class="flex justify-between pt-2 border-b">
                    <div
                      class="lg:px-2 lg:py-2 m-1 text-ms lg:text-lg font-bold text-center text-gray-700"
                    >
                      New total
                    </div>
                    <div
                      class="lg:px-2 lg:py-2 m-1 lg:text-lg font-bold text-center text-gray-700"
                    >
                      657,00 UAH
                    </div>
                  </div>

                  <div class="flex justify-between pt-4 border-b">
                    <div
                      class="lg:px-2 lg:py-2 m-2 text-ms lg:text-lg font-bold text-center text-gray-700"
                    >
                      Total
                    </div>
                    <div
                      class="lg:px-2 lg:py-2 m-1 lg:text-lg font-bold text-center text-gray-700"
                    >
                      657,00 UAH
                    </div>
                  </div>
                  <a href="#">
                    <button
                      class="flex justify-center w-full px-10 py-3 mt-4 font-medium text-white uppercase bg-gray-800 rounded-full shadow-md item-center hover:bg-yellow-600 focus:shadow-outline focus:outline-none hover:animate-bounce"
                    >
                      <svg
                        aria-hidden="true"
                        data-prefix="far"
                        data-icon="credit-card"
                        class="w-8"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512"
                      >
                        <path
                          fill="currentColor"
                          d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"
                        />
                      </svg>
                      <span class="ml-2 mt-5px">Procceed to checkout</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
