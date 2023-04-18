<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
</head>
<body>
<?php include 'main.php'; ?>

<?php include 'footer.php'; ?> 
<script>
    const links= document.querySelectorAll('.nav-link');
    if(links.length)
    {
        links.forEach((link)=>
        {link.addEventListener('click',(e)=>
            {links.foeEach((link)=>
                {link.classList.remove('active');
        });
        e.preventDefault();
        link.classList.add('active');
    });
});
    }
    </script>

</body>
</html>