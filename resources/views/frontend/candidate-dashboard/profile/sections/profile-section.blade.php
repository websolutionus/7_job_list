<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <form action="{{ route('candidate.profile.profile-info.update') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10"> Gender *</label>
                            <select name="gender" id=""
                                class="{{ $errors->has('gender') ? 'is-invalid' : '' }} form-icons select-active">
                                <option value="">Select one</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">Marital Status *</label>
                            <select name="marital_status" id=""
                                class="{{ $errors->has('marital_status') ? 'is-invalid' : '' }} form-icons select-active">
                                <option value="">Select one</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                            </select>
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
                            <select name="availability" id=""
                                class="{{ $errors->has('availability') ? 'is-invalid' : '' }} form-icons select-active">
                                <option value="">Select one</option>
                                <option value="available">Available</option>
                                <option value="not_available">Not Available</option>
                            </select>
                            <x-input-error :messages="$errors->get('availability')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">Skills you have *</label>
                            <select name="skill_you_have" id=""
                                class="{{ $errors->has('skill_you_have') ? 'is-invalid' : '' }} form-icons select-active" multiple="">
                                <option value="">Select one</option>
                                @foreach ($skills as $skill)
                                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                @endforeach

                            </select>
                            <x-input-error :messages="$errors->get('skill_you_have')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">Languages you know *</label>
                            <select name="language_you_have" id=""
                                class="{{ $errors->has('language_you_have') ? 'is-invalid' : '' }} form-icons select-active" multiple="">
                                <option value="">Select one</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('language_you_have')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Biography *</label>
                            <textarea name="biography" id="editor" class="{{ hasError($errors, 'biography') }}"></textarea>
                            <x-input-error :messages="$errors->get('biography')" class="mt-2" />
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
