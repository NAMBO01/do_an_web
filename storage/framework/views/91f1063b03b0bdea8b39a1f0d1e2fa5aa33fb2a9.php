<div class="container">

    <!---->
    <div class="main">
        <div class="reservation_top">
            <div class=" contact_right">
                <h3>Contact Form</h3>
                <div class="contact-form">
                    <form method="post" action="contact-post.html">
                        <?php echo Form::open(['route' => 'savecreatenewaccount', 'class' => 'register_form', 'files' => true]); ?>

                        <?php echo Form::text('Name', null, [
                            'value' => 'Email',
                            'class' => 'textbox',
                            'onfocus' => "this.value == '';",
                            'onblur' => "if (this.value == '') {this.value = 'Email';}",
                        ]); ?>

                        
                        <?php echo Form::textarea('My text', null, [
                            'value' => 'Message',
                            'class' => 'form-control',
                            'onfocus' => "this.value == '';",
                            'onblur' => "if (this.value == '') {this.value = 'Message';}",
                        ]); ?>

                        
                        <input type="submit" value="Send">
                        <?php echo Form::close(); ?>

                        <div class="clearfix"> </div>
                    </form>
                    <address class="address">
                        <p>1283 PHẠM THẾ HIỂN,PHƯỜNG 5 <br> QUẬN 8,THÀNH PHỐ HỒ CHÍ MINH.</p>
                        <dl>
                            <dt> </dt>
                            <dd>Khiếu Nại:<span> 1800 2063</span></dd>
                            <dd>Mua Hàng:<span> 1800 2079</span></dd>
                            <dd>E-mail:&nbsp; <a href="mailto@vintage.com">PsportNshop@gmail.com</a></dd>
                        </dl>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate">DANH MỤC </h3>
            <ul class="menu">
                <li class="item1"><a href="#">NỔI BẬT<img class="arrow-img" src="images/arrow1.png"
                            alt="" /> </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="<?php echo e(url('product')); ?>"> NIKE </a></li>
                        <li class="subitem2"><a href="<?php echo e(url('product')); ?>"> JORDAN </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>"> PEAK SPORT </a></li>
                    </ul>
                </li>
                <li class="item2"><a href="#">GIÀY DÉP<img class="arrow-img " src="images/arrow1.png"
                            alt="" /></a>
                    <ul class="cute">
                        <li class="subitem1"><a href="<?php echo e(url('product')); ?>">BASKETBALL </a></li>
                        <li class="subitem2"><a href="<?php echo e(url('product')); ?>">SNEAKER </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">RUNNING </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">SLIDE & SANDALS </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">PEAK SPORT </a></li>
                    </ul>
                </li>
                <li class="item3"><a href="#">QUẦN ÁO<img class="arrow-img img-arrow" src="images/arrow1.png"
                            alt="" /> </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="<?php echo e(url('product')); ?>">Cute Kittens </a></li>
                        <li class="subitem2"><a href="<?php echo e(url('product')); ?>">Strange Stuff </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">Automatic Fails</a></li>
                    </ul>
                </li>
                <li class="item4"><a href="#">PHỤ KIỆN <img class="arrow-img img-left-arrow"
                            src="images/arrow1.png" alt="" /></a>
                    <ul class="cute">
                        <li class="subitem1"><a href="<?php echo e(url('product')); ?>">PROCOMBAT </a></li>
                        <li class="subitem2"><a href="<?php echo e(url('product')); ?>">SOCKS </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">BALL </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">BACKPACKS </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">OTHERS </a></li>
                    </ul>
                </li>
                <li class="item4"><a href="#">SALES<img class="arrow-img img-left-arrow" src="images/arrow1.png"
                            alt="" /></a>
                    <ul class="cute">
                        <li class="subitem1"><a href="<?php echo e(url('product')); ?>">FOOTWARE SALES </a></li>
                        <li class="subitem2"><a href="<?php echo e(url('product')); ?>">APPAREL SALES </a></li>
                        <li class="subitem3"><a href="<?php echo e(url('product')); ?>">ACESSORIES SALES </a></li>
                    </ul>
                </li>
                <ul class="kid-menu ">
                    <li><a href="<?php echo e(url('product')); ?>">SHOES CARE</a></li>
                    <li class="menu-kid-left"><a href=<?php echo e(url('contact')); ?>>CONTACT US</a></li>
                </ul>
            </ul>
        </div>
        <!--initiate accordion-->
        <script type="text/javascript">
            $(function() {
                var menu_ul = $('.menu > li > ul'),
                    menu_a = $('.menu > li > a');
                menu_ul.hide();
                menu_a.click(function(e) {
                    e.preventDefault();
                    if (!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true, true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true, true).slideUp('normal');
                    }
                });

            });
        </script>
        <div class=" chain-grid menu-chain">
            <a href="single.html"><img class="img-responsive chain" src="images/sneaker_bag.jpg" alt=" " /></a>
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid"> 299,000 VND</span>
                <span class="reducedfrom">500,000 VND</span>
                <h6><a href="single.html">Tee Nike Full Logo - Black</a></h6>
            </div>
        </div>
        <a class="view-all all-product" href="<?php echo e(url('product')); ?>">VIEW ALL PRODUCTS<span> </span></a>
    </div>

    <a class="view-all all-product" href="<?php echo e(url('product')); ?>">VIEW ALL PRODUCTS<span> </span></a>
</div>
</div>
<?php /**PATH C:\wamp64\www\do_an-app\resources\views/modules/mod_contact.blade.php ENDPATH**/ ?>