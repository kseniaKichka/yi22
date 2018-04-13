<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 14:11
 */

?>

<div class="container show_button single_blog_content">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
            <div class="row left_content">
                <img src="images/640x418.jpg" alt="">
                <h2>Learn HTML Basics</h2>
                <h3>Posted by John Doe on 21 January</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipiscing. Aliquam rhoncus ipsum ac lacus ultrices<br>
                    nec aliquam magna ultricies. Etiam vitae leo urna. Sed non vestibulum nisl non finibus nulla.<br>
                    Maecenas blandit dui mattis ullamcorper est sed pulvinar sapien.<br>
                    Vestibulum laoreet mauris eu viverra tincidunt<br>
                    orci justo congue libero, vitae gravida.
                    <br>
                    <br>
                    <i class="i"> Lorem ipsum dolor sit amet consectetur adipiscing. Aliquam rhoncus ipsum ac lacus ultrices<br>
                        nec aliquam magna ultricies. Etiam vitae leo urna. Sed non vestibulum nisl non finibus nulla.<br>
                        Maecenas blandit dui mattis ullamcorper est sed pulvinar sapien.<br>
                        Vestibulum laoreet mauris eu viverra tincidunt<br>
                        orci justo congue libero, vitae gravida.</i>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipiscing. Aliquam rhoncus ipsum ac lacus ultrices<br>
                    nec aliquam magna ultricies. Etiam vitae leo urna. Sed non vestibulum nisl non finibus nulla.<br>
                    Maecenas blandit dui mattis ullamcorper est sed pulvinar sapien.<br>
                    Vestibulum laoreet mauris eu viverra tincidunt<br>
                    orci justo congue libero, vitae gravida.
                </p>
            </div>
            <div class="share_blog">
                <h2>Share via:</h2>
                <section class="share_blog_img">
                    <a href="#"><img src="images/facebook_blog.png" alt=""></a>
                    <a href="#"><img src="images/google_blog.png" alt=""></a>
                    <a href="#"><img src="images/twitter_blog.png" alt=""></a>
                    <a href="#"><img src="images/pinterest_blog.png" alt=""></a>
                </section>
            </div>
            <div class="comments">
                <h2>Comments:</h2>
                <section class="user_info">
                    <img src="images/600x600.jpg" alt="">
                    <h3>John Dow</h3>
                    <p><i>Posted 14 January 2017</i></p>
                    <p>"Lorem ipsum dolor sit amet consectetur adipiscing. Aliquam rhoncus ipsum ac lacus ultrices<br>
                        nec aliquam magna ultricies. Etiam vitae leo urna. Sed non vestibulum nisl non finibus nulla.<br>
                        Maecenas blandit dui mattis ullamcorper est sed pulvinar sapien.<br>
                        Vestibulum laoreet mauris eu viverra tincidunt<br>
                        orci justo congue libero, vitae gravida."
                    </p>
                </section>
                <hr>
                <section class="user_info">
                    <img src="images/600x600.jpg" alt="">
                    <h3>Alex Mahone</h3>
                    <p><i>Posted 12 February 2017</i></p>
                    <p>"Lorem ipsum dolor sit amet consectetur adipiscing. Aliquam rhoncus ipsum ac lacus ultrices<br>
                        nec aliquam magna ultricies. Etiam vitae leo urna. Sed non vestibulum nisl non finibus nulla.<br>
                        Maecenas blandit dui mattis ullamcorper est sed pulvinar sapien.<br>
                        Vestibulum laoreet mauris eu viverra tincidunt<br>
                        orci justo congue libero, vitae gravida."
                    </p>
                </section>
                <hr>
                <section class="user_info">
                    <img src="images/600x600.jpg" alt="">
                    <h3>Bob Swagger</h3>
                    <p><i>Posted 22 March 2017</i></p>
                    <p>"Lorem ipsum dolor sit amet consectetur adipiscing. Aliquam rhoncus ipsum ac lacus ultrices<br>
                        nec aliquam magna ultricies. Etiam vitae leo urna. Sed non vestibulum nisl non finibus nulla.<br>
                        Maecenas blandit dui mattis ullamcorper est sed pulvinar sapien.<br>
                        Vestibulum laoreet mauris eu viverra tincidunt<br>
                        orci justo congue libero, vitae gravida."
                    </p>
                </section>
            </div>
            <div class="comment_input">
                <h2>Leave a comment here.</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 single_blog_input">
                        <form>
                            <div class = "col-xs-12 col-sm-6 col-md-4">
                                <input name="name"
                                       type="text"
                                       value="Name"
                                       onblur="if (this.value==='') this.value = 'Name'"
                                       onfocus="if (this.value==='Name') this.value = ''">
                            </div>
                            <div class = "col-xs-12 col-sm-6 col-md-4 last">
                                <input name="last"
                                       type="text"
                                       value="Last"
                                       onblur="if (this.value==='') this.value = 'Last'"
                                       onfocus="if (this.value==='Last') this.value = ''">
                            </div>
                            <div class = "col-xs-12 col-sm-12 col-md-4 email">
                                <input name="email" class="email_single_blog"
                                       type="email"
                                       value="Email"
                                       onblur="if (this.value==='') this.value = 'Email'"
                                       onfocus="if (this.value==='Email') this.value = ''">
                            </div>
                            <div class = "col-xs-12 col-sm-12 col-md-12 message">
                              <textarea name = "message"
                                        onblur="if (this.value==='') this.value = 'Message'"
                                        onfocus="if (this.value==='Message') this.value = ''" >Message</textarea>
                            </div>
                            <div class = "col-xs-12 col-sm-12 col-md-3 send_comment">
                                <input type = "submit" value = "Post Comment" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 single_blog">
            <div class="right_content recent_posts">
                <h2>Recent Posts</h2>
                <section class="recent_info">
                    <a href="single_blog.html">
                        <img src="images/640x418.jpg" alt="">
                        <h3>Learn HTML Bascis</h3>
                        <p>20 June 2017</p>
                    </a>
                </section>
                <hr>
                <section class="recent_info">
                    <a href="single_blog.html">
                        <img src="images/640x418.jpg" alt="">
                        <h3>Learn CSS Basics</h3>
                        <p>10 January 2017</p>
                    </a>
                </section>
                <hr>
                <section class="recent_info">
                    <a href="single_blog.html">
                        <img src="images/640x418.jpg" alt="">
                        <h3>Learn PHP Basics</h3>
                        <p>11 March 2017</p>
                    </a>
                </section>
                <hr>
                <section class="recent_info">
                    <a href="single_blog.html">
                        <img src="images/640x418.jpg" alt="">
                        <h3>Learn jQuery Basics</h3>
                        <p>14 February 2017</p>
                    </a>
                </section>
            </div>
            <div class="right_content category">
                <h2>Category</h2>
                <hr>
                <a href="#">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>IT Technology</p>
                </a>
                <hr>
                <a href="#">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Network Solutions</p>
                </a>
                <hr>
                <a href="#">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Desktop Help</p>
                </a>
                <hr>
                <a href="#">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Design Industry</p>
                </a>
                <hr>
                <a href="#">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Art and Paint Talent</p>
                </a>
            </div>
            <div class="right_content tags">
                <h2>Tags</h2>
                <a href="#">
                    <p>Technology</p>
                </a>
                <a href="#">
                    <p>Info Industry</p>
                </a>
                <a href="#">
                    <p>Art</p>
                </a>
                <a href="#">
                    <p>HTML</p>
                </a>
                <a href="#">
                    <p>CSS</p>
                </a>
                <a href="#">
                    <p>Front End Developing</p>
                </a>
            </div>
        </div>
    </div>
</div>
