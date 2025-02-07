<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Mogmog</title>
    <link rel="stylesheet" href="LandingPage.css">
    <script src="https://kit.fontawesome.com/5756001ff6.js" crossorigin="anonymous"></script>
</head>

<body>

        <header>
            <nav class="left-side">
                <div class="left-buttons">
                    <button>
                        <i class="fa-solid fa-plane"></i>
                        <a href="LandingPage.php">Find Flight</a>
                    </button>

                    <button>
                        <i class="fa-solid fa-bed"></i>
                        <a href="LandingPage.php">Find Stays</a>
                    </button>
                </div>
            </nav>

            <nav class="center">
                <img src="/assets/GlobeLogo.png" class="logo" alt="Globe Logo">
            </nav>

            <nav class="right-side">
                <button>
                    <i class="fa-solid fa-heart"></i>
                    <a href="LandingPage.php">Favourites</a>
                </button>
                    <p>|</p>

                <button>
                <a href="LandingPage.php">User Profile</a>
                </button>
            </nav>
        </header>
        <main>
    <section class="hero">
        <div>
            <h1>Make your Travel<br>wishlist, we'll do<br>the rest</h1>
            <p>Special to suit your plan</p>
        </div>
    </section>


        <form action="post" class="search">
            <h1>Where are you flying?</h1>
        </form>

    <section class="another-section">
        <!-- Content for the new section goes here -->
        <h2>Another Section</h2>
        <p>This is another section below the search.</p>
    </section>
</main>

        <?php
            echo '<script>';
            echo 'console.log("Hello World")';
            echo '</script>';   
        ?>
</body>

</html>