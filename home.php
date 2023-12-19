<!-- <?php
    require 'config.php';
    require 'function.php';
    if(!empty($_SESSION["id"])) {
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
    }

    //ambil data dari tabel
    $produk = query("SELECT  *   FROM produk");
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7415c3dd6b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_home.css">
    <title>Petrisserie_</title>
    <style>
    /* .card img {
        width: 100%;
        height: auto;
        display: block;
        margin-top: 10px;

    }

    .card-content {
        padding: 16px;
    }

    .card {
        transition: transform 0.3s;
        background-color: #A3CCBE;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 1px;
        width: 100%;
    }

    .card:hover {
        cursor: pointer;
        transform: scale(1.1);
        box-shadow: 5px 10px 15px 4px rgba(0, 0, 0, 0.1);
    }

    .card:not(:hover) {
        transform: scale(0.9);
    } */
    </style>
</head>

<body>
    <header>
        <a href="home" class="brand">Petrisserie</a>
        <div class="menu-btn"></div>
        <div class="navigation">
            <div class="navigation-items">
                <a href="home">Home</a>
                <a href="home#produk">Produk Kami</a>
                <a href="keranjang">Keranjang</a>
                <a href="#">Galeri</a>
                <a href="#">Contact</a>
                <!-- <?php
                    if(!empty($_SESSION['id'])){
                        echo '<a href="#">' . $row['nama'] . '</a>';
                        echo'<a href="logout">Logout</a>';
                    } 
                    else{
                        echo'<a href="login">Login</a>';    
                    }
                ?> -->
            </div>
        </div>
    </header>
    <section class="home">
        <div class="container mt-5">
            <h1>Petrisserie_<br><span>F&B</span></h1>
            <p>.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            </p>
            <!-- <a href="#">Read More</a> -->
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/petrisserie_" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.wa.me/"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="arrows">
            <div class="chevron"></div>
        </div>
    </section>
    <section class="header" id="produk">
        <h2>Our Menu</h2>
        <div class="curve"></div>
    </section>
    <section class="produk" id="Oil">
        <div class="detail_produk">
            <h3>Plankton's Robotic Oil</h3>
            <h4>Chocolate</h4>
            <p>Our deluxe chocolate drink, made from the finest quality chocolate powder. Enjoy the rich taste that
                fills each sip – a delightful experience in every bottle.</p>
            <a href="#"><i class=" fa-solid fa-cart-shopping"></i>Order Sekarang</a>
        </div>
        <div class="gambar_produk">
            <img src="assets/contoh.jpg" alt="">
        </div>
    </section>

    <section class="produk" id="crepe">
        <div class="detail_produk">
            <h3>Delicancy </h3>
            <h4>Chocolate, Strawberry, Matcha, Oreo</h4>
            <p>A combination layers of crepes with luscious cream makes each bite a symphony of textures and flavors.
                Available in four delectable options: Chocolate, Strawberry, Matcha, and Oreo.</p>
            <a href="#"><i class=" fa-solid fa-cart-shopping"></i>Order Sekarang</a>
        </div>
        <div class="gambar_produk">
            <div class="slider-wrapper">
                <div class="slider">
                    <img src="assets/chococrepe.jpg" alt="" id="slide-1">
                    <img src="assets/oreocrepe.jpg" alt="" id="slide-2">
                    <img src="assets/rainbowcrepe.jpg" alt="" id="slide-3">
                    <img src="assets/matha.jpg" alt="" id="slide-4">
                </div>
                <div class="slider-nav">
                    <a href="#slide-1"></a>
                    <a href="#slide-2"></a>
                    <a href="#slide-3"></a>
                    <a href="#slide-4"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="produk" id="keripik">
        <div class="detail_produk">
            <h3>Greated Tentacles </h3>
            <h4>Spicy, Original (salty)</h4>
            <p>A unique tentacle-like shape defines our Cassava Chips, sliced for the perfect crunch. Choose between
                the classic Salty or Spicy variants, each offering an exquisite blend of flavors and a
                satisfying crunch.
            </p>
            <a href="#"><i class=" fa-solid fa-cart-shopping"></i>Order Sekarang</a>
        </div>
        <div class="gambar_produk">
            <div class="slider-wrapper">
                <div class="slider">
                    <img src="assets/keripikpedas.jpg" alt="" id="slide-1">
                    <img src="assets/oreocrepe.jpg" alt="" id="slide-2">
                </div>
                <div class="slider-nav">
                    <a href="#slide-1"></a>
                    <a href="#slide-2"></a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");
    const products = document.querySelectorAll(".produk");

    window.addEventListener('scroll', function() {
        const triggerBottom = window.innerHeight / 5 * 4;

        products.forEach((produk) => {
            const boxTop = produk.getBoundingClientRect().top;
            if (boxTop < triggerBottom) {
                produk.classList.add('show');
            } else {
                produk.classList.remove('show');
            }
        });
    });

    document.querySelector('.arrows').addEventListener('click', function() {
        window.scrollBy({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const header = document.querySelector("header");
        const mediaIcons = document.querySelector(".media-icons");

        // Determine the scroll point where you want the icons to start floating
        const scrollThreshold = 25;

        window.addEventListener("scroll", function() {
            if (window.scrollY > scrollThreshold) {
                header.classList.add("active");
                mediaIcons.classList.add("floating");
            } else {
                header.classList.remove("active");
                mediaIcons.classList.remove("floating");
            }
        });

        const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");
        const products = document.querySelectorAll(".produk");

        window.addEventListener("scroll", function() {
            const triggerBottom = window.innerHeight / 5 * 4;

            products.forEach((produk) => {
                const boxTop = produk.getBoundingClientRect().top;
                if (boxTop < triggerBottom) {
                    produk.classList.add('show');
                } else {
                    produk.classList.remove('show');
                }
            });
        });

        menuBtn.addEventListener("click", () => {
            menuBtn.classList.toggle("active");
            navigation.classList.toggle("active");
        });

        // Initialize the Bootstrap Carousel
        const crepeCarousel = new bootstrap.Carousel(document.getElementById('crepeCarousel'), {
            interval: 2000, // Set the interval time between slides in milliseconds (adjust as needed)
            wrap: true, // Set to true to enable continuous loop between slides
        });

        // Store the scroll position when the page unloads
        window.addEventListener('beforeunload', function() {
            sessionStorage.setItem('scrollPosition', window.scrollY);
        });

        // Restore the scroll position when the page loads
        window.addEventListener('load', function() {
            var scrollPosition = sessionStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition));
            }
        });

        function handleCardClick(productId) {
            // You can perform actions when a card is clicked, for example, redirect to a product page:
            window.location.href = 'produk.php?id=' + productId;
        }
    });
    </script>
</body>

</html>