@extends('layout')

@section('content')
<input type="hidden" id="id_user" value="{{$user->users_id}}">
<div class="row mt-sm-3">
    <div class="col-md-4 mb-5">
        <div class="card card-xxl-stretch mb-5">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">
                    <h3 class="text-gray-800">Identification</h3>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-120px symbol-fixed position-relative">
                            <img src="{{ $user->users_photo != '' ? url(env('PHOTO_PATH').'/'.$user->users_photo) : url('assets/media/avatars/blank.png')}}" alt="image" />
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$user->users_full_name}}</span>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-7 mb-4 pe-2">
                                    <span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                            <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                            <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{$user->level->level_name}}</span>
                                    <span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{isset($user->country_id) ? $user->country->country_name : '-'}}</span>
                                    <span class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{$user->users_email}}</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
            </div>
            <!--end::Body-->
        </div>
        <div class="card card-xxl-stretch mb-5">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">
                    <h3 class="text-gray-800">Profile Verification</h3>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <div class="row">
                    <span class="fw-semibold text-muted pb-4 d-block">User profile verification current progress: </span>
                    <!--begin::Left Section-->
                    <div class="d-flex align-self-center">
                        <div class="flex-grow-1 me-3">
                            <!--begin::Select-->
                            <select id="profile-status" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seller Annual Fee" data-hide-search="true">
                                @foreach ($verifyStatus as $item)
                                <option value="{{$item->users_verified_status_id}}" {{$profileVerify->users_verified_status_id == $item->users_verified_status_id ? 'selected':''}}>{{$item->users_verified_status_name}}</option>
                                @endforeach
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--begin::Action-->
                        <button type="button" id="profile-verify" class="btn btn-lg btn-primary btn-icon flex-shrink-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Update status">
                            <i class="fonticon-send fs-3"></i>
                        </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Left Section-->
                </div>
                {{-- <div class="separator separator-dashed my-5"></div> --}}
                <div class="row mt-5">
                    <span class="fw-semibold text-muted pb-4 d-block">Profile verification notes: </span>
                    <div class="d-flex">
                        <textarea rows="5" id="profile-notes" class="form-control form-control-lg form-control-solid" placeholder="Empty">{{$profileVerify->users_profile_verify_note}}</textarea>
                    </div>
                </div>
                <div class="separator separator-dashed mt-5"></div>
                <div class="row">
                    <!--begin::Item-->
                    <div class="mt-5">
                        <!--begin::Timeline-->
                        <div class="timeline ms-n1">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-4">
                                <!--begin::Timeline line-->
                                <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                <!--end::Timeline line-->
                                <!--begin::Timeline icon-->
                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-success">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
                                            <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Timeline icon-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    {{-- <span class="fs-8 fw-bolder text-success text-uppercase">Requested</span> --}}
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Requested</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-400">{{isset($profileVerify->users_profile_verify_request_date) ? date("j M Y H:i:s",strtotime($profileVerify->users_profile_verify_request_date)): '-'}}</span>
                                    <!--end::Title-->
                                </div>
                                <!--end::Timeline content-->
                            </div>
                            <!--end::Timeline item-->
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center">
                                <!--begin::Timeline line-->
                                <div class="timeline-line w-20px"></div>
                                <!--end::Timeline line-->
                                <!--begin::Timeline icon-->
                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
                                            <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Timeline icon-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    {{-- <span class="fs-8 fw-bolder text-info text-uppercase">Accepted</span> --}}
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Verified</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-400">{{isset($profileVerify->users_profile_verify_accept_date) ? date("j M Y H:i:s",strtotime($profileVerify->users_profile_verify_accept_date)): '-'}}</span>
                                    <!--end::Title-->
                                </div>
                                <!--end::Timeline content-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                    </div>
                    <!--end::Item-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <div class="card card-xxl-stretch mb-5">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">
                    <h3 class="text-gray-800">Resume</h3>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                -
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-md-8 mb-5">
        <div class="card card-xxl-stretch mb-5">

            <div class="card-header cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Profile Details</h3>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="#" onclick="history.back()" class="btn btn-sm btn-light align-self-center me-3">Back</a>
                    <a href="{{url('user/edit/'.$user->users_id)}}" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
                </div>
            </div>

            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$user->users_full_name}}</span>
                    </div>
                </div>
                <!--end::Row-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Email</label>
                    <div class="col-lg-8 d-flex align-items-center">
                        <span class="fw-bold fs-6 text-gray-800 me-2">{{$user->users_email}}</span>
                        @isset($user->users_email_verified_date)
                        <span class="badge badge-success">Verified</span>
                        @else
                        <span class="badge badge-danger">Not verified</span>
                        @endisset
                    </div>
                </div>
                @isset($user->users_email_verified_date)
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Email verification date</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$user->users_email_verified_date}}</span>
                    </div>
                </div>
                @endisset
                <!--end::Input group-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Contact Phone</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$user->users_phone_number ?? '-'}}</span>
                    </div>
                    {{-- <div class="col-lg-8 d-flex align-items-center">
                        <span class="fw-bold fs-6 text-gray-800 me-2">{{$user->users_phone_number}}</span>
                        <span class="badge badge-success">Verified</span>
                    </div> --}}
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Birthday</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{isset($user->users_birthday) ? date("j F Y",strtotime($user->users_birthday)): '-'}}</span>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Gender</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$user->users_gender ?? '-'}}</span>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Country</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{isset($user->country_id) ? $user->country->country_name : '-'}}</span>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">States</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{isset($user->states_id) ? $user->states->states_name : '-'}}</span>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">City</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{isset($user->city_id) ? $user->city->city_name : '-'}}</span>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <label class="col-lg-4 fw-semibold text-muted">Postal Code</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$user->users_postal_code ?? '-'}}</span>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-10">
                    <label class="col-lg-4 fw-semibold text-muted">Description</label>
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$user->users_description ?? '-'}}</span>
                    </div>
                </div>
                <!--end::Input group-->

                <!--begin::Notice-->
                {{-- <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-semibold">
                            <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                            <div class="fs-6 text-gray-700">Your payment was declined. To start using tools, please
                            <a class="fw-bold" href="/metronic8/demo4/../demo4/account/billing.html">Add Payment Method</a>.</div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div> --}}
                <!--end::Notice-->
            </div>
            <!--end::Card body-->
        </div>
        <div class="card card-xxl-stretch mb-5">
            <div class="card-header cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Education</h3>
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body p-9">
                -
            </div>
            <!--end::Card body-->
        </div>
        <div class="card card-xxl-stretch mb-5">
            <div class="card-header cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Skills</h3>
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body p-9">
                -
            </div>
            <!--end::Card body-->
        </div>
        <div class="card card-xxl-stretch mb-5">
            <div class="card-header cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Rating</h3>
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body p-9">
                -
            </div>
            <!--end::Card body-->
        </div>
    </div>
</div>
@endsection

@section('additional-js')
<script>
    $('#profile-verify').click(function(){
        Swal.fire({
            title: "Please Confirm",
            text:"Are you sure to update verification?",
            icon: "warning",
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: "Yes",
            cancelButtonText: 'Cancel',
            customClass: {
                confirmButton: "btn btn-danger",
                cancelButton: 'btn btn-light'
            }
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Please wait',
                html: 'Processing...',
                timer: 1000,
                showConfirmButton: false,
                timerProgressBar: true,
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    var id_user = $("#id_user").val();
                    $.post("{{url('user/profile-verify')}}/"+id_user,
                    {
                        _token: "{{ csrf_token() }}",
                        users_id: id_user,
                        users_verified_status_id: $("#profile-status").val(),
                        users_profile_verify_note: $("#profile-notes").val()
                    },
                    function(data, status){
                        if (status != 'success') {
                            alert("Error update!");
                        }
                        data = JSON.parse(data);
                        var icon_status = "success";
                        if (data.status == 'error') {
                            icon_status = "error";
                        }
                        Swal.fire({
                            icon: icon_status,
                            title: data.message,
                            html: 'Reloading...',
                            timer: 2000,
                            showConfirmButton: false,
                            timerProgressBar: true,
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                location.href = "{{url('user/view')}}/"+id_user;
                            }
                        });
                    });
                }
            });
        }else{
            return false;
        }
        })
    });
</script>
@endsection
