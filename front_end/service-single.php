
<?php
include '../back_end/header-f.php';
?>

<div id="main-content">
    <div class="page-title">
        <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
            <div class="content container">
                <h1 class="heading_primary">Dịch Vụ</h1>
                <ul class="breadcrumbs">
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item"><span class="separator"></span></li>
                    <li class="item"><a href="blog.html">Dịch Vụ</a></li>
                    <li class="item"><span class="separator"></span></li>
                    <li class="item active"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-content container">
        <div class="row">
            <main class="site-main col-sm-12 col-md-9 flex-first">
                <?php
                $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

                // Lấy dữ liệu từ cơ sở dữ liệu
                $sqldichvu = "SELECT * FROM dichvu WHERE id = '$id'";
                $resultdichvu = $db->select($sqldichvu);

                if ($resultdichvu->num_rows > 0) {
                    while ($row = $resultdichvu->fetch_assoc()) {
                        ?>
                        <div class="blog-single-content">
                            <article class="post clearfix">
                                <div class="post-content">
                                    <div class="post-media">
                                        <!-- Thay đổi đường dẫn hình ảnh tới đúng đường dẫn của bạn -->
                                        <img src="../assets/img/img-front/blog/single.jpg" alt="<?php echo $row['ten_dv']; ?>">
                                    </div>
                                    <div class="post-summary">
                                        <h2 class="post-title"><?php echo $row['ten_dv']; ?></h2>
                                        <ul class="post-meta">
                                            <li>Ngày Đăng Ký: <?php echo $row['ngay_dang_ky']; ?></li>
                                            <li>Người Tạo: <?php echo $row['nguoi_tao']; ?></li>
                                        </ul>
                                        <div class="post-description">
                                            <div class="post-summary">
                                                <ul class="post-meta">
                                                    <li>by <a href="#">Bobby</a></li>
                                                    <li><span class="separator"></span></li>
                                                    <li><a href="#">Hotel</a>, <a href="#">Travel</a></li>
                                                    <li><span class="separator"></span></li>
                                                    <li>July 01, 2018</li>
                                                    <li><span class="separator"></span></li>
                                                    <li><a href="blog-single.html#comments-list">3 Comments</a></li>
                                                </ul>
                                                <div class="post-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                                        wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                                        lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                                        dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                                                        dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                                        dignissim qui blandit praesent luptatum zzril delenit...</p>
                                                    <blockquote>
                                                        <i class="fa fa-quote-left"></i>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</span>
                                                    </blockquote>
                                                    <figure class="text-center">
                                                        <img src="images/blog/figure.jpg" alt>
                                                        <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        </figcaption>
                                                    </figure>
                                                    <p>Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor
                                                        cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                                        placerat facer possim assum. Typi non habent claritatem insitam; est usus
                                                        legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt
                                                        lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                        dynamicus, qui sequitur.</p>
                                                    <p>Mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam
                                                        nunc putamus parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis
                                                        videntur parum clari, fiant sollemnes in futurum.</p>
                                                </div>
                                                <div class="meta_post">
                                                    <ul class="post-tags">
                                                        <li class="title"><i class="fa fa-tags"></i>Tags:</li>
                                                        <li><a href="#">minimalist</a></li>
                                                        <li><a href="#">color</a></li>
                                                        <li><a href="#">designer</a></li>
                                                    </ul>
                                                    <div class="social-share">
                                                        <ul>
                                                            <li><a class="link facebook" title="Facebook"
                                                                   href="https://www.facebook.com/sharer/sharer.php?u=#"
                                                                   rel="nofollow"
                                                                   onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                                                   target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                            <li><a class="link twitter" title="Twitter"
                                                                   href="https://twitter.com/intent/tweet?url=#&amp;text=TheTitleBlog"
                                                                   rel="nofollow"
                                                                   onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                                                   target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                            <li><a class="link pinterest" title="Pinterest"
                                                                   href="https://pinterest.com/pin/create/button/?url=#"
                                                                   onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i
                                                                            class="ion-social-pinterest"></i></a></li>
                                                            <li><a class="link google" title="Google"
                                                                   href="https://plus.google.com/share?url=#" rel="nofollow"
                                                                   onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                                                   target="_blank"><i class="ion-social-googleplus"></i></a>
                                                            <li><a class="link linkedin" title="LinkedIn"
                                                                   href="http://www.linkedin.com/shareArticle/?url=#" rel="nofollow"
                                                                   onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                                                   target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comments-list" id="comments-list">
                                                <h3 class="total-comments">3 comments</h3>
                                                <ul>
                                                    <li class="comment clearfix">
                                                        <div class="comment-img">
                                                            <img src="images/blog/author1.jpg" alt>
                                                        </div>
                                                        <div class="comment-content">
                                                            <h6>Anna Shubina</h6>
                                                            <span>March 03, 2015</span>
                                                            <a class="reply" href="#post-comment" title="Reply">Reply</a>
                                                            <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan
                                                                est in tempus etos ullamcorper, sem quam suscipit lacus maecenas
                                                                tortor. Erates vitae node metus. Morbi suspendisse a tortor velim
                                                                pellentesque uter justo magna gravida. Pellentesque accumsan, ex in
                                                                tempus ullamcorper terminal.</p>
                                                        </div>
                                                        <ul class="children">
                                                            <li class="comment clearfix">
                                                                <div class="comment-img">
                                                                    <img src="images/blog/author2.jpg" alt>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <h6>Anna Shubina</h6>
                                                                    <span>March 03, 2015</span>
                                                                    <a class="reply" href="#post-comment" title="Reply">Reply</a>
                                                                    <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque
                                                                        accumsan est in tempus etos ullamcorper, sem quam suscipit
                                                                        lacus maecenas tortor. Erates vitae node metus. Morbi
                                                                        suspendisse a tortor velim pellentesque uter justo magna
                                                                        gravida. Pellentesque accumsan, ex in tempus ullamcorper
                                                                        terminal.</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="comment clearfix">
                                                        <div class="comment-img">
                                                            <img src="images/blog/author1.jpg" alt>
                                                        </div>
                                                        <div class="comment-content">
                                                            <h6>Ann Smith</h6>
                                                            <span>March 03, 2018</span>
                                                            <a class="reply" href="#post-comment" title="Reply">Reply</a>
                                                            <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan
                                                                est in tempus etos ullamcorper, sem quam suscipit lacus maecenas
                                                                tortor. Erates vitae node metus. Morbi suspendisse a tortor velim
                                                                pellentesque uter justo magna gravida. Pellentesque accumsan, ex in
                                                                tempus ullamcorper terminal.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="post-comment" id="post-comment">
                                                <h3 class="reply-comment">leave a comment</h3>
                                                <form action="#" method="post" id="comment-form">
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                    <div class="row">
                                                        <div class="col-sm-6"><input placeholder="Name *" id="name" name="name"
                                                                                     type="text" value size="30" required></div>
                                                        <div class="col-sm-6"><input placeholder="Email *" id="email" name="email"
                                                                                     type="email" value size="30" required></div>
                                                    </div>
                                                    <textarea placeholder="Message *" name="message" id="message" cols="45" rows="8"
                                                              required></textarea>
                                                    <input name="submit" type="submit" id="submit" class="submit"
                                                           value="Post Comment">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment" id="post-comment">
                                    <h3 class="reply-comment">Đăng ký dịch vụ</h3>
                                    <form action="process_dangkydichvu.php" method="post" id="dangky-dichvu-form">
                                        <input type="hidden" name="id_dichvu" value="<?php echo $id; ?>">
                                        <input type="date" id="ngay_dang_ky" name="ngay_dang_ky" class="form-control mb-4" placeholder="Ngày đăng ký" required>
                                        <input name="submit_dangkydichvu" type="submit" id="submit_dangkydichvu" class="submit butn-dk" value="Đăng ký dịch vụ">
                                    </form>
                                </div>
                            </article>
                        </div>
                        <?php
                    }
                }
                ?>
            </main>
            <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">
                <!-- Các tiện ích khác của bạn có thể giữ nguyên hoặc chỉnh sửa tùy ý -->
            </aside>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

