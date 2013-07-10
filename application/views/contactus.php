<?php
	$this->load->view("_header");
?>
    <section class="banner-shadow">
    	<div id="banner">
	    	<img src="/resources/images/banner-contactus.jpg" alt="banner" />
	    </div>
	</section><!-- //banner -->

	<section class="contactus cf">
		<div class="title cf">
			<h2 class="fl pngfix">报名表<br/><span>Registration Form</span></h2>
		</div>
    	<div class="bd cf">
            <div class="contactus">
        		<table>
                    <tr>
                        <td>姓名：
                            <input class="input" type="text">
                            <span><em>*</em>请填写您的真实姓名</span>
                        </td>
                    </tr>
                    <tr>
                        <td>性别：
                            <input type="radio" name="radio" cheacked="checked">男
                            <input type="radio" name="radio">女
                        </td>
                    </tr>
                    <tr>
                        <td>手机：
                            <input class="input" type="text">
                            <span><em>*</em>请留下联系电话，以便在必要时我们的老师与您联系确认信息</span>
                        </td>
                    </tr>
                    <tr>
                        <td>邮箱：
                            <input class="input" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>你所感兴趣的课程：
                            <select class="select">
                                <option value="">素描课程</option>
                                <option value="">色彩课程</option>
                                <option value="">设计课程</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>您还有什么要补充的吗？</p>
                            <textarea class="textarea" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="ac">
                            <input class="button" type="button" value="确认提交">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section><!-- //contactus -->
 

<?php
	$this->load->view("_footer");
?>

