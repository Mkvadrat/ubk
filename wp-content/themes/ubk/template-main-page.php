<?php
/*
Template name: Main page
Theme Name: Ubk-mebel
Theme URI: http://ubk-mebel.ru/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://ubk-mebel.ru/
Version: 1.0
*/

get_header(); 
?>

    <!-- start main-index -->

    <main class="main">

        <!-- start slider -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme top-slider">
                        <?php
                            global $nggdb;
                            $gallery_id = getNextGallery(get_the_ID(), 'banner_main_page');
                            $gallery_image = $nggdb->get_gallery($gallery_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                            if($gallery_image){
                                foreach($gallery_image as $image) {
                                    if(!$image->exclude == 1){
                            ?>
                                <div><img src="<?php echo nextgen_esc_url($image->imageURL); ?>" alt=""></div>
                            <?php
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- end slider -->
        
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

    </main>

    <!-- end main-index -->

    <!--start form -->

    <div class="container-fluid form-line-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-block">
                        <div class="form">
                            <p class="h2-title-white">Остались вопросы? Напишите нам и наши менеджеры помогут Вам!</p>
                            <input type="text" id="name" placeholder="Ваше Имя">
                            <input type="text" id="phone" placeholder="Ваш телефон">
                            <textarea id="message" placeholder="Вопрос"></textarea>
                            <input class="button" onclick="SendForm();" type="submit" value="Задать вопрос">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end form -->

    <!-- start main-index -->

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="product-list">
                        <li>
                            <img src="/wp-content/themes/ubk/images/product-1.jpg" alt="">
                            <div class="description">
                                <p class="h3-title">ШКАФЫ</p>
                                <p>Шкафы-купе сегодня завоевывают все большую популярность во всем мире. Севастополь тоже не отстает от модных тенденций. Компания MLider предлагает
                                <a href="#">Подробнее</a></p>
                            </div>
                        </li>
                        <li>
                            <img src="/wp-content/themes/ubk/images/product-1.jpg" alt="">
                            <div class="description">
                                <p class="h3-title">ШКАФЫ</p>
                                <p>Шкафы-купе сегодня завоевывают все большую популярность во всем мире. Севастополь тоже не отстает от модных тенденций. Компания MLider предлагает
                                <a href="#">Подробнее</a></p>
                            </div>
                        </li>
                        <li>
                            <img src="/wp-content/themes/ubk/images/product-1.jpg" alt="">
                            <div class="description">
                                <p class="h3-title">ШКАФЫ</p>
                                <p>Шкафы-купе сегодня завоевывают все большую популярность во всем мире. Севастополь тоже не отстает от модных тенденций. Компания MLider предлагает
                                <a href="#">Подробнее</a></p>
                            </div>
                        </li>
                        <li>
                            <img src="/wp-content/themes/ubk/images/product-1.jpg" alt="">
                            <div class="description">
                                <p class="h3-title">ШКАФЫ</p>
                                <p>Шкафы-купе сегодня завоевывают все большую популярность во всем мире. Севастополь тоже не отстает от модных тенденций. Компания MLider предлагает
                                <a href="#">Подробнее</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- end main-index -->
    
<script type="text/javascript">
//форма обратной связи
function SendForm() {
	var data = {
		'action': 'SendForm',
		'name' : $('#name').val(),
        'phone' : $('#phone').val(),
		'message' : $('#message').val()
	};
	$.ajax({
		url:'http://' + location.host + '/wp-admin/admin-ajax.php',
		data:data,
		type:'POST',
		success:function(data){
			swal({
				title: data.message,
				text: "",
				timer: 1000,
				showConfirmButton: false
			});
		}
	});
};
</script>

<?php get_footer(); ?>