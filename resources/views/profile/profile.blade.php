<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body class="background_page">
    <div class="container ">
        <div class="row">
            <div class="col-3">
                <div class="boder_left">
                    <div class="avatar text-center">
                        <img   src="{{ asset('images/avatar1.webp') }}" alt="abc ">

                    </div>
                    <h5 class="text-center">{{ $profile->name }}<i style="color: grey" class="fa fa-check-circle" aria-hidden="true"></i></h5>
                    <p class="text-center">{{ $profile->role }}</p>
                    <ul class="list-unstyled big_nav">


                        <a class="text-decoration-none link" href="{{ route('home') }}">
                            <li class="mt-2 nav"><i class="icon fa-solid fa-house"></i>Home</li>
                        </a>
                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav"><i class="icon fa-regular fa-user"></i>Profile</li>
                        </a>
                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav">My Badges</li>
                        </a>
                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav"><i class="icon fa-solid fa-sack-dollar"></i>Refer a friend</li>
                        </a>
                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav"><i class="icon fa-regular fa-heart"></i>Favorite Jobs</li>
                        </a>
                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav"><i class="icon fa-solid fa-volume-high"></i>Job Alert</li>
                        </a>
                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav"><i class="icon fa-solid fa-headphones"></i>ContactSuport</li>
                        </a>
                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav"><i class="icon fa-regular fa-message"></i>MtMessage</li>
                        </a>
                    </ul>
                </div>



            </div>

            <div class="col-9">
                <div class="row progress-container">
                    <ul class="progress-steps">
                        <li class="active">Contact Info</li>
                        <li>Work Experience</li>
                    </ul>
                </div>

                <div class="row">
                    <form id="updateProfile" action="{{ route('update-profile.updateInfo') }}" method="POST">
                        @csrf
                        <div class="form d-flex gap-4 flex-column border border-secondary boder_input mt-2 p-4">
                            <input type="hidden" name="id", value="{{ $id1 }}">
                            <label for="">Name</label>
                            <input class="border_input" type="text" name="name" id="{{ isset($data->name) ? $data->name : '' }}">


                            <label for="">Role</label>
                            <input class="border_input" type="text" name="role" id="{{ isset($data->role) ? $data->role : '' }}">




                        </div>
                        <div class="mt-4 text-center">
                            <button>Save & Next</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
    </div>

    <script>
        document.getElementById('updateForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    // Redirect user to another page
                    window.location.href = '/workExp'; // Replace '/redirect-url' with your desired URL
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error
                });
        });
    </script>
</body>

</html>
