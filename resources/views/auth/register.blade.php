<x-guest-layout :title="'Create Account'">
    @include('components.header')

    <!-- ==================== Register Area (Start) ==================== -->
    <section class="register staff-login">
        <form method="POST" class="account-form" action="{{route('register')}}">
            @csrf
            <div class="icon"><i class="fa-solid fa-user"></i></div>
            <h3>Register</h3>
            <div class="input-field">
                <input type="text" name="name" placeholder="Enter Your Name" id="name" class="box" required />
                <label for="name" class="fas fa-user"></label>
            </div>
            <div class="input-field">
                <input type="email" name="email" placeholder="Enter Your Email" id="email" class="box"
                    required />
                <label for="email" class="far fa-envelope"></label>
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Enter Your Password" id="password" class="box "
                    required />
                <label for="password" class="fas fa-lock"></label>
            </div>
            <div class="input-field">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" id="repeat-password"
                    class="box " required />
                <label for="password_confirmation" class="fas fa-lock"></label>
            </div>

            <div class="terms">
                <input type="checkbox" name="remember-me" id="remember-me" />
                <label for="remember-me">
                    I agree with the <span>Terms & Conditions</span>
                </label>
            </div>
            <button type="submit" class="btn" name="register" id="register">
                Register
            </button>
            <p>
                Already have an account? <a class="link" href="/login">Login</a>
            </p>
        </form>
    </section>
    <!-- ==================== Register Area (End) ==================== -->

</x-guest-layout>
