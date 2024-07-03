<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>


<main class="px-5">
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
   
<form method="post">
   <div class="w-full rounded-lg bg-gray-200 ">
       <div class="px-4 pt-2 bg-gray-200 rounded-t-lg ">
       <label for="body" class="block mb-2 font-semibold text-gray-900 text-lg">Body</label>
           <textarea id="body" name="body" rows="4" class="w-full p-2  text-sm text-gray-900 bg-white border-0  focus:ring-0" placeholder="Write down your thoughts..." required><?= $_POST['body'] ?? '' ?>
           </textarea>
           <?php if(isset($errors['body'])): ?>

        <p class="text-red-500 text-sm mt-2"><?=$errors['body'] ?></p>

            <?php endif; ?>


       </div>
       <div class="flex items-center justify-center px-3 pt-2 pb-4">
           <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200  hover:bg-blue-800">
               Submit Note
           </button>    
       </div>
   </div>
</form>


      </div>
    </main>



<?php require('partials/foot.php'); ?>

</html>