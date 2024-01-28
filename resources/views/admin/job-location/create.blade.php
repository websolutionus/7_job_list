@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Hero Section</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Hero Section</h4>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.hero.update', 1) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">

                                        <label for="">Image</label>
                                        <input type="file" class="form-control {{ hasError($errors, 'image') }}" name="image">
                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="">Country</label>
                                <select name="country" id="" class="form-control select2">
                                    <option value="">choose</option>
                                </select>
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label for="">Country</label>
                                <select name="country" id="" class="form-control">
                                    <option value="">choose</option>
                                    <option value="featured">Featured</option>
                                    <option value="trending">Treding</option>
                                    <option value="hot">HOT</option>
                                </select>
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
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
