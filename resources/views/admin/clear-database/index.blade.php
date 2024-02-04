@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Clear Database</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Clear Database</h4>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                                <div class="alert-title">Danger</div>
                                If you fire this action it will wipe your entire databse.
                            </div>
                            <form action="" class="mt-2 clear_db" >
                                <button class="btn btn-danger submit_button" type="submit">Clear Database</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
