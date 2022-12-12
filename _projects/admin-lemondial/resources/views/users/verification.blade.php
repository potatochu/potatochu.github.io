@extends('layout')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xxl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Request List</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Job Seekers profile verification requests</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold text-muted">
                                <th class="min-w-200px">User</th>
                                <th class="min-w-150px">Email</th>
                                <th class="min-w-150px">Status</th>
                                <th class="min-w-150px">Created</th>
                                <th class="min-w-100px text-end">Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($profiles as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ $item->user->users_photo != '' ? url(env('PHOTO_PATH').'/'.$item->user->users_photo) : url('assets/media/avatars/blank.png')}}"/>
                                        </div>
                                        {{-- <div class="d-flex justify-content-start flex-column" onclick="openModal('{{url('user/view/'.$item->users_id)}}')"> --}}
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="{{url('user/view/'.$item->user->users_id)}}" class="text-dark fw-bold text-hover-primary fs-6">{{$item->user->users_full_name}}</a>
                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{$item->user->level->level_name}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold text-hover-primary d-block fs-6">{{$item->user->users_email}}</span>
                                    @isset($item->user->users_email_verified_date)
                                    <span class="text-muted fw-semibold text-muted d-block fs-7"><span class="badge badge-light-success me-2">verified</span>{{date("j M Y H:i:s",strtotime( $item->user->users_email_verified_date))}}</span>
                                    @else
                                    <span class="text-muted fw-semibold text-muted d-block fs-base"><span class="badge badge-light-danger">not verified</span>
                                    @endisset
                                </td>
                                <td>
                                    <span class="text-dark fw-bold text-hover-primary d-block fs-6">{{$item->status->users_verified_status_name}}</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold text-hover-primary d-block fs-6">{{$item->users_profile_verify_created_date}}</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end flex-shrink-0">
                                        <a href="{{url('user/view/'.$item->users_profile_verify_id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="View Profile">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<div class="modal fade" tabindex="-1" id="myModal">
    <div class="modal-dialog modal-xl modal-fullscreen-xl-down">
        <div class="modal-content min-h-600px">
            <div class="modal-header">
                <h5 class="modal-title">Users Details</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M6.7 19.4L5.3 18C4.9 17.6 4.9 17 5.3 16.6L16.6 5.3C17 4.9 17.6 4.9 18 5.3L19.4 6.7C19.8 7.1 19.8 7.7 19.4 8.1L8.1 19.4C7.8 19.8 7.1 19.8 6.7 19.4Z" fill="black"/>
                    <path d="M19.5 18L18.1 19.4C17.7 19.8 17.1 19.8 16.7 19.4L5.40001 8.1C5.00001 7.7 5.00001 7.1 5.40001 6.7L6.80001 5.3C7.20001 4.9 7.80001 4.9 8.20001 5.3L19.5 16.6C19.9 16.9 19.9 17.6 19.5 18Z" fill="black"/>
                    </svg></span>
                </div>
            </div>

            <div class="modal-body p-0" id="modal-body">
                <iframe id="iframe-view" width="100%" height="100%" class="min-h-500px" frameborder="0"></iframe>
            </div>

            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

@endsection

@section('additional-js')
<script>
var target = document.querySelector("#modal-body");
var blockUI = new KTBlockUI(target, {
    message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
});
blockUI.block();
$('#iframe-view').on('load', function() {
    blockUI.release();
});
var src = $(".openBtn").attr('data-src');
window.closeModal = function(){
    $('#myModal').hide();
}
function openModal(src){
    $('#iframe-view').attr("src",src);
    var modal = new bootstrap.Modal('#myModal')
    modal.show();
    $('#myModal').on('hide.bs.modal', function () {
        $('#iframe-view').attr("src","");
        // blockUI.block();
    });
};
</script>
@endsection
