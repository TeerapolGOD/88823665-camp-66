@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{ url('/register')}}"onsubmit = "return allcheck(event)" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name"  oninput="checkName()"/>
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">กรุณากรอกข้อมูล ชื่อ-สกุล</div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" oninput="checkEmail()"/>
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">email ต้องมี @ และ .</div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" oninput="checkPassword()"/>
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">ต้องมี ตัวเลข ตัวอักษรภาษาอังกฤษพิมพ์เล็ก ตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ </div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>

        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href="login.html" class="text-center"> I already have a membership </a>
        </p>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
  @endsection

  @section('scripts')
<script>

function checkName() {
    let name = $('#name').val().trim();
    if (name !== "" && name.length>=3) {
        $('#name').removeClass('is-invalid').addClass('is-valid');
        return true;
    } else {
        $('#name').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
  }
    function checkEmail() {
    let email = $('#email').val();
    let emailcorrect = /^[a-zA-Z0-9+-_%.]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]{2,}$/;
    if (emailcorrect.test(email)) {
          $('#email').removeClass('is-invalid').addClass('is-valid');
          return true;
    } else {
        $('#email').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
  }
    function checkPassword() {
    let passwordcorrect = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])[a-zA-Z0-9+-_%.]{8,}$/;
    let password = $('#pass').val();
    if (passwordcorrect.test(password)) {
        $('#pass').removeClass('is-invalid').addClass('is-valid');
        return true;
    } else {
        $('#pass').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
  }
    function allcheck(event){
      event.preventDefault();
      let checkbox = document.getElementById("flexCheckDefault").checked;
     let confirm =  checkName() &&checkEmail() &&checkPassword() && checkbox ;
     let nametitle = confirm ? "Success" : "Error",
         nametext = !checkName()?"please input name ":!checkEmail()?"please input email ":!checkPassword()?"please input password ":confirm ? "thank you for register" : "Please accept the terms and conditions before proceeding",
         typeicon = confirm ? "success" : "error";
      swal.fire({
        title:nametitle,
        text : nametext,
        icon:typeicon
      })
     if(confirm){
      event.target.submit();
     }
    }

</script>
@endsection
