<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Municipios {{$estado->nombre}}</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Municipios de {{$estado->nombre}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{URL('/')}}" class="btn btn-info mt-1">REGRESAR</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 border border-primary table-responsive">
                <table style="width: 100%" class="table table-bordered" id="tablaMunicipios">
                    <thead>
                        <tr>
                            <th>
                                Municipio
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($municipios as $municipio)
                            <tr>
                                <td>
                                    {{$municipio}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    Sin datos
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link
        href="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/fc-4.2.2/fh-3.3.2/r-2.4.1/sc-2.1.1/datatables.min.css"
        rel="stylesheet" />
    <!-- jQuery UI CSS (opcional, solo si necesitas los estilos predeterminados) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.css">
    <style>
        ul.ui-autocomplete {
            z-index: 1100 !important;
        }

        .ui-autocomplete {
            max-height: 400px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
        }

        /* IE 6 doesn't support max-height
                                                               * we use height instead, but this forces the menu to always be this tall
                                                               */
        * html .ui-autocomplete {
            height: 100px;
        }

        .pac-container {
            z-index: 10000 !important;
        }
    </style>



    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/fc-4.2.2/fh-3.3.2/r-2.4.1/sc-2.1.1/datatables.min.js">
    </script>

    <!-- jQuery UI Autocomplete -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="{{ asset('js/estados/estado_municipios.js') }}?v={{ time() }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.js"></script>


</body>

</html>
