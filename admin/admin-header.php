<?php
	require_once('../php/initialize.php');
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>لوحة التحكم | فتاوى سؤال وجواب</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."css/bootstrap.min.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."css/admin-style.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."css/responsive.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."assets/fontawesome/css/all.min.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."assets/fontawesome/css/fontawesome.min.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."assets/fontawesome-free-5.0.1/css/fontawesome-all.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."assets/icofont/icofont.min.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."assets/boxicons/css/boxicons.min.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo at_public()."assets/aos/aos.css";?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo at_public()."css/images/favicon.ico";?>">
    <link rel="icon" type="image/x-icon" href="<?php echo at_public()."css/images/favicon.ico";?>">
</head>

<body>

<div class="super_container">

    <div class="top-header py-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-3 col-sm-7 text-lg-right text-md-right text-sm-right top-data">
                    <div class="language_header_item dropdown">
                    <span class="ml-1" style="font-size: 1.1rem; color: #979c97"><i
                                class="fas fa-globe-africa"></i></span>
                        <a class="dropdown-toggle" href="#" id="navbarDropdownMenu" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            اللــــــغــــة
                        </a>
                        <div class="dropdown-menu text-right" aria-labelledby="navbarDropdownMenu"
                             data-aos="fade-down" data-aos-duration=".2s" style="position: relative">
                            <a class="dropdown-item" href="#">العربية</a>
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </div>
                    &nbsp; &nbsp; <span class="line">|</span>
                    <ul class="list-inline d-inline top-social">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color instagram icon"
                                                             href="https://www.instagram.com/yewess97/" target="_blank">
                                <i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color linkedin icon"
                                                             href="https://www.linkedin.com/in/yewess97/"
                                                             target="_blank">
                                <i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color twitter icon"
                                                             href="https://twitter.com/yewess97" target="_blank">
                                <i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color facebook icon"
                                                             href="https://www.facebook.com/YousufAymooni"
                                                             target="_blank">
                                <i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-5 text-center date">
                    <p>الأربعاء 17 ربيع الآخر 1442 - 2 ديسمبر 2020</p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 text-lg-left text-md-left text-sm-left modals">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a
                                    class="p-sm-2 py-2 px-0 d-inline-block top-login" href="#"
                                    data-toggle="modal" data-target="#loginModal">تسجيل الدخول</a></li>
                        <span class="line2">|</span>
                        <li class="list-inline-item"><a
                                    class="p-sm-2 py-2 px-0 d-inline-block top-register" href="#"
                                    data-toggle="modal" data-target="#signupModal">التسجيل</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded navbar-toggleable-md col-12 first-nav"
         style="direction: rtl">
        <a class="navbar-brand col-lg-3 col-md-3 col-sm-3" href="<?php echo at_root()."index.php";?>"><img src="<?php echo at_public()."images/logo.png";?>" alt="logo_image" class="logo ml-5"></a>
        <div style="direction: rtl" class="col-lg-6 col-md-6 col-sm-8 nav-search">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control ml-3 mr-sm-2 nav-search-item" type="search"
                       placeholder="الــــــبــــــحــــــث عـــــــن ......">
                <button class="btn btn-primary btn-circle btn-md my-2 my-sm-0" type="submit">
                    <i class="fas fa-search fa-flip-horizontal"></i>
                </button>
            </form>
        </div>

        <!--Mobile nav toggle button-->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </nav>

    <!--Register users modal-->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">التسجيل (للمستخدمين)</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-50 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="<?php echo at_root() . "php/register.php"?>" class="row form-register" method="post"
                              style="direction: rtl; text-align: right">
                            <div class="col-6">
                                <label class="col-12">الاسم بالكامل
                                    <input type="text" class="form-control mb-3" id="signupName" name="signupName"
                                           required="required" data-error="برجاء كتابة الاسم الثلاثي بالكامل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">النوع
                                    <select class="input form-control mb-3" style="cursor: pointer" required
                                            id="signupGender" name="signupGender">
                                        <option value="" disabled selected hidden></option>
                                        <option value="male">ذكر</option>
                                        <option value="female">أنثى</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تاريخ الميلاد
                                    <input type="date" class="form-control mb-3" id="signupBirth" name="signupBirth"
                                           required="required" data-error="برجاء كتابة تاريخ الميلاد">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الحالة الاجتماعية
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer"
                                            required id="signupStatus" name="signupStatus">
                                        <option value="" disabled selected hidden></option>
                                        <option value="single">أعزب/عزباء</option>
                                        <option value="married">متزوج/متزوجة</option>
                                        <option value="engaged">مخطوب/مخطوبة</option>
                                        <option value="engaged">أرمل/أرملة</option>
                                        <option value="engaged">مطلّق/مطلّقة</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الايميل
                                    <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail"
                                           required="required" data-error="برجاء كتابة الايميل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد الايميل
                                    <input type="email" class="form-control mb-3" id="signupConfirmEmail"
                                           name="signupConfirmEmail"
                                           required="required" data-error="برجاء كتابة الايميل مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">كلمة السر
                                    <input type="password" class="form-control mb-3" id="signupPassword"
                                           name="signupPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد كلمة السر
                                    <input type="password" class="form-control mb-3" id="signupConfirmPassword"
                                           name="signupConfirmPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الدولة
                                    <select class="input form-control mb-4 country" aria-required="true" style="cursor: pointer"
                                            required id="signupCountry" name="signupCountry"></select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الموبايل
                                    <input type="text" class="form-control mb-3" id="signupPhone"
                                           name="signupPhone"
                                           required="required" data-error="برجاء كتابة الموبايل">
                                </label>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="col-12 checkbox">أوافق على الشروط والأحكام
                                    <input type="checkbox" id="signupRemember"
                                           name="signupRemember" required="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">التسجيل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Login modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تسجيل الدخول</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <form action="#" class="row form-register" method="post"
                          style="direction: rtl; text-align: right">
                        <div class="col-12">
                            <label class="col-12">الايميل
                                <input type="email" class="form-control mb-3" id="loginEmail" name="loginEmail"
                                       required="required" data-error="برجاء كتابة الايميل">
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="col-12">كلمة السر
                                <input type="password" class="form-control mb-4" id="loginPassword"
                                       name="loginPassword"
                                       required="required" data-error="برجاء كتابة كلمة السر">
                            </label>
                        </div>
                        <div class="col-2 mb-4">
                            <label class="col-12 checkbox">تـــذكـــرنــــي
                                <input type="checkbox" id="loginRemember"
                                       name="loginRemember">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<!--Header-->
<header id="header" style="direction: rtl; text-align: right">
    <div class="d-flex flex-column align-items-stretch">

        <div class="profile mt-5">
            <h1 class="text-light"><a href="admin.html">عبدالناصر محسن</a></h1>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="<?php echo at_root()."index.php"?>" target="_blank" style="color: #f3fa7c"><i class="bx bx-home" style="color: #daff00"></i>
                        <span>الصفحة الرئيسية</span></a></li>
                <li><a href="<?php echo at_root()."admin/admin.php#milestones";?>"><i class="bx bx-book-content"></i> <span>الإحصائيات</span></a></li>
                <li><a href="<?php echo at_root()."admin/admin-specialize.php";?>"><i class="bx bx-book-content"></i> <span>التخصصات</span></a></li>
                <li><a href="<?php echo at_root()."admin/admin-questions.php#questions";?>"><i class="bx bx-question-mark"></i> <span>الأسئلة</span></a></li>
                <li><a href="<?php echo at_root()."admin/admin-answers.php#answers";?>"><i class="bx bxs-book-reader"></i> <span>الأجوبة</span></a></li>
                <li><a href="<?php echo at_root()."admin/admin-user_admin.php#admins";?>"><i class="bx bx-user"></i> <span>الشيوخ</span></a></li>
                <li><a href="<?php echo at_root()."admin/admin-users.php#users";?>"><i class="bx bx-user"></i> <span>المستخدمون</span></a></li>
                <li class="language_menu_nav">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-world"></i> <span>اللغة</span>
                    </a>
                    <div class="dropdown-menu text-right menu-nav-language" aria-labelledby="navbarDropdownMenuLink"
                         data-aos="fade-down" data-aos-duration=".2s">
                        <a class="dropdown-item" href="#">العربية</a>
                        <a class="dropdown-item" href="#">English</a>
                    </div>
                </li>
                <li class="col-12 menu-nav-search">
                    <form class="form-inline my-2">
                        <input class="form-control ml-3 mr-sm-2 nav-search-item" type="search"
                               placeholder="الــــــبــــــحــــــث عـــــــن ......">
                        <button class="btn btn-primary btn-circle btn-md my-2 my-sm-0" type="submit">
                            <i class="fas fa-search fa-flip-horizontal"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>