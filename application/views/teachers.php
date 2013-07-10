<?php
	$this->load->view("_header");
?>
<style type="text/css" media="screen">
	.tea_img {
		width:130px;
		height:130px;
	}	
</style>

    <section class="banner-shadow">
    	<div id="banner">
	    	<img src="/resources/images/banner-aboutus.jpg" alt="banner" />
	    </div>
	</section><!-- //banner -->

	<section class="aboutus cf">
		<?php
			$this->load->view("_left");
		?>

        <div class="main">
            <div class="main-teachers">
                <ul>
                    <li class="cf">
                        <div class="photo-teachers"><img class="tea_img" src="/resources/images/lee.png" alt="陈晓荷" /></div>
                        <dl>
                            <dt>李运岭</dt>
							<dd>国内优秀设计师</dd>
							<dd>曾赴英国留学，对多媒体设计领域想法创新，见解独特</dd>
							<dd>设计的手机应用曾入选苹果app store【2012年度精选应用】、【编辑推荐】</dd>
							<dd>【时下热门】、【优秀新品推荐】等，多款手机应用在app store排行前列</dd>
                        </dl>
                    </li>
                    <li class="cf">
                        <div class="photo-teachers"><img class="tea_img" src="/resources/images/tao.png" alt="陈晓荷" /></div>
                        <dl>
                            <dt>陶非</dt>
                            <dd>多媒体视觉设计师\自由插画师</dd>
                            <dd>2009年毕业于中国人民大学，数字媒体专业</dd>
							<dd>大学期间就开办画室从事艺术培训工作，</dd>
						<dd>毕业之后从事多媒体设计和插画多向领域</dd>
<dd>设计风格简单并不是单调、大方不失细腻、</dd>
<dd>利用个性化的色彩、勇于与众不同。其绘画风格时而婉约唯美</dd>
<dd>时而厚重沉稳，绘画技巧独特纯熟。</dd>
                        </dl>
                    </li>
                    <li class="cf">
                        <div class="photo-teachers"><img class="tea_img" src="/resources/images/chen.png" alt="陈晓荷" /></div>
                        <dl>
                            <dt>陈鹤</dt>
							<dd>就读于北京电影学院动漫设计专业</dd>
							<dd>绘画风格温婉独特，色彩清新宜人</dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- //contactus -->

<?php
	$this->load->view("_footer");
?>

