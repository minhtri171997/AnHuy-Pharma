<?php
	$link = mysqli_connect("localhost", "anhuypha", "anhuypharma1233018281", "anhuypharmaDB");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>An Huy Pharma | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto|Source+Sans+Pro:200,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karma" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&amp;subset=vietnamese" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container1">
            <div id="branding">
                <a href="index.php">
                    <img src="./img/logo.png">
                </a>
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="index.php" class="current">Trang chủ</a>
                    </li>
                    <li>
                        <a href="about.html">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="products.html">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="contact.html">Liên hệ</a>
                    </li>
                </ul>
            </nav>

            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="dropdown-content">
                    <a href="index.php">Trang chủ</a>
                    <a href="about.html">Giới thiệu</a>
                    <a href="products.html">Sản phẩm</a>
                    <a href="contact.html">Liên hệ</a>
                </div>
            </div>

        </div>
    </header>

    <section id="showcase">
        <figure id="slide">
            <div class="slider">
                <a href="#">
                    <img src="https://images.pexels.com/photos/7096/people-woman-coffee-meeting.jpg?cs=srgb&dl=advice-advise-advisor-7096.jpg&fm=jpg">
                </a>
            </div>

            <div class="slider">
                <a href="#">
                    <img src="https://images.pexels.com/photos/6385/hands-people-woman-meeting.jpg?cs=srgb&dl=advice-advise-advisor-6385.jpg&fm=jpg">
                </a>
            </div>

            <div class="slider">
                <a href="#">
                    <img src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg?cs=srgb&dl=advice-advise-advisor-7097.jpg&fm=jpg">
                </a>
            </div>

        </figure>
    </section>

    <section id="newsletter">
        <div class="container" id="newscontainer">
            <div class="left-news">
                <h1>Tin tức</h1>
                <div class="scroller">
                    <div class="newscontentbox">
                        <?php
							$sql = "SELECT * FROM news ORDER BY id DESC limit 5";
							if ($result = mysqli_query($link,$sql)) {
								while ($row = mysqli_fetch_array($result)) {
									echo "<div class=\"newsbox\">";
									echo "<div class=\"thumbnail\">";
									echo "<a href=\"\">";
                                    echo "<img src=\"".$row["link_image"]."\">";
									echo "</a>";
									echo "</div>";
									echo "<div class=\"news-paragraph\">";
									echo "<a href=\"\">".$row["title"]."</a>";
									echo "<p>".$row["description"]."</p>";
									echo "</div>";
									echo "</div>";
								}
							}
                        ?>
                    </div>
                </div>
            </div>

            <div class="right-news">
                <h1>Các sản phẩm mới</h1>
                <div class="scroller">
                    <div class="new-products-tray">
                        <div class="new-product">
                            <div class="thumbnail">
                                <a href="eprazinone.html">
                                    <img src="./img/eprazinone-500x400.png">
                                </a>
                            </div>
                            <a href="">Eprazinone</a>
                        </div>
                        <div class="new-product">
                            <div class="thumbnail">
                                <a href="cao-xoa.html">
                                    <img src="./img/cao-xoa.png">
                                </a>
                            </div>
                            <a href="">Cao xoa Sao Vàng</a>
                        </div>
                        <div class="new-product">
                            <div class="thumbnail">
                                <a href="ong-hit.html">
                                    <img src="./img/ong-hit.png">
                                </a>
                            </div>
                            <a href="">Ống hít Sao Vàng</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="partners">
        <div class="container">
            <h1>Các đối tác</h1>
            <div class="query-tray">
                <div id="partners-container">
                    <a href="http://www.danapha.com/" class="box">
                        <img src="./img/danapha.jpg">
                        <h3>Danapha</h3>
                    </a>
                    <a href="http://mebiphar.com/" class="box">
                        <img src="./img/mebiphar-170x170.png">
                        <h3>Mebiphar</h3>
                    </a>
                    <a href="http://www.richter.hu/en-US/Pages/default.aspx" class="box">
                        <img src="./img/richter-170x170.png">
                        <h3>Gedeon Richter</h3>
                    </a>

                    <a href="#" class="box">
                        <img src="./img/kimdo.png">
                        <h3>Kim Đô</h3>
                    </a>

                </div>
            </div>

        </div>
    </section>

    <footer>
        <div class="container">
            <h1>Thông tin liên hệ</h1>
            <h2>Công ty dược An Huy</h2>
            <p>Địa chỉ: Toà nhà HS, lầu 3&4, 260/11 Nguyễn Thái Bình, P.12, Quận Tân Bình, TP Hồ Chí Minh <br>
            Email: anhuy@anhuypharma.com <br>
            Điện thoại: 028 39481836 <br>
            Fax: 028 39481837</p>
        </div>
        <div class="horizontal-line"></div>
        <div>
        An Huy Pharma, copyright &copy; 2018
        </div>
    </footer>
</body>

</html>