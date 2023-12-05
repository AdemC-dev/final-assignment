<?php 

session_start();


if (isset($_SESSION["logSuccessMsg"])) {
    echo "<script type=\"text/javascript\">"."alert('Giriş başarıyla gerçekleştirildi.');"."</script>";
    unset($_SESSION['logSuccessMsg']);
}

?>
<!DOCTYPE html>
<html lang="tr_TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ademcdev">
    <title>Sinema ve Film</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="main">
        <div id="header-scroll" class="row">
            <header class="header col-12">
                <div class="logo">
                    <a href="logreg.php"><img src="images/logo.png" alt="logo"></a>
                </div>
                <nav class="navigation">
                    <fieldset class="fields">
                    <a href="index.html">Anasayfa</a>
                    </fieldset>
                    <div class="dropdown">
                        <fieldset class="fields">
                            <button class="dropbtn">Filmler
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </fieldset>
                        <div class="dropdown-content" id="f">
                            <div class="drpleft" id="fx">
                                <a href="türler/aile.html" class="drpa">Aile</a>
                                <a href="türler/aksiyon.html" class="drpa">Aksiyon</a>
                                <a href="türler/animasyon.html" class="drpa">Animasyon</a>
                                <a href="türler/bilimkurgu.html" class="drpa">Bilim Kurgu</a>
                                <a href="türler/dram.html" class="drpa">Dram</a>
                                <a href="türler/fantastik.html" class="drpa">Fantastik</a>
                                <a href="türler/gerilim.html" class="drpa">Gerilim</a>
                                <a href="türler/gizem.html" class="drpa">Gizem</a>
                                <a href="türler/komedi.html" class="drpa">Komedi</a>
                                <a href="türler/korku.html" class="drpa">Korku</a>
                            </div>
                            <div class="drpright" id="fx">
                                <a href="türler/macera.html" class="drpa">Macera</a>
                                <a href="türler/müzikal.html" class="drpa">Müzikal</a>
                                <a href="türler/polisiye.html" class="drpa">Polisiye</a>
                                <a href="türler/belgesel.html" class="drpa">Belgesel</a>
                                <a href="türler/romantik.html" class="drpa">Romantik</a>
                                <a href="türler/savas.html" class="drpa">Savaş</a>
                                <a href="türler/spor.html" class="drpa">Spor</a>
                                <a href="türler/suc.html" class="drpa">Suç</a>
                                <a href="türler/tarihi.html" class="drpa">Tarihi</a>
                                <a href="türler/western.html" class="drpa">Western</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <fieldset class="fields">
                            <button class="dropbtn">Diziler
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </fieldset>
                        <div class="dropdown-content" id="d">
                            <div class="drpleft" id="dx">
                                <a href="diziler/aile.html" class="drpa">Aile</a>
                                <a href="diziler/aksiyon.html" class="drpa">Aksiyon</a>
                                <a href="diziler/animasyon.html" class="drpa">Animasyon</a>
                                <a href="diziler/bilimkurgu.html" class="drpa">Bilim Kurgu</a>
                                <a href="diziler/dram.html" class="drpa">Dram</a>
                                <a href="diziler/fantastik.html" class="drpa">Fantastik</a>
                                <a href="diziler/gerilim.html" class="drpa">Gerilim</a>
                                <a href="diziler/gizem.html" class="drpa">Gizem</a>
                                <a href="diziler/komedi.html" class="drpa">Komedi</a>
                                <a href="diziler/korku.html" class="drpa">Korku</a>
                            </div>
                            <div class="drpright" id="dx">
                                <a href="diziler/macera.html" class="drpa">Macera</a>
                                <a href="diziler/müzikal.html" class="drpa">Müzikal</a>
                                <a href="diziler/polisiye.html" class="drpa">Polisiye</a>
                                <a href="diziler/belgesel.html" class="drpa">Belgesel</a>
                                <a href="diziler/romantik.html" class="drpa">Romantik</a>
                                <a href="diziler/savas.html" class="drpa">Savaş</a>
                                <a href="diziler/spor.html" class="drpa">Spor</a>
                                <a href="diziler/suc.html" class="drpa">Suç</a>
                                <a href="diziler/tarihi.html" class="drpa">Tarihi</a>
                                <a href="diziler/western.html" class="drpa">Western</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <fieldset class="fields">
                            <button class="dropbtn">Yapım Yılı
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </fieldset>
                        <div class="dropdown-content" id="y">
                            <div class="drpleft" id="yx">
                                <a href="yapımy/2000.html" class="drpa">2000</a>
                                <a href="yapımy/2001.html" class="drpa">2001</a>
                                <a href="yapımy/2002.html" class="drpa">2002</a>
                                <a href="yapımy/2003.html" class="drpa">2003</a>
                                <a href="yapımy/2004.html" class="drpa">2004</a>
                                <a href="yapımy/2005.html" class="drpa">2005</a>
                                <a href="yapımy/2006.html" class="drpa">2006</a>
                                <a href="yapımy/2007.html" class="drpa">2007</a>
                                <a href="yapımy/2008.html" class="drpa">2008</a>
                                <a href="yapımy/2009.html" class="drpa">2009</a>
                            </div>
                            <div class="drpright" id="yx">
                                <a href="yapımy/2010.html" class="drpa">2010</a>
                                <a href="yapımy/2011.html" class="drpa">2011</a>
                                <a href="yapımy/2012.html" class="drpa">2012</a>
                                <a href="yapımy/2013.html" class="drpa">2013</a>
                                <a href="yapımy/2014.html" class="drpa">2014</a>
                                <a href="yapımy/2015.html" class="drpa">2015</a>
                                <a href="yapımy/2016.html" class="drpa">2016</a>
                                <a href="yapımy/2017.html" class="drpa">2017</a>
                                <a href="yapımy/2018.html" class="drpa">2018</a>
                                <a href="yapımy/2019.html" class="drpa">2019</a>
                            </div>
                        </div>
                    </div>
                    <fieldset class="fields">
                    <a href="../pages/packeges.html">Film Koleksiyonları</a>
                    </fieldset>
                    <fieldset class="fields">
                    <a href="pages/goats.html">En iyiler</a>
                    </fieldset>
                </nav>
                <div class="userLog" id="userLog">
                    <?php 
                        if (isset($_SESSION['showName'])) {
                            $showName = $_SESSION['showName'];
                    ?>
                    <a class="userInfo" href="#"><?php echo $showName; ?></a>
                    <?php
                        } else {
                            //
                        }
                    ?>
                    <button class="logreg" id="exitBtn" style="width:auto;" onclick="location.href = 'logreg.php'">ÇIKIŞ YAP</button>
                </div>
                <div class="search" id="search" >
                    <input type="text" id="searchBar" >
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <h1 class="typer" id="typer">
                        <span class="typeWriter" id="typeWriter" data-delay="150" data-deletedelay="1500" data-words="Lord of the Rings,Star Wars,Game of Thrones, The Originals, Breaking Bad" data-colors="#000,#000"></span>
                        <span class="cursor" data-owner="typeWriter">|</span>
                    </h1>
                </div>
            </header>
            <div class="dropdownres">
                
            </div>
        </div>
        <!--
        <div class="loginScreen" id="login">
            <form method="post" class="content fadeIn" id="logContent">
                <h2>Giriş Yap</h2>
                
                
                <div class="errorContainer"></div>
                <div class="inputx">
                    <input type="email" name="email" id="emailLog" required>
                    <span>Email</span>
                    <i class="line"></i>
                </div>
                <div class="inputx">
                    <input type="password" name="pswd" id="pswdLog" class="passwordInput" required>
                    <button type="button" id="togglelogBtn" class="toggle">
                        <i id="eyeIcon" class="fa-solid fa-eye fa-lg icon"></i>
                    </button>
                    <span>Şifre</span>
                    <i class="line"></i>
                </div>
                <div class="log-nav">
                    <a href="#">Şifremi Unuttum</a>
                    <a id="regbtn2" onclick = "regHref()">Kayıt Ol</a>
                </div>
                <div class="actionBtn">
                    <button id="cancel" type="button" formnovalidate>İptal</button>
                    <input type="submit" value="Giriş Yap" name="logSubmit" id="submit">
                </div>
            </form>
        </div>
        <div class="regScreen" id="register">
            <form method="post" class="content fadeIn" id="regContent">
                <h2>Kayıt Ol</h2>
                
                <div class="errorContainer"></div>
                  <div class="inputx">
                    <input type="text" name="userName" id="userName" required>
                    <span>Kullanıcı Adı</span>
                    <i class="line"></i>
                  </div>
                  <div class="inputx">
                    <input type="email" name="email" id="emailReg" required>
                    <span>E-posta</span>
                    <i class="line"></i>
                  </div>
                  <div class="inputx">
                    <input type="password" name="pswd" id="pswdReg" class="passwordInput" required>
                    <button type="button" id="toggleregBtn" class="toggle">
                        <i id="eyeIcon" class="fa-solid fa-eye fa-lg icon"></i>
                    </button>
                    <span>Şifre</span>
                    <i class="line"></i>
                  </div>
                  <div class="inputx">
                    <input type="password" name="pswdVerify" id="pswdVerify" class="passwordInput" required>
                    <button type="button" id="toggleregverBtn" class="toggle">
                        <i id="eyeIcon" class="fa-solid fa-eye fa-lg icon"></i>
                    </button>
                    <span>Şifreyi Onayla</span>
                    <i class="line"></i>
                  </div>
                  <div class="log-nav">
                    <a href="#">Şifremi Unuttum</a>
                  </div>
                  <div class="actionBtn">
                    <button id="cancelReg" type="button" formnovalidate>İptal</button>
                    <input type="submit" value="Kayıt Ol" id="submit" name="regSubmit">
                  </div>
              </form>
        </div>
        -->
        <main class="row">
            <div class="main_div col-3">
                <div class="left_div">
                    <div class="Slider"> <!--<a href="https://www.youtube.com/watch?v=_nZdmwHrcnw"><ig src="images/Fellowship-of-the-Ring-poster.jpg" alt="Lotr_fellowship_of_the_ring"></a>-->
                        <div class="mySlides fade">
                            <div class="slide-photo">
                                <a href="movies/lotr1.html">
                                    <img src="images/mainlotrfellowship.jpg" alt="lotr-fellowship-ofthe-ring">
                                </a>
                            </div>
                            <a href="movies/lotr1.html" title="lotr-fellowship-ofthe-ring" class="slide-mask">
                            </a>
                            <div class="slide-caption-wrap">
                                <div class="slide-caption">
                                    <a href="movies/lotr1.html" class="film-poster">
                                        <img src="images/thumbnails/secondlotrfellowshipofthering.jpg" title="lotr-fellowship-ofthe-ring" alt="lotr-fellowship-ofthe-ring" class="film-poster-img">
                                    </a>
                                    <h2 class="film-title">
                                        <a href="movies/lotr1.html" title="lotr-fellowship-ofthe-ring">LOTR: Fellowship of the Ring</a>
                                    </h2>
                                    <div class="sc-detail">
                                        <div class="scd-item">
                                            <i class="fas fa-star hl mr-1"></i>10/10
                                        </div> 
                                        <div class="scd-item">
                                            <strong>HD</strong>
                                        </div> 
                                        <div class="scd-item m-hide"> 
                                        </div>
                                    </div> 
                                    <p class="sc-desc">Genç Hobbit Frodo Baggins, amcası Bilbo'dan miras kalan gizemli bir yüzüğün yanlış ellere düşmesini önlemek için evden uzaklara gider. Yolculuk sırasında, yüzüğü korumak için bir kardeşlik kurulur ve bu sayede yüzüğün son konumuna ulaşacağından emin olurlar.</p> 
                                    <div class="sc-btn">
                                        <a href="movies/lotr1.html" class="btn-circle">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <div class="slide-photo">
                                <a href="movies/lotr2.html">
                                    <img src="images/lotrtwotowers.jpg" alt="lotr-the-two-towers">
                                </a>
                            </div>
                            <a href="movies/lotr2.html" title="lotr-the-two-towers" class="slide-mask">
                            </a>
                            <div class="slide-caption-wrap">
                                <div class="slide-caption">
                                    <a href="movies/lotr2.html" class="film-poster">
                                        <img src="images/thumbnails/secondlotrtwotower.jpg" title="lotr-the-two-towers" alt="lotr-the-two-towers" class="film-poster-img">
                                    </a>
                                    <h2 class="film-title">
                                        <a href="movies/lotr2.html" title="lotr-the-two-towers">LOTR: The Two Towers</a>
                                    </h2>
                                    <div class="sc-detail">
                                        <div class="scd-item">
                                            <i class="fas fa-star hl mr-1"></i>10/10
                                        </div> 
                                        <div class="scd-item">
                                            <strong>HD</strong>
                                        </div> 
                                        <div class="scd-item m-hide"> 
                                        </div>
                                    </div> 
                                    <p class="sc-desc">Frodo ve Sam, Gimli, Legolas ve Aragorn orkların ele geçirdiği Merry ve Pippin'i ararken Bir Güç Halkasını yok etmek için Mordor'a doğru yürüyorlar. Nefretli bir büyücü Saruman, Isengard'daki Orthanc Kulesinde yüzük kardeşliği üyelerini bekliyor.</p> 
                                    <div class="sc-btn">
                                        <a href="movies/lotr2.html" class="btn-circle">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <div class="slide-photo">
                                <a href="movies/lotr3.html">
                                    <img src="images/mainlotrreturnoftheking.png" alt="lotr-return-of-the-king">
                                </a>
                            </div>
                            <a href="movies/lotr3.html" title="lotr-return-of-the-king" class="slide-mask">
                            </a>
                            <div class="slide-caption-wrap">
                                <div class="slide-caption">
                                    <a href="movies/lotr3.html" class="film-poster">
                                        <img src="images/thumbnails/secondlotrreturnoftheking.jpg" title="lotr-return-of-the-king" alt="lotr-return-of-the-king" class="film-poster-img">
                                    </a>
                                    <h2 class="film-title">
                                        <a href="movies/lotr3.html" title="lotr-return-of-the-king">LOTR: The Return of the King</a>
                                    </h2>
                                    <div class="sc-detail">
                                        <div class="scd-item">
                                            <i class="fas fa-star hl mr-1"></i>10/10
                                        </div> 
                                        <div class="scd-item">
                                            <strong>HD</strong>
                                        </div> 
                                        <div class="scd-item m-hide"> 
                                        </div>
                                    </div> 
                                    <p class="sc-desc">Aragorn'un antik kralların veliahdı olduğu açığa çıkmıştır. Gandalf ve kırık kardeşliğin diğer üyeleri, Gondor'u Sauron'un  güçlerinden kurtarmaya çalışırlar. Bu sırada, Frodo ve Sam, yüzüğü Mordor'un kalbine daha da yakınlaştırırlar.</p> 
                                    <div class="sc-btn">
                                        <a href="movies/lotr3.html" class="btn-circle">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="right_div">
                    <div class="movie-list">
                        <div class="movie">
                            <div class="film-poster">
                                <a title="synchronic" href="movies/senkronik.html">
                                    <img src="images/thumbnails/synchronic.jpg" title="synchronic" alt="synchronic" class="film-poster-img">
                                </a>
                            </div> 
                            <div class="film-detail">
                                <div class="fd-infor">
                                    <span class="fdi-item"><i class="fas fa-star hl mr-1"></i>8.5/10</span>
                                    <span class="fdi-item"><strong>HD</strong></span> 
                                    <span class="fdi-item"></span>
                                </div> 
                                <h3 class="film-namex">
                                    <a href="movies/senkronik.html" title="synchronic">Senkronik</a>
                                </h3> 
                                <p class="sc-desc">New Orleans’ta sağlık görevlisi olarak çalışan iki iş arkadaşı, Steven ve Dennis bir gün bir yardım çağrısı alır, olay tipik bir aşırı doz vakası gibi görünse de cesedin çok eski görünüşlü bir kılıçla öldürülmüş olması kafaları karıştırır.</p> 
                                <div class="fd-btn">
                                    <a href="movies/senkronik.html" class="btn btn-sm btn-play btn-secondary"><i class="fas fa-play mr-3"></i>Şimdi İzle</a> 
                                </div>
                            </div>
                        </div>
                        <div class="movie">
                            <div class="film-poster">
                                <a title="fantastik-canavarlar" href="movies/fantastikcan.html">
                                    <img src="images/thumbnails/fantastik-canavarlar1.jpg" title="childhood-s-end" alt="childhood-s-end" class="film-poster-img">
                                </a>
                            </div> 
                            <div class="film-detail">
                                <div class="fd-infor">
                                    <span class="fdi-item"><i class="fas fa-star hl mr-1"></i>8.9/10</span>
                                    <span class="fdi-item"><strong>HD</strong></span> 
                                    <span class="fdi-item"></span>
                                </div> 
                                <h3 class="film-namex">
                                    <a href="movies/fantastikcan.html" title="fantastik-canavarlar">Fantastik Canavarlar Nelerdir Nerede Bulunurlar</a>
                                </h3> 
                                <p class="sc-desc">Alışılmadık magizoologist Newt Scamander güvenilir yıpranmış bavuluyla birlikte New York’a gelir. Scamender bu gezilerinde, Amerikan büyü topluluğunun Muggle’lardan korku içinde saklandıklarının farkına varır.</p> 
                                <div class="fd-btn">
                                    <a href="movies/fantastikcan.html" class="btn btn-sm btn-play btn-secondary"><i class="fas fa-play mr-3"></i>Şimdi İzle</a> 
                                </div>
                            </div>
                        </div>
                        <div class="movie">
                            <div class="film-poster">
                                <a title="1899" href="movies/1899.html">
                                    <img src="images/thumbnails/1899.jpg" title="1899" alt="1899" class="film-poster-img">
                                </a>
                            </div> 
                            <div class="film-detail">
                                <div class="fd-infor">
                                    <span class="fdi-item"><i class="fas fa-star hl mr-1"></i>9.3/10</span>
                                    <span class="fdi-item"><strong>HD</strong></span> 
                                    <span class="fdi-item"></span>
                                </div> 
                                <h3 class="film-namex">
                                    <a href="movies/1899.html" title="1899">1899</a>
                                </h3> 
                                <p class="sc-desc">Amerika’ya doğru yola çıkan ve bu yolculuk esnasında hayatları değişen Avrupalı göçmenlerin hikayesini konu ediyor. İnsanların büyük umutlarla çıktıkları bu yolculukta onları türlü zorluklar bekler.</p> 
                                <div class="fd-btn">
                                    <a href="movies/1899.html" class="btn btn-sm btn-play btn-secondary"><i class="fas fa-play mr-3"></i>Şimdi İzle</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <section class="movie-section col-9">
            <div class="movie-variety">
                <div class="head">
                    <div class="left-head">
                        <h2 class="head1">Popüler</h2>
                    </div>
                    <div class="right-btn">
                        <ul>
                            <li class="fil"><a href="pages/packeges.html/filmler.html"><i class="fa fa-play-circle mr-2"></i><span>Filmler</span></a></li>
                            <li class="diz"><a href="pages/packeges.html/diziler.html"><i class="fa fa-play-circle mr-2"></i><span>Diziler</span></a></li>
                        </ul>
                    </div>
                </div>
                <div id="trending-movies">
                        <div class="film-list-wrap">
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/strange-world.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            5.5/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Tuhaf Dünya
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/last-train-to-christmas.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Noel'e Son Tren
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/death-valley.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            4.3/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Ölüm Vadisi
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/glass-onion-a-knives-out-mystery.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            /10/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Bıçaklar Çekildi 2: Gizemli Bir Serüven
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/violent-night.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            7.1/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Vahşi Gece
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-midnight-gang.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.3/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2018
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Gece Yarısı Çetesi
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/paws-of-fury-the-legend-of-hank.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.7/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Öfkeli Patiler: Hank Efsanesi
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-enforcer.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.2/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Enforcer
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-banshees-of-inisherin.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            7.7/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Banshees of Inisherin
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/code-name-tiranga.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            2.1/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Kod Adı: Tiranga
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-big-4.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            0/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            4 Tetikçi
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-green-knight.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.8/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Yeşil Şövalye
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/night-at-the-museum-kahmunrah-rises-again.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            5/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Müzede Bir Gece: Kahmunrah'ın Yükselişi
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/thor-love-and-thunder-hdf2-601.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.7/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Thor: Love and Thunder
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/godzilla-ve-kong-hd-film-izle-hdf.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.5/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Godzilla vs Kong
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/venom-let-there-be-carnage.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.3/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Venom 2 : Let There Be Carnage
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/spider-man-no-way-home.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            8.7/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Örümcek Adam: Eve Dönüş Yok
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/zack-snyders-justice-league-hd-film-izle-hdf5.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            8.1/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Zack Snyder's Justice League
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/doctor-strange-in-the-multiverse-of-madness.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            7.7/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Doktor Strange MOM
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/5-yenilmezler-son-oyun-full-hd-film-izle.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            8.4/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2019
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Avengers EndGame
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-batman-izle.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            8.3/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Batman
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-matrix-resurrections.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6.6/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Matrix Resurrections
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/hizli-ve-ofkeli-9-hd-film-izle.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            5.5/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2021
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Hızlı ve Öfkeli 9
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/1-gelis-film-izle.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            7.9/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2016
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Geliş
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="head">
                        <div class="left-head">
                            <h2 class="head1">Son Filmler</h2>
                        </div>
                    </div>
                    <div id="trending-movies">
                        <div class="film-list-wrap">
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/new-year-s-eve.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Yılbaşı Gecesi
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-other-me.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Other Me
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/paradise-highway.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Paradise Highway
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/7-women-and-a-murder.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Yedi Kadın ve Bir Cinayet
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/a-night-at-the-kindergarten.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            A Night at the Kindergarten
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/stuck-with-you.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Yılbaşında Baş Başa
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/a-perfect-pairing.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Kusursuz Uyum
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/this-is-the-night.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            This Is the Night
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/jeepers-creepers-reborn.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Jeepers Creepers Reborn
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/roald-dahl-s-matilda-the-musical.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Matilda Müzikali
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/tomb-of-the-river.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Tomb of the River
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/corsage.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Korsaj
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/huda-s-salon.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Hudas Salon
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/sardar.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            /10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Sardar
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/jung-e.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            JUNG_E
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/high-heat.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            High Heat
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="head">
                        <div class="left-head">
                            <h2 class="head1">Son Diziler</h2>
                        </div>
                    </div>
                    <div id="trending-movies">
                        <div class="film-list-wrap">
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/alpha-males.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Alpha Males
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-glory.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Glory
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/kaleidoscope.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Kaleidoscope
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/madoff-the-monster-of-wall-street.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Madoff The Monster of Wall Street
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/harry-meghan.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            3.1/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Harry ve Meghan
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-witcher-blood-origin.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            7/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Witcher Blood Origin
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/time-hustler.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            5/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Zamane Haydudu
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-fabulous.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Fabulous
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-recruit.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            8/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Recruit
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/glitter.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Glitter 
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/national-treasure-edge-of-history.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            National Treasure Edge of History
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/reasonable-doubt.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Reasonable Doubt
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/wednesday.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            8/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Wednesday
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/dragon-age-absolution.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            6/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Dragon Age Absolution
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/willow.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            7/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Willow
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/his-dark-materials-izle.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            8/10
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            His Dark Materials
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="head">
                        <div class="left-head">
                            <h2 class="head1">Yakında</h2>
                        </div>
                    </div>
                    <div id="trending-movies">
                        <div class="film-list-wrap">
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-lord-of-the-rings-the-war-of-the-rohirrim.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                           -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2024
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Lord of the Rings: The War of the Rohirrim
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/asterix-obelix-the-middle-kingdom.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Asteriks ve Oburiks Orta Krallık
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/oppenheimer.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Oppenheimer
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/plane.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Plane
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/creed-iii.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Creed III Efsane Devam Ediyor
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/65.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            65
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/spider-man-across-the-spider-verse.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Spider-Man: Across the Spider-Verse
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/john-wick-chapter-4.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            John Wick: Chapter 4
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/transformers-rise-of-the-beasts.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Transformers: Rise of the Beasts
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-flash.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2023
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Flash
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/mission-impossible-7.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Mission: Impossible - Ölümcül Hesaplaşma
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-journalist.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            The Journalist
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/babylon.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Babylon - Babil
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/scream-6.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Çığlık 6
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/the-pale-blue-eye.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Solgun Mavi Gözler
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="itemx">
                                <div class="film-posterx">
                                    <img src="images/thumbnails/decibel.jpg" alt="">
                                    <a href=""></a>
                                </div>
                                <div class="film-detailx">
                                    <div class="fd-infor">
                                        <span class="fdi-item">
                                            <i class="fas fa-star hl mr-1"></i>
                                            -
                                        </span>
                                        <span class="fdi-item">
                                            <strong>HD</strong>
                                        </span>
                                        <span class="fdi-item">
                                            2022
                                        </span>
                                    </div>
                                    <h3 class="film-name">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" title="">
                                            Decibel
                                        </a>
                                    </h3>
                                    <div class="fd-btnx">
                                        <a href="/movie/free-glass-onion-a-knives-out-mystery-hd-90736" class="btn btn-sm btn-play btn-secondary">
                                            <i class="fas fa-play mr-3"></i>
                                            Şimdi İzle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
            <footer class="footer row col-12">
                <div class="footer-links">
                    <ul>
                        <li>
                            <a href="https://play.google.com/store/games?hl=tr&gl=US" target="_blank">Android Uygulaması</a>
                        </li>
                        <li>
                            <a href="footer/sartlar.html" target="_blank">Kullanım Koşulları</a>
                        </li>
                        <li>
                            <a href="footer/iletisim.html" target="_blank">Başvuru İçin</a>
                        </li>
                        <li>
                            <a href="footer/sitemap.html" target="_blank">Site Haritası</a>
                        </li>
                    </ul>
                    <ul class="social">
                        <li>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i> İnstagram</a>
                        </li>
                        <li>
                            <a href="https://tr-tr.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home" target="_blank"><i class="fab fa-twitter-square"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="https://www.reddit.com/" target="_blank"><i class="fab fa-reddit-square"></i> Reddit</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-about">
                    <div class="about-text">
                       estelelenathmovies.com reklamsız ve ücretsiz bir film akış sitesidir. Biz size 10000 üzerin de film ve diziyi herhangi bir ücret ödemeden ya da hesap oluşturmadan online izleme imkanı sunuyoruz. Ayrıca isterseniz daha sonra izlemek için filmleri MoviesCloud'dan indirebilirsizin.
                    </div>
                    <p class="copyright">@ranexcdev.com</p>
                </div>
            </footer>
        <script type="text/javascript" src="script.js"></script>
    </div>
</body>
</html>