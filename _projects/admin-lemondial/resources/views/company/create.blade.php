@extends('layout')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Form-->
        <form id="create_form" class="form" method="POST" enctype="multipart/form-data" action="{{url('company/store')}}">
            @csrf
            <!--begin::Tables Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Company details</span>
                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">create new company, job seeker</span> --}}
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{url('company')}}" class="btn btn-sm btn-light btn-active-primary">
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
                            <span class="required">Company Category</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="company_category_id" id="company_category_id" aria-label="Select a Category" data-control="select2" data-placeholder="Select a category" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Select a Category</option>
                                @foreach ($category as $item)
                                <option value="{{$item->company_category_id}}">{{$item->company_category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Employees</span>
                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of domicile"></i> --}}
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="company_employees_id" id="company_employees_id" aria-label="Please Select" data-control="select2" data-placeholder="Please Select" class="form-select form-select-solid form-select-lg fw-semibold">
                                {{-- <option value="">Please select</option> --}}
                                @foreach ($employees as $item)
                                <option value="{{$item->company_employees_id}}">{{$item->company_employees_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_name" class="form-control form-control-lg form-control-solid" placeholder="Company name" autocomplete="off" value="{{ old('company_name') }}" required/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="company_email" class="form-control form-control-lg form-control-solid" placeholder="Company email" autocomplete="off" value="{{ old('company_email') }}" required/>
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
                            <input type="text" name="company_phone_number" class="form-control form-control-lg form-control-solid" placeholder="Phone number" autocomplete="off" value="{{ old('company_phone_number') }}"/>
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
                            <input type="number" name="company_postal_code" class="form-control form-control-lg form-control-solid" placeholder="Postal Code" autocomplete="off" value="{{ old('company_postal_code') }}"/>
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
                            <textarea name="company_address" rows="3" class="form-control form-control-lg form-control-solid" placeholder="Company Address" autocomplete="off">{{ old('company_address') }}</textarea>
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
                            <textarea name="company_description" rows="3" class="form-control form-control-lg form-control-solid" placeholder="Company Description" autocomplete="off">{{ old('company_description') }}</textarea>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Photo</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="file" name="company_photo" class="form-control form-control-lg form-control-solid" placeholder="Company Photo" autocomplete="off" value="{{ old('company_photo') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Banner</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="file" name="company_banner" class="form-control form-control-lg form-control-solid" placeholder="Company Banner" autocomplete="off" value="{{ old('company_banner') }}"/>
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
                {{-- <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">PIC details</span>
                    </h3>
                </div> --}}
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span>NIB</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_nib" class="form-control form-control-lg form-control-solid" placeholder="Company NIB" autocomplete="off" value="{{ old('company_nib') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span>NPWP Number</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_npwp" class="form-control form-control-lg form-control-solid" placeholder="Company NPWP" autocomplete="off" value="{{ old('company_npwp') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span>NPWP Name</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_npwp_name" class="form-control form-control-lg form-control-solid" placeholder="NPWP Name" autocomplete="off" value="{{ old('company_npwp_name') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">NPWP Address</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <textarea name="company_npwp_address" rows="3" class="form-control form-control-lg form-control-solid" placeholder="NPWP Address" autocomplete="off">{{ old('company_npwp_address') }}</textarea>
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
                        <span class="card-label fw-bold fs-3 mb-1">PIC details</span>
                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">create new company, job seeker</span> --}}
                    </h3>
                </div>
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company PIC Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_pic_name" class="form-control form-control-lg form-control-solid" placeholder="Company PIC name" autocomplete="off" value="{{ old('company_pic_name') }}" required/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">PIC Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="company_pic_email" class="form-control form-control-lg form-control-solid" placeholder="PIC Email" autocomplete="off" required value="{{ old('company_pic_email') }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">PIC Contact Phone</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_pic_phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" autocomplete="off" value="{{ old('company_pic_phone') }}"/>
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
    $("input[name='company_birthday']").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: false,
        minYear: 1960,
        maxYear: parseInt(moment().format("YYYY"),12)
    });
    $('input[name="company_birthday"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
    $('input[name="company_birthday"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
</script>
@endsection
