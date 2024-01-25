@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Why Choose Us</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Why Choose Us</h4>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.why-choose-us.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Icon One</label>
                                        <div role="iconpicker" data-align="left" name="icon_one" class="{{ hasError($errors, 'icon_one') }}"></div>
                                        <x-input-error :messages="$errors->get('icon_one')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Title One</label>
                                            <input type="text" class="form-control {{ hasError($errors, 'title_one') }}" name="title_one" value="{{ old('title_one') }}">
                                            <x-input-error :messages="$errors->get('title_one')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Sub Title One</label>
                                            <input type="text" class="form-control {{ hasError($errors, 'sub_title_one') }}" name="sub_title_one" value="{{ old('sub_title_one') }}">
                                            <x-input-error :messages="$errors->get('sub_title_one')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Icon Two</label>
                                        <div role="iconpicker" data-align="left" name="icon_two" class="{{ hasError($errors, 'icon_two') }}"></div>
                                        <x-input-error :messages="$errors->get('icon_two')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Title Two</label>
                                            <input type="text" class="form-control {{ hasError($errors, 'title_two') }}" name="title_two" value="{{ old('title_two') }}">
                                            <x-input-error :messages="$errors->get('title_two')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Sub Title Two</label>
                                            <input type="text" class="form-control {{ hasError($errors, 'sub_title_two') }}" name="sub_title_two" value="{{ old('sub_title_two') }}">
                                            <x-input-error :messages="$errors->get('sub_title_two')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Icon Three</label>
                                        <div role="iconpicker" data-align="left" name="icon_three" class="{{ hasError($errors, 'icon_three') }}"></div>
                                        <x-input-error :messages="$errors->get('icon_three')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Title Three</label>
                                            <input type="text" class="form-control {{ hasError($errors, 'title_three') }}" name="title_three" value="{{ old('title_three') }}">
                                            <x-input-error :messages="$errors->get('title_three')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Sub Title Three</label>
                                            <input type="text" class="form-control {{ hasError($errors, 'sub_title_three') }}" name="sub_title_three" value="{{ old('sub_title_three') }}">
                                            <x-input-error :messages="$errors->get('sub_title_three')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
