@extends('layouts.appDashboard')

@section('title', 'Dashboard')

@section('titleHeading', 'Dashboard')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lorem Ipsum</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('img/undraw_posting_photo.svg') }}" alt="...">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi reiciendis eveniet vero officiis quaerat accusamus, magni exercitationem tempora officia. Voluptatibus dolores ea a, veniam quisquam officia laudantium fugit iure.</p>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lorem Ipsum</h6>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquam harum libero illo. Maxime nemo culpa nam qui aut voluptatibus excepturi ut corrupti voluptate? Reprehenderit corrupti officia vel nemo provident.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum numquam sunt magnam cumque! Ducimus quam earum doloremque architecto, veniam nisi eligendi, asperiores temporibus quasi autem pariatur labore quis consequatur magni?</p>
                    <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum numquam sunt magnam cumque! Ducimus quam earum doloremque architecto, veniam nisi eligendi, asperiores temporibus quasi autem pariatur labore quis consequatur magni?</p>
                </div>
            </div>

        </div>
    </div>

@endsection
