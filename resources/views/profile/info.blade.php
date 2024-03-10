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
                        <img src="{{ asset('images/avatar1.webp') }}" alt="abc ">

                    </div>
                    <h5 class="text-center">{{ $profile->name }}<i style="color: grey" class="fa fa-check-circle"
                            aria-hidden="true"></i></h5>
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

                <div class="row d-flex justify-content-end mt-2">
                    <a href="{{ route('profile.index') }}"><button class="btn btn-primary">set up</button></a>
                </div>

                <div class="row">
                    <div class="form d-flex gap-4 flex-column border border-secondary boder_input mt-2 pb-4 pt-4">
                        <div class="d-flex flex-row gap-1">
                            <label for="">Name::</label>
                            <p class="flex-row">{{ $profile->name }} </p>
                        </div>
                        <div class="d-flex flex-row gap-1">

                            <label for="">Role::</label>
                            <p>{{ $profile->role }}</p>
                        </div>


                    </div>




                    <div class="">
                        <div class="row">
                            
                            <h3 class="col-6">Work Experience</h3>
                            <a class="col 6 text-end" href="{{ route('workExp') }}"><button class="btn btn-primary">Add Work
                                    Experience</button></a>
                        </div>

                        @foreach ($workExp as $i)
                            <div class="row">
                                <button class=" col-1"><a href="{{ route('workExp.edit', $i->id) }}">Edit</a></button>
                            <form class="col" method="POST" action="{{ route('workExp.destroy', $i->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                            </div>
                            
                            <div class="d-flex flex-row gap-1">
                                <label for="">Company Name:</label>
                                <p class="flex-row">{{ $i->company_name }} </p>
                            </div>
                            <div class="d-flex flex-row gap-1">
                                <label for="">Title:</label>
                                <p class="flex-row">{{ $i->title }} </p>
                            </div>
                            <div class="d-flex flex-row gap-1">
                                <label for="">City:</label>
                                <p class="flex-row"> {{ $i->city }}</p>
                            </div>
                            <div class="d-flex flex-row gap-1">
                                <label for="">Software Usage:</label>
                                <p class="flex-row"> {{ $i->software_usage }}</p>
                            </div>
                            <div class="d-flex flex-row gap-1">
                                <label for="">Start_date:</label>
                                <p class="flex-row">{{ $i->start_date }} </p>
                            </div>
                            <div class="d-flex flex-row gap-1">
                                <label for="">End_date:</label>
                                <p class="flex-row">{{ $i->end_date }}</p>
                            </div>
                            <div class="d-flex flex-row gap-1">
                                <label for="">Employee here:</label>
                                <p class="flex-row">{{ $i->employee_here }} </p>
                            </div>
                            <div class="d-flex flex-row gap-1">
                                <label for="">Describe:</label>
                                <p class="flex-row">{{ $i->describe }} </p>
                            </div>
                            <hr>
                        @endforeach
                    </div>


                </div>


            </div>
        </div>
    </div>
    </div>
</body>

</html>
