<!DOCTYPE html>
<html lang="en" class="gr__kyungdong_uz"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#223C78">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#223C78">
    <!-- iOS Safari -->
    <link rel="shortcut icon" href="http://kyungdong.uz/vendor/site/img/kyungdong.png" type="image/x-icon">
    <meta name="apple-mobile-web-app-status-bar-style" content="#223C78">
    <link rel="stylesheet" href="./libs/all.min.css">
    <link rel="stylesheet" href="./libs/main.min.css">

    <title>KYUNGDONG UNIVERSITY</title>
</head>
<?php
    include ("Db.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ielts = $_POST['IELTS'];
        $topik = $_POST['TOPIK'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $program = $_POST['dastur'];
        $question = $_POST['comment'];
        $data = "'".$name."','".$phone."',".$ielts.",".$topik.",'".$program."','".$question."'";
        $sql = "INSERT INTO survey(fio,phone,ielts_score,topik_score,program,question) VALUES ($data)";
        if($conn->query($sql) === TRUE){
            echo "New record created successfully";
        }else{
            echo "Error".$sql."<br>".$conn->error;
        }

        $conn->close();

    }

?>
<body data-gr-c-s-loaded="true">
<header>
    <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
        <div class="container">
            <a class="navbar-brand" href="http://kyungdong.uz/#">
                <img src="./libs/kyungdong-university.png" alt="Brand Logo">
            </a>
            <div class="justify-content-md-end">
                <ul class="navbar-nav navbar-mobile mr-0">
                    <li class="nav-item">
                        <a class="nav-link" href="tel:71 200 55 58">
                            <i class="far fa-phone-alt"></i> 71 200 55 58
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>
<main style="background-image: linear-gradient(90deg,rgba(34,60,120,.4),rgba(34,60,120,.4)),url(/vendor/site/img/bg_wrap.jpg);">
    <div class="container mt-5">
        <h1 id="title">KYUNGDONG UNIVERSITY</h1>
        <h3 id="description2">Boost up your future with student mobility!</h3>
        <h3 id="description1">Talabalarni ro'yxatga olish formasiga xush kelibsiz!</h3>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="survey-form">
            <input type="hidden" name="_token" value="Vkycqn93XOpJI6wJhf1qtz3YIkMXqw7mpP22bc79">            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Ism, familiyangizni kiriting*" required="">
            </div>

            <div class="form-group">
                <div class="input-group bg-transparent">
                    <div class="input-group-prepend">
                        <span class="input-group-text">+998</span>
                    </div>
                    <input class="form-control bg-transparent text-white" id="phone-input" maxlength="9" type="tel" placeholder="Telefon raqami" name="phone" required="">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group bg-transparent">
                    <div class="input-group-prepend">
                        <span class="input-group-text">IELTS balingiz</span>
                    </div>
                    <select name="IELTS" class="form-control bg-transparent">
                        <option value="no certificate" selected="">Sertifikat yo'q</option>
                        <option value="5.5">5.5</option>
                        <option value="6.0">6.0</option>
                        <option value="6.5">6.5</option>
                        <option value="7.0">7.0</option>
                        <option value="7.5">7.5</option>
                        <option value="8.0">8.0</option>
                        <option value="8.5">8.5</option>
                        <option value="9.0">9.0</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group bg-transparent">
                    <div class="input-group-prepend">
                        <span class="input-group-text">TOPIK balingiz</span>
                    </div>
                        <select name="TOPIK" class="form-control bg-transparent">
                        <option value="no certificate" selected="">Sertifikat yo'q</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group bg-transparent">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Dastur</span>
                    </div>
                    <select name="dastur" required="" class="form-control bg-transparent">
                        <option value="language course" selected="">Til kurslari</option>
                        <option value="bachelor">Bakalavr</option>
                        <option value="master">Magistratura</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <p>Savollaringiz bormi?</p>
                <textarea name="comment" id="comment" cols="30" rows="5" placeholder="Ixtiyoriy"></textarea>
            </div>

            <div class="d-flex justify-content-end">

<!--                <button type="submit" id="submit" class="text-center text-white">Jo'natish</button>-->
                <input type="submit" value="Qoshish">
            </div>

            <div>
                <p class="text-white mt-3">
                    <strong>Eslatma:</strong> To'lovlar faqatgina talaba bo'lgandan so'ng to'lanadi
                    <!--<strong>Izoh: </strong> To'lovlar faqat talabalikka qabul qilingandan so’ng to'lanadi-->
                </p>
            </div>
        </form>
    </div>
</main>

<footer>
    <div class="container d-flex justify-content-between align-items-center flex-md-row flex-column">
        <p class="text-white text-center">
            Manzil:
            <a target="_blank" href="https://yandex.uz/maps/-/CGX36Hpq">
                Discovery International Education &amp; Travel Group
            </a>
        </p>

        <div class="social-links">
            <div class="text-white">
                <a target="_blank" class="ml-3" href="https://t.me/DiscoveryEducation">
                    <i class="fab fa-telegram-plane"></i>
                </a>
                <a target="_blank" class="ml-3" href="https://facebook.com/discoverygroup.uz">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a target="_blank" class="ml-3" href="https://instagram.com/discoverygroup.uz">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Button to Open the Modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
</button> -->

<!-- The Modal -->
<div class="modal fade" id="successModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header d-flex justify-content-center position-relative">
                <h4 class="modal-title">Rahmat!</h4>
                <button style="right: 10px" type="button" class="close position-absolute" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
                <h5>Sizning so'rovingiz qabul qilindi</h5>
                <p>Tez orada siz bilan bog'lanamiz</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
            </div>

        </div>
    </div>
</div>

<script src="./libs/main.min.js"></script>




</body></html>