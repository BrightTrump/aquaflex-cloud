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
    @vite(['public/assets/css/user.css'])
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

                    <img src="../" alt="">
            </div>
        </div>
    </div>
</body>

</html>
