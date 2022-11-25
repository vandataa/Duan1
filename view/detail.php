<div class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="common-img-details">

                        <?php
                        $ulr = explode('/', $video);
                        $hinhpad = 'uploads/' . $hinh;
                        echo '
                        
                        <span>Tips & Trick</span>
                        <h2>' . $vitri . '</h2>
<ul>
<li>
<i class="bx bxs-user"></i>
By:
<a href="#">admin</a>
</li>
<li>
<i class="bx bx-calendar"></i>
October 19, 2021
</li>
</ul>
</div>
<img src="' . $hinhpad . '" alt="Details">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing</p>
<div class="video-item">
<ul class="align-items-center">
<li>
<iframe src="https://www.youtube.com/embed/' . $ulr[3] . '" frameborder="0" controls autoplay></iframe>
<i class="bx bx-play"></i>
</button>
</li>
<li>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam esse cum iusto reprehenderit, qui ducimus deleniti non animi, autem vitae assumenda omnis distinctio voluptatum possimus similique perspiciatis doloribus, dicta numquam.</p>
</li>
</ul>
</div>
<blockquote>
<i class="bx bxs-quote-left"></i>
“It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters”
</blockquote>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English</p>
                            
<form action="index.php?home=tuvan" method="post">
<input type="hidden" name="id" value='.$id.'>
<input type="hidden" name="vitri" value='.$vitri.'>
<input type="submit" name="nhan" class="btn common-btn" value="Nhận tư vấn">
</form>
';

                        ?>
                        <div class="tags align-items-center">
                            <div class="left">
                                <form action="" method="post"></form>
                                <input type="hidden" name="" id="">
                                <ul>
                                    <li>
                                        <span>Share:</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-youtube'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right">
                                <ul>
                                    <li>
                                        <span>Tags:</span>
                                    </li>
                                    <li>
                                        <a href="#">#Home</a>
                                    </li>
                                    <li>
                                        <a href="#">#Apartment</a>
                                    </li>
                                    <li>
                                        <a href="#">#Cottage</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comments">
                            <h3>Comments</h3>
                            <ul>
                                <li>
                                    <img src="assets/images/blog/comment1.jpg" alt="Details">
                                    <h4>Jenthen Benther</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro provident ipsa
                                        esse velit omnis quos ut cupiditate quasi non quidem vero tempore deserunt</p>
                                    <a href="#">
                                        <i class='bx bxs-heart'></i>
                                        Likes
                                    </a>
                                    <a href="#">
                                        <i class='bx bxs-share'></i>
                                        Reply
                                    </a>
                                    <span>15 days ago</span>
                                </li>
                                <li>
                                    <img src="assets/images/blog/comment2.jpg" alt="Details">
                                    <h4>Sharlin Alina</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro provident ipsa
                                        esse velit omnis quos ut cupiditate quasi non quidem vero tempore deserunt</p>
                                    <a href="#">
                                        <i class='bx bxs-heart'></i>
                                        Likes
                                    </a>
                                    <a href="#">
                                        <i class='bx bxs-share'></i>
                                        Reply
                                    </a>
                                    <span>14 days ago</span>
                                </li>
                                <li>
                                    <img src="assets/images/blog/comment3.jpg" alt="Details">
                                    <h4>Kerlos Bils</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro provident ipsa
                                        esse velit omnis quos ut cupiditate quasi non quidem vero tempore deserunt</p>
                                    <a href="#">
                                        <i class='bx bxs-heart'></i>
                                        Likes
                                    </a>
                                    <a href="#">
                                        <i class='bx bxs-share'></i>
                                        Reply
                                    </a>
                                    <span>13 days ago</span>
                                </li>
                            </ul>
                        </div>
                        <div class="common-details-contact">
                            <h3>Leave A Comment</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea id="your-message" rows="8" class="form-control"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn common-btn">
                                            Post A Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="search widget-item">
                            <form method="post" action="index.php?home=home_same">
                                <input type="text" class="form-control" name="kyw" placeholder="Search Here...">
                                <input type="submit" name="kyw" class="btn">
                                    <i class='bx bx-search'></i>
                                
                            </form>
                        </div>
                        <div class="popular widget-item">
                            <h3>News And Blog</h3>
                            <div class="inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="assets/images/services/details6.jpg" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">Extension Cottage Villa</a>
                                        </h4>
                                        <a class="location" href="#">
                                            <i class='bx bx-current-location'></i>
                                            View, New York
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="assets/images/services/details7.jpg" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">Sag Harbor Cottage And Resort</a>
                                        </h4>
                                        <a class="location" href="#">
                                            <i class='bx bx-current-location'></i>
                                            6B, New York
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="assets/images/services/details8.jpg" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">Construction Industry And Office</a>
                                        </h4>
                                        <a class="location" href="#">
                                            <i class='bx bx-current-location'></i>
                                            6B, 1st View
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="categories widget-item">
                            <h3>Categories</h3>
                            <ul>
                                <?php
                                foreach ($same_home as $home ) {
                                    extract($home);
                                    echo '
                                    <li>
                                    <a href="index.php?home=detail&id='.$id.'">
                                        '.$vitri.'
                                        <span>(10)</span>
                                    </a>
                                </li>
                                    ';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="tags widget-item">
                            <h3>Tags</h3>
                            <ul>
                                <li>
                                    <a href="#">Apartment</a>
                                </li>
                                <li>
                                    <a href="#">New Properties</a>
                                </li>
                                <li>
                                    <a href="#">House</a>
                                </li>
                                <li>
                                    <a href="#">Villa</a>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="subscribe-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Subscribe To Our Newsletter</span>
                <h2>Sign Up For Newsletter And Get The Latest News And Updates</h2>
            </div>
            <div class="subscribe-content">
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required
                        autocomplete="off">
                    <button class="btn common-btn" type="submit">
                        Subscribe
                        <i class='bx bxs-paper-plane'></i>
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
                <img src="assets/images/subscribe-main1.png" alt="Subscribe">
            </div>
        </div>
    </div>