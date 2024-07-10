<?php
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>

  
    <main class="px-5">
      <div class="flex justify-center items-center h-[90vh] mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div class="bg-white p-8 mx-auto w-full max-w-md rounded-md shadow-md">
            <h2 class="text-2xl font-semibold  text-center">Register for an account</h2>
            <p class="text-sm text-gray-500 text-center py-4 mb-4">Welcome! Please enter your details</p>


            <form>


                <div class="mb-4">
                    <label for="email" class="block text-gray-600 font-medium">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md"
                        placeholder="Enter your email">
                </div>



                <div class="mb-6">
                    <label for="password" class="block text-gray-600 font-medium">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md"
                        placeholder="Enter your password">
                </div>

                <div class="w-full flex justify-end pb-5">
                    <a class="text-blue-500 font-semibold text-right text-sm" href="#">Forgot password</a>
                </div>

                <button type="submit"
                class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 w-full font-semibold">
                Register
            </button>
                <!-- <div class="pt-5 flex justify-center">
                    <p class="text-gray-500 text-sm">Don't have an account? <a class="text-blue-500 font-semibold"
                            href="#">Sign up</a></p>
                </div> -->
            </form>
        </div>
      </div>
    </main>


    
<?php require base_path('views/partials/foot.php'); ?>
</html>