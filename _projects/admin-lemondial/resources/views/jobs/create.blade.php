@extends('layout')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Form-->
        <form id="create_form" class="form" method="POST" action="{{url('jobs/store')}}">
            @csrf
            <!--begin::Tables Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Job details</span>
                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">create new company, job seeker</span> --}}
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{url('jobs')}}" class="btn btn-sm btn-light btn-active-primary">
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
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Job Category</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="jobs_category_id" id="jobs_category_id" aria-label="Select a Category" data-control="select2" data-placeholder="Select a category" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a Category</option>
                                @foreach ($jobs_category as $item)
                                <option value="{{$item->jobs_category_id}}">{{$item->jobs_category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Job Occupation</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="jobs_occupation_id" id="jobs_occupation_id" aria-label="Select a Job" data-control="select2" data-placeholder="Select a job" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a Job</option>
                                @foreach ($jobs_occupation as $item)
                                <option value="{{$item->jobs_occupation_id}}">{{$item->jobs_occupation_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span>Position</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_jobs_position" class="form-control form-control-lg form-control-solid" placeholder="Job Position" autocomplete="off" value="{{ old('company_jobs_position') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Job Type</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="jobs_type_id" id="jobs_type_id" aria-label="Select a type" data-control="select2" data-placeholder="Select a job type" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a Type</option>
                                @foreach ($jobs_type as $item)
                                <option value="{{$item->jobs_type_id}}">{{$item->jobs_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Job Remote</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::Options-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="company_jobs_remote" type="radio" value="false" checked/>
                                    <span class="fw-semibold ps-2 fs-6">No</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="company_jobs_remote" type="radio" value="true" />
                                    <span class="fw-semibold ps-2 fs-6">Yes</span>
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
                            <span class="required">Employee Level</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="employee_level_id" id="employee_level_id" aria-label="Please Select" data-control="select2" data-placeholder="Please Select" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Please select</option>
                                @foreach ($employee_level as $item)
                                <option value="{{$item->employee_level_id}}">{{$item->employee_level_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Degrees</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="degrees_id" id="degrees_id" aria-label="Please Select" data-control="select2" data-placeholder="Please Select" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Please select</option>
                                @foreach ($degrees as $item)
                                <option value="{{$item->degrees_id}}">{{$item->degrees_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Job Experience</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="jobs_experience_id" id="jobs_experience_id" aria-label="Please select" data-control="select2" data-placeholder="Please select" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Please select</option>
                                @foreach ($jobs_experience as $item)
                                <option value="{{$item->jobs_experience_id}}">{{$item->jobs_experience_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span>Person Needed</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_jobs_person_needed" class="form-control form-control-lg form-control-solid" placeholder="Person Needed" autocomplete="off" value="{{ old('company_jobs_person_needed') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Description</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <textarea name="company_jobs_description" id="company_jobs_description" rows="3" class="form-control form-control-lg form-control-solid" autocomplete="off">{{ old('company_jobs_description') }}</textarea>
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

                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Company</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="company_id" id="company_id" aria-label="Select a Company" data-control="select2" data-placeholder="Select a company" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a Company</option>
                                @foreach ($company as $item)
                                <option value="{{$item->company_id}}">{{$item->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="company_jobs_email" class="form-control form-control-lg form-control-solid" placeholder="Company email" autocomplete="off" value="{{ old('company_jobs_email') }}" required/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Phone</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_jobs_phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" autocomplete="off" value="{{ old('company_jobs_phone') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Country</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
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
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="State of domicile"></i> --}}
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
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="City of domicile"></i> --}}
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
                            <input type="number" name="company_jobs_postal_code" class="form-control form-control-lg form-control-solid" placeholder="Postal Code" autocomplete="off" value="{{ old('company_jobs_postal_code') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <textarea name="company_jobs_address" rows="3" class="form-control form-control-lg form-control-solid" placeholder="Company Address" autocomplete="off">{{ old('company_jobs_address') }}</textarea>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
            </div>
            <!--begin::Tables Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Salary</span>
                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">create new company, job seeker</span> --}}
                    </h3>
                </div>
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Hide</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::Options-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="company_jobs_salary_hide" type="radio" value="false" checked/>
                                    <span class="fw-semibold ps-2 fs-6">No</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="company_jobs_salary_hide" type="radio" value="true" />
                                    <span class="fw-semibold ps-2 fs-6">Yes</span>
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
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Range</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::Options-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="company_jobs_salary_range" type="radio" value="false" checked/>
                                    <span class="fw-semibold ps-2 fs-6">No</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="company_jobs_salary_range" type="radio" value="true" />
                                    <span class="fw-semibold ps-2 fs-6">Yes</span>
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
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Minimum</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="company_jobs_salary_min" class="form-control form-control-lg form-control-solid" placeholder="Salary Minimum" autocomplete="off" value="{{ old('company_jobs_salary_min') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Maximum</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="company_jobs_salary_max" class="form-control form-control-lg form-control-solid" placeholder="Salary Maximum" autocomplete="off" value="{{ old('company_jobs_salary_max') }}"/>
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
<script src="{{url('')}}/assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
<script>
    var options = {selector: "#company_jobs_description", height : "480"};
    if ( KTThemeMode.getMode() === "dark" ) {
        options["skin"] = "oxide-dark";
        options["content_css"] = "dark";
    }
    tinymce.init(options);

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
    $("input[name='company_jobs_birthday']").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: false,
        minYear: 1960,
        maxYear: parseInt(moment().format("YYYY"),12)
    });
    $('input[name="company_jobs_birthday"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
    $('input[name="company_jobs_birthday"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
</script>
@endsection
