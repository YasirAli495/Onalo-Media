<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Service Detail')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
</head>

<body>
   @include('include.header')
            <div class="service-banner">
                <img src="../images/Digital-media-onalo.png" alt="">
            </div>
            <!-- <main class="site-main service-single">
                <section class="custom-sec-padding">
                    <div class="container">
                        <div class="row">
            
                            Left Sidebar
                            <aside class="sidebar">
                                <div class="all-services">
                                    <h3>All Services</h3>
                                    <ul>
                                        <li class="active">SEO Marketing →</li>
                                        <li>Content Marketing →</li>
                                        <li>Digital Marketing →</li>
                                        <li>Email Marketing →</li>
                                        <li>Marketing Strategy →</li>
                                        <li>Market Analysis →</li>
                                    </ul>
                                </div>
            
                                <div class="contact-box">
                                    <h3>Contact us for help</h3>
                                    <p>Get in touch and let us know how we can help touch as soon as possible.</p>
                                    <button class="contact-btn">Work With Us →</button>
                                    <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/help-illustration.png" alt="Help Image">
                                </div>
                            </aside>
            
                            Right Content
                            <div class="content">
                                <article class="service-item">
                                    
                                    <div class="post-thumbnail">
                                        <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/01.png" alt="SEO Service">
                                    </div>
            
                                    <div class="entry-content">
                                        <p>SEO Grow Your Business with Our SEO Agency on the search engine’s results page...</p>
                                        <p>Our approach to SEO is uniquely built around what we know works...</p>
                                    </div>
            
                                    <div class="features">
                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/04-1.png" alt="SEO Analytics">
                                            <h4>SEO Analytics</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>
            
                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/06-1.png" alt="Creative Ideas">
                                            <h4>Creative Ideas</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>
            
                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/05-1.png" alt="Social Marketing">
                                            <h4>Social Marketing</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>
            
                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/07.png" alt="SEO Optimization">
                                            <h4>SEO Optimization</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>
                                    </div>
            
                                    <div class="faq">
                                        <details>
                                            <summary>Why should I choose Seoland?</summary>
                                            <p>Choosing the best SEO Agency means research, checking reviews, and getting proposals.</p>
                                        </details>
            
                                        <details>
                                            <summary>Why is SEO Link Building Important?</summary>
                                            <p>Link building is a crucial part of SEO, helping to increase site authority and visibility.</p>
                                        </details>
            
                                        <details>
                                            <summary>Why is keyword research so important?</summary>
                                            <p>Keyword research ensures you target the right audience for maximum search engine visibility.</p>
                                        </details>
                                    </div>
            
                                </article>
                            </div>
            
                        </div>
                    </div>
                </section>
            </main> -->
            <main class="site-main service-single" style="margin:30px 0;">
                <section class="custom-sec-padding">
                    <div class="container-1">
                        <div class="rows">

                            <!-- Left Sidebar -->
                            <aside class="sidebar-left">
                                <div class="all-services">
                                    <h3>All Services</h3>
                                    <ul>
                                        <li class="active">ONALO MEDIA Marketing →</li>
                                        <li>Content Marketing →</li>
                                        <li>Digital Marketing →</li>
                                        <li>Email Marketing →</li>
                                        <li>Marketing Strategy →</li>
                                        <li>Market Analysis →</li>
                                    </ul>
                                </div>

                                <div class="contact-box">
                                    <h3>Contact us for help</h3>
                                    <p>Get in touch and let us know how we can help touch as soon as possible.</p>
                                    <button class="contact-btn">Work With Us →</button>
                                    <img class="contact-img"
                                        src="	https://seoland.themeht.com/wp-content/uploads/2024/04/contact-bg.png"
                                        alt="Help Image">
                                </div>
                            </aside>

                            <!-- Right Content -->
                            <div class="content-left">
                                <article class="service-item">

                                    <div class="post-thumbnail">
                                        <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/01.png"
                                            alt="SEO Service">
                                    </div>

                                    <div class="entry-content">
                                        <p>SEO Grow Your Business with Our SEO Agency on the search engine’s results
                                            page...</p>
                                        <p>Our approach to SEO is uniquely built around what we know works...</p>
                                        <div class="features-container">
                                            <ul class="features-list">
                                                <li>User-Friendly Interface</li>
                                                <li>Role-based access control</li>
                                                <li>API access for seamless integration</li>
                                                <li>Advanced reporting and analytics</li>
                                                <li>Customizable branding options</li>
                                                <li>Start your journey to success</li>
                                            </ul>

                                            <ul class="features-list">
                                                <li>User-Friendly Interface</li>
                                                <li>Role-based access control</li>
                                                <li>API access for seamless integration</li>
                                                <li>Advanced reporting and analytics</li>
                                                <li>Customizable branding options</li>
                                                <li>Start your journey to success</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="features">
                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/04-1.png"
                                                alt="SEO Analytics">
                                            <h4>SEO Analytics</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>

                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/06-1.png"
                                                alt="Creative Ideas">
                                            <h4>Creative Ideas</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>

                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/05-1.png"
                                                alt="Social Marketing">
                                            <h4>Social Marketing</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>

                                        <div class="feature-item">
                                            <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/07.png"
                                                alt="SEO Optimization">
                                            <h4>SEO Optimization</h4>
                                            <p>Get high rankings with multi-team collaboration...</p>
                                        </div>
                                    </div>

                                    <div class="faq">
                                        <details>
                                            <summary>Why Should I Choose Seoland? <span class="icon">+</span></summary>
                                            <p>Choosing the best SEO Agency means research, checking reviews, and
                                                getting proposals.</p>
                                        </details>

                                        <details>
                                            <summary>Why Is SEO Link Building Important? <span class="icon">+</span>
                                            </summary>
                                            <p>Link building is a crucial part of SEO, helping to increase site
                                                authority and visibility.</p>
                                        </details>

                                        <details>
                                            <summary>Why Is Keyword Research So Important? <span class="icon">+</span>
                                            </summary>
                                            <p>Keyword research ensures you target the right audience for maximum search
                                                engine visibility.</p>
                                        </details>

                                        <details>
                                            <summary>Best SEO Practices For High Quality Content? <span
                                                    class="icon">+</span></summary>
                                            <p>High-quality content improves search rankings and user engagement.</p>
                                        </details>

                                        <details>
                                            <summary>How Does Off-Site SEO Work? <span class="icon">+</span></summary>
                                            <p>Off-site SEO involves link-building, social signals, and brand mentions
                                                to increase domain authority.</p>
                                        </details>
                                    </div>

                                </article>
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer-container">
        <div class="footer-section">
            <h1 class="footer-logo">Onalo Media</h1>
            <p class="footer-description">Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a
                lacinia curabitur lacinia mollis</p>
            <div class="social-icons">
                <div><img src="../images/t4.png" class="social-icon" alt=""></div>
                <div><img src="../images/t3.png" class="social-icon" alt=""></div>
                <div><img src="../images/t2.png" class="social-icon" alt=""></div>
                <div><img src="../images/t1.png" class="social-icon" alt=""></div>
            </div>
        </div>
        <div class="footer-section">
            <h1 class="footer-heading">Quick Links</h1>
            <div class="quick-links">
                <div class="link-item">
                    <img src="../images/DbArrow.png" class="link-icon" alt="">
                    <a href="" class="link-text">Onalo Media About</a>
                </div>
                <div class="link-item">
                    <img src="../images/DbArrow.png" class="link-icon" alt="">
                    <a href="" class="link-text">Our Services</a>
                </div>
                <div class="link-item">
                    <img src="../images/DbArrow.png" class="link-icon" alt="">
                    <a href="" class="link-text">Our Blogs</a>
                </div>
                <div class="link-item">
                    <img src="../images/DbArrow.png" class="link-icon" alt="">
                    <a href="" class="link-text">FAQ’S</a>
                </div>
                <div class="link-item">
                    <img src="../images/DbArrow.png" class="link-icon" alt="">
                    <a href="" class="link-text">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="footer-section">
            <h1 class="footer-heading">Contact Us</h1>
            <div class="contact-item">
                <img src="../images/www.svg" class="contact-icon" alt="">
                <a href="" class="contact-text">info@example.com</a>
            </div>
            <div class="contact-item">
                <img src="../images/phone.png" class="contact-icon" alt="">
                <a href="" class="contact-text">+208-666-0112</a>
            </div>
            <input type="text" class="contact-input" placeholder="Your Email Address">
            <div class="checkbox-item">
                <input type="checkbox" id="privacy-checkbox">
                <label for="privacy-checkbox">I agree to the <span class="privacy-policy">Privacy
                        Policy.</span></label>
            </div>
        </div>
    </footer>
    <script src="../navbar.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const rightContent = document.querySelector(".content-left");
        const leftSidebar = document.querySelector(".sidebar-left");

        function handleScroll() {
            const rightBottom = rightContent.getBoundingClientRect().bottom;
            const rightTop = rightContent.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            const sidebarHeight = leftSidebar.scrollHeight;
            const sidebarViewportHeight = leftSidebar.clientHeight;

            if (rightBottom <= windowHeight-100) {
                // Auto-scroll the left sidebar down when right content is fully scrolled
                autoScroll(leftSidebar, "down", sidebarHeight - sidebarViewportHeight);
            } else if (rightTop >= 0) {
                // Auto-scroll the left sidebar up when scrolling back up
                autoScroll(leftSidebar, "up", 0);
            }
        }

        function autoScroll(element, direction, targetScroll) {
            let scrollAmount = element.scrollTop;
            let scrollStep = direction === "down" ? 1 : -1;

            let scrollInterval = setInterval(function () {
                element.scrollTop += scrollStep;
                scrollAmount += scrollStep;

                if ((direction === "down" && scrollAmount >= targetScroll) ||
                    (direction === "up" && scrollAmount <= targetScroll)) {
                    clearInterval(scrollInterval);
                }
            }, 10); // Adjust speed of scrolling
        }

        window.addEventListener("scroll", handleScroll);
    });

    document.querySelectorAll("details").forEach((detail) => {
        detail.addEventListener("toggle", function () {
            let content = this.querySelector("p");

            if (this.open) {
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.opacity = "1";
            } else {
                content.style.maxHeight = "0px";
                content.style.opacity = "0";
            }
        });
    });



</script>

</html>