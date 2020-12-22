<?php
require_once('../php/initialize.php');
require_once('../php/specializes.php');
require_once('admin-header.php');
$specializes = get_all();
?>

    <!--Add specialize modal-->
    <div class="modal fade" id="Specialize" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">إضافة تخصص</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="<?php echo at_root() . 'php/add_specialize.php' ?>" method="post"
                              enctype="multipart/form-data" class="row form-register"
                              style="direction: rtl; text-align: right">
                            <div class="col-6">
                                <label class="col-12">اسم التخصص باللغة العربية
                                    <input type="text" class="form-control mb-3" id="specializeTitle" name="name_ar"
                                           required="required" data-error="برجاء كتابة اسم التخصص بالعربية"
                                           style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">اسم التخصص باللغة الانجليزية
                                    <input type="text" class="form-control mb-3" id="specializeTitle" name="name_en"
                                           required="required" data-error="برجاء كتابة اسم التخصص بالانجليزية"
                                           style="font-family: 'Times New Roman'; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control pb-5 col-12 mb-4" type="text" name="description_ar"
                                          placeholder="اكتب وصف للتخصص هنا باللغة العربية" required="required"
                                          data-error="الوصف بالعربية مطلوب"
                                          style="font-family: DroidArabicNaskh"></textarea>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control pb-5 col-12 mb-4" type="text" name="description_en"
                                          placeholder="اكتب وصف للتخصص هنا باللغة الانجليزية" required="required"
                                          data-error="الوصف بالإنجليزية مطلوب"
                                          style="font-family: 'Times New Roman'"></textarea>
                            </div>
                            <div class="col-5 btn btn-success mb-4"
                                 style="position: relative; overflow: hidden; right: 15px; font-size: 15px; padding: 14px 0 14px 0;">
                                اخــتــر صـــورة
                                <input type="file" name="image">
                            </div>
                            <div class="col-12">
                                <label class="col-12">الكلام الذي سيظهر عندما لا تظهر الصورة
                                    <input type="text" class="form-control mb-3" name="image_alt"
                                           required="required" data-error="برجاء كتابة الكلام الذي سيظهر مكان الصورة"
                                           style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">اسم لكتب التخصص باللغة العربية
                                    <input type="text" class="form-control mb-3" id="booksTitle" name="book_ar"
                                           required="required" data-error="برجاء كتابة اسم لكتب التخصص بالعربية"
                                           style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">اسم لكتب التخصص باللغة الانجليزية
                                    <input type="text" class="form-control mb-3" id="booksTitle" name="book_en"
                                           required="required" data-error="برجاء كتابة اسم لكتب التخصص بالانجليزية"
                                           style="font-family: 'Times New Roman'; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">الرابط (Hyperlink) الخاص بالكتب
                                    <input type="text" class="form-control mb-3" id="booksTitle" name="book_link"
                                           required="required" data-error="برجاء كتابة الرابط (Hyperlink)"
                                           style="font-family: Arial; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">إضــافــة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Edit  specialize modal-->
<?php foreach ($specializes as $specialize): ?>
    <div class="modal fade" id="Specialize<?php echo $specialize['id'] ?>" tabindex="-1" role="dialog"
         aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تعديل تخصص</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-25 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="<?php echo at_root() . 'php/update_specialize.php' ?>" method="post"
                              enctype="multipart/form-data" class="row form-register"
                              style="direction: rtl; text-align: right">
                            <input type="hidden" name="id" value="<?php echo $specialize['id'] ?>">
                            <div class="col-6">
                                <label class="col-12">اسم التخصص باللغة العربية
                                    <input value="<?php echo $specialize['name_ar'] ?>" type="text"
                                           class="form-control mb-3" id="specializeTitle" name="name_ar"
                                           required="required" data-error="برجاء كتابة اسم التخصص بالعربية"
                                           style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">اسم التخصص باللغة الانجليزية
                                    <input value="<?php echo $specialize['name_en'] ?>" type="text"
                                           class="form-control mb-3" id="specializeTitle" name="name_en"
                                           required="required" data-error="برجاء كتابة اسم التخصص بالانجليزية"
                                           style="font-family: 'Times New Roman'; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control pb-5 col-12 mb-4" type="text" name="description_ar"
                                          placeholder="اكتب وصف للتخصص هنا باللغة الانجليزية" required="required"
                                          data-error="الوصف بالعربية مطلوب"
                                          style="font-family: DroidArabicNaskh"><?php echo $specialize['description_ar'] ?></textarea>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control pb-5 col-12 mb-4" type="text" name="description_en"
                                          placeholder="اكتب وصف للتخصص هنا باللغة الانجليزية" required="required"
                                          data-error="الوصف بالانجليزية مطلوب"
                                          style="font-family: 'Times New Roman'"><?php echo $specialize['description_en'] ?></textarea>
                            </div>
                            <div class="col-5 btn btn-success mb-4"
                                 style="position: relative; overflow: hidden; right: 15px; font-size: 15px; padding: 14px 0 14px 0;">
                                اخــتــر صـــورة
                                <input type="file" name="image">
                                <img class="img-fluid" src="<?php echo at_public() . $specialize['card_image'] ?>">
                            </div>
                            <div class="col-12">
                                <label class="col-12">الكلام الذي سيظهر عندما لا تظهر الصورة
                                    <input value="<?php echo $specialize['alt_image'] ?>" type="text"
                                           class="form-control mb-3" name="image_alt"
                                           required="required" data-error="برجاء كتابة الكلام الذي سيظهر مكان الصورة"
                                           style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">اسم لكتب التخصص باللغة العربية
                                    <input value="<?php echo $specialize['books_name_ar'] ?>" type="text"
                                           class="form-control mb-3" id="booksTitle" name="book_ar"
                                           required="required" data-error="برجاء كتابة اسم لكتب التخصص بالعربية"
                                           style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">اسم لكتب التخصص باللغة الانجليزية
                                    <input value="<?php echo $specialize['books_name_en'] ?>" type="text"
                                           class="form-control mb-3" id="booksTitle" name="book_en"
                                           required="required" data-error="برجاء كتابة اسم لكتب التخصص بالانجليزية"
                                           style="font-family: 'Times New Roman'; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">الرابط (Hyperlink) الخاص بالكتب
                                    <input value="<?php echo $specialize['books_link'] ?>" type="text"
                                           class="form-control mb-3" id="booksTitle" name="book_link"
                                           required="required" data-error="برجاء كتابة الرابط (Hyperlink)"
                                           style="font-family: Arial; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">تعديـــل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>


    <div id="main" style="direction: rtl; text-align: right">

        <!--Specializes-->
        <section id="specializes" class="admin-section">
            <div class="container">

                <div class="section-title">
                    <h2>التــخــصصــات</h2>
                </div>

                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped w-100">
                            <thead>
                            <tr class="text-center"
                                style="color: #303030; font-family: NotoKufiArabic; font-weight: 700">
                                <th class="bg-light" scope="col" style="width: 4%">#</th>
                                <th class="bg-light" scope="col" style="width: 10%">اسم التخصص</th>
                                <th class="bg-light" scope="col" style="width: 23%">الوصف</th>
                                <th class="bg-light" scope="col" style="width: 14%">الصورة</th>
                                <th class="bg-light" scope="col" style="width: 16%">اسم لكتب التخصص</th>
                                <th class="bg-light" scope="col" style="width: 20%">لوحة التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;
                            foreach ($specializes as $specialize): ?>
                                <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                                    <th scope="row"><?php echo ++$i; ?></th>
                                    <td><?php echo $specialize['name_ar'] ?></td>
                                    <td><?php echo $specialize['description_ar'] ?></td>
                                    <td><img src="<?php echo at_public() . $specialize['card_image'] ?>"
                                             alt="<?php echo $specialize['alt_image'] ?>" class="img-fluid"></td>
                                    <td>
                                        <a href="<?php echo $specialize['books_link'] ?>" target="_blank"
                                           class="books_link">
                                            <?php echo $specialize['books_name_ar'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                            <div class="col-6">
                                                <button type="button" class="button btn btn-info" data-toggle="modal"
                                                        data-target="#Specialize<?php echo $specialize['id'] ?>">تعديل
                                                </button>
                                            </div>
                                            <div class="col-6">
                                                <a href="<?php echo at_root() . 'php/delete_specialize.php?id=' . $specialize['id'] ?>"
                                                   type="button" class="button btn btn-danger">حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="button" class="btn btn-primary float-left pl-5 pr-5 mt-3 ml-4" data-toggle="modal"
                        data-target="#Specialize">إضافــــة تخــصص
                </button>
            </div>
        </section>

    </div>

<?php require_once('admin-footer.php'); ?>