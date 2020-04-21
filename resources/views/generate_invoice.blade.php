<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>يا صيدلي</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500&display=swap');
      h1,h2,h3,h4,h5,body,p{
        font-family: 'Tajawal' !important;
      }
    </style>
  </head>

  <body id="app" class=>

    <div class="container text-right">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="logo.png" alt=""  height="120">
      </div>

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
    </div>      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; يا صيدلي</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 4 Autocomplete -->
    <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.4/dist/latest/bootstrap-autocomplete.min.js"></script>

    <script type="text/javascript">
      // add row
      $("#addRow").click(function () {
        var html = '';
        html += '<div class="row" id="inputFormRow"><div class="col-md-6 mb-3"> <label for="firstName">البحث عن الدواء</label> <div class="input-group"> <div class="input-group-append"> <span class="input-group-text"><i class="fas fa-search"></i></span> </div> <input type="text" class="form-control" id="drug" placeholder="ادخل اسم او رمز الدواء" required> <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div> </div> </div> <div class="col-md-6 mb-3"> <label for="lastName">كيفيه الاستخدام</label> <input type="text" class="form-control" id="lastName" placeholder="" value="" required> <div class="invalid-feedback"> Valid last name is required. </div> </div></div>';
        html += '<br/>';
        html += '<br/>';
        html += '<button id="removeRow" type="button" class="btn btn-danger">حذف</button>';
        html += '<br/>';
        html += '<br/>';
        html += '</div>';

        $('#newRow').append(html);
      });
      $('#drug').autoComplete({
        minLength : 1,
        resolverSettings: {
          url: 'drugs.json'
        }
      });
      // remove row
      $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
      });
    </script>
  </body>
</html>
