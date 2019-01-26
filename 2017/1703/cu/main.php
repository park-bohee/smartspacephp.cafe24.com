<header>
<div id="wrapper">
    <div>
        <div id="slider">
            <ul>
                <li><img src="image/slide1.jpg"></li>
                <li><img src="image/slide2.jpg"></li>
                <li><img src="image/slide3.jpg"></li>
            </ul>
        </div>
    </div>
    <ul id="pagination" class="pagination">
        <li onclick="slideshow.pos(0)">콘치즈그라탕</li>
        <li onclick="slideshow.pos(1)">비락식혜바</li>
        <li onclick="slideshow.pos(2)">메로나우유</li>
    </ul>
</div>
	</header>
	<section class="main_section">
        <div class="main_first_box">
            <div class="main_second_box">
                <div class="main_div1">
                    <h4>CU Fresh & Refresh 서비스</h4>
                    <ul>
                        <li><img src="image/main_1.png" alt="/"><span>택배 및 픽업</span></li>
                        <li><img src="image/main_2.png" alt="/"><span>GIFT 카드</span></li>
                        <li><img src="image/main_3.png" alt="/"><span>프리페이드 &<br>바코드캐시충전</span></li>
                    </ul>
                </div>
                <div class="main_div2">
                    <h4>CU 추천 상품</h4>
                    <div>
                        <span>감칠맛나는 명란젓갈 + 밥도둑</span>
                        <img src="image/main_4.png" alt="/">
                    </div>
                </div>
                <div class="main_div3">
                    <h4>이벤트</h4>
                    <img src="image/main_5.png" alt="">
                </div>
            </div>
        </div>
	</section>
<script src="js/slide.js"></script>
<script type="text/javascript">
var slideshow=new TINY.slider.slide('slideshow',{
	id:'slider',
	auto:3,
	resume:true,
	vertical:false,
	navid:'pagination',
	activeclass:'current',
	position:0
});
</script>