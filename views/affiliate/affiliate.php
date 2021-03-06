<div class="container-fluid">
    <div class="row" style="display: flex; align-items: center; height: 180px; background-color: #000;">
        <div class="col-md-12">
            <h1 style="text-align: center; color: #fff;">Chương trình Tiếp thị Liên kết dành cho Người bán</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="margin: 50px 0 30px 0;">
        <div class="col-md-12">
            <img src="assets/images/Banner-affiliate.png" alt="" width="100%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-text">Tiếp thị liên kết dành cho người bán cho Shop là gì?</h3>
            <p>Tiếp thị liên kết (Affiliate) là chương trình giúp người bán của Shop dễ dàng gia tăng doanh thu bằng cách chia sẻ link tiếp thị các sản phẩm và dịch vụ của Shop trên mạng xã hội.</p>
            <p>Hay nói cách khác, bạn sẽ đóng vai trò trung gian, giới thiệu người mua hàng tiềm năng đến với Shop và nhận ngay mức hoa hồng cực kì hấp dẫn hoặc tăng thêm truy cập, đơn hàng cho chính Shop mà không tốn bất kỳ chi phí nào.</p>
            <h4 class="title-text">Quy trình tham gia vô cùng đơn giản với 4 bước:</h4>
            <img src="assets/images/affiliate.jpg" alt="" width="100%">
        </div>
    </div>
    <div class="row">
        <h3 class="title-text">bảng tỉ lệ hoa hồng?</h3>
        <div class="col-md-4">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead style="background: #8DC43B;">
                        <tr>
                            <th>Danh mục</th>
                            <th>Khách hàng cũ</th>
                            <th>Khách hàng mới</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($selectRatioRose as $value){ ?>
                        <tr>
                            <td><?=$value['name_cate'];?></td>
                            <td style="text-align: center;"><?=$value['rose_old'];?> %</td>
                            <td style="text-align: center;"><?=$value['rose_new'];?> %</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-8">
            <ul style="font-size: 20px;">
                <li> Mức hoa hồng cao nhất lên đến <span class="title-text">15%</span></li>
                <li> Mức hoa hồng tối đa cho một đơn hàng là: <span class="title-text">100.000VND / đơn hàng</span></li>
                <li> Khoản hoa hồng tối đa cho mỗi tài khoản là: <span class="title-text">16.000.000VND / tháng</span></li>
                <li> Các ngành hàng khác không nằm trong bảng sẽ có mức hoa hồng bằng: <span class="title-text">0VND</span></li>
                <li> Hoa hồng do Shop chi trả, bạn hoàn toàn không tốn bất kỳ chi phí nào khi tham gia chương trình</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-text">Công thức tính hoa hồng?</h3>
            <div style="display: flex; justify-content: center; align-items: center;">
                <img src="assets/images/calculor.png" alt="" style="width: 20%">
                <div style="display: flex; align-items: center; font-weight: bold; border: 1px solid #000; padding-top: 15px;">
                    <p class="txt-cal" style="width: 33%;">Hoa hồng người bán nhận được</p>=
                    <p class="txt-cal" style="width: 27%;">Giá trị ròng của đơn hàng</p>x
                    <p class="txt-cal" style="width: 30%;">Tỉ lệ hoa hồng</p>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <p style="text-align: center; color: #000; font-weight: 600; font-size: 18px; border-style: dashed; width: 73%; padding: 12px 0;">* <span style="color: tomato;">Giá trị ròng của đơn hàng</span> = [Tiền khách trả - (Phí vận chuyển + khoản giảm giá nếu có)]</p>
            </div>
            <h3 class="title-text">Làm thế nào để ghi nhận hoa hồng?</h3>
            <p>Khi người mua truy cập vào link tiếp thị bạn chia sẻ thành công trên mạng xã hội, thực hiện mua hàng trên Shop thì bạn sẽ nhận được hoa hồng.</p>
            <p>Hoa hồng chỉ áp dụng cho các <span>đơn hàng họp lệ</span> không vi phạm chính sách của Shop và chương trình. Hoa hồng được ghi nhận khi <span>đơn hàng thành công</span> (tức ở trạng thái chấp nhận, người mua không đổi trả)</p>
            <div style="padding-top: 100px;">
                <a href="index.php?page=affiliate&method=directionalAffiliate"><img src="assets/images/ĐKy.jpg" alt="" width="100%"></a>
            </div>
        </div>
    </div>
</div>