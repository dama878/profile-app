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
                    <img src="" alt="abc  ">
                    <h5><i class="fa fa-check-circle" aria-hidden="true"></i></h5>
                    <p>dev</p>
                    <ul class="list-unstyled big_nav">


                        <a class="text-decoration-none link" href="">
                            <li class="mt-2 nav"><i class="icon fa-solid fa-house"></i>Home</li>
                        </a>
                        <a class="text-decoration-none link" href="{{ route('profile.index') }}">
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
                <div class="title">
                    <h3>WORK EXPERIENCE</h3>
                    <p>Summarize your career journey. highlighting key roles and achivements</p>
                </div>
                <div class="progress-container">
                    <ul class="progress-steps">
                        <li class="active">Contact Info</li>
                        <li>Work Experience</li>
                        <li>Itinerary</li>
                        <li>Comments</li>
                    </ul>
                </div>

                <div class="row">
                    <form id="saveForm" method="POST" action="{{ route('workExp.store') }}">
                        @csrf
                        <div class="form d-flex gap-4 flex-column border border-secondary boder_input mt-2">
                            <label for="">Company Name</label>
                            <input class="boder_input" type="text" name="company_name" id="">

                            <label for="">Titile / Position</label>
                            <input class="boder_input" type="text" name="title" id="">

                            <label for="">City,State</label>
                            <select class="boder_input" name="city" id="">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>

                            <label for="">Software Famliarity and Usage</label>
                            <select class="boder_input" name="software_usage" id="">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>

                            <label for="">Start Date</label>
                            <input class="boder_input" type="date" name="start_date" id="">

                            <label for="">End Date</label>
                            <input class="boder_input" type="date" name="end_date" id="">

                            <div class="d-flex align-items-center"> <!-- Container for label and radio button -->
                                <label for="" class="">Current employed here</label>
                                <!-- Added margin to the label for spacing -->
                                <input style="margin-left: 4px" type="radio" name="employee_here" id="">
                            </div>

                            <label for="">Describe your duties(optional)</label>
                            <input class="boder_input" type="text" name="describe" id="">

                            <label for="">Upload Resume</label>
                            <button><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                        </div>
                    </form>


                    <button class="mt-4" style=" padding-left: 6px ; padding-right: 6px">Add Work
                        Experience</button>
                </div>
                <div class="mt-4 text-center">
                    <button id="submitButton" type="submit">Save & Next</button>

                </div>

            </div>
        </div>
    </div>
    </div>
    <script>
        var submitButton = document.getElementById("submitButton");

        // Add a click event listener to the submit button
        submitButton.addEventListener("click", function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Find the form element
            var form = document.getElementById("saveForm");

            // Perform form validation here if needed

            // Submit the form
            form.submit();
        });
    </script>
</body>

</html>
