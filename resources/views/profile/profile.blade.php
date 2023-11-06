<x-app-layout :title="'profile'">
    <form action="" class="profil">
        <div class="form-content">
            <label for="fname">First Name*</label>
            <input type="text" name="fname" id="fname" placeholder="Enter Your Firstname">
            <label for="oname">Other Name*</label>
            <input type="text" name="oname" id="oname" placeholder="Your Othername">
            <label for="lname">Last Name*</label>
            <input type="text" name="lname" id="lname" placeholder="Enter Your Lastname">
            <label for="email">Email*</label>
            <input type="email" name="email" id="email" placeholder="Enter Your E-mail Address">
            <label for="phone">Phone Number*</label>
            <input type="tel" name="phone" id="phone" placeholder="Your Number">
            <label for="country">Country*</label>
            <input type="text" name="country" id="country" placeholder="Country">

        </div>
    </form>
</x-app-layout>
