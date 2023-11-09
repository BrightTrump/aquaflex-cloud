<x-guest-layout :title="'Team'">
    @include('components.header')

    <!-- ==================== Page-Title (Start) ==================== -->
    <div class="page-title">
        <div class="container">
            <div class="title">
                <h2>team</h2>
            </div>

            <div class="link">
                <a href="/">Home</a>
                <i class="fa-solid fa-angles-right"></i>
                <span class="page">team</span>
            </div>
        </div>
    </div>
    <!-- ==================== Page-Title (End) ==================== -->

    <!-- ==================== Team Area (Start) ==================== -->
    <section class="team">
        <div class="heading">
            <span>Get Acquainted With Our Team"</span>
            <h2>Our Team</h2>
            <img src="/assets/images/Heading.png" alt="" />
        </div>

        <div class="box-container">
            <div class="team-item">
                <div class="image">
                    <img src="/assets/images/Team-1.png" alt="" />
                    <div class="icon-container">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="content">
                    <a href="/About/team.html">
                        <h2>Daddy Jumbo</h2>
                    </a>
                    <h5>Founder & CEO</h5>
                </div>
            </div>

            <div class="team-item">
                <div class="image">
                    <img src="/assets/images/Team-2.png" alt="" />
                    <div class="icon-container">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="content">
                    <a href="/team">
                        <h2>Amelia Taylor</h2>
                    </a>
                    <h5>Operations Manager</h5>
                </div>
            </div>

            <div class="team-item">
                <div class="image">
                    <img src="/assets/images/Team-3.png" alt="" />
                    <div class="icon-container">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="content">
                    <a href="/team">
                        <h2>David Wilson</h2>
                    </a>
                    <h5>Delivery Driver</h5>
                </div>
            </div>

            <div class="team-item">
                <div class="image">
                    <img src="/assets/images/Team-4.png" alt="" />
                    <div class="icon-container">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="content">
                    <a href="/team">
                        <h2>Elizabeth Scott</h2>
                    </a>
                    <h5>Marketing Manager</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Team Area (End) ==================== -->

    @include('components.footer')

</x-guest-layout>
