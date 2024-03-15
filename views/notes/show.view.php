<?php   require  base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php')?>

<?php require base_path('views/partials/header.php')?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="mb-6 "> 
            <a href="/notes" class="text-blue-500 underline">Go Back..</a>
            </p>
           
            <p> <?=htmlspecialchars($note['body']) ?></p>
            <footer class="mt-6">
                <a href="/note/edit?id=<?=$note['id']?>" class=" text-gry-500 px-4 py-1 border border-current rounded ">Edit</a>
            </footer>
          
        </div>
    </main>
<?php require  base_path('views/partials/footer.php')?>