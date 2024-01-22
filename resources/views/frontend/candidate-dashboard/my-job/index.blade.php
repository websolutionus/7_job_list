@extends('frontend.layouts.master')

@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Blog</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.candidate-dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <div class="mb-3">
                        <h4>Applied Jobs (100)</h4>

                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Salary</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th style="width: 15%">Action</th>
                            </tr>
                        </thead>
                        <tbody class="experience-tbody">
                            @foreach ($appliedJobs as $appliedJob)
                            <tr>
                                <td>
                                    <div class="d-flex ">
                                        <img style="width: 50px; height: 50px; object-fit:cover;" src="{{ asset($appliedJob->job->company->logo) }}" alt="">
                                        <div style="padding-left: 15px">
                                            <h6 >{{ $appliedJob->job->company->name }}</h6>
                                            <b>{{ $appliedJob->job?->company?->companyCountry->name }}</b>
                                        </div>
                                    </div>
                                </td>
                                <td>

                                </td>
                                <td>Senior Developer</td>
                                <td>2020-07-23 - Current</td>
                                <td>
                                    <a href="http://laravel-job-portal.test/candidate/experience/3/edit"
                                        class="btn-sm btn btn-primary edit-experience" data-bs-toggle="modal"
                                        data-bs-target="#experienceModal"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                </td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection
