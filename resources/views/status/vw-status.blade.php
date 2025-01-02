<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="page-content">
        <div class="container-fluid">


            <!-- start page title -->
            <div class="row">
                <div class="col-8">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">STATUS</h4>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="bttn-material-flat bttn-sm bttn-success btn-w-100 mb-5 mt-2" data-bs-toggle="modal" data-bs-target="#ModalADDStatus">ADICIONAR</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">



                            <input type="text" id="search-input" class="search" placeholder="Pesquisar">
                            <table id="tabelaStatus" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="check-all_database" value="1">
                                        </th>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Posicao</th>
                                        <th>Cor</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



            {{-- @include('clientes.modals.modal-add-img') --}}



            {{-- END PAGE --}}
        </div>
    </div>
    <!-- end main content-->
    </div>


    @include('status.modals.modal-edit-status');
    @include('status.modals.modal-add-status');
</x-app-layout>


@hasSection('page_status')
    @yield('page_status')
@endif