<script src="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js">
</script>
<!-- hover mouse -->
<div class="container-fluid" style="height: 500px;">
    <div class="row mt-5 pb-5 justify-content-center align-items-center bg-light" style="height: 500px;">
        <div class="col-lg-3 col-md">
            <h4 class="text-dark">Địa chỉ</h4>
            <p>Đường 30/4, Phường Hưng Lợi, Quận Ninh Kiều, Thành Phố Cần Thơ.</p>
        </div>
        <div class="col-lg-3 col-md">
            <h4 class="text-dark">Gọi điện</h4>
            <p>Hãy gọi cho chúng tôi để nhận được phục vụ tốt nhất.</p>
            <a class="text-decoration-none" href="#">0776562237</a>
        </div>
        <div class="col-lg-3 col-md">
            <h4 class="text-dark">Email</h4>
            <p>Gửi email cho chúng tôi để nhận được chi tiết về dịch vụ.</p>
        </div>
    </div>
</div>
<div class="container bg-secondary-subtle align-items-center"
    style="height: 700px; margin-top: 50px; margin-bottom: 20px;">
    <header class="mb-5" style="margin-top: 20px;">
        <h2 class="text-uppercase h5">Gửi Phản Hồi</h2>
    </header>
    <div class="row">
        <div class="col-md-7 mb-5 mb-md-0">
            <form id="contact-form" method="post" action="send.php">
                <input type="hidden" name="_token" value="zI58qJqH6CBUeUUQpZU1Hm9bvtR7oQxN3jF6dovz">
                <div class="controls">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname" class="form-label">Tên *</label>
                                <input type="text" name="firstname" id="firstname" placeholder="Nhập tên"
                                    required="required" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname" class="form-label">Họ *</label>
                                <input type="text" name="lastname" id="lastname" placeholder="Nhập họ"
                                    required="required" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Địa Chỉ Email *</label>
                        <input type="email" name="email" id="email" placeholder="Nhập địa chỉ email" required="required"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="form-label">Số Điện Thoại *</label>
                        <input type="telno" name="phone_number" id="phone_number" placeholder="Nhập số điện thoại"
                            required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Tiêu Đề *</label>
                        <input type="text" name="subject" id="subject" placeholder="Nhập tiêu đề" required="required"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Nội Dung Tin Nhắn *</label>
                        <textarea rows="4" name="message" id="message" placeholder="Nhập nội dung" required="required"
                            class="form-control"></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-outline-dark">Gửi</button>
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <font color="#212529" face="Roboto, Helvetica, Arial, sans-serif"><span
                    style="font-size: 18px; letter-spacing: 1.8px; text-transform: uppercase;"><b>Liên hệ
                        2TSHOP</b></span></font>&nbsp;<br><br><b>Trụ sở chính :&nbsp;</b>Hẻm 391, Đường 30/4
            Hưng Lợi, Ninh Kiều, Cần Thơ, Việt Nam<div><b>Số điện thoại </b>: 077.656.2237</div>
            <div><br>
                <div>Chúng tôi luôn tiên phong trong lĩnh vực buôn bán các mặt hàng xe Mercedes
                    hiện nay.</div>
            </div>
            <div><br>
            </div>
            <div>2TSHOP - 24/7 luôn sẵn sàng phục vụ quý khách.</div>
            <div class="mt-4"><i id="contactHelp0" class="fa-solid fa-circle-question"></i> Bạn có một vài câu
                hỏi?
                <div id="divHelp0" class="px-2 text-primary" style="display: none;">
                    Chúng tôi sẽ giải đáp thắc mắc của bạn!
                </div>
                <div class="ps-2 fs-6">
                    Tôi có thể liên hệ trực tiếp với bạn không <i class="fa-solid fa-circle-question"
                        id="contactHelp"></i>
                </div>
                <div class="px-2 text-primary" id="divHelp" style="display:none;">
                    Có, bạn có thể liên hệ với tôi thông qua số: 0776562237
                </div>
                <div class="px-2">
                    Tôi có được hoàn lại tiền nếu sản phẩm bị lỗi không <i class="fa-solid fa-circle-question"
                        id="contactHelp2"></i>
                </div>
                <div class="px-2 text-primary" style="display: none;" id="divHelp2">
                    Có, bạn sẽ nhận được hoàn tiền nếu sản phẩm bị lỗi!
                </div>
                <div class="px-2">
                    Tôi có được hoàn lại tiền nếu sản phẩm bị lỗi không <i class="fa-solid fa-circle-question"
                        id="contactHelp3"></i>
                </div>
                <div class="px-2 text-primary" style="display: none;" id="divHelp3">
                    Có, bạn sẽ nhận được hoàn tiền nếu sản phẩm bị lỗi!
                </div>
            </div>
        </div>
    </div>
</div>
<!-- js link bstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>