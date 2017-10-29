<div class="m-content" id="div-telefone" style="display: none">
    <div class="row">
        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                Telefones
                            </h3>
                        </div>
                    </div>
                    <a href="#" id="telefone-add" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only"
                       style="float: right;margin-top: 24px;">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="modal fade" id="m_telefone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Telefone
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												×
											</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <input type="hidden" id="telefone-id">
                                        <div class="form-group m-form__group row">
                                            <label for="telefone-numero" class="col-2 col-form-label">
                                                Numero:
                                            </label>
                                            <input type="text" class="col-10 col-form-label" id="telefone-numero">
                                        </div>
                                        <div class="form-group m-form__group row" id="telefone-token-div">
                                            <label for="telefone-numero" class="col-2 col-form-label">
                                                Token:
                                            </label>
                                            <input type="text" class="col-10 col-form-label" id="telefone-token">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Fechar
                                    </button>
                                    <button type="button" class="btn btn-primary" id="save-telefone">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <table class="table table-sm m-table m-table--head-bg-brand" id="table-telefone" style="width: 100%">
                            <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Telefone</th>
                                <th>Token</th>
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