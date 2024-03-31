@extends('layouts.app')

@section('title')
    All Branches
@endsection

@section('link')
    <link href="{{ URL::asset('css/sweetalert.css') }}" rel="stylesheet">
    <style>
        .float-right {
            float: right !important;
        }

        .custom-button {
            background-color: #2d8caf;
            font-size: 14px;
            margin-right: 5px;
        }

        /* Change button color on hover */
        .custom-button:hover {
            background-color: #27acd1;
        }
    </style>
@endsection

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div id="page-head">
            <!--Page Title-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Branch</h1>
            </div>
            <!--End page title-->
            <!--Breadcrumb-->
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="{{ route('dashboard') }}"> Dashboard</a>
                </li>
                <li class="active">System Users</li>
            </ol>
            <!--End breadcrumb-->
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <!-- Basic Data Tables -->
            <!--===================================================-->
            <div class="panel" style="overflow:scroll; background-color: #fff;">
                <div class="panel-heading">
                    <h3 class="panel-title">List of All Branches</h3>
                </div>
                <div class="panel-body">
                    <form id="users-form" onsubmit="return false;">
                        <table id="users-table" class="table table-bordered" cellpadding="10" cellspacing="2"
                            width="100%">
                            <thead>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <select id="action" name="action">
                            <option>with selected</option>
                            <option value="delete">delete</option>
                        </select>
                        <input class="btn-danger" id="apply" type="button" value="apply">
                    </form>
                </div>
            </div>
            <!--===================================================-->
            {{-- Begin Pop Up User Edit Form --}}
            <!-- Add this modal markup at the end of your HTML body -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Branch Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm">
                                <input type="hidden" name="id">

                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">
                                        <!-- Branch Name -->
                                        <div class="form-group">
                                            <label for="branchname">Branch Name</label>
                                            <input type="text" class="form-control" id="branchname" name="branchname"
                                                placeholder="Enter branch name" required>
                                        </div>

                                        <!-- Address -->
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter address" required></textarea>
                                        </div>

                                        <!-- Branch Code -->
                                        <div class="form-group">
                                            <label for="branchcode">Branch Code</label>
                                            <input type="text" class="form-control" id="branchcode" name="branchcode"
                                                placeholder="Enter branch code" required>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter email" required>
                                        </div>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                        <!-- Branch Role -->
                                        <div class="form-group">
                                            <label for="isadmin">Branch Role</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="isadmin"
                                                    id="headquartersRadio" value="true" required>
                                                <label class="form-check-label" for="headquartersRadio">HeadQuaters</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="isadmin"
                                                    id="branchChurchRadio" value="false">
                                                <label class="form-check-label" for="branchChurchRadio">Branch
                                                    Church</label>
                                            </div>
                                        </div>

                                        <!-- State -->
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" name="state"
                                                placeholder="Enter branch state" required>
                                        </div>

                                        <!-- City -->
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Enter branch city" required>
                                        </div>

                                        <!-- Country -->
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control" id="country" name="country" required>
                                                <!-- Populate options dynamically via JavaScript -->
                                            </select>
                                        </div>

                                        <!-- Currency -->
                                        <div class="form-group">
                                            <label for="currency">Currency</label>
                                            <select class="form-control" id="currency" name="currency">
                                                <!-- Populate options dynamically via JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" form="editForm" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


            {{-- End Pop Up User Edit Form --}}
            <!--===================================================-->
            <!-- End Striped Table -->

            <!-- Add this modal markup at the end of your HTML body -->

        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
@endsection

@section('js')
    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ URL::asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.semanticui.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.semanticui.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('js/functions.js') }}"></script>
    <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
    <script>
        function strim(text) {
            return text.trim()
        }
        var currencies;
        (function() {
            $.ajax({
                    url: "{{ route('option.currencies') }}"
                })
                .done((res) => {
                    currencies = res
                })
        })()
        var countries;
        (function() {
            $.ajax({
                    url: "{{ route('option.countries') }}"
                })
                .done((res) => {
                    countries = res
                })
        })()
        $(document).ready(function() {
            var i = 1
            users_table = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                "columnDefs": [{
                    "orderable": false,
                    "targets": 0
                }],
                oLanguage: {
                    sProcessing: divLoader()
                },
                ajax: "{{ route('branches') }}",
                columns: [{
                        title: '<input id="select-all" type="checkbox" /> Select all',
                        data: 'id',
                        render: (id) => (`<input type="checkbox" name="branch[]" value="${id}" />`),
                        name: 'id'
                    },
                    {
                        title: "S/N",
                        render: () => (i++),
                        name: 'id'
                    },
                    {
                        title: "Branch Name",
                        data: 'branchname',
                        name: 'branchname'
                    },
                    {
                        title: "Address",
                        data: 'address',
                        name: 'address'
                    },
                    {
                        title: "Branch Code",
                        data: 'branchcode',
                        name: 'branchcode',
                        render: (code) => (`
            <div class="btn-group">
              <h5 style="background-color:#a5cf5d; padding:5pt;" class="text-center">${code}</h5>
            </div>
            `)
                    },
                    // { title: "phone Number", data: 'phone', name: 'phone' },
                    {
                        title: "Email",
                        data: 'email',
                        name: 'email'
                    },
                    {
                        title: "Branch Role",
                        data: 'isadmin',
                        name: 'isadmin',
                        render: (bool) => (`
            ${(bool === 'true') ? '<strong>HeadQuaters</strong>' : 'Branch Church'}
            `)
                    },
                    {
                        title: "State",
                        data: 'state',
                        name: 'state'
                    },
                    {
                        title: "City",
                        data: 'city',
                        name: 'city'
                    },
                    {
                        title: "Country",
                        data: 'country',
                        name: 'country',
                        render: (data) => (`
            ${data}
            <input type="hidden" value="${data}" id="countryId" />
            `)
                    },
                    {
                        title: "Currency",
                        data: 'currency',
                        name: 'currency',
                        render: (data) => (`
            ${data}
            <input type="hidden" value="${data}" id="currencyId" />
            `)
                    },
                    {
                        title: "Action",
                        data: 'id',
                        name: 'action',
                        render: (id) => (`
        <div class="btn-group" style="display: flex;">
            <button style="background-color:#2d8caf; font-size: 14px; margin-right: 5px;" class="btn text-light edit" data-id="${id}">
                <i class="fa fa-edit"></i>
            </button>
            <a href="#" id="./branches/${id}/destroy" onclick="del(this);" class="btn btn-danger" style="font-size: 14px;">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    `)
                    },
                ],
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']

            });
            $('.dataTables_filter').addClass('float-right');
            $('.dt-buttons button').addClass('custom-button');

            // members edit table row

            $('#users-table').on('click', 'tbody tr td .edit', function(e) {
                let id = $(this).attr('data-id');
                let modal = $('#editModal');

                // Populate modal form fields with values from table cells
                modal.find('input[name="id"]').val(id);
                let i = 0;
                $(this).parent().closest('tr').find('td').each(function() {
                    let value = $(this).text().trim();
                    if (i === 2) {
                        modal.find('input[name="branchname"]').val(value);
                    } else if (i === 3) {
                        modal.find('textarea[name="address"]').val(value);
                    } else if (i === 4) {
                        modal.find('input[name="branchcode"]').val(value);
                    } else if (i === 5) {
                        modal.find('input[name="email"]').val(value);
                    } else if (i === 6) {
                        modal.find('input[name="isadmin"]').prop('checked', value ===
                            'HeadQuaters');
                    } else if (i === 7) {
                        modal.find('input[name="state"]').val(value);
                    } else if (i === 8) {
                        modal.find('input[name="city"]').val(value);
                    } else if (i === 9) {
                        populateCountries(modal.find('select[name="country"]'), value);
                    } else if (i === 10) {
                        populateCurrencies(modal.find('select[name="currency"]'), value);
                    }
                    i++;
                });

                // Show the modal
                modal.modal('show');
            });

            // Function to populate country options
            function populateCountries(select, selectedCountry) {
                // Assuming you have a variable 'countries' containing the country data
                countries.forEach(function(country) {
                    let option = $('<option></option>').attr('value', country.name).text(country.name);
                    if (country.name === selectedCountry) {
                        option.attr('selected', true);
                    }
                    select.append(option);
                });
            }

            // Function to populate currency options
            function populateCurrencies(select, selectedCurrency) {
                // Assuming you have a variable 'currencies' containing the currency data
                currencies.forEach(function(currency) {
                    let option = $('<option></option>').attr('value', currency.currency_symbol).text(
                        currency.name + ' - ' + currency.currency_symbol);
                    if (currency.currency_symbol === selectedCurrency) {
                        option.attr('selected', true);
                    }
                    select.append(option);
                });
            }

            // Cancel editing
            $('#editModal').on('click', '.restore', function() {
                $('#editModal').modal('hide');
            });

            // Handle form submission (Save changes)
            $('#users-table').on('click', 'tbody tr td .save', function(e) {
                $('#editForm').submit(function(e) {
                    e.preventDefault();
                    var formData = $(this).serializeArray();

                    // Define the URL for the AJAX request using Laravel route helper
                    var url = "{{ route('branch.update') }}";

                    // Make an AJAX POST request
                    $.ajax({
                            type: "POST",
                            url: url,
                            data: formData,
                            dataType: "json",
                            encode: true
                        })
                        .done(function(res) {
                            // Reload the users_table
                            users_table.ajax.reload(null, false);
                            console.log(res);
                        });
                    // Retrieve data from modal form
                    let id = $(this).find('input[name="id"]').val();

                    // Update table row with edited values
                    let row = $('#users-table').find('tr[data-id="' + id + '"]');
                    row.find('td:nth-child(3)').text($(this).find('input[name="branchname"]')
                        .val());
                    row.find('td:nth-child(4)').text($(this).find('textarea[name="address"]')
                        .val());
                    row.find('td:nth-child(5)').text($(this).find('input[name="branchcode"]')
                        .val());
                    row.find('td:nth-child(6)').text($(this).find('input[name="email"]').val());
                    let isAdmin = $(this).find('input[name="isadmin"]:checked').val() === 'true' ?
                        'HeadQuaters' : 'Branch Church';
                    row.find('td:nth-child(7)').text(isAdmin);
                    row.find('td:nth-child(8)').text($(this).find('input[name="state"]').val());
                    row.find('td:nth-child(9)').text($(this).find('input[name="city"]').val());
                    row.find('td:nth-child(10)').text($(this).find('select[name="country"]').val());
                    row.find('td:nth-child(11)').text($(this).find('select[name="currency"]')
                        .val());

                    // Hide the modal
                    $('#editModal').modal('hide');
                });
            });

            // End members edit table row

            //for save user
            // $('#users-table').on( 'click', 'tbody tr td .save', function (e) {
            // $('#editForm').on('submit', function(e) {
            //     e.preventDefault()
            //     data = {}
            //     data = $(this).serializeArray()
            //     url = "{{ route('branch.update') }}"
            //     poster({
            //         url,
            //         data
            //     }, (res) => {
            //         users_table.ajax.reload(null, false);
            //         console.log(res);
            //     })
            // })

            // //for cancel user edit
            $('#users-table').on('click', 'tbody tr td .restore', function(e) {
                users_table.ajax.reload(null, false)
            })
            //for bulk delete
            $('#select-all').click(function() {
                if (this.checked) {
                    $('input[name=branch\\[\\]]').each(function() {
                        this.checked = true;
                    });
                } else {
                    $('input[name=branch\\[\\]]').each(function() {
                        this.checked = false;
                    });
                }
            });

            $('#apply').click(function() {
                loadElement($('#apply'), true)
                var example = $('input[name=branch\\[\\]]').map(function() {
                    if ($(this).is(':checked')) {
                        return this.value;
                    }
                }).get();
                if (example.length == 0) {
                    return;
                }
                if ($('#action').find(":selected[value=delete]").length == 0) {
                    loadElement($('#apply'), false);
                    return;
                }
                let confirmed = confirm('Are you sure you want to delete selected item(s)?');
                if (confirmed) {
                    var values = {
                        'id': example,
                        '_token': '{{ csrf_token() }}'
                    };
                    $.ajax({
                            type: "POST",
                            url: "{{ route('branch.delete.multi') }}",
                            data: values,
                            dataType: "json",
                            encode: true
                        })
                        .done(function(response) {
                            // if(response.status){
                            swal('Success', response.text, 'success')
                            // }else{
                            //   swal('Oops', 'Error Occured', 'error');
                            // }
                            users_table.ajax.reload(null, false)
                        });
                }
                loadElement($('#apply'), false)
            });

        });

        function del(d) {
            var confirmed = confirm('confirm to delete');
            console.log(confirmed);
            console.log(d);
            if (confirmed) {
                var id = $(d).attr('id');
                console.log(id);
                $.ajax({
                    url: id,
                }).done(function() {
                    location.reload();
                });
            } //{{ route('branch.destroy', ' + id + ') }}
        }
    </script>
@endsection

{{-- the form pops up alright but before it pops i receive the sweet alert saying Oops
Internal Server Error --}}

