<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title>Metronic | Login Page - 1</title>
    <meta name="description" content="Latest updates and statistic charts">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link href="assets/css/bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" />

</head>
<!-- end::Head -->


<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >



<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">


    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--singin" id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
            <div class="m-stack m-stack--hor m-stack--desktop">
                <div class="m-stack__item m-stack__item--fluid">

                    <div class="m-login__wrapper">

                        <div class="m-login__logo">
                            <a href="#">
                                <img src="assets/img/logo-2.png">
                            </a>
                        </div>

                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Login</h3>
                            </div>

                            <form class="m-login__form m-form" action="" onsubmit="return submitform()">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="number" placeholder="Id Cliente" name="clienteid" id="clienteid">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Segredo" name="segredo" id="segredo">
                                </div>
                                <div class="row m-login__form-sub">
                                    <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--focus">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right">
                                        <!--<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>-->
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(assets/img/bg-4.jpg)">
            <div class="m-grid__item m-grid__item--middle">
                <h3 class="m-login__welcome">Join Our Community</h3>
                <p class="m-login__msg">
                </p>
            </div>
        </div>
    </div>


</div>
<!-- end:: Page -->


<!--begin::Base Scripts -->
<script src="assets/js/bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src="assets/js/login.js" type="text/javascript"></script>
<!--end::Page Snippets -->
<script type="text/javascript">
    var urlApi = "http://swesat.local/oauth/access_token";
    if($.cookie('token')){
       window.location.href = "/inicio.php";
    }else{
        function submitform(){
            var id= $("#clienteid").val();
            var secret= $("#segredo").val();
            var error = false;
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            if(!id){
                toastr.error("Preencha o id do cliente");
            }
            if(!secret){
                toastr.error("Preencha o segredo");
            }

            $.ajax({
                url         : urlApi,
                data        : {"client_id":id,"grant_type":"client_credentials","client_secret":secret},
                method      : 'POST',
                success: function (data) {
                    if(!data.access_token){
                        toastr.error("Cliente ID ou segredo não encontrado");
                        return;
                    }else{
                        var date = new Date();
                        var expires_in = data.expires_in;
                        date.setTime(date.getTime() + ( expires_in* 1000));
                        $.cookie("token", data.access_token, { expires: date, path: '/' });
                        window.location.href = "/inicio.php";
                    }
                    console.log(data);
                },error:function(){
                    toastr.error("Error ao requisitar o token");
                }
            });

            return false;
        }
    }


</script>



</body>
<!-- end::Body -->
</html>