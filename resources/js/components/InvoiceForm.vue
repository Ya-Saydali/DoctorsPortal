<template>
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-3">معلومات المريض</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">رقم الهويه</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">اسم المريض</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">الادويه</h4>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">البحث عن الدواء</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" id="drug" placeholder="ادخل اسم او رمز الدواء" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">كيفيه الاستخدام</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <div id="newRow"></div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <button id="addRow" type="button" class="btn btn-info">دواء جديد</button>
                        <br>
                    </div>
                </div>
                <hr class="mb-4">
                <a href="invoice" class="btn btn-primary btn-lg btn-block" type="submit">إنشاء الوصفه الطبيه</a>
            </form>
        </div>
    </div>

</template>
