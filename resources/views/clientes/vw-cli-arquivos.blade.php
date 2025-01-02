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
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Cliente Arquivos </h4>
                        <a href="{{ url()->previous() }}"><button class="bttn-material-flat bttn-md bttn-danger"><i
                            class="ri-arrow-left-line"></i> </button></a>
                    </div>
                </div>
            </div>


            <div class="row box">
                <div class="col-md-12">
                    <div class="form-container">

                        <input type="text" id="search-emp-arquivo" class="search" placeholder="">
                        <table id="tabelaCliArquivo" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome do Arquivo</th>
                                    <th>arquivo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-container">

                        <div class="flex mt-2 justify-center h-screen">
                            <div id="id_pasta" data-target="{{ $id_pasta }}"></div>
                            <div id="id_cliente" data-target="{{ $id_cliente }}"></div>
                            <div id="upload_emp_arquivos"
                                style="display: grid;justify-content:center;grid-template-columns:30%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- END PAGE --}}
    </div>
    </div>
    <!-- end main content-->
    </div>

</x-app-layout>

@hasSection('page_cli_arquivos')
    @yield('page_cli_arquivos')
@endif