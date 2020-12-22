<?php
require_once('php/initialize.php');
require_once('php/specializes.php');
require_once('header.php');
$specializes = get_all();
?>

    <!--Home-->
    <div class="home">

        <!--Hero Slider-->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!--Hero Slide 1-->
                <div class="hero_slide">
                    <img src="<?php echo at_public() . "images/carousel1.jpg"; ?>" alt="carousel_image"
                         class="hero_slide_background carousel1 img-fluid">
                    <div class="overlay" style="opacity: .1;"></div>
                </div>

                <!--Hero Slide 2-->
                <div class="hero_slide">
                    <img src="<?php echo at_public() . "images/carousel2.jpg"; ?>" alt="carousel_image"
                         class="hero_slide_background carousel2 img-fluid">
                    <div class="overlay"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="line-height: 2em">احصل على <span>إجابات</span>
                                لأسئلتك الآن!</h1>
                        </div>
                    </div>
                </div>

                <!--Hero Slide 3-->
                <div class="hero_slide">
                    <img src="<?php echo at_public() . "images/carousel3.jpg"; ?>" alt="carousel_image"
                         class="hero_slide_background carousel3 img-fluid">
                    <div class="overlay"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="width: 70%; line-height: 2em">فتاوى دينية صحيحة وموثوقة</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="hero_slider_right hero_slider_nav trans_200 rounded-circle"><span class="trans_200"><i
                            class="fas fa-chevron-right"></i></span></div>
            <div class="hero_slider_left hero_slider_nav trans_200 rounded-circle"><span class="trans_200"><i
                            class="fas fa-chevron-left"></i></span></div>
        </div>

    </div>

    <!--Hero boxes-->
    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <!--Hero box1-->
                    <div class="col-lg-4 hero_box_col" data-aos="fade-down" data-aos-duration="1500">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="<?php echo at_public() . "images/open-book.svg"; ?>" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title text-center">تعرّف على دينك بشكل صحيح</h2>
                            </div>
                        </div>
                    </div>

                    <!--Hero box2-->
                    <div class="col-lg-4 hero_box_col" data-aos="fade-down" data-aos-duration="2200">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="<?php echo at_public() . "images/chat.svg"; ?>" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">تعلّم كيف ترد على الشبهات</h2>
                            </div>
                        </div>
                    </div>

                    <!--Hero box3-->
                    <div class="col-lg-4 hero_box_col" data-aos="fade-down" data-aos-duration="3000">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="<?php echo at_public() . "images/life.svg"; ?>" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">كن مدركًا لمختلف آفاق الحياة</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Section cards-->
    <div class="popular page_section" style="direction: rtl">
        <div class="container">
            <div class="row fatwa_boxes">
                <?php $i = 0;
                foreach ($specializes as $specialize): ?>
                    <!--Fatwa card-->
                    <div class="col-lg-4 fatwa_box" data-aos="<?php $i++;
                    if ($i % 3 == 1) {
                        echo "fade-left";
                    } elseif ($i % 3 == 2) {
                        echo "zoom-in";
                    } elseif ($i % 3 == 0) {
                        echo "fade-right";
                    } ?>" data-aos-duration="1300">
                        <div class="card p-0 hover-shadow">
                            <a href="#"><img class="card-img-top"
                                             src="<?php echo at_public() . $specialize['card_image']; ?>"
                                             alt="<?php echo $specialize['alt_image'] ?>"></a>
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="card-info card-title"><?php echo $specialize['name_ar']; ?></h4>
                                </a>
                                <p class="card-text"><?php echo $specialize['description_ar']; ?></p>
                                <a href="#" class="btn btn-primary btn-sm">شاهد القسم</a>
                            </div>
                            <div class="books_box d-flex flex-row align-items-center">
                                <div class="fatwa_books_icon ml-2">
                                    <img src="public/images/books-stack-of-three.svg" alt="book_icon" class="img-fluid">
                                </div>
                                <a href="<?php echo $specialize['books_link']; ?>" target="_blank">
                                    <div class="fatwa_books_name"><?php echo $specialize['books_name_ar']; ?></div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>

        </div>
    </div>


    <!--Register & Search form-->
    <div class="register">
        <div class="container-fluid">
            <div class="row row-eq-height">

                <div class="col-lg-6 nopadding">

                    <!--Register-->
                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">بادر بالتسجيل الآن وتعرّف على مختلف الأسئلة والأجوبة
                                الإسلامية</h1>
                            <p class="register_text">موقع فتاوى يوفر اسئلة وأجوبة في مختلف أقسام الدين الإسلامي ليفتح لك
                                آفاقًا جديدة في التعلّم</p>
                            <div class="button_1 register_button mx-auto trans_200" data-toggle="modal"
                                 data-target="#signupModal"><a href="#">سجل</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 nopadding">

                    <!--Search-->
                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background"
                             style="background-image:url(<?php echo at_public() . "images/search_background.jpg"; ?>)"></div>
                        <div class="overlay" style="opacity: 0.15"></div>
                        <div class="search_content text-center">
                            <h1 class="search_title">ارسل لنــا سؤالك</h1>
                            <form id="search_form" class="search_form" action="" method="post">
                                <input id="search_form_title" class="search_form_title input_field" type="text"
                                       placeholder="موضــــوع الســــؤال"
                                       required="required" data-error="يرجى إدخال موضوع السؤال"
                                       style="font-family: DroidArabicNaskh">
                                <select id="search_form_category" class="search_form_category input_field" type="text"
                                        required="required" data-error="اختر قسم السؤال">
                                    <option value="section-fatwa" disabled selected hidden>اختر القسم</option>
                                    <option value="aqidah">العقيدة</option>
                                    <option value="tafseer">التفسير</option>
                                    <option value="hadith">الحديث الشريف</option>
                                    <option value="fiqh">الفقه</option>
                                    <option value="seerah">السيرة النبوية</option>
                                    <option value="tarbiyah">التربية الإسلامية</option>
                                </select>
                                <textarea id="search_form_question" class="search_form_question" type="text"
                                          placeholder="اكتب سؤالك هنا" required="required"
                                          data-error="البعض من السؤال مطلوب"
                                          style="font-family: DroidArabicNaskh"></textarea>
                                <button id="search_submit_button" type="submit" class="search_submit_button trans_200"
                                        value="Submit">ارسل
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

<?php require_once('footer.php'); ?>