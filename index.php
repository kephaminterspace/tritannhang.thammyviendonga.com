<!---->
<?php
$message = '';
$t=time();
if(isset($_POST['name'])) {
$arr = array(
    'properties' => array(
        array(
            'property' => 'email',
            'value' => $_POST['email']
        ),
        array(
            'property' => 'firstname',
            'value' => $_POST['name']
        ),
        array(
            'property' => 'lastname',
            'value' => ''
        ),
        array(
            'property' => 'phone',
            'value' => $_POST['phone']
        ),
        array(
            'property' => 'note',
            'value' => $_POST['note']
        ),
        array(
            'property' => 'aff_source',
            'value' => $_POST['aff_source']
        ),
        array(
            'property' => 'aff_sid',
            'value' => $_POST['aff_sid']
        ),
        array(
            'property' => 'identifier',
            'value' => $t
        ),
        array(
            'property' => 'hs_lead_status',
            'value' => "NEW"
        )
    )
);

$post_json = json_encode($arr);

$endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=e205b78c-66de-43f8-88c2-0d62b81c67d1";
$ch = @curl_init();
@curl_setopt($ch, CURLOPT_POST, true);
@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
@curl_setopt($ch, CURLOPT_URL, $endpoint);
@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = @curl_exec($ch);
$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_errors = curl_error($ch);
@curl_close($ch);
    if ($status_code == 200) {
        header('Location: thank.php');
        die();
    }else{
        $message = 'Email đã tồn tại';
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Theme Company Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="pagestyle" rel="stylesheet" type="text/css" href="media/css/mb/style.css" />
	<script>
		function layoutHandler(){
			var styleLink = document.getElementById("pagestyle");
			if(window.innerWidth < 480){
				styleLink.setAttribute("href", "media/css/mb/style.css");
			} else if(window.innerWidth > 1000){
				styleLink.setAttribute("href", "media/css/pc/style.css");
			} else {
				styleLink.setAttribute("href", "media/css/pc/style.css");
			}
		}
		window.onresize = layoutHandler;
		layoutHandler();
	</script>
</head>
<body id="landingPage" >
<nav class="navbar  navbar-light bg-faded navbar-fixed-top effect header" style="opacity: 0">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
		</div>
		<a class="navbar-brand" href="#landingPage"><img src="media/images/logo.png" alt=""></a>
		<div class="collapse navbar-toggleable-md" id="navbar-header">
			<ul class="nav navbar-nav menu">
				<li><a href="#page1">Trị tàn nhang</a></li>
				<li><a href="#page2">Yellow Laser Advanced</a></li>
				<li><a href="#page3">Khách hàng</a></li>
				<li><a href="#page4">Khuyến Mãi</a></li>
			</ul>
			<ul class="nav navbar-nav float-sm-right dktop form-inline">
				<li><a class="btn" href="tel:19006499"><span class="icon-phone"></span> 1900.6499</a></li>
				<li>
					<a class="btn pc" href="#page4"><span class="icon-edit"></span> Đăng ký ngay</a>
					<a class="btn mb" href="#form"><span class="icon-edit"></span> Đăng ký ngay</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<section id="page1">
	<div class="container">
		<div class="regist pc">
			<a class="hvr-float-shadow" href="#page4"></a>
		</div>
		<div class="regist mb">
			<a class="hvr-float-shadow" href="#form"></a>
		</div>
	</div>
</section>

<section id="page2">
	<div class="container">
		<div class="col-md-12 col-lg-6 boxtech">
			<h2 class="pagett">Những thắc măc về công nghệ </h2>
			<h3 class="pagett2">Yellow Laser Advanced</h3>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Yellow Laser Advanced có chữa khỏi tàn nhang sau 1 lần điều trị không?
							</a>
						</h5>
					</div>

					<div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<article>
								<p>Tàn nhang là những sắc tố melanin nông ngay trên bề mặt da, với bước sóng 1064 nm sẽ loại bỏ hoàn toàn các hắc sắc tố giúp làn da của bạn trở nên Sạch – Sáng – Hồng – Mịn, Ngay sau 1 lần thực hiện.</p>
							</article>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingTwo">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Yellow Laser Advanced điều trị có đau rát không?
							</a>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="card-block">
							<p>Với việc được gây tê trước khi tiến hành trên bề mặt da bị tàn nhang, nên hoàn toàn không có bất kỳ vấn đề nào đau rát hay khó chịu cả</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingThree">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Tàn nhang có tái phát sau điều trị không?
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="card-block">
							<p>Tàn nhang không bị tái phát  sau điều trị nếu bạn có chế độ ăn uống sinh hoạt điều độ để không ảnh hưởng đến sự thay đổi nội tiết tố</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="page3">
	<div class="container">
		<h2 class="pagett">Hàng nghìn khách hàng đã lấy lại sự tự tin</h2>
		<h3 class="pagett2">với làn da sáng - hồng - sạch - mịn sạch tàn nhang</h3>
		<div class="row">
			<div class="col-md-12 col-lg-6">
				<div class="doctor">
					<article>
						<img src="media/images/p3-1.jpg" alt="">
						<b>Bác sĩ Thira</b>
						<i>10 năm kinh nghiệm trong Ngành điều trị thẩm mỹ. Chuyên khoa điều trị Laser</i>
					</article>
					<article>
						<img src="media/images/p3-2.jpg" alt="">
						<b>Bác sĩ Như</b>
						<i>20 năm kinh nghiệm trong Ngành điều trị thẩm mỹ. Chuyên khoa điều trị Laser</i>
					</article>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 ">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner text-xs-center " role="listbox">
						<div class="carousel-item active">
							<img src="media/images/p3-sl1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img src="media/images/p3-sl2.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img src="media/images/p3-sl3.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img src="media/images/p3-sl4.jpg" alt="First slide">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

	</div>
</section>

<section id="page4">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<figure>
					<h2>Khuyến mãi Tháng 12</h2>
					<p>Thẩm mỹ viện Đông Á luôn mong muốn mang lại cho khách hàng kết quả thẩm mỹ hoàn hảo nhất, nhằm mang đến lợi ích cao nhất cho khách hàng, Hệ thống chuỗi Đông Á Beauty áp dụng chương trình ưu đãi đặc biệt dành cho tháng 12.</p>
				</figure>
			</div>
			<div class="col-md-12 col-lg-4">
				<div id="form"></div>
				<div class="form">
					<div>
						<h3> Đăng ký nhận khuyến mại</h3>
						<div class="deal">Chi phí  6 - 12 triệu  <b>sale off 20%</b></div>
						<hr>
						<article>
							<form class="contact-form" id="contactform" method="post" action="index.php#page4">
								<?php if(isset($message)){ ?>
									<p style="color: red; "> <?php echo $message; ?></p>
								<?php } ?>
								<div class="fct">
									<input id="name" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" type="text" required placeholder="* Họ tên" required oninvalid="setCustomValidity('Họ tên không để trống')" oninput="setCustomValidity('')">
									<input id="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" type="text" required placeholder="* Email" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Email không chính xác!')" oninput="setCustomValidity('')">
									<input id="phone" name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>" type="text" required placeholder="* Điện thoại" required pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')">
									<textarea name="note" id="note" cols="30" rows="10" placeholder="Ghi chú"><?php if(isset($_POST['note'])) { echo $_POST['note']; } ?></textarea>
									<input type="hidden" name="aff_source" id="aff_source" class="aff_source" value=""/>
									<input type="hidden" name="aff_sid" id="aff_sid" class="aff_sid" value=""/>
								</div>
								<div class="dkbt">
									<input class="target fbt bmk submit_s" type="submit" value="Đăng ký">
								</div>
							</form>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="page5">
	<script type="text/javascript" src="http://quangcao247.com.vn/donga/footer.js"></script>
</section>



<script src="media/js/jquery.min.js"></script>
<script src="media/js/bootstrap.min.js"></script>
<script src="media/js/slide_touch.js"></script>
<script src="media/js/setup.js"></script>

<script src="//cdn.accesstrade.vn/js/tracking.js" ></script>
<script type="text/javascript">
	AT.track();
	function clearValidity() {
		document.getElementById('yes').setCustomValidity('');
	}

	function onInvalidCustom(idstr) {
		var me = document.getElementById(idstr);
		me.setCustomValidity('Số điện thoại không chính xác');
		//me.setCustomValidity('');
	}

	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length,c.length);
			}
		}
		return "";
	}
	$("#aff_source").val(getCookie("_aff_network"));
	$("#aff_sid").val(getCookie("_aff_sid"));
</script>


</body>
</html>
