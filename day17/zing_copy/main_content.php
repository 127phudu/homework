<script type="text/javascript">
    $(document).ready(function () {
        $('#searchbox').submit(function () {
            var url = '';
            var keyword = $('#search_keyword').val();
            if (keyword != '') {
                keyword = keyword.trim();
                while (keyword.indexOf(" ") >= 0) {
                    keyword = keyword.replace(" ", "-");
                }
                url = "/" + keyword + "-tim-kiem.html";
            }
            window.location = url;
            return false;
        });
    });
</script>
<div class="wrapper">
    <header id="top">
        <div id="site-header">
            <div id="banner_top" class="banner">
                <div id="advTop"></div>
            </div>
        </div>
        <nav class="categories">
            <ul>
                <li class="parent homepage current"><a href="/" title="Tin tức">Tin tức</a></li>
                <!-- END MENU -->
                <li class="parent thoi-su ">
                    <a href="/thoi-su.html">Thời sự</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/giao-thong.html">Giao thông</a>
                            </li>
                            <li>
                                <a href="/do-thi.html">Đô thị</a>
                            </li>
                            <li>
                                <a href="/doi-song.html">Đời sống</a>
                            </li>
                            <li>
                                <a href="/quoc-phong.html">Quốc phòng</a>
                            </li>
                            <li>
                                <a href="/anh-video-thoi-su.html">Ảnh & Video</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent the-gioi ">
                    <a href="/the-gioi.html">Thế giới</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/anh-video-the-gioi.html">Ảnh & Video</a>
                            </li>
                            <li>
                                <a href="/quan-su-the-gioi.html">Quân sự</a>
                            </li>
                            <li>
                                <a href="/tu-lieu-the-gioi.html">Tư liệu</a>
                            </li>
                            <li>
                                <a href="/phan-tich-the-gioi.html">Phân tích</a>
                            </li>
                            <li>
                                <a href="/nguoi-viet-4-phuong.html">Người Việt 4 phương</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent kinh-doanh-tai-chinh ">
                    <a href="/kinh-doanh-tai-chinh.html">Kinh doanh</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/tai-chinh.html">Tài chính</a>
                            </li>
                            <li>
                                <a href="/chung-khoan.html">Chứng khoán</a>
                            </li>
                            <li>
                                <a href="/bat-dong-san.html">Bất động sản</a>
                            </li>
                            <li>
                                <a href="/doanh-nhan.html">Doanh nhân</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent phap-luat ">
                    <a href="/phap-luat.html">Pháp luật</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/phap-dinh.html">Pháp đình</a>
                            </li>
                            <li>
                                <a href="/vu-an.html">Vụ án</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent xuat-ban ">
                    <a href="/xuat-ban.html">Xuất bản</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/tin-tuc-xuat-ban.html">Tin tức xuất bản</a>
                            </li>
                            <li>
                                <a href="/sach-hay.html">Sách hay</a>
                            </li>
                            <li>
                                <a href="/tac-gia.html">Tác giả</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent the-thao ">
                    <a href="/the-thao.html">Thể thao</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/the-thao-viet-nam.html">Thể thao Việt Nam</a>
                            </li>
                            <li>
                                <a href="/cup-chau-au.html">Cup Châu Âu</a>
                            </li>
                            <li>
                                <a href="/the-thao-the-gioi.html">Thể thao Thế giới</a>
                            </li>
                            <li>
                                <a href="/bong-da-anh.html">Bóng đá Anh</a>
                            </li>
                            <li>
                                <a href="/bong-da-viet-nam.html">Bóng đá Việt Nam</a>
                            </li>
                            <li>
                                <a href="/hau-truong-the-thao.html">Hậu trường thể thao</a>
                            </li>
                            <li><a href="https://zing.vn/songcungworldcup/tin-tuc" target="_blank">Sống cùng World Cup</a></li>
                        </ul>
                    </div>
                </li>
                <li class="parent cong-nghe ">
                    <a href="/cong-nghe.html">Công nghệ</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/dien-thoai.html">Điện thoại</a>
                            </li>
                            <li>
                                <a href="/may-tinh-bang.html">Máy tính bảng</a>
                            </li>
                            <li>
                                <a href="/ung-dung-di-dong.html">Ứng dụng di động</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent oto-xe-may ">
                    <a href="/oto-xe-may.html">Xe 360</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/xe-may.html">Xe máy</a>
                            </li>
                            <li>
                                <a href="/o-to.html">Ô-tô</a>
                            </li>
                            <li>
                                <a href="/xe-do.html">Xe độ</a>
                            </li>
                            <li>
                                <a href="/sieu-xe.html">Siêu xe</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent giai-tri ">
                    <a href="/giai-tri.html">Giải trí</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/sao-viet.html">Sao Việt</a>
                            </li>
                            <li>
                                <a href="/sao-chau-a.html">Sao Châu Á</a>
                            </li>
                            <li>
                                <a href="/sao-hollywood.html">Sao Hollywood</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent am-nhac ">
                    <a href="/am-nhac.html">Âm nhạc</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/nhac-viet.html">Nhạc Việt</a>
                            </li>
                            <li>
                                <a href="/nhac-han.html">Nhạc Hàn</a>
                            </li>
                            <li>
                                <a href="/nhac-au-my.html">Nhạc Âu Mỹ</a>
                            </li>
                            <li><a href="/zing-chart-tieu-diem.html">#ZingChart</a></li>
                        </ul>
                    </div>
                </li>
                <li class="parent phim-anh ">
                    <a href="/phim-anh.html">Phim ảnh</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/phim-chieu-rap.html">Phim chiếu rạp</a>
                            </li>
                            <li>
                                <a href="/phim-truyen-hinh.html">Phim truyền hình</a>
                            </li>
                            <li>
                                <a href="/game-show.html">Game Show</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent thoi-trang ">
                    <a href="/thoi-trang.html">Thời trang</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/thoi-trang-sao.html">Thời trang sao</a>
                            </li>
                            <li>
                                <a href="/mac-dep.html">Mặc đẹp</a>
                            </li>
                            <li>
                                <a href="/lam-dep.html">Làm đẹp</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent song-tre ">
                    <a href="/song-tre.html">Sống trẻ</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/guong-mat-tre.html">Gương mặt trẻ</a>
                            </li>
                            <li>
                                <a href="/cong-dong-mang.html">Cộng đồng mạng</a>
                            </li>
                            <li>
                                <a href="/su-kien.html">Sự kiện</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent giao-duc ">
                    <a href="/giao-duc.html">Giáo dục</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/tuyen-sinh-dai-hoc-2018.html">Tuyển sinh 2018</a>
                            </li>
                            <li>
                                <a href="/tu-van-giao-duc.html">Tư vấn</a>
                            </li>
                            <li>
                                <a href="/du-hoc.html"> Du học</a>
                            </li>
                            <li><a href="/hoc-tieng-anh-tieu-diem.html">Học Tiếng Anh</a></li>
                        </ul>
                    </div>
                </li>
                <li class="parent suc-khoe ">
                    <a href="/suc-khoe.html">Sức khỏe</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/khoe-dep.html">Khỏe đẹp</a>
                            </li>
                            <li>
                                <a href="/dinh-duong.html">Dinh dưỡng</a>
                            </li>
                            <li>
                                <a href="/me-va-be.html">Mẹ và Bé</a>
                            </li>
                            <li>
                                <a href="/benh-thuong-gap.html">Bệnh thường gặp</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent du-lich ">
                    <a href="/du-lich.html">Du lịch</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/dia-diem-du-lich.html">Địa điểm du lịch</a>
                            </li>
                            <li>
                                <a href="/kinh-nghiem-du-lich.html">Kinh nghiệm du lịch</a>
                            </li>
                            <li>
                                <a href="/phuot.html">Phượt</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent am-thuc ">
                    <a href="/am-thuc.html">Ẩm thực</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/dia-diem-an-uong.html">Địa điểm ăn uống</a>
                            </li>
                            <li>
                                <a href="/mon-ngon.html">Món ngon</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent nhip-song ">
                    <a href="/nhip-song.html">Nhịp sống</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/TTDN.html">Thông tin doanh nghiệp</a>
                            </li>
                            <li>
                                <a href="/nhip-song/cuoi.html">Cười</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section id="homepage" class="focus_layout">
        <div class="content-wrap">
            <div class="hotnews">
                <p class="controller">
                    <a href="#rewind" class="rewind">Trước</a>
                    <a href="#forward" class="forward">Sau</a>
                </p>
                <h1>Tin tức mới</h1>
                <ul>
                </ul>
                <time datetime="2018-09-22 20:44+0700" pubdate>Cập nhật </time>
            </div>
            <section class="featured">
                <article class="featured " topic-id="2000,2020,2208,3639">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/400-chiec-den-long-o-le-hoi-tai-hien-trung-thu-ngay-xua-post878840.html">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/pgi_cunzgunat/2018_09_22/as.jpg" alt="400 chiec den long o le hoi tai hien Trung thu ngay xua hinh anh" title="400 chiếc đèn lồng ở lễ hội tái hiện Trung thu ngày xưa hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/400-chiec-den-long-o-le-hoi-tai-hien-trung-thu-ngay-xua-post878840.html">
                                400 chiếc đèn lồng ở lễ hội tái hiện Trung thu ngày xưa
                            </a>
                        </p>
                        <time datetime="2018-09-22 11:00+0700"></time>
                        <p class="cate">Thời sự</p>
                        <p class="summary">400 chiếc đèn lồng cùng nhau thắp sáng ở khu vực hồ Văn (Hà Nội) tạo nên không gian văn hoá đặc sắc, thu hút nhiều người dân thủ đô đến vui chơi nhân dịp Tết Trung thu.
                        </p>
                    </header>
                    <ul class="relate">
                        <li class=" advertising">
                            <a href="/tan-huong-hoi-an-mua-trung-thu-giua-long-ha-noi-post878771.html">
                                Tận hưởng Hội An mùa Trung thu giữa lòng Hà Nội </a></li>
                        <li class=" advertising">
                            <a href="/nhung-hoat-dong-doc-dao-mua-trung-thu-khap-3-mien-post878662.html">
                                Những hoạt động độc đáo mùa Trung thu khắp 3 miền</a></li>
                    </ul>
                </article>
                <article class="" topic-id="2000,2020,2211,4151">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/xuyen-tac-nha-nuoc-facebooker-bo-cong-anh-va-ho-mai-chi-linh-an-post878934.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_fsxrff/2018_09_22/42273410_539186219827478_8833230805552594944_n.jpg" alt="Xuyen tac Nha nuoc, Facebooker Bo Cong Anh va Ho Mai Chi linh an hinh anh" title="Xuyên tạc Nhà nước, Facebooker Bồ Công Anh và Hồ Mai Chi lĩnh án hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/xuyen-tac-nha-nuoc-facebooker-bo-cong-anh-va-ho-mai-chi-linh-an-post878934.html">
                                Xuyên tạc Nhà nước, Facebooker Bồ Công Anh và Hồ Mai Chi lĩnh án
                            </a>
                        </p>
                        <time datetime="2018-09-22 15:10+0700"></time>
                        <p class="cate">Pháp đình</p>
                    </header>
                </article>
                <article class="" topic-id="2000,2020,2369,3780">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/ba-diep-thao-de-nghi-xu-ly-hinh-su-nguoi-can-tro-ba-ve-trung-nguyen-post878980.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/bpivpbbp/2018_09_22/lehoangdiepthao1_zing.jpg" alt="Ba Diep Thao de nghi xu ly hinh su nguoi can tro ba ve Trung Nguyen hinh anh" title="Bà Diệp Thảo đề nghị xử lý hình sự người cản trở bà về Trung Nguyên hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/ba-diep-thao-de-nghi-xu-ly-hinh-su-nguoi-can-tro-ba-ve-trung-nguyen-post878980.html">
                                Bà Diệp Thảo đề nghị xử lý hình sự người cản trở bà về Trung Nguyên
                            </a>
                        </p>
                        <time datetime="2018-09-22 19:26+0700"></time>
                        <p class="cate">Pháp luật</p>
                    </header>
                </article>
                <article class=" haschart" topic-id="2000,2020,2369">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/cung-thai-lan-nguoi-nhat-da-mua-nhung-gi-tai-viet-nam-post878761.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/aohunkx/2018_09_21/doanhnghiepnhatban.jpg" alt="Cung Thai Lan, nguoi Nhat da mua nhung gi tai Viet Nam? hinh anh" title="Cùng Thái Lan, người Nhật đã mua những gì tại Việt Nam? hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/cung-thai-lan-nguoi-nhat-da-mua-nhung-gi-tai-viet-nam-post878761.html">
                                Cùng Thái Lan, người Nhật đã mua những gì tại Việt Nam?
                            </a>
                        </p>
                        <time datetime="2018-09-22 09:09+0700"></time>
                        <p class="cate">Kinh doanh</p>
                    </header>
                </article>
            </section>
            <section class="trending scroll">
                <div class="top-list">
                    <article class=" picture hasvideo" topic-id="2001,2020,2369,3919,4590,4613">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/gia-dinh-dai-tiec-mung-don-hoa-hau-tran-tieu-vy-o-pho-co-hoi-an-post878912.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/oqivovbt/2018_09_22/tieuvy_zing_2_7.jpg" alt="Gia dinh dai tiec mung don Hoa hau Tran Tieu Vy o pho co Hoi An hinh anh" title="Gia đình đãi tiệc mừng đón Hoa hậu Trần Tiểu Vy ở phố cổ Hội An hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/gia-dinh-dai-tiec-mung-don-hoa-hau-tran-tieu-vy-o-pho-co-hoi-an-post878912.html">
                                    Gia đình đãi tiệc mừng đón Hoa hậu Trần Tiểu Vy ở phố cổ Hội An
                                </a>
                                <span class="comment_count">15</span>
                            </p>
                            <time datetime="2018-09-22 14:48+0700"></time>
                            <p class="cate">Sao Việt</p>
                        </header>
                    </article>
                </div>
                <article class=" live stream" topic-id="2001,2369">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/man-utd-vs-wolverhampton-alexis-sanchez-da-chinh-post878998.html">
                                Man Utd vs Wolverhampton: Alexis Sanchez đá chính
                            </a>
                        </p>
                        <time datetime="2018-09-22 20:42+0700"></time>
                        <p class="cate">Bóng đá Anh</p>
                    </header>
                </article>
                <article class="" topic-id="2001,2020,2208,4226,4616">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/co-nguoi-nhan-la-me-cua-nan-nhan-trong-vu-chay-nha-hiep-khung-post878956.html">
                                Có người nhận là mẹ của nạn nhân trong vụ cháy nhà Hiệp 'Khùng'
                            </a>
                        </p>
                        <time datetime="2018-09-22 17:08+0700"></time>
                        <p class="cate">Đời sống</p>
                    </header>
                </article>
                <article class=" video" topic-id="2020,3457">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/video-tac-dung-khong-ngo-khi-dat-hanh-tay-vao-long-ban-chan-qua-dem-post878645.html">
                                Tác dụng không ngờ khi đặt hành tây vào lòng bàn chân qua đêm
                            </a>
                        </p>
                        <time datetime="2018-09-22 19:12+0700"></time>
                        <p class="cate">Sức khỏe</p>
                    </header>
                </article>
                <article class=" picture" topic-id="2020,3474,4022,4439,4601,4608,4609">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/3-phien-ban-mau-sac-cua-iphone-xs-max-tai-vn-post878624.html">
                                3 phiên bản màu sắc của iPhone XS Max tại VN
                            </a>
                        </p>
                        <time datetime="2018-09-22 19:00+0700"></time>
                        <p class="cate">Công nghệ</p>
                    </header>
                </article>
                <article class=" picture" topic-id="2020">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/range-rover-autobiography-lwb-2018-dau-tien-ve-vn-gia-14-ty-dong-post878800.html">
                                Range Rover Autobiography LWB 2018 đầu tiên về VN, giá 14 tỷ đồng
                            </a>
                        </p>
                        <time datetime="2018-09-22 18:00+0700"></time>
                        <p class="cate">Ô-tô</p>
                    </header>
                </article>
                <article class="" topic-id="4461,4516">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/tuong-dai-cau-long-lee-chong-wei-mac-benh-ung-thu-post878944.html">
                                Tượng đài cầu lông Lee Chong Wei mắc bệnh ung thư
                            </a>
                        </p>
                        <time datetime="2018-09-22 15:17+0700"></time>
                        <p class="cate">Thể thao Thế giới</p>
                    </header>
                </article>
                <article class="" topic-id="2020">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/sao-tre-indonesia-ha-lien-bon-cao-thu-tai-giai-cau-long-trung-quoc-post878932.html">
                                Sao trẻ Indonesia hạ liền bốn cao thủ tại giải cầu lông Trung Quốc
                            </a>
                        </p>
                        <time datetime="2018-09-22 15:13+0700"></time>
                        <p class="cate">Thể thao Thế giới</p>
                    </header>
                </article>
                <article class="" >
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/vi-sao-hon-dao-martinique-co-the-giup-con-nguoi-khong-ngung-cao-len-post876312.html">
                                Vì sao hòn đảo Martinique có thể giúp con người không ngừng cao lên?
                            </a>
                        </p>
                        <time datetime="2018-09-22 19:05+0700"></time>
                        <p class="cate">Giáo dục</p>
                    </header>
                </article>
                <article class=" hasvideo" topic-id="3906,3909,4151,4227">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/trung-quoc-huy-dam-phan-thuong-mai-sau-khi-doi-my-sua-sai-post878988.html">
                                Trung Quốc hủy đàm phán thương mại sau khi đòi Mỹ 'sửa sai'
                            </a>
                        </p>
                        <time datetime="2018-09-22 19:45+0700"></time>
                        <p class="cate">Thế giới</p>
                    </header>
                </article>
                <article class="" topic-id="4084">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/co-quan-thue-trung-quoc-dang-dieu-tra-cao-buoc-tron-thue-o-showbiz-post878977.html">
                                Cơ quan thuế Trung Quốc: 'Đang điều tra cáo buộc trốn thuế ở showbiz'
                            </a>
                        </p>
                        <time datetime="2018-09-22 18:34+0700"></time>
                        <p class="cate">Sao Châu Á</p>
                    </header>
                </article>
                <article class=" picture" topic-id="4440">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/suzuki-vitara-2019-lo-dien-hoan-toan-loai-bo-dong-co-diesel-post878946.html">
                                Suzuki Vitara 2019 lộ diện hoàn toàn, loại bỏ động cơ diesel
                            </a>
                        </p>
                        <time datetime="2018-09-22 19:02+0700"></time>
                        <p class="cate">Ô-tô</p>
                    </header>
                </article>
                <script>
                    var elements = $('.top-list article').length;
                    $($('.top-list article')[Math.floor(Math.random() * elements)]).show();
                </script>
            </section>
        </div>
        <section class="sidebar">
            <div id="advR1" class="banner"></div>
            <div id="advR2" class="banner"></div>
            <div class="contact">
                <ul>
                    <li class="email">
                        <span>Email</span>
                        <a href="mailto:toasoan@zing.vn" title="Gửi email">toasoan@zing.vn</a>
                        | <a href="javascript:showBoxAds();" title="Liên hệ quảng cáo">Liên hệ Quảng cáo</a>
                    </li>
                    <li class="phone">
                        <span>Đường dây nóng</span>
                        <a href="javascript:showPhoneBox();" title="Điện thoại nóng">(HN) 0985.57.88.55</a> |
                        <a href="javascript:showPhoneBox();" title="Điện thoại nóng">(HCM) 0909.18.66.66</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="multi" class="section">
            <header>
                <h2>MULTIMEDIA</h2>
                <ul>
                    <li><a href="/video/">VIDEO</a></li>
                    <li><a href="/long-form-tieu-diem.html">LONGFORM</a></li>
                    <li><a href="/voices-goc-nhin-tieu-diem.html">VOICES</a></li>
                    <li><a href="/trac-nghiem-quizz-tieu-diem.html">QUIZZ</a></li>
                    <li><a href="/lens-tieu-diem.html">LENS</a></li>
                </ul>
            </header>
            <div class="article-list magazine-layout2">
                <article article-id="878906" class="article-item type-picture" topic-id="2002,2020">
                    <p class="article-thumbnail">
                        <a href="/nghe-si-viet-to-chuc-dang-huong-gio-to-nghe-o-my-post878906.html" title="Nghệ sĩ Việt tổ chức dâng hương, giỗ Tổ nghề ở Mỹ">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/bpivpjbp/2018_09_22/42232511_10212956018403413_5658016399071641600_o.jpg" alt="Nghe si Viet to chuc dang huong, gio To nghe o My hinh anh" title="Nghệ sĩ Việt tổ chức dâng hương, giỗ Tổ nghề ở Mỹ hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Nghệ sĩ Việt tổ chức dâng hương, giỗ Tổ nghề ở Mỹ" href="/nghe-si-viet-to-chuc-dang-huong-gio-to-nghe-o-my-post878906.html" title="Nghệ sĩ Việt tổ chức dâng hương, giỗ Tổ nghề ở Mỹ#detail0">
                                Nghệ sĩ Việt tổ chức dâng hương, giỗ Tổ nghề ở Mỹ
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">12:19</span>
<span class="date">22/09/2018</span>
</span>
                            <a class="article-category" href="/sao-viet.html" title="Sao Việt">
                                Sao Việt
                            </a>
                            <span class="comment-count" visible='True'>2</span>
                            <span class="viral-count" visible='True'>6</span>
                        </p>
                        <p class="article-summary">Danh hài Bảo Quốc, Chí Tài, ca sĩ Thanh Hà, Thanh Thảo, diễn viên Hồng Đào, ca sĩ Quang Lê và nhiều nghệ sĩ khác đã dâng hương trong ngày giỗ Tổ nghề sân khấu tổ chức tại Mỹ.</p>
                    </header>
                </article>
                <article article-id="878917" class="article-item type-picture" topic-id="2002">
                    <p class="article-thumbnail">
                        <a href="/hoang-tu-anh-19-tuoi-bat-ngo-cong-khai-ban-gai-hoc-cung-truong-post878917.html" title="Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/neg_rtlzofn/2018_09_22/5b48ca2_thumb.jpg" alt="Hoang tu Anh 19 tuoi bat ngo cong khai ban gai hoc cung truong hinh anh" title="Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường" href="/hoang-tu-anh-19-tuoi-bat-ngo-cong-khai-ban-gai-hoc-cung-truong-post878917.html" title="Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường#detail0">
                                Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">15:13</span>
<span class="date">22/09/2018</span>
</span>
                            <a class="article-category" href="/guong-mat-tre.html" title="Gương mặt trẻ">
                                Gương mặt trẻ
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='True'>2</span>
                        </p>
                        <p class="article-summary">Sau đám cưới lịch sử của Hoàng tử Harry, công chúng lại đón thêm tin vui khi Arthur Chatto công khai bạn gái xinh đẹp.
                        </p>
                    </header>
                </article>
                <article article-id="877421" class="article-item type-picture type-hasvideo" topic-id="2002,2020,2593,3918,3919">
                    <p class="article-thumbnail">
                        <a href="/a-hau-1-bui-phuong-nga-va-loat-hot-girl-dh-kinh-te-quoc-dan-post877421.html" title="Á hậu 1 Bùi Phương Nga và loạt hot girl ĐH Kinh tế quốc dân">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/neg_rtlzofn/2018_09_17/Nhat_thao_thumb.jpg" alt="A hau 1 Bui Phuong Nga va loat hot girl DH Kinh te quoc dan hinh anh" title="Á hậu 1 Bùi Phương Nga và loạt hot girl ĐH Kinh tế quốc dân hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Á hậu 1 Bùi Phương Nga và loạt hot girl ĐH Kinh tế quốc dân" href="/a-hau-1-bui-phuong-nga-va-loat-hot-girl-dh-kinh-te-quoc-dan-post877421.html" title="Á hậu 1 Bùi Phương Nga và loạt hot girl ĐH Kinh tế quốc dân#detail0">
                                Á hậu 1 Bùi Phương Nga và loạt hot girl ĐH Kinh tế quốc dân
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">17:00</span>
<span class="date">22/09/2018</span>
</span>
                            <a class="article-category" href="/guong-mat-tre.html" title="Gương mặt trẻ">
                                Gương mặt trẻ
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='True'>8</span>
                        </p>
                        <p class="article-summary">Không chỉ có Á hậu 1 Bùi Phương Nga vừa đăng quang, ĐH Kinh tế quốc dân còn sở hữu nhiều nữ sinh nổi tiếng và tài năng.</p>
                    </header>
                </article>
                <article article-id="878952" class="article-item type-picture" topic-id="2002,2020,3918,4446">
                    <p class="article-thumbnail">
                        <a href="/dan-sieu-mau-dot-nong-duong-pho-milan-voi-gu-thoi-trang-sanh-dieu-post878952.html" title="Dàn siêu mẫu &#39;đốt nóng&#39; đường phố Milan với gu thời trang sành điệu">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/OpluOAA/2018_09_22/44536446194295Toned_Earlier_that_day_Emily_was_showing_her_toned_abs_in_a_skima1_1537558670906_thumb.jpg" alt="Dan sieu mau &#39;dot nong&#39; duong pho Milan voi gu thoi trang sanh dieu hinh anh" title="Dàn siêu mẫu &#39;đốt nóng&#39; đường phố Milan với gu thời trang sành điệu hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Dàn siêu mẫu &#39;đốt nóng&#39; đường phố Milan với gu thời trang sành điệu" href="/dan-sieu-mau-dot-nong-duong-pho-milan-voi-gu-thoi-trang-sanh-dieu-post878952.html" title="Dàn siêu mẫu &#39;đốt nóng&#39; đường phố Milan với gu thời trang sành điệu#detail0">
                                Dàn siêu mẫu 'đốt nóng' đường phố Milan với gu thời trang sành điệu
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">16:19</span>
<span class="date">22/09/2018</span>
</span>
                            <a class="article-category" href="/thoi-trang-sao.html" title="Thời trang sao">
                                Thời trang sao
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='False'>0</span>
                        </p>
                        <p class="article-summary">Phong cách thời trang đường phố của các siêu mẫu được giới mộ điệu quan tâm không kém những bộ sưu tập được trình diễn trong khuôn khổ Milan Fashion Week xuân hè 2019. </p>
                    </header>
                </article>
                <article article-id="878896" class="article-item type-picture" topic-id="2002,2020,4440">
                    <p class="article-thumbnail">
                        <a href="/chi-tiet-porsche-panamera-mau-do-gia-6-3-ty-dong-tai-vn-post878896.html" title="Chi tiết Porsche Panamera màu đỏ giá 6,3 tỷ đồng tại VN">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/ofh_ftmztzmy/2018_09_22/PorschePanameraRed1.jpg" alt="Chi tiet Porsche Panamera mau do gia 6,3 ty dong tai VN hinh anh" title="Chi tiết Porsche Panamera màu đỏ giá 6,3 tỷ đồng tại VN hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Chi tiết Porsche Panamera màu đỏ giá 6,3 tỷ đồng tại VN" href="/chi-tiet-porsche-panamera-mau-do-gia-6-3-ty-dong-tai-vn-post878896.html" title="Chi tiết Porsche Panamera màu đỏ giá 6,3 tỷ đồng tại VN#detail0">
                                Chi tiết Porsche Panamera màu đỏ giá 6,3 tỷ đồng tại VN
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">11:23</span>
<span class="date">22/09/2018</span>
</span>
                            <a class="article-category" href="/o-to.html" title="Ô-tô">
                                Ô-tô
                            </a>
                            <span class="comment-count" visible='True'>2</span>
                            <span class="viral-count" visible='True'>13</span>
                        </p>
                        <p class="article-summary">Thế hệ thứ hai của dòng sedan hạng sang Porsche Panamera sở hữu màu sơn ngoại thất đỏ đi cùng một số tùy chọn đặc biệt có giá bán chính thức là 6,3 tỷ đồng tại thị trường Việt Nam.</p>
                    </header>
                </article>
                <article article-id="878837" class="article-item type-picture" topic-id="2002,2208">
                    <p class="article-thumbnail">
                        <a href="/hang-nghin-nguoi-do-ra-duong-choi-trung-thu-som-post878837.html" title="Hàng nghìn người đổ ra đường chơi Trung thu sớm">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/rotntb/2018_09_22/trung_thu_100.JPG" alt="Hang nghin nguoi do ra duong choi Trung thu som hinh anh" title="Hàng nghìn người đổ ra đường chơi Trung thu sớm hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Hàng nghìn người đổ ra đường chơi Trung thu sớm" href="/hang-nghin-nguoi-do-ra-duong-choi-trung-thu-som-post878837.html" title="Hàng nghìn người đổ ra đường chơi Trung thu sớm#detail0">
                                Hàng nghìn người đổ ra đường chơi Trung thu sớm
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">07:51</span>
<span class="date">22/09/2018</span>
</span>
                            <a class="article-category" href="/anh-video-thoi-su.html" title="Ảnh & Video">
                                Ảnh & Video
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='True'>58</span>
                        </p>
                        <p class="article-summary">Hàng nghìn người đổ về khu vực phố cổ Hà Nội đón Trung Thu sớm khiến nơi đây chật cứng, tối 21/9. Nhiều em nhỏ tỏ ra mệt mỏi khi phải chen lấn giữa đám đông cùng cha mẹ.</p>
                    </header>
                </article>
                <article article-id="878828" class="article-item type-picture" topic-id="2002,3710,4084">
                    <p class="article-thumbnail">
                        <a href="/trieu-vy-o-tuoi-42-tre-dep-hon-sau-khi-giam-15-kg-post878828.html" title="Triệu Vy ở tuổi 42 trẻ đẹp hơn sau khi giảm 15 kg">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/bpivpjbp/2018_09_21/DnY298fV4AEZyHava.jpg" alt="Trieu Vy o tuoi 42 tre dep hon sau khi giam 15 kg hinh anh" title="Triệu Vy ở tuổi 42 trẻ đẹp hơn sau khi giảm 15 kg hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Triệu Vy ở tuổi 42 trẻ đẹp hơn sau khi giảm 15 kg" href="/trieu-vy-o-tuoi-42-tre-dep-hon-sau-khi-giam-15-kg-post878828.html" title="Triệu Vy ở tuổi 42 trẻ đẹp hơn sau khi giảm 15 kg#detail0">
                                Triệu Vy ở tuổi 42 trẻ đẹp hơn sau khi giảm 15 kg
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">06:00</span>
<span class="date">22/09/2018</span>
</span>
                            <a class="article-category" href="/sao-chau-a.html" title="Sao Châu Á">
                                Sao Châu Á
                            </a>
                            <span class="comment-count" visible='True'>4</span>
                            <span class="viral-count" visible='True'>40</span>
                        </p>
                        <p class="article-summary">Nữ diễn viên "Hoàn Châu cách cách" từng bị cư dân mạng chỉ trích vì tăng cân mất kiểm soát. Gần đây, cô nhận được nhiều lời khen nhờ vẻ ngoài thon thả.</p>
                    </header>
                </article>
            </div>
        </section>
        <div class="content-wrap">
            <div class="content-wrap">
                <section id="thoi-su" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/thoi-su.html" title="Thời sự">Thời sự </a></h2>
                        </hgroup>
                        <p>
                            <a href='/giao-thong.html'>Giao thông</a>
                        </p>
                        <p>
                            <a href='/do-thi.html'>Đô thị</a>
                        </p>
                        <p>
                            <a href='/doi-song.html'>Đời sống</a>
                        </p>
                        <p>
                            <a href='/quoc-phong.html'>Quốc phòng</a>
                        </p>
                        <p>
                            <a href='/anh-video-thoi-su.html'>Ảnh & Video</a>
                        </p>
                    </header>
                    <article class="featured haschart" topic-id="2211">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/xu-ly-vi-pham-xay-dung-tai-khach-san-muong-thanh-can-tho-post878922.html">
                                    Xử lý vi phạm xây dựng tại khách sạn Mường Thanh Cần Thơ
                                </a>
                            </p>
                            <time datetime="2018-09-22 16:42+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/xu-ly-vi-pham-xay-dung-tai-khach-san-muong-thanh-can-tho-post878922.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_fsxrff/2018_09_22/received_2178468842398649_1.jpg" alt="Xu ly vi pham xay dung tai khach san Muong Thanh Can Tho hinh anh" title="Xử lý vi phạm xây dựng tại khách sạn Mường Thanh Cần Thơ hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Thanh tra Bộ Xây dựng đề nghị UBND TP Cần Thơ chỉ đạo cơ quan chức năng kiểm tra, xử lý vi phạm trật tự xây dựng đối với công trình khách sạn Mường Thanh.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/muong-thanh-da-nang-thach-thuc-chinh-quyen-post870037.html">
                                    Mường Thanh Đà Nẵng thách thức chính quyền</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" haschart" topic-id="2218">
                            <header>
                                <p class="title">
                                    <a href="/nhieu-sai-pham-tai-du-an-benh-vien-hon-500-ty-post878793.html">
                                        Nhiều sai phạm tại dự án bệnh viện hơn 500 tỷ
                                    </a>
                                </p>
                                <time datetime="2018-09-22 20:00+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3362,2207">
                            <header>
                                <p class="title">
                                    <a href="/de-xuat-doi-lo-trinh-tuyen-buyt-so-11-o-sai-gon-vi-e-khach-post878469.html">
                                        Đề xuất đổi lộ trình tuyến buýt số 11 ở Sài Gòn vì ế khách
                                    </a>
                                </p>
                                <time datetime="2018-09-22 18:00+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2001,2020,2208,4226,4616">
                            <header>
                                <p class="title">
                                    <a href="/co-nguoi-nhan-la-me-cua-nan-nhan-trong-vu-chay-nha-hiep-khung-post878956.html">
                                        Có người nhận là mẹ của nạn nhân trong vụ cháy nhà Hiệp 'Khùng'
                                    </a>
                                </p>
                                <time datetime="2018-09-22 17:08+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo haschart" topic-id="2208,4150,4226,4616">
                            <header>
                                <p class="title">
                                    <a href="/2-nan-nhan-chet-chay-o-nha-hiep-khung-nghi-la-cha-me-cua-benh-nhi-post878918.html">
                                        2 nạn nhân chết cháy ở nhà Hiệp 'Khùng' nghi là cha mẹ của bệnh nhi
                                    </a>
                                </p>
                                <time datetime="2018-09-22 15:44+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside haschart" topic-id="4016,2209">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/hon-8-km-bo-bien-da-nang-ngap-rac-sau-mua-post878916.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/neg_glyrtla/2018_09_22/rac_thai_1.jpg" alt="Hon 8 km bo bien Da Nang ngap rac sau mua hinh anh" title="Hơn 8 km bờ biển Đà Nẵng ngập rác sau mưa hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/hon-8-km-bo-bien-da-nang-ngap-rac-sau-mua-post878916.html">
                                    Hơn 8 km bờ biển Đà Nẵng ngập rác sau mưa
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:00+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="the-gioi" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/the-gioi.html" title="Thế giới">Thế giới </a></h2>
                        </hgroup>
                        <p>
                            <a href='/anh-video-the-gioi.html'>Ảnh & Video</a>
                        </p>
                        <p>
                            <a href='/quan-su-the-gioi.html'>Quân sự</a>
                        </p>
                        <p>
                            <a href='/tu-lieu-the-gioi.html'>Tư liệu</a>
                        </p>
                        <p>
                            <a href='/phan-tich-the-gioi.html'>Phân tích</a>
                        </p>
                        <p>
                            <a href='/nguoi-viet-4-phuong.html'>Người Việt 4 phương</a>
                        </p>
                    </header>
                    <article class="featured hasvideo" topic-id="3906,3909,4151,4227">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/trung-quoc-huy-dam-phan-thuong-mai-sau-khi-doi-my-sua-sai-post878988.html">
                                    Trung Quốc hủy đàm phán thương mại sau khi đòi Mỹ 'sửa sai'
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:45+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/trung-quoc-huy-dam-phan-thuong-mai-sau-khi-doi-my-sua-sai-post878988.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/jgtnrz/2018_09_22/luu_hac_thumb.jpg" alt="Trung Quoc huy dam phan thuong mai sau khi doi My &#39;sua sai&#39; hinh anh" title="Trung Quốc hủy đàm phán thương mại sau khi đòi Mỹ &#39;sửa sai&#39; hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Bắc Kinh đã chủ động hủy kế hoạch cử Phó thủ tướng Lưu Hạc và phái đoàn sang Mỹ đàm phán thương mại sau khi Washington ra lệnh trừng phạt nhắm vào quân đội Trung Quốc.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/trung-quoc-tra-dua-my-ap-thue-len-60-ty-usd-hang-hoa-post878008.html">
                                    Trung Quốc trả đũa Mỹ, áp thuế lên 60 tỷ USD hàng hóa</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" video" topic-id="3906">
                            <header>
                                <p class="title">
                                    <a href="/video-trung-quoc-khai-mac-trien-lam-hang-khong-lon-nhat-nam-post878940.html">
                                        Trung Quốc khai mạc triển lãm hàng không lớn nhất năm
                                    </a>
                                </p>
                                <time datetime="2018-09-22 20:44+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3712,3909,4151">
                            <header>
                                <p class="title">
                                    <a href="/ro-tin-thu-truong-tu-phap-my-tung-de-nghi-ghi-am-len-tong-thong-trump-post878937.html">
                                        Rộ tin thứ trưởng Tư pháp Mỹ từng đề nghị ghi âm lén Tổng thống Trump
                                    </a>
                                </p>
                                <time datetime="2018-09-22 16:32+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2020,3787,4622,4623">
                            <header>
                                <p class="title">
                                    <a href="/cuba-to-chuc-quoc-tang-tuong-niem-chu-tich-nuoc-tran-dai-quang-post878923.html">
                                        Cuba tổ chức quốc tang tưởng niệm Chủ tịch nước Trần Đại Quang
                                    </a>
                                    <span class="social hot">HOT</span>
                                </p>
                                <time datetime="2018-09-22 14:40+0700"></time>
                            </header>
                        </article>
                        <article class=" video" topic-id="3908,4151,4167,4303">
                            <header>
                                <p class="title">
                                    <a href="/video-90s-chien-thang-cua-ong-abe-va-co-hoi-sua-hien-phap-hoa-binh-nhat-ban-post878854.html">
                                        90S: Chiến thắng của ông Abe và cơ hội sửa hiến pháp hòa bình Nhật Bản
                                    </a>
                                </p>
                                <time datetime="2018-09-22 10:05+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="3906">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/dan-ong-mat-hoa-da-phan-thach-thuc-mau-nam-tinh-truyen-thong-tai-tq-post878464.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/znguhv/2018_09_20/TherealpowerbehindChinasnewtrendofsissymenistheempoweredmodernwoman.jpg" alt="Dan ong mat hoa da phan thach thuc mau nam tinh truyen thong tai TQ hinh anh" title="Đàn ông mặt hoa da phấn thách thức mẫu nam tính truyền thống tại TQ hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/dan-ong-mat-hoa-da-phan-thach-thuc-mau-nam-tinh-truyen-thong-tai-tq-post878464.html">
                                    Đàn ông mặt hoa da phấn thách thức mẫu nam tính truyền thống tại TQ
                                </a>
                            </p>
                            <time datetime="2018-09-22 14:11+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="kinh-doanh" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/kinh-doanh-tai-chinh.html" title="Kinh doanh">Kinh doanh </a></h2>
                        </hgroup>
                        <p>
                            <a href='/tai-chinh.html'>Tài chính</a>
                        </p>
                        <p>
                            <a href='/chung-khoan.html'>Chứng khoán</a>
                        </p>
                        <p>
                            <a href='/bat-dong-san.html'>Bất động sản</a>
                        </p>
                        <p>
                            <a href='/doanh-nhan.html'>Doanh nhân</a>
                        </p>
                    </header>
                    <article class="featured haschart" topic-id="2020,3780,3781">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/giua-tranh-chap-tinh-hinh-kinh-doanh-cua-trung-nguyen-ra-sao-post878915.html">
                                    Giữa tranh chấp, tình hình kinh doanh của Trung Nguyên ra sao?
                                </a>
                            </p>
                            <time datetime="2018-09-22 13:09+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/giua-tranh-chap-tinh-hinh-kinh-doanh-cua-trung-nguyen-ra-sao-post878915.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/kbunac2/2018_09_22/Thumb.jpg" alt="Giua tranh chap, tinh hinh kinh doanh cua Trung Nguyen ra sao? hinh anh" title="Giữa tranh chấp, tình hình kinh doanh của Trung Nguyên ra sao? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Trong thông cáo về việc bãi nhiệm chức phó tổng giám đốc của bà Lê Hoàng Diệp Thảo tối 21/9, lần đầu tiên chỉ số lợi nhuận của Tập đoàn Trung Nguyên được công bố.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/trung-nguyen-lai-bai-nhiem-pho-tong-giam-doc-le-hoang-diep-thao-post878818.html">
                                    Trung Nguyên lại bãi nhiệm Phó tổng giám đốc Lê Hoàng Diệp Thảo</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/canh-bao-quat-tran-mitsubishi-electric-co-nguy-co-rung-lac-bat-thuong-post878964.html">
                                        Cảnh báo quạt trần Mitsubishi Electric có nguy cơ rung lắc bất thường
                                    </a>
                                </p>
                                <time datetime="2018-09-22 17:04+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/trung-quoc-huy-dam-phan-thuong-mai-voi-my-post878911.html">
                                        Trung Quốc hủy đàm phán thương mại với Mỹ
                                    </a>
                                </p>
                                <time datetime="2018-09-22 12:08+0700"></time>
                            </header>
                        </article>
                        <article class=" haschart" >
                            <header>
                                <p class="title">
                                    <a href="/nguoi-dung-viet-lieu-co-duoc-xem-ngoai-hang-anh-mien-phi-post878735.html">
                                        Người dùng Việt liệu có được xem Ngoại hạng Anh miễn phí?
                                    </a>
                                    <span class="comment_count">5</span>
                                </p>
                                <time datetime="2018-09-22 09:45+0700"></time>
                            </header>
                        </article>
                        <article class=" haschart" topic-id="2000,2020,2369">
                            <header>
                                <p class="title">
                                    <a href="/cung-thai-lan-nguoi-nhat-da-mua-nhung-gi-tai-viet-nam-post878761.html">
                                        Cùng Thái Lan, người Nhật đã mua những gì tại Việt Nam?
                                    </a>
                                </p>
                                <time datetime="2018-09-22 09:09+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="3783">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/facebook-co-phan-phoi-lai-ban-quyen-cho-cac-dai-truyen-hinh-viet-post878666.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/ovhunut/2018_09_21/ngoai_hang_anh.jpg" alt="Facebook co phan phoi lai ban quyen cho cac dai truyen hinh Viet? hinh anh" title="Facebook có phân phối lại bản quyền cho các đài truyền hình Việt? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/facebook-co-phan-phoi-lai-ban-quyen-cho-cac-dai-truyen-hinh-viet-post878666.html">
                                    Facebook có phân phối lại bản quyền cho các đài truyền hình Việt?
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:30+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="phap-luat" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/phap-luat.html" title="Pháp luật">Pháp luật </a></h2>
                        </hgroup>
                        <p>
                            <a href='/phap-dinh.html'>Pháp đình</a>
                        </p>
                        <p>
                            <a href='/vu-an.html'>Vụ án</a>
                        </p>
                    </header>
                    <article class="featured " topic-id="2000,2020,2211,4151">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/xuyen-tac-nha-nuoc-facebooker-bo-cong-anh-va-ho-mai-chi-linh-an-post878934.html">
                                    Xuyên tạc Nhà nước, Facebooker Bồ Công Anh và Hồ Mai Chi lĩnh án
                                </a>
                            </p>
                            <time datetime="2018-09-22 15:10+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/xuyen-tac-nha-nuoc-facebooker-bo-cong-anh-va-ho-mai-chi-linh-an-post878934.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_fsxrff/2018_09_22/42273410_539186219827478_8833230805552594944_n.jpg" alt="Xuyen tac Nha nuoc, Facebooker Bo Cong Anh va Ho Mai Chi linh an hinh anh" title="Xuyên tạc Nhà nước, Facebooker Bồ Công Anh và Hồ Mai Chi lĩnh án hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Cả hai bị cáo ngụ tại Cần Thơ khai do buồn chuyện gia đình, bức xúc cá nhân nên thường xuyên soạn thảo tài liệu, đăng bài viết, hình ảnh có nội dung xuyên tạc Đảng, Nhà nước.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/12-bi-cao-khung-bo-chong-chinh-quyen-sap-bi-xet-xu-post858392.html">
                                    12 bị cáo khủng bố, chống chính quyền sắp bị xét xử</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" haschart" >
                            <header>
                                <p class="title">
                                    <a href="/tam-giu-9x-chay-xe-may-mang-theo-sung-tu-che-post878949.html">
                                        Tạm giữ 9X chạy xe máy mang theo súng tự chế
                                    </a>
                                </p>
                                <time datetime="2018-09-22 19:46+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2000,2020,2369,3780">
                            <header>
                                <p class="title">
                                    <a href="/ba-diep-thao-de-nghi-xu-ly-hinh-su-nguoi-can-tro-ba-ve-trung-nguyen-post878980.html">
                                        Bà Diệp Thảo đề nghị xử lý hình sự người cản trở bà về Trung Nguyên
                                    </a>
                                </p>
                                <time datetime="2018-09-22 19:26+0700"></time>
                            </header>
                        </article>
                        <article class=" haschart" topic-id="2020,2213,2215">
                            <header>
                                <p class="title">
                                    <a href="/bat-nu-giam-doc-tron-no-hang-chuc-ty-post878974.html">
                                        Bắt nữ giám đốc trốn nợ hàng chục tỷ
                                    </a>
                                </p>
                                <time datetime="2018-09-22 18:46+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4150">
                            <header>
                                <p class="title">
                                    <a href="/dung-chia-khoa-xe-dam-chet-nguoi-em-coc-cheo-post878872.html">
                                        Dùng chìa khóa xe đâm chết người em 'cọc chèo'
                                    </a>
                                </p>
                                <time datetime="2018-09-22 14:34+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside hasvideo" topic-id="2208,4226,4616">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/xu-ly-sao-khi-thay-2-thi-the-bi-chay-o-khu-tro-cua-ong-hiep-khung-post878868.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/yfsgs/2018_09_21/xuong_1.jpg" alt="Xu ly sao khi thay 2 thi the bi chay o khu tro cua ong Hiep &#39;Khung&#39;? hinh anh" title="Xử lý sao khi thấy 2 thi thể bị cháy ở khu trọ của ông Hiệp &#39;Khùng&#39;? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/xu-ly-sao-khi-thay-2-thi-the-bi-chay-o-khu-tro-cua-ong-hiep-khung-post878868.html">
                                    Xử lý sao khi thấy 2 thi thể bị cháy ở khu trọ của ông Hiệp 'Khùng'?
                                </a>
                                <span class="comment_count">18</span>
                            </p>
                            <time datetime="2018-09-22 10:14+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="xuat-ban" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/xuat-ban.html" title="Xuất bản">Xuất bản </a></h2>
                        </hgroup>
                        <p>
                            <a href='/tin-tuc-xuat-ban.html'>Tin tức xuất bản</a>
                        </p>
                        <p>
                            <a href='/sach-hay.html'>Sách hay</a>
                        </p>
                        <p>
                            <a href='/tac-gia.html'>Tác giả</a>
                        </p>
                    </header>
                    <article class="featured " >
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/chuyen-lang-vu-dai-duoi-chan-nu-than-tu-do-post878750.html">
                                    Chuyện 'làng Vũ Đại' dưới chân Nữ thần Tự do
                                </a>
                            </p>
                            <time datetime="2018-09-22 05:00+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/chuyen-lang-vu-dai-duoi-chan-nu-than-tu-do-post878750.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/ofh_cgkztmzt/2018_09_21/khamphacuocsongnuocmynhungnam1930Hinh5.jpg" alt="Chuyen &#39;lang Vu Dai&#39; duoi chan Nu than Tu do hinh anh" title="Chuyện &#39;làng Vũ Đại&#39; dưới chân Nữ thần Tự do hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Hóm hỉnh, tinh tế nhưng cũng không kém phần sâu cay, bức tranh xã hội chân thực và sống động được vẽ ra dưới những góc nhìn riêng, nơi đồng tiền giữ vai trò chủ đạo.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/xom-bo-giau-va-nhung-cau-chuyen-day-nhiem-mau-ve-lang-que-post877847.html">
                                    ‘Xóm Bờ Giậu’ và những câu chuyện đầy nhiệm màu về làng quê</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/hanh-trinh-dai-de-co-gai-nganh-y-thanh-that-voi-ban-than-post878557.html">
                                        Hành trình dài để cô gái ngành Y thành thật với bản thân
                                    </a>
                                </p>
                                <time datetime="2018-09-22 11:16+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/nhung-cuon-sach-lot-vao-vong-chung-khao-giai-man-booker-2018-post878814.html">
                                        Những cuốn sách lọt vào vòng chung khảo giải Man Booker 2018
                                    </a>
                                </p>
                                <time datetime="2018-09-22 08:43+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/that-tuyet-voi-khi-ket-ban-voi-nhung-quai-vat-tinh-nghich-post878594.html">
                                        Thật tuyệt vời khi kết bạn với những quái vật tinh nghịch
                                    </a>
                                </p>
                                <time datetime="2018-09-21 10:09+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4592">
                            <header>
                                <p class="title">
                                    <a href="/orlando-la-kiet-tac-cua-cong-dong-chuyen-gioi-post877397.html">
                                        'Orlando' là kiệt tác của cộng đồng chuyển giới
                                    </a>
                                </p>
                                <time datetime="2018-09-21 06:00+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside video" topic-id="3852">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/video-cao-luong-do-ve-dep-tuyet-my-cua-van-chuong-va-dien-anh-post878573.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/ofh_wuytgazs/2018_09_21/1414927284caoluongdo22.jpg" alt="&#39;Cao luong do&#39; - Ve dep tuyet my cua van chuong va dien anh hinh anh" title="&#39;Cao lương đỏ&#39; - Vẻ đẹp tuyệt mỹ của văn chương và điện ảnh hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/video-cao-luong-do-ve-dep-tuyet-my-cua-van-chuong-va-dien-anh-post878573.html">
                                    'Cao lương đỏ' - Vẻ đẹp tuyệt mỹ của văn chương và điện ảnh
                                </a>
                            </p>
                            <time datetime="2018-09-21 09:12+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="the-thao" class="category skin2">
                    <header>
                        <hgroup>
                            <h2><a href="/the-thao.html" title="Thể thao">Thể thao </a></h2>
                            <p>
                                <a href='/the-thao-viet-nam.html'>
                                    Thể thao Việt Nam</a>
                            </p>
                            <p>
                                <a href='/cup-chau-au.html'>
                                    Cup Châu Âu</a>
                            </p>
                            <p>
                                <a href='/the-thao-the-gioi.html'>
                                    Thể thao Thế giới</a>
                            </p>
                            <p>
                                <a href='/bong-da-anh.html'>
                                    Bóng đá Anh</a>
                            </p>
                            <p>
                                <a href='/bong-da-viet-nam.html'>
                                    Bóng đá Việt Nam</a>
                            </p>
                            <p>
                                <a href='/hau-truong-the-thao.html'>
                                    Hậu trường thể thao</a>
                            </p>
                        </hgroup>
                    </header>
                    <article class="featured " topic-id="2020">
                        <div class="cover">
                            <a href="/sao-tre-indonesia-ha-lien-bon-cao-thu-tai-giai-cau-long-trung-quoc-post878932.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/neg_etpyole/2018_09_22/DnrN1TRWsAAYIje.jpg" alt="Sao tre Indonesia ha lien bon cao thu tai giai cau long Trung Quoc hinh anh" title="Sao trẻ Indonesia hạ liền bốn cao thủ tại giải cầu lông Trung Quốc hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/sao-tre-indonesia-ha-lien-bon-cao-thu-tai-giai-cau-long-trung-quoc-post878932.html">
                                    Sao trẻ Indonesia hạ liền bốn cao thủ tại giải cầu lông Trung Quốc
                                </a>
                            </p>
                            <time datetime="2018-09-22 15:13+0700"></time>
                        </header>
                        <p class="summary">Anthony Sinisuka Ginting đang trở thành hiện tượng tại giải cầu lông Trung Quốc mở rộng 2018 khi lần lượt loại 4 tay vợt hạt giống để tiến vào chung kết.</p>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4461,4516">
                            <div class="cover">
                                <a href="/tuong-dai-cau-long-lee-chong-wei-mac-benh-ung-thu-post878944.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/neg_etpyole/2018_09_22/DnraMLFU8AAUdfD.jpg" alt="Tuong dai cau long Lee Chong Wei mac benh ung thu hinh anh" title="Tượng đài cầu lông Lee Chong Wei mắc bệnh ung thư hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/tuong-dai-cau-long-lee-chong-wei-mac-benh-ung-thu-post878944.html">
                                        Tượng đài cầu lông Lee Chong Wei mắc bệnh ung thư
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Chủ tịch liên đoàn cầu lông Malaysia (BAM) xác nhận Lee Chong Wei được chẩn đoán bị ung thư mũi giai đoạn 1.</p>
                        </article>
                        <article class=" hasvideo" topic-id="3849,3925,3964">
                            <div class="cover">
                                <a href="/mu-vs-wolves-hlv-mourinho-hay-giu-loi-hua-post878899.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/ofh_nuottuqz/2018_09_22/sei_30868350c1d4.jpg" alt="MU vs Wolves: HLV Mourinho hay giu loi hua hinh anh" title="MU vs Wolves: HLV Mourinho hãy giữ lời hứa hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/mu-vs-wolves-hlv-mourinho-hay-giu-loi-hua-post878899.html">
                                        MU vs Wolves: HLV Mourinho hãy giữ lời hứa
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Với mạch trận toàn thắng trên sân khách, giờ là lúc thầy trò Jose Mourinho nghĩ về 3 điểm trong cuộc tiếp đón Wolves lúc 21h hôm nay để chiều lòng người hâm mộ tại Old Trafford.</p>
                        </article>
                        <article class=" live stream" topic-id="2001,2369">
                            <header>
                                <p class="title">
                                    <a href="/man-utd-vs-wolverhampton-alexis-sanchez-da-chinh-post878998.html">
                                        Man Utd vs Wolverhampton: Alexis Sanchez đá chính
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Ngôi sao người Chile được HLV Mourinho cho nghỉ ngơi trong chuyến hành quân đến Thụy Sĩ tại cúp châu Âu để có thể lực tốt nhất ở cuộc tiếp đón "Bầy sói" đêm nay.</p>
                        </article>
                        <article class=" live stream" topic-id="4015,3847">
                            <header>
                                <p class="title">
                                    <a href="/cardiff-vs-man-city-david-silva-du-bi-post877849.html">
                                        Cardiff vs Man City: David Silva dự bị
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Sau trận thua đáng thất vọng ở lượt đầu vòng bảng Champions League, Man City trở lại giải quốc nội Premier League với mục tiêu tìm kiếm 3 điểm dù làm khách đến sân của Cardiff.</p>
                        </article>
                        <article class="" topic-id="2020,3943">
                            <header>
                                <p class="title">
                                    <a href="/sir-alex-ferguson-tro-lai-old-trafford-sau-con-bao-benh-post878985.html">
                                        Sir Alex Ferguson trở lại Old Trafford sau cơn bạo bệnh
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Sau cơn “thập tử nhất sinh” hồi tháng 5/2018, cựu HLV Sir Alex Ferguson sẽ dự khán trận đấu giữa Manchester United và Wolverhampton diễn ra lúc 21h.
                            </p>
                        </article>
                        <article class=" hasvideo" topic-id="42,2020,3850,3860,4008">
                            <header>
                                <p class="title">
                                    <a href="/chu-tich-perez-chung-toi-khong-he-muon-ban-ronaldo-post878969.html">
                                        Chủ tịch Perez: 'Chúng tôi không hề muốn bán Ronaldo'
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Chủ tịch Florentino Perez mới đây vừa tiết lộ với báo chí rằng Real Madrid không muốn chia tay Ronaldo, song đội bóng Hoàng gia Tây Ban Nha buộc phải tôn trọng quyết định của CR7.</p>
                        </article>
                    </div>
                </section>
                <section id="cong-nghe" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/cong-nghe.html" title="Công nghệ">Công nghệ </a></h2>
                        </hgroup>
                        <p>
                            <a href='/dien-thoai.html'>Điện thoại</a>
                        </p>
                        <p>
                            <a href='/may-tinh-bang.html'>Máy tính bảng</a>
                        </p>
                        <p>
                            <a href='/ung-dung-di-dong.html'>Ứng dụng di động</a>
                        </p>
                    </header>
                    <article class="featured picture" topic-id="2020,3474,4022,4439,4601,4608,4609">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/3-phien-ban-mau-sac-cua-iphone-xs-max-tai-vn-post878624.html">
                                    3 phiên bản màu sắc của iPhone XS Max tại VN
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:00+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/3-phien-ban-mau-sac-cua-iphone-xs-max-tai-vn-post878624.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/neg_wpeczyr/2018_09_21/_Sua_tin_20180922_3_PM1137.jpg" alt="3 phien ban mau sac cua iPhone XS Max tai VN hinh anh" title="3 phiên bản màu sắc của iPhone XS Max tại VN hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">3 phiên bản màu sắc của iPhone XS Max đã xuất hiện tại Việt Nam với bộ nhớ trong 256 GB và đang được chào bán với mức giá 46,9 triệu đồng.</p>
                        <ul class="relate">
                            <li class=" picture hasvideo">
                                <a href="/iphone-xs-max-so-dang-iphone-x-tai-viet-nam-post878580.html">
                                    iPhone XS Max so dáng iPhone X tại Việt Nam</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4494,3474">
                            <header>
                                <p class="title">
                                    <a href="/cach-dung-siri-shortcuts-tinh-nang-hay-nhat-tren-ios-12-post878333.html">
                                        Cách dùng Siri Shortcuts - tính năng hay nhất trên iOS 12
                                    </a>
                                </p>
                                <time datetime="2018-09-22 13:15+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3474,3699,4022,4439,4601,4608,4609">
                            <header>
                                <p class="title">
                                    <a href="/danh-gia-iphone-xs-tot-nhung-ai-dung-iphone-x-nen-bo-qua-post878582.html">
                                        Đánh giá iPhone XS: Tốt, nhưng ai dùng iPhone X nên bỏ qua
                                    </a>
                                </p>
                                <time datetime="2018-09-22 12:00+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/amd-dang-tro-lai-dau-tu-thi-truong-tre-gianh-thi-phan-intel-post876753.html">
                                        AMD đang trở lại, đầu tư thị trường trẻ giành thị phần Intel
                                    </a>
                                </p>
                                <time datetime="2018-09-22 10:04+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3784,3825,4217">
                            <header>
                                <p class="title">
                                    <a href="/youtube-bi-to-theo-doi-va-kiem-tien-tu-tre-em-post878824.html">
                                        YouTube bị tố theo dõi và kiếm tiền từ trẻ em
                                    </a>
                                </p>
                                <time datetime="2018-09-22 08:00+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="3783">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/ung-dung-con-cua-facebook-hien-video-doc-hai-voi-tre-em-post878955.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/fsmyy/2018_09_22/105284874IGTV101910x1000.JPG" alt="Ung dung con cua Facebook hien video doc hai voi tre em hinh anh" title="Ứng dụng con của Facebook hiện video độc hại với trẻ em hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/ung-dung-con-cua-facebook-hien-video-doc-hai-voi-tre-em-post878955.html">
                                    Ứng dụng con của Facebook hiện video độc hại với trẻ em
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:00+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="xe-360" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/oto-xe-may.html" title="Xe 360">Xe 360 </a></h2>
                        </hgroup>
                        <p>
                            <a href='/xe-may.html'>Xe máy</a>
                        </p>
                        <p>
                            <a href='/o-to.html'>Ô-tô</a>
                        </p>
                        <p>
                            <a href='/xe-do.html'>Xe độ</a>
                        </p>
                        <p>
                            <a href='/sieu-xe.html'>Siêu xe</a>
                        </p>
                    </header>
                    <article class="featured picture" topic-id="2020">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/range-rover-autobiography-lwb-2018-dau-tien-ve-vn-gia-14-ty-dong-post878800.html">
                                    Range Rover Autobiography LWB 2018 đầu tiên về VN, giá 14 tỷ đồng
                                </a>
                            </p>
                            <time datetime="2018-09-22 18:00+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/range-rover-autobiography-lwb-2018-dau-tien-ve-vn-gia-14-ty-dong-post878800.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/fsmuy/2018_09_21/_DSC7593.jpg" alt="Range Rover Autobiography LWB 2018 dau tien ve VN, gia 14 ty dong hinh anh" title="Range Rover Autobiography LWB 2018 đầu tiên về VN, giá 14 tỷ đồng hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Mẫu SUV hạng sang Anh quốc có khoảng để chân cho hàng ghế 2 dài hơn 186 mm, giá bán hơn 12 tỷ đồng tại Việt Nam.</p>
                        <ul class="relate">
                            <li class=" picture hasvideo">
                                <a href="/peugeot-ra-mat-xe-dien-voi-16-man-hinh-ben-trong-noi-that-post878606.html">
                                    Peugeot ra mắt xe điện với 16 màn hình bên trong nội thất </a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" picture hasvideo" topic-id="4440">
                            <header>
                                <p class="title">
                                    <a href="/lo-dien-concept-xe-dau-keo-chay-dien-cua-ford-post878810.html">
                                        Lộ diện concept xe đầu kéo chạy điện của Ford
                                    </a>
                                </p>
                                <time datetime="2018-09-22 13:04+0700"></time>
                            </header>
                        </article>
                        <article class=" infographic" topic-id="4413,4440">
                            <header>
                                <p class="title">
                                    <a href="/nen-mua-isuzu-mu-x-19-at-4x2-hay-ford-everest-20-at-4x2-post878669.html">
                                        Nên mua Isuzu mu-X 1.9 AT 4x2 hay Ford Everest 2.0 AT 4x2?
                                    </a>
                                </p>
                                <time datetime="2018-09-22 07:18+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="3739,4150,4440,4592">
                            <header>
                                <p class="title">
                                    <a href="/hong-dong-co-may-bay-ha-canh-dam-nat-tesla-model-x-post878811.html">
                                        Hỏng động cơ, máy bay hạ cánh đâm nát Tesla Model X
                                    </a>
                                </p>
                                <time datetime="2018-09-21 22:32+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="4439">
                            <header>
                                <p class="title">
                                    <a href="/yamaha-r15-hoa-ca-map-chua-bmw-hp4-race-boi-tho-viet-post878592.html">
                                        Yamaha R15 hóa 'cá mập chúa' BMW HP4 Race bởi thợ Việt
                                    </a>
                                </p>
                                <time datetime="2018-09-21 20:10+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside picture" topic-id="4440">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/suzuki-vitara-2019-lo-dien-hoan-toan-loai-bo-dong-co-diesel-post878946.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/OFH_oazszstq/2018_09_22/2019suzukivitaragetsnewphotogalleryaheadofparisdebut_11.jpg" alt="Suzuki Vitara 2019 lo dien hoan toan, loai bo dong co diesel hinh anh" title="Suzuki Vitara 2019 lộ diện hoàn toàn, loại bỏ động cơ diesel hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/suzuki-vitara-2019-lo-dien-hoan-toan-loai-bo-dong-co-diesel-post878946.html">
                                    Suzuki Vitara 2019 lộ diện hoàn toàn, loại bỏ động cơ diesel
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:02+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="giai-tri" class="category skin2">
                    <header>
                        <hgroup>
                            <h2><a href="/giai-tri.html" title="Giải trí">Giải trí </a></h2>
                            <p>
                                <a href='/sao-viet.html'>
                                    Sao Việt</a>
                            </p>
                            <p>
                                <a href='/sao-chau-a.html'>
                                    Sao Châu Á</a>
                            </p>
                            <p>
                                <a href='/sao-hollywood.html'>
                                    Sao Hollywood</a>
                            </p>
                        </hgroup>
                    </header>
                    <article class="featured picture hasvideo" topic-id="2001,2020,2369,3919,4590,4613">
                        <div class="cover">
                            <a href="/gia-dinh-dai-tiec-mung-don-hoa-hau-tran-tieu-vy-o-pho-co-hoi-an-post878912.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/oqivovbt/2018_09_22/tieuvy_zing_2_7.jpg" alt="Gia dinh dai tiec mung don Hoa hau Tran Tieu Vy o pho co Hoi An hinh anh" title="Gia đình đãi tiệc mừng đón Hoa hậu Trần Tiểu Vy ở phố cổ Hội An hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/gia-dinh-dai-tiec-mung-don-hoa-hau-tran-tieu-vy-o-pho-co-hoi-an-post878912.html">
                                    Gia đình đãi tiệc mừng đón Hoa hậu Trần Tiểu Vy ở phố cổ Hội An
                                </a>
                                <span class="comment_count">15</span>
                            </p>
                            <time datetime="2018-09-22 14:48+0700"></time>
                        </header>
                        <p class="summary">Trưa 22/9, gia đình của Hoa hậu Việt Nam 2018 ở Hội An mở tiệc mừng 4 mâm cỗ với sự tham dự của người thân và bạn bè nhân dịp đón Trần Tiểu Vy về thăm nhà sau khi đăng quang.</p>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4084">
                            <div class="cover">
                                <a href="/co-quan-thue-trung-quoc-dang-dieu-tra-cao-buoc-tron-thue-o-showbiz-post878977.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/bpivpjbp/2018_09_22/42189887_1956356321100166_629483772839985152_n.jpg" alt="Co quan thue Trung Quoc: &#39;Dang dieu tra cao buoc tron thue o showbiz&#39; hinh anh" title="Cơ quan thuế Trung Quốc: &#39;Đang điều tra cáo buộc trốn thuế ở showbiz&#39; hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/co-quan-thue-trung-quoc-dang-dieu-tra-cao-buoc-tron-thue-o-showbiz-post878977.html">
                                        Cơ quan thuế Trung Quốc: 'Đang điều tra cáo buộc trốn thuế ở showbiz'
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Cục thuế Giang Tô vừa xác nhận đang thụ lý hồ sơ điều tra liên quan đến các cáo buộc trốn thuế trong giới giải trí. Cơ quan chức năng không đề cập đến tên bất kỳ nghệ sĩ nào.</p>
                        </article>
                        <article class=" picture" topic-id="2002,2020">
                            <div class="cover">
                                <a href="/nghe-si-viet-to-chuc-dang-huong-gio-to-nghe-o-my-post878906.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/bpivpjbp/2018_09_22/42232511_10212956018403413_5658016399071641600_o.jpg" alt="Nghe si Viet to chuc dang huong, gio To nghe o My hinh anh" title="Nghệ sĩ Việt tổ chức dâng hương, giỗ Tổ nghề ở Mỹ hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/nghe-si-viet-to-chuc-dang-huong-gio-to-nghe-o-my-post878906.html">
                                        Nghệ sĩ Việt tổ chức dâng hương, giỗ Tổ nghề ở Mỹ
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Danh hài Bảo Quốc, Chí Tài, ca sĩ Thanh Hà, Thanh Thảo, diễn viên Hồng Đào, ca sĩ Quang Lê và nhiều nghệ sĩ khác đã dâng hương trong ngày giỗ Tổ nghề sân khấu tổ chức tại Mỹ.</p>
                        </article>
                        <article class="" topic-id="2020,4084">
                            <header>
                                <p class="title">
                                    <a href="/luu-khai-uy-len-tieng-ve-tin-ly-hon-duong-mich-gan-hai-nam-post878983.html">
                                        Lưu Khải Uy lên tiếng về tin ly hôn Dương Mịch gần hai năm
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Một người phụ nữ nhận là bạn thân của Lưu Khải Uy khẳng định nam diễn viên và người vợ nổi tiếng đã ly hôn bí mật.</p>
                        </article>
                        <article class=" picture" topic-id="3918">
                            <header>
                                <p class="title">
                                    <a href="/nhan-sac-my-mieu-cua-ham-huong-trong-nhu-y-truyen-post878965.html">
                                        Nhan sắc mỹ miều của 'Hàm Hương' trong 'Như Ý truyện'
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Khán giả đang mong chờ sự xuất hiện của Hương phi (Lý Thấm) trong "Như Ý truyện". Đây là phi tần xinh đẹp khiến Càn Long mê đắm, giống nhân vật Hàm Hương của "Hoàn Châu cách cách".</p>
                        </article>
                        <article class=" video" topic-id="3919,4590,4613">
                            <header>
                                <p class="title">
                                    <a href="/video-hoa-hau-tieu-vy-tat-bat-bay-bien-co-mung-tai-nha-rieng-o-pho-co-hoi-an-post878954.html">
                                        Hoa hậu Tiểu Vy tất bật bày biện cỗ mừng tại nhà riêng ở phố cổ Hội An
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Hoa hậu Việt Nam 2018 rất tươi tắn và xinh đẹp khi về thăm quê trưa 22/9. Cô tự tay chuẩn bị và bưng bê cỗ bàn cùng gia đình để đãi người thân, bạn bè.</p>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/vuong-diem-nang-cach-cach-44-tuoi-giau-co-bac-nhat-bac-kinh-post878876.html">
                                        Vương Diễm - nàng 'cách cách' 44 tuổi giàu có bậc nhất Bắc Kinh
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Trong dàn sao "Hoàn Châu cách cách", Vương Diễm là cái tên mờ nhạt khi so sánh với Triệu Vy, Phạm Băng Băng. Nhưng ở đời thật, cô lại là bà hoàng của giới bất động sản.</p>
                        </article>
                    </div>
                </section>
                <section id="am-nhac" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/am-nhac.html" title="Âm nhạc">Âm nhạc </a></h2>
                        </hgroup>
                        <p>
                            <a href='/nhac-viet.html'>Nhạc Việt</a>
                        </p>
                        <p>
                            <a href='/nhac-han.html'>Nhạc Hàn</a>
                        </p>
                        <p>
                            <a href='/nhac-au-my.html'>Nhạc Âu Mỹ</a>
                        </p>
                        <!-- Thêm sub menu cho Zone Âm nhạc -->
                        <p><a href="/zing-chart-tieu-diem.html">#ZingChart</a></p>
                    </header>
                    <article class="featured hasvideo" topic-id="2020,3689,3905">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/mv-moi-cua-duc-phuc-dep-de-nghe-nhung-lan-man-va-hoi-cu-post878903.html">
                                    MV mới của Đức Phúc đẹp, dễ nghe nhưng lan man và hơi cũ
                                </a>
                            </p>
                            <time datetime="2018-09-22 15:26+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/mv-moi-cua-duc-phuc-dep-de-nghe-nhung-lan-man-va-hoi-cu-post878903.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/izhqv/2018_09_22/maxresdefault_1.jpg" alt="MV moi cua Duc Phuc dep, de nghe nhung lan man va hoi cu hinh anh" title="MV mới của Đức Phúc đẹp, dễ nghe nhưng lan man và hơi cũ hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Sáng tác của Nguyễn Hồng Thuận luôn dễ nghe, MV do Đinh Hà Uyên Thư làm đạo diễn ít khi dở. Nhưng với MV "Còn yêu, đâu ai rời đi" của Đức Phúc, mọi thứ chỉ mới dừng ở mức vừa vặn.</p>
                        <ul class="relate">
                            <li class=" picture">
                                <a href="/hoa-minzy-erik-treu-choc-duc-phuc-trong-ngay-ra-mat-mv-moi-post878532.html">
                                    Hòa Minzy, Erik trêu chọc Đức Phúc trong ngày ra mắt MV mới</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/sau-scandal-au-da-ban-trai-tu-choi-hoa-giai-voi-goo-hara-post878885.html">
                                        Sau scandal ẩu đả, bạn trai từ chối hòa giải với Goo Hara
                                    </a>
                                </p>
                                <time datetime="2018-09-22 10:35+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3743">
                            <header>
                                <p class="title">
                                    <a href="/justin-bieber-chin-chu-bat-ngo-tieu-tien-nhu-nuoc-khi-di-trang-mat-post878878.html">
                                        Justin Bieber chỉn chu bất ngờ, tiêu tiền như nước khi đi 'trăng mật'
                                    </a>
                                </p>
                                <time datetime="2018-09-22 10:08+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3921">
                            <header>
                                <p class="title">
                                    <a href="/quan-hieu-dong-bi-to-dao-nhai-mv-cua-em-gai-quoc-dan-iu-post878784.html">
                                        Quan Hiểu Đồng bị tố đạo nhái MV của 'em gái quốc dân' IU
                                    </a>
                                </p>
                                <time datetime="2018-09-21 20:15+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4085,4135,4479">
                            <header>
                                <p class="title">
                                    <a href="/hoang-so-truoc-bts-exo-hoan-ngay-tro-lai-post878744.html">
                                        Hoảng sợ trước BTS, EXO hoãn ngày trở lại?
                                    </a>
                                </p>
                                <time datetime="2018-09-21 18:00+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside hasvideo" topic-id="4478">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/neu-taylor-swift-la-sao-kpop-nhu-hyuna-su-nghiep-cua-co-da-tieu-tan-post806704.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/wopthuo/2017_12_25/hy.jpg" alt="Neu Taylor Swift la sao Kpop nhu HyunA, su nghiep cua co da tieu tan hinh anh" title="Nếu Taylor Swift là sao Kpop như HyunA, sự nghiệp của cô đã tiêu tan hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/neu-taylor-swift-la-sao-kpop-nhu-hyuna-su-nghiep-cua-co-da-tieu-tan-post806704.html">
                                    Nếu Taylor Swift là sao Kpop như HyunA, sự nghiệp của cô đã tiêu tan
                                </a>
                            </p>
                            <time datetime="2018-09-22 12:53+0700"></time>
                        </header>
                    </article>
                </section>
                <iframe scrolling="no" width="640" height="189" src="https://mp3.zing.vn/embed/zing-chart" frameborder="0" allowfullscreen="true" style="width: 100%;height: 288px;"></iframe>
                <section id="phim-anh" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/phim-anh.html" title="Phim ảnh">Phim ảnh </a></h2>
                        </hgroup>
                        <p>
                            <a href='/phim-chieu-rap.html'>Phim chiếu rạp</a>
                        </p>
                        <p>
                            <a href='/phim-truyen-hinh.html'>Phim truyền hình</a>
                        </p>
                        <p>
                            <a href='/game-show.html'>Game Show</a>
                        </p>
                    </header>
                    <article class="featured hasvideo" topic-id="3922,4084">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/sau-crazy-rich-asians-lieu-hollywood-can-trung-quoc-toi-dau-post878950.html">
                                    Sau ‘Crazy Rich Asians’, liệu Hollywood cần Trung Quốc tới đâu?
                                </a>
                            </p>
                            <time datetime="2018-09-22 17:23+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/sau-crazy-rich-asians-lieu-hollywood-can-trung-quoc-toi-dau-post878950.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/xbhunku/2018_09_22/021.jpg" alt="Sau ‘Crazy Rich Asians’, lieu Hollywood can Trung Quoc toi dau? hinh anh" title="Sau ‘Crazy Rich Asians’, liệu Hollywood cần Trung Quốc tới đâu? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Thành công phòng vé của bộ phim hài - lãng mạn mới đây do Jon M. Chu thực hiện cho thấy Hollywood vẫn có thể thu lãi lớn mà chẳng cần đến quốc gia tỷ dân.</p>
                        <ul class="relate">
                            <li class=" picture">
                                <a href="/loat-nhan-vat-cua-vu-tru-marvel-co-tiem-nang-lan-san-sang-man-anh-nho-post878560.html">
                                    Loạt nhân vật của Vũ trụ Marvel có tiềm năng lấn sân sang màn ảnh nhỏ</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4084">
                            <header>
                                <p class="title">
                                    <a href="/sau-vu-pham-bang-bang-trung-quoc-cam-show-nuoc-ngoai-len-gio-vang-post878865.html">
                                        Sau vụ Phạm Băng Băng, Trung Quốc cấm show nước ngoài lên giờ vàng?
                                    </a>
                                </p>
                                <time datetime="2018-09-22 09:37+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3864">
                            <header>
                                <p class="title">
                                    <a href="/vi-sao-captain-marvel-ra-doi-va-vinh-vien-thay-doi-mcu-post878534.html">
                                        Vì sao ‘Captain Marvel’ ra đời và vĩnh viễn thay đổi MCU?
                                    </a>
                                </p>
                                <time datetime="2018-09-22 08:00+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" >
                            <header>
                                <p class="title">
                                    <a href="/8-chi-tiet-ngo-ngan-nhat-cua-cac-bom-tan-hollywood-thoi-gian-qua-post580255.html">
                                        8 chi tiết ngớ ngẩn nhất của các bom tấn Hollywood thời gian qua
                                    </a>
                                </p>
                                <time datetime="2018-09-22 06:00+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="2003,3838">
                            <header>
                                <p class="title">
                                    <a href="/kha-ngan-song-luan-tinh-cam-tren-phim-truong-hau-due-mat-troi-post878738.html">
                                        Khả Ngân, Song Luân tình cảm trên phim trường 'Hậu duệ mặt trời'
                                    </a>
                                </p>
                                <time datetime="2018-09-21 20:58+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="2348,3919">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/bao-gio-het-e-phim-co-a-hau-thuy-van-nhat-nheo-phi-ly-den-kho-tin-post878766.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/xbhunku/2018_09_21/b2.jpg" alt="‘Bao gio het e’ - phim co A hau Thuy Van nhat nheo, phi ly den kho tin hinh anh" title="‘Bao giờ hết ế’ - phim có Á hậu Thúy Vân nhạt nhẽo, phi lý đến khó tin hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/bao-gio-het-e-phim-co-a-hau-thuy-van-nhat-nheo-phi-ly-den-kho-tin-post878766.html">
                                    ‘Bao giờ hết ế’ - phim có Á hậu Thúy Vân nhạt nhẽo, phi lý đến khó tin
                                </a>
                                <span class="comment_count">12</span>
                            </p>
                            <time datetime="2018-09-22 06:00+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="thoi-trang" class="category skin3">
                    <header>
                        <hgroup>
                            <h2><a href="/thoi-trang.html" title="Thời trang">Thời trang </a></h2>
                            <p><a href='/thoi-trang-sao.html'>
                                    Thời trang sao</a></p>
                            <p><a href='/mac-dep.html'>
                                    Mặc đẹp</a></p>
                            <p><a href='/lam-dep.html'>
                                    Làm đẹp</a></p>
                        </hgroup>
                    </header>
                    <article class="featured picture" topic-id="2002,2020,3918,4446">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/dan-sieu-mau-dot-nong-duong-pho-milan-voi-gu-thoi-trang-sanh-dieu-post878952.html">
                                    Dàn siêu mẫu 'đốt nóng' đường phố Milan với gu thời trang sành điệu
                                </a>
                            </p>
                            <time datetime="2018-09-22 16:19+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/dan-sieu-mau-dot-nong-duong-pho-milan-voi-gu-thoi-trang-sanh-dieu-post878952.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/OpluOAA/2018_09_22/44536446194295Toned_Earlier_that_day_Emily_was_showing_her_toned_abs_in_a_skima1_1537558670906_thumb.jpg" alt="Dan sieu mau &#39;dot nong&#39; duong pho Milan voi gu thoi trang sanh dieu hinh anh" title="Dàn siêu mẫu &#39;đốt nóng&#39; đường phố Milan với gu thời trang sành điệu hình ảnh">
                            </a>
                        </div>
                        <p class="summary">Phong cách thời trang đường phố của các siêu mẫu được giới mộ điệu quan tâm không kém những bộ sưu tập được trình diễn trong khuôn khổ Milan Fashion Week xuân hè 2019. </p>
                        <ul class="relate">
                            <li class="">
                                <a href="/selena-gomez-bat-ngo-xoa-anh-goi-cam-10-6-trieu-luot-thich-post878886.html">
                                    Selena Gomez bất ngờ xóa ảnh gợi cảm 10,6 triệu lượt thích</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="2020,3919,4446">
                            <header>
                                <p class="title">
                                    <a href="/hoa-hau-diem-huong-xin-loi-ntk-vi-lay-vay-muon-cho-nguoi-khac-mac-post878924.html">
                                        Hoa hậu Diễm Hương xin lỗi NTK vì lấy váy mượn cho người khác mặc
                                    </a>
                                </p>
                                <time datetime="2018-09-22 13:56+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3918,4592">
                            <header>
                                <p class="title">
                                    <a href="/thiet-ke-lay-y-tuong-tu-hau-gai-la-no-le-tinh-duc-bi-phan-doi-du-doi-post878873.html">
                                        Thiết kế lấy ý tưởng từ hầu gái là nô lệ tình dục bị phản đối dữ dội
                                    </a>
                                </p>
                                <time datetime="2018-09-22 09:55+0700"></time>
                            </header>
                        </article>
                        <article class=" video" topic-id="4446">
                            <header>
                                <p class="title">
                                    <a href="/video-6-meo-lam-dep-voi-chanh-cho-lan-da-rang-ro-post878682.html">
                                        6 mẹo làm đẹp với chanh cho làn da rạng rỡ
                                    </a>
                                </p>
                                <time datetime="2018-09-22 05:00+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="4446">
                            <header>
                                <p class="title">
                                    <a href="/gigi-hadid-dien-vay-cuoi-day-buom-trong-show-dien-thoi-trang-post878640.html">
                                        Gigi Hadid diện váy cưới đầy bướm trong show diễn thời trang
                                    </a>
                                </p>
                                <time datetime="2018-09-21 18:26+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="3742,3918,4592">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/selena-gomez-bat-ngo-xoa-anh-goi-cam-10-6-trieu-luot-thich-post878886.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/oqivovbt/2018_09_22/selena_2.jpg" alt="Selena Gomez bat ngo xoa anh goi cam 10,6 trieu luot thich hinh anh" title="Selena Gomez bất ngờ xóa ảnh gợi cảm 10,6 triệu lượt thích hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/selena-gomez-bat-ngo-xoa-anh-goi-cam-10-6-trieu-luot-thich-post878886.html">
                                    Selena Gomez bất ngờ xóa ảnh gợi cảm 10,6 triệu lượt thích
                                </a>
                            </p>
                            <time datetime="2018-09-22 10:41+0700"></time>
                        </header>
                    </article>
                    <div class="showcase">
                        <article class=" picture" topic-id="4590,4446,3815,2008">
                            <div class="cover">
                                <a href="/tang-thanh-ha-dang-thu-thao-thanh-lich-di-xem-thoi-trang-post878805.html">
                                    <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/OpluOAA/2018_09_21/ha_tang.jpg" alt="Tang Thanh Ha, Dang Thu Thao thanh lich di xem thoi trang hinh anh" title="Tăng Thanh Hà, Đặng Thu Thảo thanh lịch đi xem thời trang hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title"><a href="/tang-thanh-ha-dang-thu-thao-thanh-lich-di-xem-thoi-trang-post878805.html">
                                        Tăng Thanh Hà, Đặng Thu Thảo thanh lịch đi xem thời trang
                                    </a></p>
                                <time datetime="2018-09-21 22:21+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="692,2008,3918">
                            <div class="cover">
                                <a href="/sieu-mau-miranda-kerr-tai-xuat-rang-ngoi-sau-5-thang-sinh-con-post878646.html">
                                    <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/neg_yslewlx/2018_09_21/00storymirandakerr_2.jpg" alt="Sieu mau Miranda Kerr tai xuat rang ngoi sau 5 thang sinh con hinh anh" title="Siêu mẫu Miranda Kerr tái xuất rạng ngời sau 5 tháng sinh con hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title"><a href="/sieu-mau-miranda-kerr-tai-xuat-rang-ngoi-sau-5-thang-sinh-con-post878646.html">
                                        Siêu mẫu Miranda Kerr tái xuất rạng ngời sau 5 tháng sinh con
                                    </a></p>
                                <time datetime="2018-09-21 12:21+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2008,4446">
                            <div class="cover">
                                <a href="/phu-sat-hoang-hau-dong-khiet-tan-lam-do-sac-tai-su-kien-post878562.html">
                                    <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/kbd_pilk/2018_09_20/tanlam8.jpg" alt="&#39;Phu Sat hoang hau&#39; Dong Khiet - Tan Lam do sac tai su kien hinh anh" title="&#39;Phú Sát hoàng hậu&#39; Đổng Khiết - Tần Lam đọ sắc tại sự kiện hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title"><a href="/phu-sat-hoang-hau-dong-khiet-tan-lam-do-sac-tai-su-kien-post878562.html">
                                        'Phú Sát hoàng hậu' Đổng Khiết - Tần Lam đọ sắc tại sự kiện
                                    </a></p>
                                <time datetime="2018-09-21 00:14+0700"></time>
                            </header>
                        </article>
                    </div>
                </section>
                <section id="song-tre" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/song-tre.html" title="Sống trẻ">Sống trẻ </a></h2>
                        </hgroup>
                        <p>
                            <a href='/guong-mat-tre.html'>Gương mặt trẻ</a>
                        </p>
                        <p>
                            <a href='/cong-dong-mang.html'>Cộng đồng mạng</a>
                        </p>
                        <p>
                            <a href='/su-kien.html'>Sự kiện</a>
                        </p>
                    </header>
                    <article class="featured picture hasvideo" topic-id="2002,2020,2593,3918,3919">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/a-hau-1-bui-phuong-nga-va-loat-hot-girl-dh-kinh-te-quoc-dan-post877421.html">
                                    Á hậu 1 Bùi Phương Nga và loạt hot girl ĐH Kinh tế quốc dân
                                </a>
                            </p>
                            <time datetime="2018-09-22 17:00+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/a-hau-1-bui-phuong-nga-va-loat-hot-girl-dh-kinh-te-quoc-dan-post877421.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/neg_rtlzofn/2018_09_17/Nhat_thao_thumb.jpg" alt="A hau 1 Bui Phuong Nga va loat hot girl DH Kinh te quoc dan hinh anh" title="Á hậu 1 Bùi Phương Nga và loạt hot girl ĐH Kinh tế quốc dân hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Không chỉ có Á hậu 1 Bùi Phương Nga vừa đăng quang, ĐH Kinh tế quốc dân còn sở hữu nhiều nữ sinh nổi tiếng và tài năng.</p>
                        <ul class="relate">
                            <li class=" picture">
                                <a href="/hoang-tu-anh-19-tuoi-bat-ngo-cong-khai-ban-gai-hoc-cung-truong-post878917.html">
                                    Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/cau-do-vi-sao-cong-chua-chon-cuoi-nguoi-khong-vuot-qua-thu-thach-post875480.html">
                                        Câu đố: Vì sao công chúa chọn cưới người không vượt qua thử thách?
                                    </a>
                                </p>
                                <time datetime="2018-09-22 19:12+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="4154,4461">
                            <header>
                                <p class="title">
                                    <a href="/9x-tai-hien-khoanh-khac-an-mung-cua-van-thanh-qua-140-tranh-ve-post877846.html">
                                        9X tái hiện khoảnh khắc ăn mừng của Văn Thanh qua 140 tranh vẽ
                                    </a>
                                </p>
                                <time datetime="2018-09-22 09:57+0700"></time>
                            </header>
                        </article>
                        <article class=" picture hasvideo" topic-id="4442">
                            <header>
                                <p class="title">
                                    <a href="/hoy-boy-trung-quoc-cao-1-80-m-gioi-tieng-viet-don-tim-hoi-chi-em-post877523.html">
                                        Hoy boy Trung Quốc cao 1,80 m, giỏi tiếng Việt 'đốn tim' hội chị em
                                    </a>
                                </p>
                                <time datetime="2018-09-22 09:26+0700"></time>
                            </header>
                        </article>
                        <article class=" video" topic-id="2121">
                            <header>
                                <p class="title">
                                    <a href="/video-gioi-tre-chen-chan-choi-cho-trung-thu-pho-co-post878863.html">
                                        Giới trẻ chen chân chơi chợ Trung thu phố cổ
                                    </a>
                                </p>
                                <time datetime="2018-09-22 09:02+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside picture" topic-id="2002">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/hoang-tu-anh-19-tuoi-bat-ngo-cong-khai-ban-gai-hoc-cung-truong-post878917.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/neg_rtlzofn/2018_09_22/5b48ca2_thumb.jpg" alt="Hoang tu Anh 19 tuoi bat ngo cong khai ban gai hoc cung truong hinh anh" title="Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/hoang-tu-anh-19-tuoi-bat-ngo-cong-khai-ban-gai-hoc-cung-truong-post878917.html">
                                    Hoàng tử Anh 19 tuổi bất ngờ công khai bạn gái học cùng trường
                                </a>
                            </p>
                            <time datetime="2018-09-22 15:13+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="giao-duc" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/giao-duc.html" title="Giáo dục">Giáo dục </a></h2>
                        </hgroup>
                        <p>
                            <a href='/tuyen-sinh-dai-hoc-2018.html'>Tuyển sinh 2018</a>
                        </p>
                        <p>
                            <a href='/tu-van-giao-duc.html'>Tư vấn</a>
                        </p>
                        <p>
                            <a href='/du-hoc.html'> Du học</a>
                        </p>
                        <!-- Thêm sub menu cho Zone Giáo dục -->
                        <p><a href="/hoc-tieng-anh-tieu-diem.html">Học Tiếng Anh</a></p>
                    </header>
                    <article class="featured " >
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/vi-sao-hon-dao-martinique-co-the-giup-con-nguoi-khong-ngung-cao-len-post876312.html">
                                    Vì sao hòn đảo Martinique có thể giúp con người không ngừng cao lên?
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:05+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/vi-sao-hon-dao-martinique-co-the-giup-con-nguoi-khong-ngung-cao-len-post876312.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_nsozxd/2018_09_12/2.jpg" alt="Vi sao hon dao Martinique co the giup con nguoi khong ngung cao len? hinh anh" title="Vì sao hòn đảo Martinique có thể giúp con người không ngừng cao lên? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Trên thế giới có hàng triệu hòn đảo khác nhau, trong đó có những hòn đảo ẩn chứa bí mật kỳ lạ, khoa học chưa thể giải thích.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/dat-nuoc-nao-co-hinh-qua-ot-post875748.html">
                                    Đất nước nào có hình quả ớt?</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4498,4151">
                            <header>
                                <p class="title">
                                    <a href="/phan-luong-sau-thcs-can-giai-phap-cu-the-mo-hinh-phan-luong-moi-post878986.html">
                                        Phân luồng sau THCS: Cần giải pháp cụ thể, mô hình phân luồng mới
                                    </a>
                                </p>
                                <time datetime="2018-09-22 20:08+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2020,3535">
                            <header>
                                <p class="title">
                                    <a href="/tinh-nao-nho-nhat-viet-nam-que-huong-cua-17-trang-nguyen-post878538.html">
                                        Tỉnh nào nhỏ nhất Việt Nam, quê hương của 17 trạng nguyên?
                                    </a>
                                </p>
                                <time datetime="2018-09-22 19:33+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4236,4081,4080">
                            <header>
                                <p class="title">
                                    <a href="/sinh-vien-so-huu-tai-san-truong-dh-qua-kho-hieu-post878861.html">
                                        Sinh viên sở hữu tài sản trường ĐH: Quá khó hiểu
                                    </a>
                                </p>
                                <time datetime="2018-09-22 15:15+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4080,4236,4452,4603">
                            <header>
                                <p class="title">
                                    <a href="/nghi-luc-thu-khoa-khoi-c-tung-thi-truot-dai-hoc-post878860.html">
                                        Nghị lực thủ khoa khối C từng thi trượt đại học
                                    </a>
                                </p>
                                <time datetime="2018-09-22 15:05+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " >
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/giai-thoai-ve-vi-vua-co-142-con-phong-thich-cung-nu-cau-mua-post877246.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/mdf_nsozxd/2018_09_16/vua_minh_mang.jpg" alt="Giai thoai ve vi vua co 142 con, phong thich cung nu cau mua hinh anh" title="Giai thoại về vị vua có 142 con, phóng thích cung nữ cầu mưa hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/giai-thoai-ve-vi-vua-co-142-con-phong-thich-cung-nu-cau-mua-post877246.html">
                                    Giai thoại về vị vua có 142 con, phóng thích cung nữ cầu mưa
                                </a>
                            </p>
                            <time datetime="2018-09-22 08:18+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="suc-khoe" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/suc-khoe.html" title="Sức khỏe">Sức khỏe </a></h2>
                        </hgroup>
                        <p>
                            <a href='/khoe-dep.html'>Khỏe đẹp</a>
                        </p>
                        <p>
                            <a href='/dinh-duong.html'>Dinh dưỡng</a>
                        </p>
                        <p>
                            <a href='/me-va-be.html'>Mẹ và Bé</a>
                        </p>
                        <p>
                            <a href='/benh-thuong-gap.html'>Bệnh thường gặp</a>
                        </p>
                    </header>
                    <article class="featured video" topic-id="2020,3457">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/video-tac-dung-khong-ngo-khi-dat-hanh-tay-vao-long-ban-chan-qua-dem-post878645.html">
                                    Tác dụng không ngờ khi đặt hành tây vào lòng bàn chân qua đêm
                                </a>
                            </p>
                            <time datetime="2018-09-22 19:12+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/video-tac-dung-khong-ngo-khi-dat-hanh-tay-vao-long-ban-chan-qua-dem-post878645.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/sgorvz/2018_09_21/hanh_tay_thumb.jpg" alt="Tac dung khong ngo khi dat hanh tay vao long ban chan qua dem hinh anh" title="Tác dụng không ngờ khi đặt hành tây vào lòng bàn chân qua đêm hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Hành tây có tác dụng thấm hút, khử mùi, loại bỏ vi khuẩn gây hại, vì vậy, đặt nó dưới lòng bàn chân để qua đêm sẽ mang lại công dụng không ngờ cho sức khỏe.</p>
                        <ul class="relate">
                            <li class=" picture">
                                <a href="/8-thoi-quen-truoc-khi-ngu-giup-cac-cap-doi-luon-hanh-phuc-post866588.html">
                                    8 thói quen trước khi ngủ giúp các cặp đôi luôn hạnh phúc</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/ngo-cam-cum-thong-thuong-gan-20-tre-phai-nhap-vien-post878975.html">
                                        Ngỡ cảm cúm thông thường, gần 20 trẻ phải nhập viện
                                    </a>
                                </p>
                                <time datetime="2018-09-22 18:54+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4151">
                            <header>
                                <p class="title">
                                    <a href="/viet-nam-dang-xuc-tien-tu-san-xuat-vac-xin-5-trong-1-post878852.html">
                                        Việt Nam đang xúc tiến tự sản xuất vắc xin 5 trong 1
                                    </a>
                                </p>
                                <time datetime="2018-09-22 15:48+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4150">
                            <header>
                                <p class="title">
                                    <a href="/nguoi-phu-nu-hoi-sinh-sau-khi-bi-ket-van-tim-post878850.html">
                                        Người phụ nữ hồi sinh sau khi bị kẹt van tim
                                    </a>
                                </p>
                                <time datetime="2018-09-22 07:31+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/phau-thuat-lay-chiec-kim-khau-dai-2-cm-trong-khuyu-tay-benh-nhi-post878817.html">
                                        Phẫu thuật lấy chiếc kim khâu dài 2 cm trong khuỷu tay bệnh nhi
                                    </a>
                                </p>
                                <time datetime="2018-09-22 07:16+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="4170">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/de-tre-doi-se-tu-an-dung-hay-sai-post878614.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/gtnvzv/2018_09_21/bosungkemchotrebiengan2_thumb.jpg" alt="De tre doi se tu an, dung hay sai? hinh anh" title="Để trẻ đói sẽ tự ăn, đúng hay sai? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/de-tre-doi-se-tu-an-dung-hay-sai-post878614.html">
                                    Để trẻ đói sẽ tự ăn, đúng hay sai?
                                </a>
                            </p>
                            <time datetime="2018-09-22 06:21+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="du-lich" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/du-lich.html" title="Du lịch">Du lịch </a></h2>
                        </hgroup>
                        <p>
                            <a href='/dia-diem-du-lich.html'>Địa điểm du lịch</a>
                        </p>
                        <p>
                            <a href='/kinh-nghiem-du-lich.html'>Kinh nghiệm du lịch</a>
                        </p>
                        <p>
                            <a href='/phuot.html'>Phượt</a>
                        </p>
                    </header>
                    <article class="featured picture noads" >
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/nhung-diem-den-bi-mat-nam-trong-long-dat-o-london-post878747.html">
                                    Những điểm đến bí mật nằm trong lòng đất ở London
                                </a>
                            </p>
                            <time datetime="2018-09-22 13:35+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/nhung-diem-den-bi-mat-nam-trong-long-dat-o-london-post878747.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/qhj_pwqvdvicbu/2018_09_21/10_2.jpg" alt="Nhung diem den bi mat nam trong long dat o London hinh anh" title="Những điểm đến bí mật nằm trong lòng đất ở London hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">London (Anh) được biết đến là thành phố du lịch sầm uất bậc nhất thế giới. Dưới chân thành phố này có những địa điểm thú vị, thu hút du khách.</p>
                        <ul class="relate">
                            <li class=" picture noads">
                                <a href="/ham-ruou-ky-luc-rong-den-muc-du-khach-co-the-tham-quan-bang-oto-post878636.html">
                                    Hầm rượu kỷ lục rộng đến mức du khách có thể tham quan bằng ôtô</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" video" topic-id="4621,4467">
                            <header>
                                <p class="title">
                                    <a href="/video-5-cay-cau-noi-tieng-tai-da-nang-post878572.html">
                                        5 cây cầu nổi tiếng tại Đà Nẵng
                                    </a>
                                </p>
                                <time datetime="2018-09-22 18:00+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4467">
                            <header>
                                <p class="title">
                                    <a href="/tu-ha-noi-nen-di-hue-bang-tau-hoa-hay-may-bay-post878874.html">
                                        Từ Hà Nội, nên đi Huế bằng tàu hỏa hay máy bay?
                                    </a>
                                </p>
                                <time datetime="2018-09-22 12:21+0700"></time>
                            </header>
                        </article>
                        <article class=" video" topic-id="2121,4621">
                            <header>
                                <p class="title">
                                    <a href="/video-5-loai-vat-da-bien-mat-trong-the-ky-21-post877380.html">
                                        5 loài vật đã biến mất trong thế kỷ 21
                                    </a>
                                </p>
                                <time datetime="2018-09-22 06:00+0700"></time>
                            </header>
                        </article>
                        <article class=" video" topic-id="3618,4621">
                            <header>
                                <p class="title">
                                    <a href="/video-5-dieu-khong-co-tai-da-lat-post877636.html">
                                        5 điều không có tại Đà Lạt
                                    </a>
                                    <span class="social hot">HOT</span>
                                </p>
                                <time datetime="2018-09-21 18:00+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside picture noads" topic-id="4465">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/ha-noi-cuoi-the-ky-20-duoi-ong-kinh-nhiep-anh-gia-nhat-ban-post877860.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/mdf_xqkxvu/2018_09_18/Zing_Hang_Dau_Str_Hoan_Kiem_0021999.jpg" alt="Ha Noi cuoi the ky 20 duoi ong kinh nhiep anh gia Nhat Ban hinh anh" title="Hà Nội cuối thế kỷ 20 dưới ống kính nhiếp ảnh gia Nhật Bản hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/ha-noi-cuoi-the-ky-20-duoi-ong-kinh-nhiep-anh-gia-nhat-ban-post877860.html">
                                    Hà Nội cuối thế kỷ 20 dưới ống kính nhiếp ảnh gia Nhật Bản
                                </a>
                                <span class="comment_count">8</span>
                            </p>
                            <time datetime="2018-09-22 07:59+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="am-thuc" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/am-thuc.html" title="Ẩm thực">Ẩm thực </a></h2>
                        </hgroup>
                        <p>
                            <a href='/dia-diem-an-uong.html'>Địa điểm ăn uống</a>
                        </p>
                        <p>
                            <a href='/mon-ngon.html'>Món ngon</a>
                        </p>
                    </header>
                    <article class="featured picture noads" topic-id="0">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/dao-quanh-le-hoi-am-thuc-duong-pho-gan-1000-mon-ngon-o-ha-noi-post878806.html">
                                    Dạo quanh lễ hội ẩm thực đường phố gần 1.000 món ngon ở Hà Nội
                                </a>
                            </p>
                            <time datetime="2018-09-22 08:19+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/dao-quanh-le-hoi-am-thuc-duong-pho-gan-1000-mon-ngon-o-ha-noi-post878806.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_eioxrd/2018_09_21/3_2.JPG" alt="Dao quanh le hoi am thuc duong pho gan 1.000 mon ngon o Ha Noi hinh anh" title="Dạo quanh lễ hội ẩm thực đường phố gần 1.000 món ngon ở Hà Nội hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Lễ hội Ẩm thực đường phố gần 1.000 món ngon được tổ chức tại Hà Nội thu hút đông đảo bạn trẻ tham quan, check-in trong ngày đầu mở cửa.
                        </p>
                        <ul class="relate">
                            <li class=" advertising">
                                <a href="/tan-huong-hoi-an-mua-trung-thu-giua-long-ha-noi-post878771.html">
                                    Tận hưởng Hội An mùa Trung thu giữa lòng Hà Nội </a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" video" >
                            <header>
                                <p class="title">
                                    <a href="/video-roti-canai-banh-mi-truyen-thong-me-hoac-thuc-khach-o-malaysia-post878467.html">
                                        Roti canai - bánh mì truyền thống mê hoặc thực khách ở Malaysia
                                    </a>
                                </p>
                                <time datetime="2018-09-22 13:14+0700"></time>
                            </header>
                        </article>
                        <article class=" noads" topic-id="1524,2189,4445">
                            <header>
                                <p class="title">
                                    <a href="/an-ca-tram-dia-sushi-mot-lan-van-dong-vien-duc-bi-nha-hang-cam-cua-post878360.html">
                                        Ăn cả trăm đĩa sushi một lần, vận động viên Đức bị nhà hàng 'cấm cửa'
                                    </a>
                                    <span class="comment_count">7</span>
                                </p>
                                <time datetime="2018-09-21 15:05+0700"></time>
                            </header>
                        </article>
                        <article class=" picture noads" topic-id="4445">
                            <header>
                                <p class="title">
                                    <a href="/bo-tui-nhung-dia-chi-pha-lau-bo-hap-dan-tai-tphcm-post878344.html">
                                        Bỏ túi những địa chỉ phá lấu bò hấp dẫn tại TP.HCM
                                    </a>
                                    <span class="comment_count">19</span>
                                </p>
                                <time datetime="2018-09-21 08:23+0700"></time>
                            </header>
                        </article>
                        <article class=" video" >
                            <header>
                                <p class="title">
                                    <a href="/video-tu-lam-long-do-trung-muoi-cho-mua-trung-thu-post877475.html">
                                        Tự làm lòng đỏ trứng muối cho mùa Trung thu
                                    </a>
                                </p>
                                <time datetime="2018-09-21 07:25+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside picture noads" >
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/nhung-mon-an-mang-hoi-tho-mua-thu-nhat-ban-post878676.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/mdf_eioxrd/2018_09_21/6.jpg" alt="Nhung mon an mang hoi tho mua thu Nhat Ban hinh anh" title="Những món ăn mang hơi thở mùa thu Nhật Bản hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/nhung-mon-an-mang-hoi-tho-mua-thu-nhat-ban-post878676.html">
                                    Những món ăn mang hơi thở mùa thu Nhật Bản
                                </a>
                            </p>
                            <time datetime="2018-09-21 19:44+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="nhip-song" class="category skin4">
                    <header>
                        <hgroup>
                            <h2><a href="/nhip-song.html" title="Nhịp sống">Nhịp sống </a></h2>
                        </hgroup>
                    </header>
                    <section id="nhip-song" class="category">
                        <header>
                            <h2><a href="/TTDN.html" title="Thông tin doanh nghiệp">Thông tin doanh nghiệp </a></h2>
                        </header>
                        <article class="featured" topic-id="4276">
                            <div class="cover">
                                <a href="/mobifone-hop-tac-k-tung-khuyen-mai-lon-cho-khach-hang-post878775.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/wyhktpu/2018_09_21/image001_9.jpg" alt="MobiFone hop tac K+ tung khuyen mai lon cho khach hang hinh anh" title="MobiFone hợp tác K+ tung khuyến mại lớn cho khách hàng hình ảnh">
                                </a>
                                &nbsp;</div>
                            <header>
                                <p class="title">
                                    <a href="/mobifone-hop-tac-k-tung-khuyen-mai-lon-cho-khach-hang-post878775.html">
                                        MobiFone hợp tác K+ tung khuyến mại lớn cho khách hàng
                                    </a>
                                </p>
                                <time datetime="2018-09-21 19:00+0700"></time>
                            </header>
                            <p class="summary">Từ 18/9 đến 30/9, khách hàng sử dụng thuê bao MobiFone khi mua gói nội dung myK+ Now của truyền hình số K+ được tặng thêm một tháng sử dụng miễn phí. </p>
                        </article>
                        <div class="top">
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/hoang-phi-kha-va-gao-hoa-lua-trao-qua-thien-nguyen-post878762.html">
                                            Hoàng Phi Kha và gạo Hoa Lúa trao quà thiện nguyện
                                        </a>
                                    </p>
                                    <time datetime="2018-09-21 18:00+0700"></time>
                                </header>
                            </article>
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/khach-hang-sme-giao-dich-tiet-kiem-hon-voi-goi-combo-tai-hdbank-post878627.html">
                                            Khách hàng SME giao dịch tiết kiệm hơn với gói combo tại HDBank
                                        </a>
                                    </p>
                                    <time datetime="2018-09-21 11:00+0700"></time>
                                </header>
                            </article>
                        </div>
                    </section>
                    <section id="nhip-song" class="category">
                        <header>
                            <h2><a href="/nhip-song/cuoi.html" title="Cười">Cười </a></h2>
                        </header>
                        <article class="featured" topic-id="4147">
                            <div class="cover">
                                <a href="/muon-kieu-khoc-cuoi-sau-chien-thang-cua-u23-viet-nam-post814671.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_drywxd/2018_01_25/9043605018_1516756769.jpg" alt="Muon kieu khoc, cuoi sau chien thang cua U23 Viet Nam hinh anh" title="Muôn kiểu khóc, cười sau chiến thắng của U23 Việt Nam hình ảnh">
                                </a>
                                &nbsp;</div>
                            <header>
                                <p class="title">
                                    <a href="/muon-kieu-khoc-cuoi-sau-chien-thang-cua-u23-viet-nam-post814671.html">
                                        Muôn kiểu khóc, cười sau chiến thắng của U23 Việt Nam
                                    </a>
                                    <span class="comment_count">59</span></p>
                                <time datetime="2018-01-26 00:05+0700"></time>
                            </header>
                            <p class="summary">15h ngày 27/1, U23 Việt Nam bước vào trận chung kết với U23 Uzbekistan. Cùng xem lại khoảnh khắc vui sướng không thể kìm nén được cảm xúc của các CĐV.</p>
                        </article>
                        <div class="top">
                            <article topic-id="4147">
                                <header>
                                    <p class="title">
                                        <a href="/muon-kieu-khoc-cuoi-sau-chien-thang-cua-u23-viet-nam-post814671.html">
                                            Muôn kiểu khóc, cười sau chiến thắng của U23 Việt Nam
                                        </a>
                                        <span class="comment_count">59</span></p>
                                    <time datetime="2018-01-26 00:05+0700"></time>
                                </header>
                            </article>
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/bao-hiem-cho-nguoi-hua-nhieu-post767782.html">
                                            Bảo hiểm cho người hứa nhiều
                                        </a>
                                        <span class="comment_count">5</span></p>
                                    <time datetime="2017-08-02 00:09+0700"></time>
                                </header>
                            </article>
                        </div>
                    </section>
                    <section id="sach-hay" class="category">
                        <header>
                            <h2><a href="/sach-hay.html" title="Sách hay">Sách 360 </a></h2>
                        </header>
                        <article class="featured" >
                            <div class="cover">
                                <a href="/chuyen-lang-vu-dai-duoi-chan-nu-than-tu-do-post878750.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/ofh_cgkztmzt/2018_09_21/khamphacuocsongnuocmynhungnam1930Hinh5.jpg" alt="Chuyen &#39;lang Vu Dai&#39; duoi chan Nu than Tu do hinh anh" title="Chuyện &#39;làng Vũ Đại&#39; dưới chân Nữ thần Tự do hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/chuyen-lang-vu-dai-duoi-chan-nu-than-tu-do-post878750.html">
                                        Chuyện 'làng Vũ Đại' dưới chân Nữ thần Tự do
                                    </a>
                                </p>
                                <time datetime="2018-09-22 05:00+0700"></time>
                            </header>
                            <p class="summary">Hóm hỉnh, tinh tế nhưng cũng không kém phần sâu cay, bức tranh xã hội chân thực và sống động được vẽ ra dưới những góc nhìn riêng, nơi đồng tiền giữ vai trò chủ đạo.</p>
                        </article>
                        <div class="top">
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/hanh-trinh-dai-de-co-gai-nganh-y-thanh-that-voi-ban-than-post878557.html">
                                            Hành trình dài để cô gái ngành Y thành thật với bản thân
                                        </a>
                                    </p>
                                    <time datetime="2018-09-22 11:16+0700"></time>
                                </header>
                            </article>
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/that-tuyet-voi-khi-ket-ban-voi-nhung-quai-vat-tinh-nghich-post878594.html">
                                            Thật tuyệt vời khi kết bạn với những quái vật tinh nghịch
                                        </a>
                                    </p>
                                    <time datetime="2018-09-21 10:09+0700"></time>
                                </header>
                            </article>
                        </div>
                    </section>
                </section>
            </div>
        </div>
        <section class="sidebar">
            <section class="pictures">
                <header>
                    <h2><a href="/pictures/">Tin ảnh</a></h2>
                </header>
                <div class="slidebox">
                    <article class="current" topic-id="2003,3474,3699,4022,4439,4601,4608,4609">
                        <div class="cover">
                            <a href="/iphone-xs-max-so-dang-iphone-x-tai-viet-nam-post878580.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/neg_wpeczyr/2018_09_21/iPhone_XS_max_1.JPG" alt="iPhone XS Max so dang iPhone X tai Viet Nam hinh anh" title="iPhone XS Max so dáng iPhone X tại Việt Nam hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/iphone-xs-max-so-dang-iphone-x-tai-viet-nam-post878580.html">iPhone XS Max so dáng iPhone X tại Việt Nam </a>
                            </p>
                            <time datetime="2018-09-21 09:31+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,3838">
                        <div class="cover">
                            <a href="/kha-ngan-song-luan-tinh-cam-tren-phim-truong-hau-due-mat-troi-post878738.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/spuocaw/2018_09_21/IMG_8762_zing.JPG" alt="Kha Ngan, Song Luan tinh cam tren phim truong &#39;Hau due mat troi&#39; hinh anh" title="Khả Ngân, Song Luân tình cảm trên phim trường &#39;Hậu duệ mặt trời&#39; hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/kha-ngan-song-luan-tinh-cam-tren-phim-truong-hau-due-mat-troi-post878738.html">Khả Ngân, Song Luân tình cảm trên phim trường 'Hậu duệ mặt trời' </a>
                            </p>
                            <time datetime="2018-09-21 20:58+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,4413,4622,4624">
                        <div class="cover">
                            <a href="/infographic-tieu-su-chu-tich-nuoc-tran-dai-quang-post878685.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/jopltui/2018_09_21/thmbb.jpg" alt="Infographic tieu su Chu tich nuoc Tran Dai Quang hinh anh" title="Infographic tiểu sử Chủ tịch nước Trần Đại Quang hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/infographic-tieu-su-chu-tich-nuoc-tran-dai-quang-post878685.html">Infographic tiểu sử Chủ tịch nước Trần Đại Quang </a>
                            </p>
                            <time datetime="2018-09-21 13:17+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,2221,4016">
                        <div class="cover">
                            <a href="/lu-lich-su-50-nam-dua-hang-nghin-tan-go-ve-ho-thuy-dien-ban-ve-post878332.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/iutmtn/2018_09_20/666666.JPG" alt="Lu lich su 50 nam dua hang nghin tan go ve ho thuy dien Ban Ve hinh anh" title="Lũ lịch sử 50 năm đưa hàng nghìn tấn gỗ về hồ thủy điện Bản Vẽ hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/lu-lich-su-50-nam-dua-hang-nghin-tan-go-ve-ho-thuy-dien-ban-ve-post878332.html">Lũ lịch sử 50 năm đưa hàng nghìn tấn gỗ về hồ thủy điện Bản Vẽ </a>
                            </p>
                            <time datetime="2018-09-21 06:57+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,3474,4022,4439,4601,4608,4609">
                        <div class="cover">
                            <a href="/anh-iphone-xs-max-dau-tien-ve-vn-cua-hang-dat-gia-79-trieu-dong-post878507.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/neg_wpeczyr/2018_09_20/5a99c2084478a426fd69.jpg" alt="Anh iPhone XS Max dau tien ve VN, cua hang dat gia 79 trieu dong hinh anh" title="Ảnh iPhone XS Max đầu tiên về VN, cửa hàng đặt giá 79 triệu đồng hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/anh-iphone-xs-max-dau-tien-ve-vn-cua-hang-dat-gia-79-trieu-dong-post878507.html">Ảnh iPhone XS Max đầu tiên về VN, cửa hàng đặt giá 79 triệu đồng </a>
                                <span class="social hot">HOT</span>
                                <span class="comment_count">70</span>
                            </p>
                            <time datetime="2018-09-21 01:02+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,3918,3919">
                        <div class="cover">
                            <a href="/nguyen-thi-thuy-an-co-be-gay-go-ngay-nao-tro-thanh-a-hau-2-xinh-dep-post878665.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/neg_rtlzofn/2018_09_21/Kul_News_HoaHauVie_thumb.jpg" alt="Nguyen Thi Thuy An - co be gay go ngay nao tro thanh a hau 2 xinh dep hinh anh" title="Nguyễn Thị Thúy An - cô bé gầy gò ngày nào trở thành á hậu 2 xinh đẹp hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/nguyen-thi-thuy-an-co-be-gay-go-ngay-nao-tro-thanh-a-hau-2-xinh-dep-post878665.html">Nguyễn Thị Thúy An - cô bé gầy gò ngày nào trở thành á hậu 2 xinh đẹp </a>
                                <span class="comment_count">6</span>
                            </p>
                            <time datetime="2018-09-21 15:54+0700"></time>
                        </header>
                    </article>
                </div>
                <p class="controller">
                    <a href="#rewind" class="rewind" style="display: none;">Bài trước</a>
                    <a href="#forward" class="forward" style="display: none;">Bài sau</a>
                </p>
            </section>
            <!-- Start Box Sidebar -->
            <section class="video">
                <header>
                    <h2><a href="/video/">Video</a></h2>
                </header>
                <article class="featured video" topic-id="2121">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-gioi-tre-chen-chan-choi-cho-trung-thu-pho-co-post878863.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/lce_ermnx/2018_09_22/xem_do_Hang_Ma00_00_29_02Still001.jpg" alt="Gioi tre chen chan choi cho Trung thu pho co hinh anh" title="Giới trẻ chen chân chơi chợ Trung thu phố cổ hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-gioi-tre-chen-chan-choi-cho-trung-thu-pho-co-post878863.html">
                                Giới trẻ chen chân chơi chợ Trung thu phố cổ
                            </a></p>
                        <time datetime="2018-09-22 09:02+0700"></time>
                    </header>
                </article>
                <article class=" video" topic-id="2121,4621">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-5-loai-vat-da-bien-mat-trong-the-ky-21-post877380.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/neg_bfjpywm/2018_09_16/bao_may.jpg" alt="5 loai vat da bien mat trong the ky 21 hinh anh" title="5 loài vật đã biến mất trong thế kỷ 21 hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-5-loai-vat-da-bien-mat-trong-the-ky-21-post877380.html">
                                5 loài vật đã biến mất trong thế kỷ 21
                            </a></p>
                        <time datetime="2018-09-22 06:00+0700"></time>
                    </header>
                </article>
                <article class=" video" topic-id="2121">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-nguoi-dan-do-ve-nha-tho-cua-hoai-linh-du-le-gio-to-san-khau-post878696.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/ohunuai/2018_09_21/NGT_1422_11.jpg" alt="Nguoi dan do ve nha tho cua Hoai Linh du le gio To san khau hinh anh" title="Người dân đổ về nhà thờ của Hoài Linh dự lễ giỗ Tổ sân khấu hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-nguoi-dan-do-ve-nha-tho-cua-hoai-linh-du-le-gio-to-san-khau-post878696.html">
                                Người dân đổ về nhà thờ của Hoài Linh dự lễ giỗ Tổ sân khấu
                            </a></p>
                        <time datetime="2018-09-21 14:07+0700"></time>
                    </header>
                </article>
                <article class=" video" topic-id="2121,4008">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-hlv-real-madrid-noi-gi-ve-the-do-cua-ronaldo-post878841.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/mdf_zremxw/2018_09_22/01z_thumb_3x2.jpg" alt="HLV Real Madrid noi gi ve the do cua Ronaldo? hinh anh" title="HLV Real Madrid nói gì về thẻ đỏ của Ronaldo? hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-hlv-real-madrid-noi-gi-ve-the-do-cua-ronaldo-post878841.html">
                                HLV Real Madrid nói gì về thẻ đỏ của Ronaldo?
                            </a></p>
                        <time datetime="2018-09-22 06:22+0700"></time>
                    </header>
                </article>
            </section>
            <section class="order-list">
                <header>
                    <h2><a title="Đọc nhiều nhất">Đọc nhiều nhất</a></h2>
                </header>
                <article topic-id="4622,4623,4624">
                    <span class="order">1</span>
                    <div class="cover">
                        <a href="/chu-tich-nuoc-tran-dai-quang-tu-tran-post878590.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/xpcwvovb/2018_09_21/trandaiquang_2.jpg" alt="Chu tich nuoc Tran Dai Quang tu tran hinh anh" title="Chủ tịch nước Trần Đại Quang từ trần hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/chu-tich-nuoc-tran-dai-quang-tu-tran-post878590.html">
                                Chủ tịch nước Trần Đại Quang từ trần
                            </a>
                            <span class="social hot">HOT</span>
                            <span class="comment_count">316</span>
                        </p>
                        <time datetime="2018-09-21 11:50+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
                <article topic-id="4151,4623,4624">
                    <span class="order">2</span>
                    <div class="cover">
                        <a href="/le-quoc-tang-chu-tich-nuoc-duoc-to-chuc-nhu-the-nao-post878729.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/jopltui/2018_09_21/Quoc_tang_la_gi.jpg" alt="Le quoc tang Chu tich nuoc duoc to chuc nhu the nao? hinh anh" title="Lễ quốc tang Chủ tịch nước được tổ chức như thế nào? hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/le-quoc-tang-chu-tich-nuoc-duoc-to-chuc-nhu-the-nao-post878729.html">
                                Lễ quốc tang Chủ tịch nước được tổ chức như thế nào?
                            </a>
                            <span class="social hot">HOT</span>
                        </p>
                        <time datetime="2018-09-21 16:37+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
                <article topic-id="3909,3915,4622,4623">
                    <span class="order">3</span>
                    <div class="cover">
                        <a href="/bao-chi-quoc-te-dua-tin-chu-tich-nuoc-tran-dai-quang-tu-tran-post878717.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/znguhv/2018_09_21/ctn.jpg" alt="Bao chi quoc te dua tin Chu tich nuoc Tran Dai Quang tu tran hinh anh" title="Báo chí quốc tế đưa tin Chủ tịch nước Trần Đại Quang từ trần hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/bao-chi-quoc-te-dua-tin-chu-tich-nuoc-tran-dai-quang-tu-tran-post878717.html">
                                Báo chí quốc tế đưa tin Chủ tịch nước Trần Đại Quang từ trần
                            </a>
                            <span class="comment_count">21</span>
                        </p>
                        <time datetime="2018-09-21 16:45+0700"></time>
                        <p class="cate">Thế giới</p>
                    </header>
                </article>
                <article topic-id="3474,4022,4439,4601,4608,4609,4610">
                    <span class="order">4</span>
                    <div class="cover">
                        <a href="/iphone-xs-ban-nhu-rau-le-duong-o-hong-kong-post878575.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/fcivbqmv/2018_09_21/42244399_2213039998707388_3176933046234382336_o.jpg" alt="iPhone XS ban nhu rau le duong o Hong Kong hinh anh" title="iPhone XS bán như rau lề đường ở Hong Kong hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/iphone-xs-ban-nhu-rau-le-duong-o-hong-kong-post878575.html">
                                iPhone XS bán như rau lề đường ở Hong Kong
                            </a>
                            <span class="social hot">HOT</span>
                            <span class="comment_count">148</span>
                        </p>
                        <time datetime="2018-09-21 05:30+0700"></time>
                        <p class="cate">Công nghệ</p>
                    </header>
                </article>
                <article topic-id="2003,4413,4622,4624">
                    <span class="order">5</span>
                    <div class="cover">
                        <a href="/infographic-tieu-su-chu-tich-nuoc-tran-dai-quang-post878685.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/jopltui/2018_09_21/thmbb.jpg" alt="Infographic tieu su Chu tich nuoc Tran Dai Quang hinh anh" title="Infographic tiểu sử Chủ tịch nước Trần Đại Quang hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/infographic-tieu-su-chu-tich-nuoc-tran-dai-quang-post878685.html">
                                Infographic tiểu sử Chủ tịch nước Trần Đại Quang
                            </a>
                        </p>
                        <time datetime="2018-09-21 13:17+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
            </section>
            <div id="advR3" class="banner" style="width: 300px; height: 600px; border: 1px solid #eee; margin-bottom: 10px;"></div>
            <section id="promotedposts">
                <header>
                    <h2><a href="/TTDN.html" title="Thông tin doanh nghiệp">Thông tin doanh nghiệp </a></h2>
                </header>
                <article topic-id="4276">
                    <div class="cover">
                        <a href="/mobifone-hop-tac-k-tung-khuyen-mai-lon-cho-khach-hang-post878775.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_21/image001_9.jpg" alt="MobiFone hop tac K+ tung khuyen mai lon cho khach hang hinh anh" title="MobiFone hợp tác K+ tung khuyến mại lớn cho khách hàng hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/mobifone-hop-tac-k-tung-khuyen-mai-lon-cho-khach-hang-post878775.html">
                            MobiFone hợp tác K+ tung khuyến mại lớn cho khách hàng
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/hoang-phi-kha-va-gao-hoa-lua-trao-qua-thien-nguyen-post878762.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_21/PK1_1.jpg" alt="Hoang Phi Kha va gao Hoa Lua trao qua thien nguyen hinh anh" title="Hoàng Phi Kha và gạo Hoa Lúa trao quà thiện nguyện hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/hoang-phi-kha-va-gao-hoa-lua-trao-qua-thien-nguyen-post878762.html">
                            Hoàng Phi Kha và gạo Hoa Lúa trao quà thiện nguyện
                        </a>
                        </p>
                    </header>
                </article>
                <article topic-id="4237">
                    <div class="cover">
                        <a href="/nhung-noi-buon-chang-dam-noi-cua-co-nang-toc-gau-post873306.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/unhuai2/2018_08_31/4a__Copy.jpg" alt="Nhung noi buon chang dam noi cua co nang toc gau hinh anh" title="Những nỗi buồn chẳng dám nói của cô nàng tóc gàu hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/nhung-noi-buon-chang-dam-noi-cua-co-nang-toc-gau-post873306.html">
                            Những nỗi buồn chẳng dám nói của cô nàng tóc gàu
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/khach-hang-sme-giao-dich-tiet-kiem-hon-voi-goi-combo-tai-hdbank-post878627.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_21/HDB2_R.jpg" alt="Khach hang SME giao dich tiet kiem hon voi goi combo tai HDBank hinh anh" title="Khách hàng SME giao dịch tiết kiệm hơn với gói combo tại HDBank hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/khach-hang-sme-giao-dich-tiet-kiem-hon-voi-goi-combo-tai-hdbank-post878627.html">
                            Khách hàng SME giao dịch tiết kiệm hơn với gói combo tại HDBank
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/gia-dinh-lam-vy-da-hua-minh-dat-dai-nao-tiec-sinh-nhat-tiniworld-post878489.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_20/image001_12.jpg" alt="Gia dinh Lam Vy Da - Hua Minh Dat &#39;dai nao&#39; tiec sinh nhat tiNiWorld hinh anh" title="Gia đình Lâm Vỹ Dạ - Hứa Minh Đạt &#39;đại náo&#39; tiệc sinh nhật tiNiWorld hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/gia-dinh-lam-vy-da-hua-minh-dat-dai-nao-tiec-sinh-nhat-tiniworld-post878489.html">
                            Gia đình Lâm Vỹ Dạ - Hứa Minh Đạt 'đại náo' tiệc sinh nhật tiNiWorld
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/hai-dang-dai-lanh-thu-hut-gioi-tre-sau-khi-thay-ao-moi-post878375.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_20/image003_7_1.jpg" alt="Hai dang Dai Lanh thu hut gioi tre sau khi thay ao moi hinh anh" title="Hải đăng Đại Lãnh thu hút giới trẻ sau khi thay áo mới hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/hai-dang-dai-lanh-thu-hut-gioi-tre-sau-khi-thay-ao-moi-post878375.html">
                            Hải đăng Đại Lãnh thu hút giới trẻ sau khi thay áo mới
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/cong-ty-dat-nguon-khanh-thanh-va-ban-giao-khu-thuong-mai-rach-bap-post878376.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_20/SGMV9313.jpg" alt="Cong ty Dat Nguon khanh thanh va ban giao khu thuong mai Rach Bap hinh anh" title="Công ty Đất Nguồn khánh thành và bàn giao khu thương mại Rạch Bắp hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/cong-ty-dat-nguon-khanh-thanh-va-ban-giao-khu-thuong-mai-rach-bap-post878376.html">
                            Công ty Đất Nguồn khánh thành và bàn giao khu thương mại Rạch Bắp
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/nang-cao-y-thuc-bao-ve-moi-truong-cho-cac-ban-tre-10x-post878371.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_20/image004_1.jpg" alt="Nang cao y thuc bao ve moi truong cho cac ban tre 10X hinh anh" title="Nâng cao ý thức bảo vệ môi trường cho các bạn trẻ 10X hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/nang-cao-y-thuc-bao-ve-moi-truong-cho-cac-ban-tre-10x-post878371.html">
                            Nâng cao ý thức bảo vệ môi trường cho các bạn trẻ 10X
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/vietinbank-trien-khai-sang-kien-doi-moi-thanh-toan-toan-cau-post878329.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_20/image003_1.jpg" alt="VietinBank trien khai sang kien doi moi thanh toan toan cau hinh anh" title="VietinBank triển khai sáng kiến đổi mới thanh toán toàn cầu hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/vietinbank-trien-khai-sang-kien-doi-moi-thanh-toan-toan-cau-post878329.html">
                            VietinBank triển khai sáng kiến đổi mới thanh toán toàn cầu
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/the-he-iphone-moi-se-len-ke-tu-uyen-tu-phat-mobile-tu-219-post878326.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_20/m8QvK.jpg" alt="The he iPhone moi se len ke Tu Uyen, Tu Phat Mobile tu 21/9 hinh anh" title="Thế hệ iPhone mới sẽ lên kệ Tứ Uyên, Tứ Phát Mobile từ 21/9 hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/the-he-iphone-moi-se-len-ke-tu-uyen-tu-phat-mobile-tu-219-post878326.html">
                            Thế hệ iPhone mới sẽ lên kệ Tứ Uyên, Tứ Phát Mobile từ 21/9
                        </a>
                        </p>
                    </header>
                </article>
            </section>
            <script>
                var posts = $('#promotedposts article');
                if ($(posts).length <= 5) {
                    $('#promotedposts article').show();
                    $('#promotedposts').show();
                } else {
                    var display = [];
                    while (display.length < 5) {
                        i = Math.floor(Math.random() * $(posts).length);
                        if (display.indexOf(i) == -1) display.push(i);
                    }
                    for (var i = 0, j = display.length; i < j; i++) {
                        $($(posts)[display[i]]).show();
                    };
                    $('#promotedposts').show();
                }
            </script>
        </section>
    </section>
</div>