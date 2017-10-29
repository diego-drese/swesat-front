<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        Metronic | State Colors
    </title>
    <meta name="description" content="State colors">
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
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="assets/css/bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->
    <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="inicio.php" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/img/logo-2.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
					 ">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">

                                <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<i class="flaticon-grid-menu"></i>
												</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <!-- BEGIN: Aside Menu -->
            <?php include_once ('menu.php');?>
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content" id="div-dashboard">
                <div class="row">
                    <div class="col-xl-12">
                        <!--begin::Portlet-->
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                        <h3 class="m-portlet__head-text">
                                            Dasboard
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Section-->
                                <div class="m-section">

                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
            </div>

            <?php include_once ('html-contato.php');?>
            <?php include_once ('html-mensagem.php');?>
            <?php include_once ('html-grupo.php');?>
            <?php include_once ('html-telefone.php');?>

        </div>
    </div>
    <!-- end:: Body -->
    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
				<span class="m-footer__copyright">
					2017 &copy; Metronic theme by
					<a href="#" class="m-link">
						Keenthemes
					</a>
				</span>
                </div>

            </div>
        </div>
    </footer>
    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<!--begin::Base Scripts -->
<script src="assets/js/bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<script type="text/javascript">
    setTimeout(function(){
        if(!$.cookie('token')){
            console.log("Cookie expirado");
            window.location.href= "/";
        }
    }, 1000);
    var urlApi  = "http://swesat.local";
    var language = {
        "lengthMenu": "Mostrando _MENU_ registros por pagina",
        "zeroRecords": "Nenhum dado encontrado",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoEmpty": "Registros nao disponiveis",
        "infoFiltered": "(Filtrado de _MAX_ registros totais)",
        "loadingRecords": "Carregando...",
        "processing":     "Processando...",
        "search":         "Buscar:",
        "paginate": {
            "first":      "Primeiro",
            "last":       "Ultimo",
            "next":       "Proximo",
            "previous":   "Anterior"
        },
    };
    $("li .m-menu__item").click(function(){
        $("li .m-menu__item").removeClass("m-menu__item--active")
        $(this).addClass("m-menu__item--active");
        var id = this.id;
        $(".m-content").hide();
        $("#div-"+id).fadeIn();

    });


    $("#contato-add").click(function(){
        $("#contato-id").val("");
        $("#contato-nome").val("");
        $("#contato-sobre_nome").val("");
        $("#contato-ddd").val("");
        $("#contato-numero").val("");
        $("#contato-email").val("");
        $("#contato-data_nascimento").val("");
        $('#m_contato').modal('show');
    });

    var tableContato = $('#table-contato').DataTable( {
        "ajax": urlApi+"/contato?access_token="+$.cookie('token'),
        "serverSide": true,
        "language": language,
        "columns": [
            { "data": "id" },
            { "data": "nome" },
            { "data": "sobre_nome" },
            { "data": "telefone" },
            { "data": "email" },
            { "data": "data_nascimento" },
            { "data": "ativo" },
            { "data": "id", "render": function ( data, type, row ) {
                return '<td><a class="edit" href="javascript:" onclick="contatoEdit('+row.id+')"> Edit </a></td>';
                }
            },
        ],
        "preDrawCallback": function () {
            $('.dataTables_length').css('float', 'left');
            $('.dataTables_filter').css('float', 'right');

        },
    });

    var contatoEdit = function(id){
        $.ajax({
            url: urlApi+'/contato/'+id,
            type: 'get',
            dataType: 'json',
            data:{'access_token': $.cookie('token')},
            success: function (json) {
                var data = json.data;
                $("#contato-id").val(id);
                $("#contato-nome").val(data.nome);
                $("#contato-sobre_nome").val(data.sobre_nome);
                $("#contato-ddd").val(data.ddd);
                $("#contato-numero").val(data.telefone);
                $("#contato-email").val(data.email);
                $("#contato-data_nascimento").val(data.data_nascimento);
                $('#m_contato').modal('show');
            }
        });

    };

    $("#save-contato").click(function(){
        var obj              = {};
        obj.access_token     = $.cookie('token');
        obj.id               = $("#contato-id").val();
        obj.nome             = $("#contato-nome").val();
        obj.sobre_nome       = $("#contato-sobre_nome").val();
        obj.ddd              = $("#contato-ddd").val();
        obj.telefone         = $("#contato-numero").val();
        obj.email            = $("#contato-email").val();
        obj.data_nascimento  = $("#contato-data_nascimento").val();
        var urlContato       = urlApi+'/contato';
        var headers          = {};

        if(obj.id){
           urlContato      = urlApi+'/contato/'+obj.id;
        }

        $.ajax({
            url: urlContato,
            type: "POST",
            data: obj,
            dataType: 'json',
            success: function (json) {
                tableContato.draw();
                $('#m_contato').modal('hide');
            }
        });
    });


    $("#mensagem-add").click(function(){
        $("#mensagem-id").val("");
        $("#mensagem-nome").val("");
        $("#mensagem-texto").val("");
        $('#m_mensagem').modal('show');
    });
    var tableMensagem = $('#table-mensagem').DataTable( {
        "ajax": urlApi+"/mensagem?access_token="+$.cookie('token'),
        "serverSide": true,
        "language": language,
        "columns": [
            { "data": "id" },
            { "data": "nome" },
            { "data": "texto" },
            { "data": "ativo" },
            { "data": "id", "render": function ( data, type, row ) {
                return '<td><a class="edit" href="javascript:" onclick="mensagemEdit('+row.id+')"> Edit </a></td>';
                }
            },
        ],
        "preDrawCallback": function () {
            $('.dataTables_length').css('float', 'left');
            $('.dataTables_filter').css('float', 'right');
        },
    });

    var mensagemEdit = function(id){
        $.ajax({
            url: urlApi+'/mensagem/'+id,
            type: 'get',
            dataType: 'json',
            data:{'access_token': $.cookie('token')},
            success: function (json) {
                var data = json.data;
                $("#mensagem-id").val(id);
                $("#mensagem-nome").val(data.nome);
                $("#mensagem-texto").val(data.texto);
                $('#m_mensagem').modal('show');
            }
        });

    };

    $("#save-mensagem").click(function(){
        var obj             = {};
        obj.access_token    = $.cookie('token');
        obj.id              = $("#mensagem-id").val();
        obj.nome            = $("#mensagem-nome").val();
        obj.texto           = $("#mensagem-texto").val();

        var urlMensagem       = urlApi+'/mensagem';
        if(obj.id){
            urlMensagem      = urlApi+'/mensagem/'+obj.id;
        }

        $.ajax({
            url: urlMensagem,
            type: "POST",
            data: obj,
            dataType: 'json',
            success: function (json) {
                tableMensagem.draw();
                $('#m_mensagem').modal('hide');
            }
        });
    });



    $("#grupo-add").click(function(){
        $("#grupo-id").val("");
        $("#mensagem-nome").val("");
        $('#m_grupo').modal('show');
    });

    var tableGrupo = $('#table-grupo').DataTable({
        "ajax": urlApi+"/grupo?access_token="+$.cookie('token'),
        "serverSide": true,
        "language": language,
        "columns": [
            { "data": "id" },
            { "data": "nome" },
            { "data": "ativo" },
            { "data": "id", "render": function ( data, type, row ) {
                return '<td><a class="edit" href="javascript:" onclick="grupoEdit('+row.id+')"> Edit </a></td>';
                }
            },
        ],
        "preDrawCallback": function () {
            $('.dataTables_length').css('float', 'left');
            $('.dataTables_filter').css('float', 'right');
        },
    });

    var grupoEdit = function(id){
        $.ajax({
            url: urlApi+'/grupo/'+id,
            type: 'get',
            dataType: 'json',
            data:{'access_token': $.cookie('token')},
            success: function (json) {
                var data = json.data;
                $("#grupo-id").val(id);
                $("#grupo-nome").val(data.nome);
                $('#m_grupo').modal('show');
            }
        });

    };

    $("#save-grupo").click(function(){
        var obj             = {};
        obj.access_token    = $.cookie('token');
        obj.id              = $("#grupo-id").val();
        obj.nome            = $("#grupo-nome").val();

        var urlMensagem       = urlApi+'/grupo';
        if(obj.id){
            urlMensagem      = urlApi+'/grupo/'+obj.id;
        }

        $.ajax({
            url: urlMensagem,
            type: "POST",
            data: obj,
            dataType: 'json',
            success: function (json) {
                tableGrupo.draw();
                $('#m_grupo').modal('hide');
            }
        });
    });


    $("#telefone-add").click(function(){
        $("#telefone-id").val("");
        $("#telefone-numero").val("");
        $("#telefone-token-div").hide();
        $('#m_telefone').modal('show');
    });

    var tableTelefone =  $('#table-telefone').DataTable({
        "ajax": urlApi+"/telefone?access_token="+$.cookie('token'),
        "serverSide": true,
        "language": language,
        "columns": [
            { "data": "id" },
            { "data": "numero" },
            { "data": "token" },
            { "data": "id", "render": function ( data, type, row ) {
                return '<td><a class="edit" href="javascript:" onclick="telefoneEdit('+row.id+')"> Edit </a></td>';
            }
            },
        ],
        "preDrawCallback": function () {
            $('.dataTables_length').css('float', 'left');
            $('.dataTables_filter').css('float', 'right');
        },
    });

    var telefoneEdit = function(id){
        $.ajax({
            url: urlApi+'/telefone/'+id,
            type: 'get',
            dataType: 'json',
            data:{'access_token': $.cookie('token')},
            success: function (json) {
                var data = json.data;
                $("#telefone-id").val(id);
                $("#telefone-numero").val(data.numero);
                $("#telefone-token").val(data.token);
                $("#telefone-token-div").show();
                $('#m_telefone').modal('show');
            }
        });

    };

    $("#save-telefone").click(function(){
        var obj             = {};
        obj.access_token    = $.cookie('token');
        obj.id              = $("#telefone-id").val();
        obj.numero          = $("#telefone-numero").val();
        var urlTelefone     = urlApi+'/telefone';

        if(obj.id){
            urlTelefone      = urlApi+'/telefone/'+obj.id;
            obj.token        = $("#telefone-token").val();
        }

        $.ajax({
            url: urlTelefone,
            type: "POST",
            data: obj,
            dataType: 'json',
            success: function (json) {
                tableTelefone.draw();
                $('#m_telefone').modal('hide');
            }
        });
    });



</script>
</body>
<!-- end::Body -->
</html>
