<!DOCTYPE html>
<html>

<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/build/jquery.steps.css">
</head>

<body>
	<div>
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">

				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<h4 class="text-blue">แบบสอบถาม</h4>
						<p class="mb-30 font-14">กรอกแบบสอบถามโปรดอ่านให้ละเอียด</p>
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
							<h5>ข้อมูลส่วนตัว</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>ชื่อ :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>นามสกุล :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>อายุ :</label>
											<input type="email" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>วัน/เดือน/ปี เกิด :</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date">
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>อีเมล :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>ที่อยู่ปัจจุบัน :</label>
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</section>

							<!-- Step 3 -->
							<h5>แบบสอบถาม</h5>
							<section>
								<br>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>สถานภาพ :</label>
											<div style="padding-left:40px;">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio1">โสด</label>
												</div>

												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio2">สมรส</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio3">อื่น ๆ </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>บุตร :</label>
											<div style="padding-left:40px;">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio12" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio12">มี จำนวน</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio22" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio22">ไม่มี</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>อาชีพ :</label>
											<div style="padding-left:40px;">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio13" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio13">รับราชการ</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio23" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio23">รัฐวิสาหกิจ</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio233" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio233">พนักงานเอกชน</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio23333" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio23333">เจ้าของธุรกิจ</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio233333" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio233333">อาชีพอิสระ</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio2333333" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio2333333">อื่น ๆ </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>รายได้ส่วนตัวต่อเดือน :</label>
											<div style="padding-left:40px;">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio14" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio14">ต่ำกว่า 15,000 บาท</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio24" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio24">15,001-30,000 บาท</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio42" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio42">30,001-50,000 บาท</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio442" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio442">50,001-80,000 บาท</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio452" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio452">80,001 บาท ขึ้นไป</label>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>คุณ หรือ บุตรของคุณมีกรมธรรม์ประกันชีวิตหรือไม่ :</label>
											<div style="padding-left:40px;">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio651" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio651">มี</label>
													<br> ถ้ามี เป็นของบริษัท
													<input type="text" class="form-control">
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio52" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio52">ไม่มี</label>
												</div>

											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>ถ้าคุณตัดสินใจทำประกันชีวิตในอนาคต คุณคิดว่าโครงการเพื่อสิทธิประโยชน์ใดน่าสนใจมากที่สุด(เลือกได้มากกว่า 1 ข้อ) :</label>
											<div style="padding-left:40px;">
												<div class="custom-control custom-checkbox mb-5">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">คุ้มครองชีวิต</label>
												</div>
												<div class="custom-control custom-checkbox mb-5">
													<input type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label" for="customCheck2">การศึกษาบุตร-ธิดา</label>
												</div>
												<div class="custom-control custom-checkbox mb-5">
													<input type="checkbox" class="custom-control-input" id="customCheck3">
													<label class="custom-control-label" for="customCheck3">คุ้มครองสุขภาพ</label>
												</div>
												<div class="custom-control custom-checkbox mb-5">
													<input type="checkbox" class="custom-control-input" id="customCheck4">
													<label class="custom-control-label" for="customCheck4">ลดหย่อนภาษี</label>
												</div>
												<div class="custom-control custom-checkbox mb-5">
													<input type="checkbox" class="custom-control-input" id="customCheck5">
													<label class="custom-control-label" for="customCheck5">คุ้มครองโรคร้ายแรง</label>
												</div>
												<div class="custom-control custom-checkbox mb-5">
													<input type="checkbox" class="custom-control-input" id="customCheck6">
													<label class="custom-control-label" for="customCheck6">เพื่อใช้นามเกษียณอายุ</label>
												</div>
												<div class="custom-control custom-checkbox mb-5">
													<input type="checkbox" class="custom-control-input" id="customCheck7">
													<label class="custom-control-label" for="customCheck7">ผลประโยชน์ทางด้านภาษีนิติบุคล (Keyman Protection)</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio02" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio02">อื่นๆ</label>
													<br>
													โปรดระบุ <input type="text" class="form-control">

												</div>


											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 4 -->
							<h5>ตรวจสอบข้อมูล</h5>
							<section>
								<div class="row">

								</div>
							</section>
						</form>
					</div>
				</div>

				<!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">บันทึกสำเร็จ!</h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								ขอบคุณที่ร่วมทำแบบสอบถามกับเรา
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">ปิด</button>
							</div>
						</div>
					</div>
				</div>
				<!-- success Popup html End -->
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/jquery-steps/build/jquery.steps.js"></script>
	<script>
		$(".tab-wizard").steps({
			headerTag: "h5",
			bodyTag: "section",
			transitionEffect: "fade",
			titleTemplate: '<span class="step">#index#</span> #title#',
			labels: {
				finish: "บันทึก"
			},
			onStepChanged: function(event, currentIndex, priorIndex) {
				$('.steps .current').prevAll().addClass('disabled');
			},
			onFinished: function(event, currentIndex) {
				$('#success-modal').modal('show');
			}
		});
	</script>
</body>

</html>