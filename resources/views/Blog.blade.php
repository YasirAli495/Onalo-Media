<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Blog.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
      /* Basic styling for modal */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: none;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    padding: 20px;
    width: 80%;
    max-width: 800px;
    border-radius: 8px;
    position: relative;
    overflow-y: auto;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 30px;
    cursor: pointer;
}

.blog-card {
    width: 30%;
    margin: 10px;
    background-color: #f4f4f4;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.blog-title {
    font-size: 18px;
    font-weight: bold;
}

.blog-description {
    font-size: 14px;
    color: #666;
}

.read-more {
    
    cursor: pointer;
}

    </style>
</head>

<body>
   @include('include.header')
            <!-- Banner -->
            <div class="blog-banner">
              <img src="../images/services.png" alt="">
            </div>
            <!-- Blog -->
             <div class="blog-container">
              <div class="blog">
           
            
            
                @foreach($blogs as $blog)
                <section class="blog-card">
                    <img src="{{ asset($blog->image) }}" alt="Blog Image" class="blog-image">
                    <div class="blog-details">
                        <div class="blog-meta">
                            <span class="author">{{ $blog->author }}</span> | 
                            <span class="date">{{ \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') }}</span> | 
                            <span class="comments">No Comments</span>
                        </div>
                        <h2 class="blog-title">{{ $blog->title }}</h2>
                        <p class="blog-description">
                            {{ Str::limit($blog->description, 200) }} [... <a href="#" class="read-more" data-id="{{ $blog->id }}">Read More</a>]
                        </p>
                    </div>
                </section>
                @endforeach
                
                <!-- Full-screen modal for showing complete blog -->
                <div id="full-blog-modal" class="modal" style="display:none;">
                    <div class="modal-content">
                        <span id="close-btn" class="close-btn">&times;</span>
                        <h2 id="modal-title"></h2>
                        <p id="modal-author"></p>
                        <p id="modal-date"></p>
                        <p id="modal-description"></p>
                    </div>
                </div>
                


           
            <div class="pagination">
              <button class="page-btn">&lt;</button>
              <button class="page-btn">1</button>
              <button class="page-btn active">2</button>
            </div>
          </div>
          <div class="custom-component">
            <!-- Search Section -->
            <div class="component-section search" data-aos="fade-left" data-aos-duration="1000">
              <h3>Search</h3>
              <div class="search-bar">
                <input type="text" placeholder="Search">
                <button><img src="../images/sreach.svg" alt="Search Icon"></button>
              </div>
            </div>
            <!-- Recent Posts Section -->
            <div class="component-section recent-posts" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
              <h3>Recent Posts</h3>
              <div class="post">
                <img src="../images/Digital Media StrategiesB-1.jpg" alt="Post Thumbnail">
                <div>
                  <span>September 19, 2024</span>
                  <p>The Power of Social Media Marketing</p>
                </div>
              </div>
              <div class="post">
                <img src="../images/Driving Digital Transformation The Future of MediaB-2.jpg" alt="Post Thumbnail">
                <div>
                  <span>September 19, 2024</span>
                  <p>The Importance of SEO in Digital</p>
                </div>
              </div>
              <div class="post">
                <img src="../images/Emerging Technologies B-3.jpg" alt="Post Thumbnail">
                <div>
                  <span>September 19, 2024</span>
                  <p>The Power of Content Marketing: How</p>
                </div>
              </div>
            </div>
            <!-- Tags Section -->
            <div class="component-section tags" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
              <h3>Tags</h3>
              <div class="tags-list">
                <a href="#">Digital</a>
                <a href="#">Marketing</a>
                <a href="#">SEO</a>
              </div>
            </div>
          </div>
          </div>
          
          
       <!-- Footer -->
      @include('include.footer')


      <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Get modal and close button
    var modal = document.getElementById("full-blog-modal");
    var closeBtn = document.getElementById("close-btn");

    // Event listener for Read More button
    var readMoreButtons = document.querySelectorAll('.read-more');
    readMoreButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            var blogId = e.target.getAttribute('data-id');
            
            // Fetch the full blog details from the server
            fetch(`/getBlogDetails/${blogId}`)
                .then(response => response.json())
                .then(data => {
                    // Set the modal content with the blog data
                    document.getElementById("modal-title").innerText = data.title;
                    document.getElementById("modal-author").innerText = "By " + data.author;
                    document.getElementById("modal-date").innerText = data.date;
                    document.getElementById("modal-description").innerText = data.description;
                    
                    // Show the modal
                    modal.style.display = "flex";
                });
        });
    });

    // Event listener for closing the modal
    closeBtn.addEventListener('click', function() {
        modal.style.display = "none";
    });

    // Close the modal when clicking outside the modal content
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});

      </script>
</html>