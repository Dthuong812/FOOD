<?php
/** Danh mục
 * 
 * id=>id
 * tên danh mục => cat_title
 * 
 * 
 * Dữ liệu sản phẩm
 * id =>id
 * tên sản phẩm =>product_title
 * giá => price
 * mã sản phẩm => code
 * mô tả => product_desc
 * ảnh đại diện => product_thumb =>url
 * nội dung => product_content
 * id danh muc =>cat_id
 */
$list_product_cat= array(
    1 => array(
        "id"=> "1",
        "cat_title" =>"Bún huế",
        "cat_desc" =>"Nhắc đến xứ Huế, chắc hẳn ai cũng phải thổn thức trước hương thơm đặc biệt trong nước mắm ruốc của món bún bò Huế, hương vị thanh thanh trong món bún Hến từ vùng biển Cồn Hến cùng nhiều món bún đặc sản khác bắt nguồn từ xứ Huế. Tất cả gói gọn trong tình yêu thương sâu đậm của người đầu bếp tại Nét Huế với ẩm thực cố đô. "
    ),
    2 => array(
        "id"=> "2",
        "cat_title" =>"Cơm huế",
        "cat_desc" =>"Các món cơm trong ẩm thực Huế mang đậm nét thanh tao, nhẹ nhàng đặc trưng giống hệt tính cách của người dân xứ. Cùng với đó là những nét đặc sắc trong món: cơm cá bông lau kho tộ, cơm Huế, cơm thịt Hon, cơm thịt chưng mắm ruốc,... Mỗi món ăn đều mang theo nét đặc trưng riêng chỉ có tại xứ Huế mộng mơ. 
        "
    ),
    3=> array(
        "id"=> "3",
        "cat_title" =>"Cháo huế",
        "cat_desc" =>"Không giống các món cháo thông thường, cháo Huế mang một hương vị đặc trưng sánh quyện giữa vị ngậy ngậy của cháo đậu xanh cùng vị ngọt nguyên chất từ thịt bò, thịt gà, tôm đất, hến Cồn Hến. Tất cả nằm trong bộ sưu tập món cháo cực chất tại Nét Huế. "
    ),
);





$list_product =array(
    1 => array(
        "id"=> "1",
        "product_title" =>"Bún bò Huế số 1",
        "price" =>"45000",
        "code" =>"UNI#1",
        "product_desc" =>"Thành phần: bún, nước dùng, thịt bò và tiết",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_bun%20bo%20Hue%20so%201_cr_521x521.png",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Với sợi bún to, trắng nõn, thịt bò, tiết, bò viên nóng hổi bốc khói trong tô nước dùng thơm phức cay cay hòa quện của vị sả, mắm ruốc, vị ngọt của nước xương, vị thanh của đường phèn... Nghe qua bạn tưởng chừng như món này khá đơn giản nhưng thực ra nó được chế biến rất cầu kỳ và tinh tế về thời gian và phương thức.
        Nhà hàng Nét Huế luôn hi vọng sẽ mang đến cho thực khách một nét ẩm thực rất nhẹ nhàng thanh tao và rất riêng của xứ Huế.
        </p>",
        "cat_id" =>"1",
    ),
    2 => array(
        "id"=> "2",
        "product_title" =>"Bún bò Huế số 2",
        "price" =>"54000",
        "code" =>"UNI#2",
        "product_desc" =>"Nguyên liệu và thành phần: thịt bò, bò viên, tiết, bún sợi to, nước hầm xương, mắm ruốc ",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_bun%20so%201_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Với sợi bún to, trắng nõn, thịt bò, tiết, bò viên nóng hổi bốc khói trong tô nước dùng thơm phức cay cay hòa quện của vị sả, mắm ruốc, vị ngọt của nước xương, vị thanh của đường phèn... Nghe qua bạn tưởng chừng như món này khá đơn giản nhưng thực ra nó được chế biến rất cầu kỳ và tinh tế về thời gian và phương thức</p>"."<p>
        Nhà hàng Nét Huế luôn hi vọng sẽ mang đến cho thực khách một nét ẩm thực rất nhẹ nhàng thanh tao và rất riêng của xứ Huế.        
        </p>",
        "cat_id" =>"1",
    ),
    3 => array(
        "id"=> "3",
        "product_title" =>"Bún bò Huế số 3",
        "price" =>"63000",
        "code" =>"UNI#3",
        "product_desc" =>"Nguyên liệu và thành phần: bún sợi to, thịt bò, bò viên, móng giò, tiết, nước hầm xương, mắm ruốc. ",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_bun%20so%202_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Với sợi bún to, trắng nõn, thịt bò, tiết, bò viên và móng giò nóng hổi bốc khói trong tô nước dùng thơm phức cay cay hòa quện của vị sả, mắm ruốc, vị ngọt của nước xương, vị thanh của đường phèn... Nghe qua bạn tưởng chừng như món này khá đơn giản nhưng thực ra nó được chế biến rất cầu kỳ và tinh tế về thời gian và phương thức</p>"."<p>
        Nhà hàng Nét Huế luôn hi vọng sẽ mang đến cho thực khách một nét ẩm thực rất nhẹ nhàng thanh tao và rất riêng của xứ Huế.
        </p>",
        "cat_id" =>"1",
    ),
    4 => array(
        "id"=> "4",
        "product_title" =>"Bún bò Huế số 4",
        "price" =>"65000",
        "code" =>"UNI#4",
        "product_desc" =>"Nguyên liệu và thành phần: thịt bò, bò viên, tiết, chả cua bún sợi to, nước hầm xương, mắm ruốc",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_bun%20so%203_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Với sợi bún to, trắng nõn, thịt bò, tiết, bò viên, chả cua nóng hổi bốc khói trong tô nước dùng thơm phức cay cay hòa quyện của vị sả, mắm ruốc, vị ngọt của nước xương, vị thanh của đường phèn... Nghe qua bạn tưởng chừng như món này khá đơn giản nhưng thực ra nó được chế biến rất cầu kỳ và tinh tế về thời gian và phương thức</p>"."<p>
        Nhà hàng Nét Huế luôn hi vọng sẽ mang đến cho thực khách một nét ẩm thực rất nhẹ nhàng thanh tao và rất riêng của xứ Huế.
        </p>",
        "cat_id" =>"1",
    ),
    5 => array(
        "id"=> "5",
        "product_title" =>"Cơm Thịt Kho Nước Dừa",
        "price" =>"65000",
        "code" =>"UNI#5",
        "product_desc" =>"
        Cơm thịt kho nước Dừa là một món ăn quen thuộc của không chỉ riêng miền bắc mà cả miềm Trung, không chỉ trẻ nhỏ mà cả người lớn. Tại Nét Huế món cơm này luôn được làm thực và chất lượng nhất có thể. Cơm gạo tám Huế thổi dẻo ăn kèm thịt ba chỉ hầm mềm với 100% chỉ nước Dừa nguyên chất và cùi Dừa. Miếng thịt không những mềm thơm đậm đà gia giảm mà còn có vị ngọt ngậy của nước Dừa và cùi Dừa. Món ăn được ăn kèm cùng 5 loại rau củ quả và canh chua, vậy nên bữa cơm của bạn không chỉ ngon mà còn đầy đủ dinh dưỡng nữa đấy ạ.",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-2020-03_z2211685685755_eecb6bbbf39f88a09e388815d870fee8_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cơm thịt kho nước Dừa là một món ăn quen thuộc của không chỉ riêng miền bắc mà cả miềm Trung, không chỉ trẻ nhỏ mà cả người lớn. Tại Nét Huế món cơm này luôn được làm thực và chất lượng nhất có thể. Cơm gạo tám Huế thổi dẻo ăn kèm thịt ba chỉ hầm mềm với 100% chỉ nước Dừa nguyên chất và cùi Dừa. Miếng thịt không những mềm thơm đậm đà gia giảm mà còn có vị ngọt ngậy của nước Dừa và cùi Dừa. Món ăn được ăn kèm cùng 5 loại rau củ quả và canh chua, vậy nên bữa cơm của bạn không chỉ ngon mà còn đầy đủ dinh dưỡng nữa đấy ạ.
        </p>",
        "cat_id" =>"2",
    ),
    6 => array(
        "id"=> "6",
        "product_title" =>"Cơm hấp lá sen",
        "price" =>"65000",
        "code" =>"UNI#6",
        "product_desc" =>"Cơm Hấp Lá Sen được hợp thành từ nhiều nguyên liệu. Cơm gạo tám Huế trộn hạt sen, cà rốt, thịt gà, xá xíu, tôm khô, nấm hương, đậu hà lan, xì dầu, lòng đỏ trứng muối, lạp xưởng, rồi được bao lại trong lá sen non đem đi hấp lại 1 lần nữa để cơm dền dẻo hơn hòa quyện cùng các thành phần, đồng thời mang hương vị, mùi thơm nhẹ nhàng thanh tao của lá sen.",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_com%20sen_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cơm hấp lá sen là món ăn chay mang hương vị nhẹ nhàng, thanh tao của xứ Huế. Với hương vị dẻo thơm trong từng hạt gạo cùng hương thơm bùi bùi trong hạt sen hầm kĩ. Hơn nữa, được bọc trong lớp lá sen mỏng, món cơm hấp lá sen mang hương vị thơm đặc trưng tại đất Huế. 
        </p>",
        "cat_id" =>"2",
    ),
    7 => array(
        "id"=> "7",
        "product_title" =>"Cơm cá bông lau kho tộ",
        "price" =>"85000",
        "code" =>"UNI#7",
        "product_desc" =>"Nguyên liệu và thành phần: Cơm trắng, cá bông lau, kim chi, dưa chuột, đậu xào, cà rốt, đu đủ xanh, nước canh. ",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_com%20ca%20bong%20lau_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cơm cá bông lau kho tộ là món ăn đặc trưng chỉ có tại vùng đất cố đô. Nhằm đảm bảo chất lượng và hương vị, từng con cá bông lau được nhà hàng Nét Huế vận chuyển từ Huế ra ngoài Hà Nội. Được bày trí trong chiếc niêu nho nhỏ, cá bông lau kho tộ mang đến một hương vị cực kỳ dân giã cho thực khách. Vị thơm trong thịt cá hòa quyện cùng vị ngọt trong gia vị tẩm ướp giúp cho niêu cá thêm đậm đà, thơm ngon hơn bao giờ hết.  Thử xắt nhỏ một miếng thịt cá ăn kèm với chút cơm, một miếng kim chi cải muối, món cơm cá bông lau kho tộ tại Nét Huế chắc chắn sẽ là món ăn giúp bạn không thể nào quên khi đến với Nét Huế. 
        </p>",
        "cat_id" =>"2",
    ),
    8 => array(
        "id"=> "8",
        "product_title" =>"Cơm Bò Rang Giòn",
        "price" =>"85000",
        "code" =>"UNI#8",
        "product_desc" =>"Nguyên liệu và thành phần: Cơm trắng, cá bông lau, kim chi, dưa chuột, đậu xào, cà rốt, đu đủ xanh, nước canh.",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_bun%20so%203_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cơm Bò Rang Giòn là sự sáng tạo, kết hợp giữa nguyên liệu truyền thống dân dã và thị hiếu mang xu hướng hiện đại của thực khách. người đầu bếp đã khéo léo để cân bằng vị giác của thực khách bằng các gia giảm nguyên liệu để cho dù là cơm rang nhưng không hề bị khô và ngán. Cơm có vị ngậy của thịt bò tươi, vị thơm của hành phi, vị béo và màu sắc vàng óng của trứng gà, vị thanh mát chua dịu của củ quả. Đặc biệt hơn là món ăn giòn giòn thơm ngon này được đựng trong vỏ trai biển bóng loáng, long lanh, lóng lánh tạo cảm giác sạch sẽ và sang trọng cho thực khách khi thưởng thức. Vậy đây chắc chắn sẽ là món ngon mà thực khách không ghể bỏ qua khi ghé Nét Huế ạ. 
        </p>",
        "cat_id" =>"2",
    ),
    9 => array(
        "id"=> "9",
        "product_title" =>"Cháo tôm đất",
        "price" =>"75000",
        "code" =>"UNI#9",
        "product_desc" =>"Nguyên liệu: tôm đất, gạo nếp, đậu xanh, hành phi, hành tươi, tía tô. ",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_chao%20tom%20dat%201_cr_274x285.png",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cháo tôm đất – món ăn độc lạ từ tên gọi cho tới hương vị đặc biệt của món ăn đến từ đất Huế. </p>"."<p>
        Cháo tôm đất là sự hòa quyện giữa hương vị đồng quê của gạo nếp, đỗ xanh cùng phần tôm đất đã được chế biến kĩ lưỡng. Một bát cháo ngon đòi hỏi phải có sự sánh mịn của những hạt gạo nếp cùng vị ngậy ngậy của từng hạt đậu xanh. Thêm vào đó là hương thơm đặc trưng của phần tôm đất đậm vị cùng hành phi vàng rụm. Khi thưởng thức, bạn trộn đều phần tôm đã phi thơm cùng phần cháo đậu xanh, cho thêm một chút rau thơm, một chút hạt tiêu. Đây chắc chắn sẽ là tô cháo ngon nhất cho bữa ăn của bạn sau ngày làm việc vất vả.
        </p>",
        "cat_id" =>"3",
    ),
    10 => array(
        "id"=> "10",
        "product_title" =>"Cháo gà",
        "price" =>"78000",
        "code" =>"UNI#10",
        "product_desc" =>"Nguyên liệu và thành phần: đùi gà, hạt sen, đậu xanh, gạo nếp, tía tô, hành lá, tiêu, ớt bột. ",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_chao%20ga_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cháo gà hầm hạt sen là món ăn bổ dưỡng có nhiều dưỡng chất tốt cho sức khỏe của con người. Kết hợp giữa vị bùi bùi của hạt sen cùng vị ngọt thơm của thịt gà, cháo gà hầm hạt sen là món ăn chiếm lĩnh trái tim của bao thực khách. Vị ngậy trong cháo đậu xanh kết hợp với vị ngọt mềm trong thịt gà tạo lên một bát cháo ngon thượng hạng. Khi thưởng thức, các bạn nên cho thêm một chút tía tô và một chút hạt tiêu để tô cháo được thơm ngon đậm vị hơn.
        </p>",
        "cat_id" =>"3",
    ),
    11 => array(
        "id"=> "11",
        "product_title" =>"Cháo hến",
        "price" =>"65000",
        "code" =>"UNI#11",
        "product_desc" =>"
        Nguyên liệu và thành phần: hến Cồn Hến, gạo nếp, đậu xanh, hành khô, rau răm, hành lá, hạt tiêu, ớt bột. ",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_chao%20hen_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cháo hến là món ăn đặc sản Huế được làm bởi hương vị hến thơm ngon chỉ có tại vùng biển Cồn Hến. Với hương vị ngậy ngậy của cháo đậu xanh cùng vị đậm đà trong hến xào, cháo Hến đã trở thành món ăn yêu thích của nhiều thực khách tại Hà Nội.  Khi thưởng thức, bạn nên kết hợp một chút hành phi khô cùng một chút bột tiêu rồi trộn đều. Thêm một chút rau dăm, hành lá, đây sẽ là món cháo Hến trọn vị nhất mà bạn được thưởng thức
        </p>",
        "cat_id" =>"3",
    ),
    12 => array(
        "id"=> "12",
        "product_title" =>"Cháo bò hầm nấm",
        "price" =>"78000",
        "code" =>"UNI#12",
        "product_desc" =>"Nguyên liệu: gạo nếp, đậu xanh, thịt bò, nấm đông cô, hành khô, tía tô, hành lá, tiêu, ớt bột. ",
        "product_thumb" =>"https://nethue.com.vn/temp/-uploaded-san%20pham_chao%20bo_cr_521x521.jpg",
        "product_content" =>"<p><b>Thông tin món ăn</b></p>"."<p>
        Cháo bò hầm nấm là món ăn cực kì bổ dưỡng cung cấp nhiều dưỡng chất hồi phục sức khỏe, đặc biệt là dành cho người suy nhược cơ thể hoặc mới ốm dậy.  Đỗ xanh cùng gạo nếp hương được hầm kĩ cùng thịt bò tạo lên một tô cháo mang đủ hương vị thuần khiết của món ăn bổ dưỡng. Khi thưởng thức, bạn nên cho thêm một chút hạt tiêu cùng một chút hành khô để cảm nhận được trọn vị món cháo bò hầm nấm.
        </p>",
        "cat_id" =>"3",
    ),
);