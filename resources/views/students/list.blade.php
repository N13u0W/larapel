@include('templates.header', ['title' => 'ADD Pages'])

<?php
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
include('templates/header.php') ?>

<div class="container mt-5">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/images/logo-black.png" alt="Logo">
            </div>
            <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Add Students</h3>
            <form method="POST" action="{{ route('add') }}>
                @csrf
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Activity name"
                        name="Name"
                        value= "{{ old('activity_name') }}">

                    <div class="col-6">
                        <div class="input-group mb-25">
                            <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                            <input>
                            type="text"
                            class="form-control"
                            placeholder="Class"
                            name="name"
                            value="{{ old('class') }}">

                        </div>
                    </div>

                </div>
                <div class="bottom">
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            </form>
        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <p>Copyright© <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
    </div>
    <!-- footer end -->
</div>
