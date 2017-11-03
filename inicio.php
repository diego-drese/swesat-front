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
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" meDia="all" />
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
                                            Ultimos Agendamentos
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Section-->
                                <div class="m-section" style="height: 400px">
                                    <div id="chartdiv" style=" width: 100%;  height: 400px;"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
            </div>

            <?php include_once ('html-agendamento.php');?>
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
<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>


<!--end::Base Scripts -->
<script type="text/javascript">
    setInterval(function(){
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

    $("#agendamento-add").click(function(){
        $("#agendamento-id-id").val("");
        $("#agendamento-data_disparo").val("");
        $("#agendamento-data_fim").val("");
        $("#agendamento-tipo").val("UNICO");
        $("#agendamento-grupo_id").html('');
        $("#agendamento-contato_id").html('');
        $("#agendamento-mensagem_id").html('');
        $("#agendamento-obs").val("");
        $('#m_agendamento').modal('show');
    });

    var tableAgendamento =  $('#table-agendamento').DataTable({
        "ajax": urlApi+"/agendamento?access_token="+$.cookie('token'),
        "serverSide": true,
        "language": language,
        "columns": [
            { "data": "id" },
            { "data": "data_disparo" },
            { "data": "data_fim" },
            { "data": "tipo" },
            { "data": "contato_nome", "render": function ( data, type, row ) {
                    if(row['tipo']=="UNICO"){
                        return '<td>'+data+'</td>';
                    }else{
                        return '<td></td>';
                    }
                }
            },

            { "data": "grupo_nome", "render": function ( data, type, row ) {
                    if(row['tipo']=="GRUPO"){
                        return '<td>'+data+'</td>';
                    }else{
                        return '<td></td>';
                    }
                }
            },
            { "data": "total_agendamento" },
            { "data": "total_disparo" },
            { "data": "status_disparo" },
            { "data": "obs" },
            { "data": "id", "render": function ( data, type, row ) {
                    if(row['status_disparo']=="AGUARDANDO"){
                        return '<td><a class="edit" href="javascript:" onclick="agendamentoEdit(' + row.id + ')"> Edit </a></td>';
                    }else{
                        return '<td></td>';
                    }
                }
            },
        ],
        "preDrawCallback": function () {
            $('.dataTables_length').css('float', 'left');
            $('.dataTables_filter').css('float', 'right');
        },
    });
    var agendamentoEdit = function(id){
        $.ajax({
            url: urlApi+'/agendamento/'+id,
            type: 'get',
            dataType: 'json',
            data:{'access_token': $.cookie('token')},
            success: function (json) {
                var data = json.data;
                $("#agendamento-id").val(id);

                $("#agendamento-data_disparo").val(data.data_disparo);
                $("#agendamento-data_fim").val(data.data_fim);
                $("#agendamento-tipo").val(data.tipo);
                if(data.grupo_id){
                    $("#agendamento-grupo_id").html('<option value="'+data.grupo_id+'">'+data.grupo_nome+'</option>');
                }
                if(data.contato_id){
                    $("#agendamento-contato_id").html('<option value="'+data.contato_id+'">'+data.contato_nome+'</option>');
                }

                $("#agendamento-mensagem_id").html('<option value="'+data.mensagem_id+'">'+data.mensagem_nome+'</option>');
                $("#agendamento-obs").val(data.obs);
                $('#m_agendamento').modal('show');
            }
        });

    };
    $("#save-agendamento").click(function(){
        var obj             = {};
        obj.access_token    = $.cookie('token');
        obj.id              = $("#agendamento-id").val();
        obj.data_disparo    = $("#agendamento-data_disparo").val();
        obj.data_fim        = $("#agendamento-data_fim").val();
        obj.tipo            = $("#agendamento-tipo").val();
        obj.mensagem_id     = $("#agendamento-mensagem_id").val();
        obj.grupo_id        = $("#agendamento-grupo_id").val();
        obj.contato_id      = $("#agendamento-contato_id").val();
        obj.obs             = $("#agendamento-obs").val();
        var urlAgendamento     = urlApi+'/agendamento';

        if(obj.id){
            urlAgendamento   = urlApi+'/agendamento/'+obj.id;
        }

        $.ajax({
            url: urlAgendamento,
            type: "POST",
            data: obj,
            dataType: 'json',
            success: function (json) {
                tableAgendamento.draw();
                $('#m_agendamento').modal('hide');
            }
        });
    });
    $("#agendamento-tipo").change(function(){
        if(this.value=="UNICO"){
            $("#select-contato").show();
            $("#select-grupo").hide();
        }else{
            $("#select-contato").hide()
            $("#select-grupo").show()
        }
    });
    $("#agendamento-tipo").trigger('change');

    $('#agendamento-contato_id').select2({
        placeholder: 'Selecione',
        //minimumInputLength: 3,
        ajax: {
            url: urlApi+'/contato',
            dataType: 'json',
            data: function (term) {
                console.log(term.term);
                return {
                    nome: term.term,
                    access_token : $.cookie('token')
                };
            },
            delay: 250,
            processResults: function (result) {
                console.log(result);
                var newData = [];
                var data    = result.data;
                for(var i=0; i<data.length;i++){
                    newData.push({id:data[i].id, text:data[i].nome})
                }

                return {
                    results: newData
                };
            },
        }
    });

    $('#agendamento-grupo_id').select2({
        placeholder: 'Selecione',
        //minimumInputLength: 3,
        ajax: {
            url: urlApi+'/grupo',
            dataType: 'json',
            data: function (term) {
                console.log(term.term);
                return {
                    nome: term.term,
                    access_token : $.cookie('token')
                };
            },
            delay: 250,
            processResults: function (result) {
                console.log(result);
                var newData = [];
                var data    = result.data;
                for(var i=0; i<data.length;i++){
                    newData.push({id:data[i].id, text:data[i].nome})
                }

                return {
                    results: newData
                };
            },
        }
    });
    $('#agendamento-mensagem_id').select2({
        placeholder: 'Selecione',
        //minimumInputLength: 2,
        ajax: {
            url: urlApi+'/mensagem',
            dataType: 'json',
            data: function (term) {
                console.log(term.term);
                return {
                    nome: term.term,
                    access_token : $.cookie('token')
                };
            },
            delay: 250,
            processResults: function (result) {
                console.log(result);
                var newData = [];
                var data    = result.data;
                for(var i=0; i<data.length;i++){
                    newData.push({id:data[i].id, text:data[i].nome})
                }
                return {
                    results: newData
                };
            },
        }
    });

    $('#agendamento-data_disparo').datetimepicker({
        todayHighlight: true,
        autoclose: true,
        format: 'yyyy-mm-dd hh:ii'
    });

    $('#agendamento-data_fim').datetimepicker({
        todayHighlight: true,
        autoclose: true,
        format: 'yyyy-mm-dd hh:ii'
    });

    $.ajax({
        url: urlApi+'/ultimos-disparos',
        type: "GET",
        data: {access_token : $.cookie('token')},
        dataType: 'json',
        success: function (json) {
            var dataProvider = json.data;
            var chart = AmCharts.makeChart("chartdiv", {
                "theme": "light",
                "type": "serial",
                "dataProvider": dataProvider,
                "valueAxes": [{
                    "stackType": "3d",
                    "unit": "",
                    "position": "left",
                    "title": "GDP growth rate",
                }],
                "startDuration": 1,
                "graphs": [{
                    "balloonText": " DIA [[category]] (Aguardando): <b>[[value]]</b>",
                    "fillAlphas": 0.9,
                    "lineAlpha": 0.2,
                    "title": "Aguardando",
                    "type": "column",
                    "valueField": "Aguardando"
                }, {
                    "balloonText": "DIA [[category]] (Solicitado): <b>[[value]]</b>",
                    "fillAlphas": 0.9,
                    "lineAlpha": 0.2,
                    "title": "Solicitado",
                    "type": "column",
                    "valueField": "Solicitado"
                },{
                    "balloonText": "DIA [[category]] (Enviado): <b>[[value]]</b>",
                    "fillAlphas": 0.9,
                    "lineAlpha": 0.2,
                    "title": "Enviado",
                    "type": "column",
                    "valueField": "Enviado"
                }],
                "plotAreaFillAlphas": 0.1,
                "depth3D": 60,
                "angle": 30,
                "categoryField": "Dia",
                "categoryAxis": {
                    "gridPosition": "start"
                },
                "export": {
                    "enabled": true
                }
            });
            jQuery('.chart-input').off().on('input change',function() {
                var property	= jQuery(this).data('property');
                var target		= chart;
                chart.startDuration = 0;

                if ( property == 'topRadius') {
                    target = chart.graphs[0];
                    if ( this.value == 0 ) {
                        this.value = undefined;
                    }
                }

                target[property] = this.value;
                chart.validateNow();
            });
        }
    });


</script>
</body>
<!-- end::Body -->
</html>
