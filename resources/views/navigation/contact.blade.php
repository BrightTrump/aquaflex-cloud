<x-guest-layout>
    @include('components.header')

    <!-- ==================== Page-Title (Start) ==================== -->
    <div class="page-title">
        <div class="container">
            <div class="title">
                <h2>Contact</h2>
            </div>

            <div class="link">
                <a href="/">Home</a>
                <i class="fa-solid fa-angles-right"></i>
                <span class="page">Contact</span>
            </div>
        </div>
    </div>
    <!-- ==================== Page-Title (End) ==================== -->

    <!-- ==================== Contact Area (Start) ==================== -->
    <section class="contact" id="contact">
        <!-- ========== Google Map (Start) ========== -->
        <iframe src="https://goo.gl/maps/t2GBVrGQuFfCbHgz6" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        <!-- ========== Google Map (End) ========== -->

        <!-- ========== Contact Info (Start) ========== -->
        <div class="contact-info">
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <div class="content">
                    <h3>Contact</h3>
                    <p>+123-456-789</p>
                </div>
            </div>

            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <div class="content">
                    <h3>Email</h3>
                    <p class="gmail">abc@gmail.com</p>
                </div>
            </div>

            <div class="info-item">
                <i class="fa-solid fa-map-location-dot"></i>
                <div class="content">
                    <h3>Address</h3>
                    <p>karachi, pakistan</p>
                </div>
            </div>
        </div>
        <!-- ========== Contact Info (End) ========== -->

        <!-- ========== Contact Form (Start) ========== -->
        <div class="contact-container">
            <div class="heading">
                <h2>Get in Touch</h2>
                <img src="/assets/images/Heading/Heading.png" alt="" />
            </div>

            <form method="post" class="contact-form" id="contact-form">
                <div class="input-box">
                    <input type="text" name="name" class="box" id="name" placeholder="Name" required />
                    <input type="email" name="email" class="box" id="email" placeholder="Email" required />
                </div>

                <div class="input-box">
                    <input type="text" name="subject" class="box" id="subject" placeholder="Subject" required />
                    <input type="number" name="number" class="box" id="number" placeholder="Phone Number"
                        required />
                </div>

                <textarea cols="30" rows="10" name="comment" class="box" id="comment" placeholder="Message"></textarea>

                <button type="submit" class="btn" name="submit" id="submit">
                    Send Message
                </button>

                <span class="alert" id="msg"></span>
            </form>
        </div>
        <!-- ========== Contact Form (End) ========== -->
    </section>
    <!-- ==================== Contact Area (End) ==================== -->

    @include('components.footer')
</x-guest-layout>
