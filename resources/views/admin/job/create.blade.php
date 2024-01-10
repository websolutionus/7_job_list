@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Job Post</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card-body">
                    <form action="{{ route('admin.jobs.store') }}" method="POST">
                        @csrf


                        <div class="card">
                            <div class="card-header">
                                Job Details
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control {{ hasError($errors, 'title') }}"
                                                name="title" value="{{ old('title') }}">
                                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Select Company <span class="text-danger ">*</span></label>
                                            <select name="compnay" id="" class="form-control select2 {{ hasError($errors, 'compnay') }}" >
                                                <option value="">Choose</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Category <span class="text-danger">*</span></label>
                                            <select name="category" id="" class="form-control select2 {{ hasError($errors, 'category') }}" >
                                                <option value="">Choose</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Total Vacancies <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control {{ hasError($errors, 'vacancies') }}"
                                                name="vacancies" value="{{ old('vacancies') }}">
                                            <x-input-error :messages="$errors->get('vacancies')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Deadline <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control datepicker {{ hasError($errors, 'deadline') }}"
                                            name="deadline" value="{{ old('deadline') }}">
                                            <x-input-error :messages="$errors->get('deadline')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
