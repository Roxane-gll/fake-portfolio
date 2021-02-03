
<?php
require_once "./header.php";
require "./data.php";
?>



<img alt="profil" src=<?php echo $user["url"];?> class="mx-auto object-cover rounded-full h-96 w-96 "/>
<h1 class="font-sans text-center mt-3 text-6xl"><?php echo $user["name"];?> </h1>
<h1 class="font-sans text-center mt-2 text-6xl"> - </h1>
<h1 class="font-sans text-center mt-2 text-4xl"><?php echo $user["job"];?> </h1>

<h1 class="font-sans text-left mt-60 ml-6 mb-5 text-4xl text-center">Formations</h1>
<div class="sm:flex flex-wrap justify-center items-center text-center gap-8">

    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6  shadow-lg rounded-lg dark:bg-gray-800">
        <h3 class="text-2xl text-gray-500 font-semibold dark:text-white py-4">
            <?php echo $formation["annee"];?>
        </h3>
        <h3 class="text-1xl text-gray-500 font-semibold dark:text-white py-4">
            <?php echo $formation["name"];?>
        </h3>
        <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
            <?php echo $formation["description"];?>
        </p>
    </div></div>

<h1 class="font-sans text-left mt-60 mb-5 ml-6 text-4xl text-center">Passions</h1>
<div class="sm:flex flex-wrap justify-center items-center text-center gap-8">
<?php foreach ($passions as $passion){ ?>
    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6  shadow-lg rounded-lg dark:bg-gray-800">
        <h3 class="text-2xl text-gray-500 font-semibold dark:text-white py-4">
            <?php echo $passion["name"];?>
        </h3>
        <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
            <?php echo $passion["description"];?>
        </p>
    </div>
<?php } ?>
</div>

<?php require_once "./footer.php";?>
