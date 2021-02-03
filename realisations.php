
<?php require_once "./header.php";?>

<h1 class="font-sans text-center mt-2 text-8xl">Mes réalisations</h1>

<div class="sm:flex flex-wrap justify-center items-center text-center gap-8 mt-40">
<?php
    require "./data.php";
    foreach ($realisations as $rea){ ?>
        <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
            <a href=<?php echo $rea["link"]; ?> class="w-full block h-full">
                <img alt="blog photo" src=<?php echo $rea["image"]; ?> class="max-h-40 w-full object-cover"/>
                <div class="bg-white dark:bg-gray-800 w-full p-4">
                    <p class="text-indigo-500 text-md font-medium">
                    </p>
                    <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                        <?php echo $rea["title"]; ?>            </p>
                    <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                        <?php echo $rea["description"]; ?>       </p>
                </div>
            </a>
        </div>
<?php } ?>
</div>




<?php require_once "./footer.php";?>
