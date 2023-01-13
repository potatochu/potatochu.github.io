@extends('layout')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Form-->
        <form id="create_form" class="form" method="POST" enctype="multipart/form-data" action="{{url('company/update/'.$company->company_id)}}">
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
                                <option value="{{$item->company_category_id}}" {{$company->company_category_id == $item->company_category_id ? 'selected':''}}>{{$item->company_category_name}}</option>
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
                                <option value="{{$item->company_employees_id}}" {{$company->company_employees_id == $item->company_employees_id ? 'selected':''}}>{{$item->company_employees_name}}</option>
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
                            <input type="text" name="company_name" class="form-control form-control-lg form-control-solid" placeholder="Company name" autocomplete="off" value="{{ $company->company_name }}" required/>
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
                            <input type="email" name="company_email" class="form-control form-control-lg form-control-solid" placeholder="Company email" autocomplete="off" value="{{ $company->company_email }}" required/>
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
                            <input type="text" name="company_phone_number" class="form-control form-control-lg form-control-solid" placeholder="Phone number" autocomplete="off" value="{{ $company->company_phone_number }}"/>
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
                                <option value="{{$item->country_id}}" {{$company->country_id == $item->country_id ? 'selected':''}}>{{$item->country_name}}</option>
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
                                @isset ($states)
                                @foreach ($states as $item)
                                <option value="{{$item->states_id}}" {{$company->states_id == $item->states_id ? 'selected':''}}>{{$item->states_name}}</option>
                                @endforeach
                                @endisset
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
                                @isset ($city)
                                @foreach ($city as $item)
                                <option value="{{$item->city_id}}" {{$company->city_id == $item->city_id ? 'selected':''}}>{{$item->city_name}}</option>
                                @endforeach
                                @endisset
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
                            <input type="number" name="company_postal_code" class="form-control form-control-lg form-control-solid" placeholder="Postal Code" autocomplete="off" value="{{ $company->company_postal_code }}"/>
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
                            <textarea name="company_address" rows="3" class="form-control form-control-lg form-control-solid" placeholder="Company Address" autocomplete="off">{{ $company->company_address }}</textarea>
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
                            <textarea name="company_description" rows="3" class="form-control form-control-lg form-control-solid" placeholder="Company Description" autocomplete="off">{{ $company->company_description }}</textarea>
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
                            <input type="text" name="company_nib" class="form-control form-control-lg form-control-solid" placeholder="Company NIB" autocomplete="off" value="{{ $company->company_nib }}"/>
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
                            <input type="text" name="company_npwp" class="form-control form-control-lg form-control-solid" placeholder="Company NPWP" autocomplete="off" value="{{ $company->company_npwp }}"/>
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
                            <input type="text" name="company_npwp_name" class="form-control form-control-lg form-control-solid" placeholder="NPWP Name" autocomplete="off" value="{{ $company->company_npwp_name }}"/>
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
                            <textarea name="company_npwp_address" rows="3" class="form-control form-control-lg form-control-solid" placeholder="NPWP Address" autocomplete="off">{{ $company->company_npwp_address }}</textarea>
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
                            <input type="text" name="company_pic_name" class="form-control form-control-lg form-control-solid" placeholder="Company PIC name" autocomplete="off" value="{{ $company->company_pic_name }}" required/>
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
                            <input type="email" name="company_pic_email" class="form-control form-control-lg form-control-solid" placeholder="PIC Email" autocomplete="off" required value="{{ $company->company_pic_email }}"/>
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
                            <input type="text" name="company_pic_phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" autocomplete="off" value="{{ $company->company_pic_phone }}"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
            </div>
            <!--end::Tables Widget 9-->
            <!--begin::Tables Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Verification <span class="svg-icon svg-icon-1 svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                          </svg></span></span>
                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">create new company, job seeker</span> --}}
                    </h3>
                </div>
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Verification Date</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_verified_date" class="form-control form-control-lg form-control-solid" placeholder="Verification date" autocomplete="off" value="{{ $company->company_verified_date }}" required/>
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
                            <textarea name="company_verified_description" rows="3" class="form-control form-control-lg form-control-solid" placeholder="Verification Description" autocomplete="off">{{ $company->company_verified_description }}</textarea>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="{{url('company')}}" class="btn btn-light btn-active-light-primary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary" id="submit_btn">Save Changes</button>
                    </div>
                    <!--end::Actions-->
                </div>
            </div>
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
    $("input[name='company_verified_date']").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: false,
        minYear: 2000,
        maxYear: parseInt(moment().format("YYYY"),12),
        locale: {
           format: 'YYYY-MM-DD H:i:s'
        }
    });
    $('input[name="company_verified_date"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD H:i:s'));
    });
    $('input[name="company_verified_date"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
</script>
@endsection
