@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/doc.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" />
    <style>
        .swal2-title{
            font-size:1.275em !important;
        }
        .swal2-html-container{
            font-size:0.9125em !important;

        }
    </style>
@endpush

@section('med_title', 'Documents')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')


        <div class="tabs mt-3">
            <button class="filter-btn active" data-type="All">All</button>
            <button class="filter-btn" data-type="Document">Document</button>
            <button class="filter-btn" data-type="Images">Images</button>
            <button class="filter-btn" data-type="Voiceover">Voiceover</button>
        </div>

        <div class="table-container">
            <table id="document-table" class="custom-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Document Type</th>
                    <th class="sm-show">Date</th>
                    <th class="md-show ">Actions</th>
                </tr>
                </thead>
                <tbody id="table-body">
                <tr data-type="Document">
                    <td>Document 1</td>
                    <td class="outline">
                        <div class='badge ai-content'>
                            Document
                        </div>
                    </td>
                    <td class="sm-show">8/2/19</td>
                    <td class="md-show ">
                        <i onclick="confirmDelete()" class="fa-solid fa-trash" style='font-size:18px;cursor:pointer'></i>
                    </td>
                </tr>
                <tr data-type="Document">
                    <td>Document 1</td>
                    <td class="outline">
                        <div class='badge presentation'>
                            Document
                        </div>
                    </td>
                    <td class="sm-show">8/2/19</td>
                    <td class="md-show">
                        <i onclick="confirmDelete()" class="fa-solid fa-trash" style='font-size:18px;cursor:pointer'></i>
                    </td>
                </tr>
                <tr data-type="Document">
                    <td>Document 1</td>
                    <td class="outline">
                        <div class='badge doc' >
                            Document
                        </div>
                    </td>
                    <td class="sm-show">8/2/19</td>
                    <td class="md-show ">
                        <i onclick="confirmDelete()" class="fa-solid fa-trash" style='font-size:18px;cursor:pointer'></i>
                    </td>
{{--                    <td class="md-none">--}}
{{--                        <div class="dropdown-container2">--}}
{{--                            <button id="dropdown-btn" class="dropdown-btn">--}}
{{--                       <span>--}}
{{--                        <i class="fa-solid fa-ellipsis-vertical" style='font-size:20px;'></i>--}}
{{--                       </span>--}}
{{--                            </button>--}}
{{--                            <ul id="dropdown-menu" class="dropdown-menu-table">--}}
{{--                                <li><a href="#">Open </a></li>--}}
{{--                                <li><a href="#">Delete </a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </td>--}}
                </tr>

                </tbody>
            </table>
            <div id="pagination" class="pagination">
                <button id="prev-btn" class="pagination-btn" disabled>&larr;</button>
                <span id="page-info">Page 1 of 1</span>
                <button id="next-btn" class="pagination-btn">&rarr;</button>
            </div>

        </div>
    </div>

@endsection


@push('scripts')
    <script src='{{ asset('assets/js/dashboard/documents.js') }}'></script>
    <script src='{{ asset('assets/sweetalert/sweetalert2.all.min.js') }}'></script>
    <script>
        function confirmDelete() {
            {{--Swal.fire('{{ __('Item Added to Favorites') }}', '{{ __('Selected item has been successfully added to favorites') }}', 'success');--}}
            Swal.fire({
                title: `{{ __('Are You Sure') }}`,
                text: `{{ __("It will be deleted permanently.") }}`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#6a5aff",
                // confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                // cancelButtonColor: "#f46a6a",
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",

            })
        }

        {{--function confirmDelete(Id, url) {--}}
        {{--    Swal.fire({--}}
        {{--        title: `هل انت متأكد ؟`,--}}
        {{--        text: "لن تتمكن من التراجع عن هذا!",--}}
        {{--        icon: "warning",--}}
        {{--        showCancelButton: true,--}}
        {{--        confirmButtonColor: "#34c38f",--}}
        {{--        cancelButtonColor: "#f46a6a",--}}
        {{--        cancelButtonText: "الغاء",--}}
        {{--        confirmButtonText: "حذف",--}}
        {{--    }).then(function(result) {--}}
        {{--        if (result.isConfirmed) {--}}
        {{--            // If the user confirmed deletion, send an AJAX request to delete the user record--}}
        {{--            $.ajax({--}}
        {{--                type: "POST",--}}
        {{--                url: url.replace("0", Id),--}}
        {{--                data: {--}}
        {{--                    id: Id,--}}
        {{--                    csrfmiddlewaretoken: "{{ csrf_token }}"--}}
        {{--                },--}}
        {{--                success: function(response) {--}}
        {{--                    // Upon successful deletion, show success message and reload the page--}}
        {{--                    Swal.fire("تم الحذف!", "تم حذف القيمة بنجاح", "success").then(function() {--}}
        {{--                        location.reload();--}}
        {{--                    });--}}
        {{--                },--}}
        {{--                error: function(xhr, errmsg, err) {--}}
        {{--                    // If deletion fails, show error message--}}
        {{--                    Swal.fire("Error!", "An error occurred while deleting the user.", "error");--}}
        {{--                }--}}
        {{--            });--}}
        {{--        }--}}
        {{--    });--}}
        {{--}--}}
    </script>
@endpush
