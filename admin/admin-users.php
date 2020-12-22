<?php require_once('admin-header.php'); ?>

    <!--Edit users data modal-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تعديل بيانات المستخدم</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-left: -.5em;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr class="w-50 mt-0">
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row form-register" method="post"
                              style="direction: rtl; text-align: right">
                            <div class="col-6">
                                <label class="col-12">الاسم بالكامل
                                    <input type="text" class="form-control mb-3" id="editName" name="editName"
                                           required="required" data-error="برجاء كتابة الاسم الثلاثي بالكامل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">النوع
                                    <select class="input form-control mb-3" style="cursor: pointer" required
                                            id="editGender" name="editGender">
                                        <option value="" disabled selected hidden></option>
                                        <option value="male">ذكر</option>
                                        <option value="female">أنثى</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تاريخ الميلاد
                                    <input type="date" class="form-control mb-3" id="editBirth" name="editBirth"
                                           required="required" data-error="برجاء كتابة تاريخ الميلاد">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الحالة الاجتماعية
                                    <select class="input form-control mb-3" aria-required="true" style="cursor: pointer"
                                            required id="editStatus" name="editStatus">
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
                                    <input type="email" class="form-control mb-3" id="editEmail" name="editEmail"
                                           required="required" data-error="برجاء كتابة الايميل">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد الايميل
                                    <input type="email" class="form-control mb-3" id="editConfirmEmail"
                                           name="editConfirmEmail"
                                           required="required" data-error="برجاء كتابة الايميل مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">كلمة السر
                                    <input type="password" class="form-control mb-3" id="editPassword"
                                           name="editPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">تأكيد كلمة السر
                                    <input type="password" class="form-control mb-3" id="editConfirmPassword"
                                           name="editConfirmPassword"
                                           required="required" data-error="برجاء كتابة كلمة السر مرة أخرى">
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الدولة
                                    <select class="input form-control mb-3 country" aria-required="true" style="cursor: pointer"
                                            required id="editCountry" name="editCountry"></select>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="col-12">الموبايل
                                    <input type="text" class="form-control mb-3" id="editPhone"
                                           name="editPhone"
                                           required="required" data-error="برجاء كتابة الموبايل">
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">التعديـــل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div id="main" style="direction: rtl; text-align: right">

    <!--Users-->
    <section id="users" class="admin-section">
        <div class="container">

            <div class="section-title">
                <h2>المستخدمون</h2>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped w-100">
                        <thead>
                        <tr class="text-center" style="color: #303030; font-family: NotoKufiArabic; font-weight: 700">
                            <th class="bg-light" scope="col">#</th>
                            <th class="bg-light" scope="col" style="width: 30%">الاسم</th>
                            <th class="bg-light" scope="col"  style="width: 7%">السن</th>
                            <th class="bg-light" scope="col" style="width: 8%">النوع</th>
                            <th class="bg-light" scope="col" style="width: 12%">الدولة</th>
                            <th class="bg-light" scope="col" style="width: 12%">الحالة الاجتماعية</th>
                            <th class="bg-light" scope="col">الموبايل</th>
                            <th class="bg-light" scope="col" style="width: 25%">لوحة التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">1</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>مصر</td>
                            <td>أعزب</td>
                            <td>+201011836243</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">2</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>مصر</td>
                            <td>متزوج</td>
                            <td>+201011836243</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">3</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>مصر</td>
                            <td>مطلق</td>
                            <td>+201011836243</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">4</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>مصر</td>
                            <td>أعزب</td>
                            <td>+201011836243</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">5</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>مصر</td>
                            <td>أرمل</td>
                            <td>+201011836243</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">6</th>
                            <td>يوسف ايمن</td>
                            <td>23</td>
                            <td>ذكر</td>
                            <td>مصر</td>
                            <td>مخطوب</td>
                            <td>+201011836243</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#editModal">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" class="btn btn-primary float-left pl-5 pr-5 mt-3 ml-4" data-toggle="modal"
                    data-target="#signupModal">إضافة مستخدم
            </button>
        </div>
    </section>

</div>

<?php require_once('admin-footer.php'); ?>
