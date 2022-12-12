@extends('layout')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Form-->
        <form id="create_form" class="form" method="POST" enctype="multipart/form-data" action="{{url('user/store')}}">
            @csrf
            <!--begin::Tables Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Profile details</span>
                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">create new user, job seeker</span> --}}
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{url('user')}}" class="btn btn-sm btn-light btn-active-primary">
                        Cancel</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <!--begin::Content-->
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Photo</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{url('')}}/assets/media/svg/avatars/blank.png')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{url('')}}/assets/media/avatars/blank.png)"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="users_full_name" class="form-control form-control-lg form-control-solid" placeholder="Full name" autocomplete="off" value="{{ old('users_full_name') }}" required/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Contact Phone</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="users_phone_number" class="form-control form-control-lg form-control-solid" placeholder="Phone number" autocomplete="off" value="{{ old('users_phone_number') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Birthday</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="users_birthday" class="form-control form-control-lg form-control-solid" placeholder="Birthday" autocomplete="off" value="{{ old('users_birthday') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Gender</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::Options-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="users_gender" type="radio" value="L" />
                                    <span class="fw-semibold ps-2 fs-6">Male</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="users_gender" type="radio" value="P" />
                                    <span class="fw-semibold ps-2 fs-6">Female</span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Country</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="country_id" id="select_country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a Country</option>
                                @foreach ($country as $item)
                                <option value="{{$item->country_id}}">{{$item->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">States</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="State of domicile"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="states_id" id="select_state" aria-label="Select a state" data-control="select2" data-placeholder="Select a state" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a State</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">City</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="City of domicile"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="city_id" id="select_city" aria-label="Select a Country" data-control="select2" data-placeholder="Select a city" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a City</option>
                            </select>
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Postal Code</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="users_postal_code" class="form-control form-control-lg form-control-solid" placeholder="Postal Code" autocomplete="off" value="{{ old('users_postal_code') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Salary</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="users_salary" class="form-control form-control-lg form-control-solid" placeholder="User's Salary" autocomplete="off" value="{{ old('users_salary') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    {{-- <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Verify profile</label>
                        <!--begin::Label-->
                        <!--begin::Label-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                <input class="form-check-input w-45px h-30px" type="checkbox" name="verify_profile" id="verify" checked="checked">
                                <label class="form-check-label" for="verify"></label>
                            </div>
                        </div>
                        <!--begin::Label-->
                    </div> --}}
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Description</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <textarea name="users_description" rows="3" class="form-control form-control-lg form-control-solid" placeholder="Users Description" autocomplete="off">{{ old('users_description') }}</textarea>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--end::Content-->
                <!--begin::Body-->
            </div>
            <!--begin::Tables Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Account details</span>
                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">create new user, job seeker</span> --}}
                    </h3>
                </div>
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Role</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="State of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="level_id" aria-label="Select Level" data-control="select2" data-placeholder="Select Level" class="form-select form-select-solid form-select-lg fw-semibold" required>
                                <option value="">Select level</option>
                                @foreach ($roles as $item)
                                <option value="{{$item->level_id}}">{{$item->level_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="users_email" class="form-control form-control-lg form-control-solid" placeholder="Email" autocomplete="off" required value="{{ old('users_email') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row position-relative" data-kt-password-meter="true">
                            <input type="password" name="users_password" class="form-control form-control-lg form-control-solid" placeholder="password" autocomplete="off" required/>
                            <!--begin::Visibility toggle-->
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                            data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                            <!--end::Visibility toggle-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button type="submit" class="btn btn-primary" id="submit_btn">Save Changes</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Tables Widget 9-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
@endsection

@section('additional-js')
<script>
    $(document).on("change", '#select_country', function(e) {
        var id_country = $(this).val();
        var id_state;
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{url('states/json')}}/"+id_country,
            success: function(json) {
                var $el = $("#select_state");
                $el.empty();
                $el.append($("<option></option>").attr("value", '').text('Select a state'));
                // json = JSON.parse(json);
                $.each(json, function(value, key) {
                    // console.log(key);
                    $el.append($("<option></option>").attr("value", key.states_id).text(key.states_name));
                    id_state = key.states_id;
                });
                // $el.trigger('change');
            }
        });
    });

    $(document).on("change", '#select_state', function(e) {
        var id_state = $(this).val();
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{url('city/json')}}/"+id_state,
            success: function(json) {
                var $el = $("#select_city");
                $el.empty();
                $el.append($("<option></option>").attr("value", '').text('Select a city'));
                // json = JSON.parse(json);
                $.each(json, function(value, key) {
                    // console.log(key);
                    $el.append($("<option></option>").attr("value", key.city_id).text(key.city_name));
                });
                $el.trigger('change');
            }
        });
    });
    $("input[name='users_birthday']").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: false,
        minYear: 1960,
        maxYear: parseInt(moment().format("YYYY"),12)
    });
    $('input[name="users_birthday"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
    $('input[name="users_birthday"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
</script>
@endsection
