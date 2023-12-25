<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <form action="{{ route('company.profile.founding-info') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10"> Gender *</label>
                            <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}"
                                type="text" value="" name="gender">
                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Marital Status *</label>
                            <input class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}" type="text"
                                value="" name="marital_status">
                            <x-input-error :messages="$errors->get('marital_status')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">Profession *</label>
                            <select name="profession" id=""
                                class="{{ $errors->has('profession') ? 'is-invalid' : '' }} form-icons select-active">
                                <option value="">Select one</option>
                                @foreach ($professions as $profession)
                                    <option @selected($profession->id === $candidate->profession_id) value="{{ $profession->id }}">
                                        {{ $profession->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('profession')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">Your availability *</label>
                            <select name="profession" id=""
                                class="{{ $errors->has('profession') ? 'is-invalid' : '' }} form-icons select-active">
                                <option value="">Select one</option>
                                <option value="available">Available</option>
                                <option value="not_available">Not Available</option>
                            </select>
                            <x-input-error :messages="$errors->get('profession')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Skills you Have</label>
                            <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}"
                                type="text" value="" name="website">
                            <x-input-error :messages="$errors->get('website')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Languages you know</label>
                            <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}"
                                type="text" value="" name="website">
                            <x-input-error :messages="$errors->get('website')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Biography</label>
                            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                            <x-input-error :messages="$errors->get('website')" class="mt-2" />
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="box-button mt-15">
            <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
        </div>
    </form>
</div>
