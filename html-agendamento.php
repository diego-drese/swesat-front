<div class="m-content" id="div-agendamento" style="display: none">
    <div class="row">
        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                Agendamentos
                            </h3>
                        </div>
                    </div>
                    <a href="#" id="agendamento-add" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only"
                        style="float: right;margin-top: 24px;">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="modal fade" id="m_agendamento"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Agendamento
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												×
											</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <input type="hidden" id="agendamento-id">
                                        <div class="form-group m-form__group row">
                                            <label for="agendamento-data_disparo" class="col-2 col-form-label">
                                                Data de inicio:
                                            </label>
                                            <input type="text" class="col-4 col-form-label" id="agendamento-data_disparo">

                                            <label for="agendamento-data_fim" class="col-2 col-form-label">
                                                Data de fim:
                                            </label>
                                            <input type="text" class="col-4 col-form-label" id="agendamento-data_fim">
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="agendamento-tipo" class="col-2 col-form-label">
                                                Tipo:
                                            </label>
                                            <select class="col-10 col-form-label"  id="agendamento-tipo">
                                                <option value="UNICO">UNICO</option>
                                                <option value="GRUPO">GRUPO</option>
                                            </select>
                                        </div>

                                        <div id="select-contato" class="form-group m-form__group row" style="display: none">
                                            <label for="agendamento-contato_id" class="col-2 col-form-label">
                                                Contato:
                                            </label>
                                            <select class="col-10 col-form-label" id="agendamento-contato_id" style="width: 400px">
                                            </select>
                                        </div>

                                        <div  id="select-grupo" class="form-group m-form__group row" style="display: none">
                                            <label for="agendamento-grupo_id" class="col-2 col-form-label">
                                                Grupo:
                                            </label>
                                            <select class="col-10 col-form-label"  id="agendamento-grupo_id" style="width: 400px">
                                            </select>
                                        </div>


                                        <div class="form-group m-form__group row">
                                            <label for="agendamento-mensagem_id" class="col-2 col-form-label" >
                                                Mensagem:
                                            </label>
                                            <select class="col-10 col-form-label"  id="agendamento-mensagem_id" style="width: 400px">
                                            </select>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="agendamento-obs" class="col-2 col-form-label">
                                                Obs:
                                            </label>
                                            <textarea class="col-10 col-form-label" id="agendamento-obs"></textarea>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Fechar
                                    </button>
                                    <button type="button" class="btn btn-primary" id="save-agendamento">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section ">
                        <table class="table table-sm m-table m-table--head-bg-brand" id="table-agendamento" style="width: 100%">
                            <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Data Inicio</th>
                                <th>Data Fim</th>
                                <th>Tipo</th>
                                <th>Contato</th>
                                <th>Grupo</th>
                                <th>Total Agendado</th>
                                <th>Total Disparado</th>
                                <th>Status</th>
                                <th>Obs</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>