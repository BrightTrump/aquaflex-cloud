<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Title -->
    <title>AquaFlex | Water & Blackcurrant Delivery Company</title>

    <!-- Font-Awesome (CSS) -->
    <link rel="stylesheet" href="/vendors/font-awesome/css/all.css" />


    <!-- Custom Stylesheets -->
    @vite(['public/assets/css/user.css', 'public/assets/css/main.css', 'public/asssets/css/user-responsive.css', 'resources/css/app.css'])
</head>

<body>
    <div class="main-container">
        <form action="" class="profil">
            <div class="form-content">
                <div>
                    <label for="fname">First Name*</label><br>
                    <input type="text" name="fname" id="fname" placeholder="Enter Your Firstname">
                </div>
                <div>
                    <label for="oname">Other Name*</label><br>
                    <input type="text" name="oname" id="oname" placeholder="Your Othername">
                </div>
                <div>
                    <label for="lname">Last Name*</label><br>
                    <input type="text" name="lname" id="lname" placeholder="Enter Your Lastname">
                </div>
                <div>
                    <label for="email">Email*</label><br>
                    <input type="email" name="email" id="email" placeholder="Enter Your E-mail Address">
                </div>
                <div>
                    <label for="phone">Phone Number*</label><br>
                    <input type="tel" name="phone" id="phone" placeholder="Your Number">
                </div>
                <div>
                    <label for="country">Country*</label><br>
                    <input type="text" name="country" id="country" placeholder="Country">
                </div>
                <div>
                    <label for="city">Town/City*</label><br>
                    <input type="text" name="city" id="city" placeholder="City">
                </div>
                <div>
                    <label for="country">Postcode/Zip*</label><br>
                    <input type="text" name="zip" id="zip" placeholder="e.g 330102">
                </div>
            </div>
            <div class="address-div">
                <label for="address" class="address-label">Address*</label><br>
                <input type="text" name="address" class="address-input" id="address"
                    placeholder="Enter Your Address">
            </div>
            <div class="btn-div">
                <input type="button" name="cancel" class="cancel-btn" id="cancel" value="Cancel">
                <input type="button" name="update" class="update-cta" id="update" value="Update Profile">
            </div>
        </form>

        <div class="pic-container">
            <div class="pic-content">
                <h3 class="pic-heading">Update Profile
                </h3>
                <p class="pic-info">Profile of at least <br> Size <span>300x300.</span> Gifs work too.<span>Max
                        5mb</span></p>
                <div class="img-parent-div">
                    <div class="img-div">
                        <img src="/assets/images/about-2.png" alt="" id="profile-image">
                    </div>
                    <svg id="change-pic" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                        height="28" viewBox="0,0,256,256">
                        <g fill="#19c7fc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(8.53333,8.53333)">
                                <path
                                    d="M24,11l2.414,-2.414c0.781,-0.781 0.781,-2.047 0,-2.828l-2.172,-2.172c-0.781,-0.781 -2.047,-0.781 -2.828,0l-2.414,2.414zM17,8l-11.74,11.74c2.626,-0.313 0.77,2.193 1.74,3.26c0.854,0.939 3.529,-0.732 3.26,1.74l11.74,-11.74zM4.328,26.944l-0.015,-0.007c-0.605,0.214 -1.527,-0.265 -1.25,-1.25l-0.007,-0.015l0.944,-2.672l3,3z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <input type="file" class="hidden" id="profile-pic-input">
                </div>
            </div>
        </div>
    </div>


    <!-- Custom Script Files -->
    <script src="/assets/js/user-profile-pic.js"></script>
</body>

</html>
