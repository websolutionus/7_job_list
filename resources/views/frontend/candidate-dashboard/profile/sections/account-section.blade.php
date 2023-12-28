<div class="tab-pane fade show" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
    <form action="{{ route('candidate.profile.basic-info.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-12">
                <h4>Location</h4>
                <div class="row mt-3">

                    <div class="col-md-4">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">Country *</label>

                            <select name="country" id="" class=" form-icons select-active {{ hasError($errors, 'country') }} country">
                                <option value="">Select one</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>

                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">State</label>

                            <select name="state" id="" class=" form-icons select-active {{ hasError($errors, 'state') }} state">
                                <option value="">Select one</option>

                            </select>

                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">City</label>

                            <select name="city" id="" class=" form-icons select-active {{ hasError($errors, 'city') }} city">
                                <option value="">Select one</option>
                            </select>

                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Address *</label>
                            <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text"
                                value="" name="address">
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <h4>Your Contact Information</h4>
                <div class="row mt-3">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Phone</label>
                            <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text"
                                value="" name="phone">
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Secondary Phone</label>
                            <input class="form-control {{ $errors->has('secondary_phone') ? 'is-invalid' : '' }}" type="text"
                                value="" name="secondary_phone">
                            <x-input-error :messages="$errors->get('secondary_phone')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Email</label>
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text"
                                value="" name="email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class=" mt-15">
            <button class="btn btn-primary">Save All Changes</button>
        </div>
    </form>
</div>


@push('scripts')
<script>
    $(document).ready(function() {
        $('.country').on('change', function() {
            let country_id = $(this).val();
            // remove all previous cities
            $('.city').html("");

            $.ajax({
                mehtod: 'GET',
                url: '{{ route("get-states", ":id") }}'.replace(":id", country_id),
                data: {},
                success: function(response) {
                    let html = '';

                    $.each(response, function(index, value) {
                        html += `<option value="${value.id}" >${value.name}</option>`
                    });

                    $('.state').html(html);
                },
                error: function(xhr, status, error) {}
            })
        })

        // get cities
        $('.state').on('change', function() {
            let state_id = $(this).val();

            $.ajax({
                mehtod: 'GET',
                url: '{{ route("get-cities", ":id") }}'.replace(":id", state_id),
                data: {},
                success: function(response) {
                    let html = '';

                    $.each(response, function(index, value) {
                        html += `<option value="${value.id}" >${value.name}</option>`
                    });

                    $('.city').html(html);
                },
                error: function(xhr, status, error) {}
            })
        })
    })
</script>
@endpush
