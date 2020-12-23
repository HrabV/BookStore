<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookStore_SignUp</title>
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
    <div class="container signup">
      <div class="min-h-screen flex mb-4 row-signup">
        <div class="w-3/5 h-12 row-right">
          <div class="flex flex-col items-center">
            <div class="flex pb-10 px-6">
              <p
                class="w-full text-base font-medium sm:text-lg md:text-xl text-center lg:text-2xl xl:text-5xl"
              >
                All books in one place <br />
              </p>
            </div>
            <div class="object-center w-3/5">
              <img
                src="./image/books.jpg"
                class="shadow rounded max-w-full h-auto align-middle border-none"
              />
            </div>
          </div>
        </div>
        <div class="w-2/5 h-12 row-left">
          <div class="w-full max-w-xs">
            <div class="max-w-md mt-6 mb-4">
              <form class="max-w-md mt-6 mb-4 form-input">
                <div class="mb-6">
                  <label
                    class="block text-gray-700 text-sm font-medium mb-2"
                    for="username"
                  >
                    Username
                  </label>
                  <input
                    type="text"
                    class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 font-medium leading-tight focus:outline-none focus:shadow-outline"
                    name="fullname"
                    placeholder="Username"
                  />
                </div>
                <div class="mb-6">
                  <label
                    class="block text-gray-700 text-sm font-medium mb-2"
                    for="email"
                  >
                    Email
                  </label>
                  <input
                    type="text"
                    class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 font-medium leading-tight focus:outline-none focus:shadow-outline"
                    name="email"
                    placeholder="Email"
                  />
                </div>
                <div class="mb-6">
                  <label
                    class="block text-gray-700 text-sm font-medium mb-2"
                    for="phone"
                  >
                    Phone
                  </label>
                  <input
                    type="text"
                    class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 font-medium leading-tight focus:outline-none focus:shadow-outline"
                    name="phone"
                    placeholder="Phone"
                  />
                </div>
                <div class="mb-6">
                  <label
                    class="block text-gray-700 text-sm font-medium mb-2"
                    for="password"
                  >
                    Password
                  </label>
                  <input
                    type="password"
                    class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 font-medium leading-tight focus:outline-none focus:shadow-outline"
                    name="password"
                    placeholder="Password"
                  />
                </div>
                <div class="mb-6">
                  <label
                    class="block text-gray-700 text-sm font-medium mb-2"
                    for="confirm_password"
                  >
                    Confirm password
                  </label>
                  <input
                    type="password"
                    class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 font-medium leading-tight focus:outline-none focus:shadow-outline"
                    name="confirm_password"
                    placeholder="Confirm Password"
                  />
                </div>

                <div class="mb-6">
                  <button
                    type="submit"
                    class="bg-gray-500 hover:bg-yellow-300 text-white font-medium w-full h-12 py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                  >
                    Create Account
                  </button>
                </div>

                <div class="text-center text-sm text-gray-600 mt-4">
                  By signing up, you agree to the
                  <a
                    class="no-underline border-b border-grey-dark text-grey-dark"
                    href="#"
                  >
                    Terms of Service
                  </a>
                  and
                  <a
                    class="no-underline border-b border-gray-400 text-gray-500"
                    href="#"
                  >
                    Privacy Policy
                  </a>
                </div>
              </form>

              <div class="text-gray-500 mt-6 text-center text-sm">
                Already have an account?
                <a
                  class="no-underline border-b border-gray-400 text-gray-500"
                  href="SignIn.php"
                >
                  Log in
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
