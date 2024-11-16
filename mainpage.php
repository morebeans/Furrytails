<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="hamburger" id="hamburger">
            &#9776;
        </div>
        <ul class="signout" id="nav-links">
                <li><a href="signout.php" >Sign out</a></li>
        </ul>
    </nav>
    <div>
        <div class="title-container">
            <h1>FURry Clean</h1>



            <h1>asdgjfdsiohjnfgio dniomnhoigfni'
                dfhgolfjmkohplgmfjnopmhgfojm ghopfmj
            </h1>
            <h1>FURry Nice! Your go</h1>
            <h1>to Pet Hotel</h1>
            <div class="description">
                <p>Treat your furry friend to a luxurious stay at Furry Tails Hotel. 
                    Enjoy cozy accommodations, gourmets meals, and plenty of playtime. 
                    Our dedicated staff provides loving care and attention. 
                    Book your pet’s stay today!
                </p>
            </div>
            <section id="">
                <div>
                    <div class="tagline">
                        <h1>Hotel</h1>
                    </div>
                    <div class="info-container">
                        <img src="image/hotel2.jpg" alt="">
                        <img src="image/groundhotel.jpg" alt="">
                    </div>
                </div>
            </section>
            <section id="services"></section>
                <div> 
                    <div class="tagline">
                        <h1>Services</h1>
                    </div>
                    <div class="info-container">
                        <img src="image/catgroom.jpg" alt="">
                        <img src="image/catanddoghotel.jpg" alt="">
                        <img src="image/doggroom.jpg" alt="">
                    </div>
                </div>
            </section>
            <section id="aboutus"></section>
                <div> 
                    <div class="tagline">
                        <h1>About Us</h1>
                    </div>
                    <div class="info-container">
                        <img src="image/inclussions.jpg" alt="">
                        <img src="image/why.jpg" alt="">
                    </div>
                </div>
            </section>
        </div>
    </div> 
    <h1>Hello hahahaha <?php 

    session_start();
    echo $_SESSION['firstname'];
?></h1>

</body>
</html>