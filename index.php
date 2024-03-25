<?php
session_start();
?>
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
  include "$root/sait/header.php";
?>

    <!--Тело сайта-->
    <main>
        <h2>Галерея с пандочками</h2>
        
<div class="body">
<div class="slider">
		<div class="slides">
			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">
			<div class="slide first">
				<img src="image/slaider/1.jpg" alt="">
			</div>
			<div class="slide">
				<img src="image/slaider/4.jpg" alt="">
			</div>
			<div class="slide">
				<img src="image/slaider/6.jfif" alt="">
			</div>
			<div class="slide">
				<img src="image/slaider/6.jpg" alt="">
			</div>
			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
			</div>
		</div>
		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
		</div>
	</div>

	<script>
		let counter = 1;
		setInterval(function(){
			document.getElementById('radio' + counter).checked = true;
			counter++;
			if(counter> 4){
				counter = 1;
			}
		}, 5000)
	</script>
</div>
        
        
        <div>
            <h2>Как создавался магазин Пандочка</h2>
            <p class="infoBlock">Пандочка - интернет-магазин мягких игрушек, сладостей, аксессуаров, постельного белья с
                изображением панды.
                Большая панда находится в Красной книге МСОП и принадлежит к числу самых редких, слабо изученных крупных
                зверей, чему способствует
                скрытный образ жизни. Она стала известна лишь в середине XIX века, а живую панду натуралисты впервые
                наблюдали в природе только в 1913 г.
                В Китае большая панда объявлена национальным сокровищем. Магазин создан для помощи пандам по всему миру.
                Каждый год мы собираем дельги на
                облогораживание территории для китайских мишек и умножении их популяции. Мы сотрудничаем с компаниями
                animal planet, моя планета и др. Каждый месяц
                отсылается 40% от выручки в фонд "Помоги пандам", вот уже 15 лет мы помогаем фонду в развитии
                заповедников. Так же мы предоставляем упаковку экологическую
                которая спустя не большое время разлагается. Вместе мы сбережем планету.</p>
        </div>
        <h2>Что мы продаем</h2>
        <div class="newProduct1">
            <div class="imageBlockProduct">
                <div class="newImages1">
                </div>
                <h4><a href="sait/katalog.php">Постельное белье</a></h4>
                <p>Постельное бельё с пандами на белом фоне с розовой окантовкой</p>
            </div>
            <div class="imageBlockProduct">
                <div class="newImages2">
                </div>
                <h4><a href="sait/katalog.php">Брелки</a></h4>
                <p>Набор из 3х брелков</p>
            </div>
            <div class="imageBlockProduct">
                <div class="newImages3">
                </div>
                <h4><a href="sait/katalog.php">Тетрадь</a></h4>
                <p>Тетрадь фиолетово-розовая с пандами 48 листов</p>
            </div>
            <div class="imageBlockProduct">
                <div class="newImages4">
                </div>
                <h4><a href="sait/katalog.php">Копилка</a></h4>
                <p>Парные копилки в виде панд которые приносят удачу</p>
            </div>
            <div class="imageBlockProduct">
                <div class="newImages5">
                </div>
                <h4><a href="sait/katalog.php">Кружка</a></h4>
                <p>Парные копилки в виде панд которые приносят удачу</p>
            </div>
        </div>
        <div class="emailRegister">
            <p>Подпишитесь на нас и первыми узнавайте об акциях и поступлениях 
                нового товара,а так же получите собственную скидку
                на все товары при регистрации на сайте.</p>
                <div class="emReg">
                    <form action="php/prov.php" method="post">
                        <input type="email" placeholder="ivan@gmail.com" required>
                        <button class="submitEmail">Подписаться</button>
                    </form>
                     
                </div>
           
        </div>
        <h2>Новинки</h2>
        <div class="newProduct">
            <div class="imageBlockProduct">
                <div class="newImage1">
                </div>
                <h4><a href="sait/katalog.php">Постельное белье</a></h4>
                <p>Постельное бельё с пандами на белом фоне с розовой окантовкой</p>
            </div>
            <div class="imageBlockProduct">
                <div class="newImage2">
                </div>
                <h4><a href="sait/katalog.php">Брелки</a></h4>
                <p>Набор из 3х брелков</p>
            </div>
            <div class="imageBlockProduct">
                <div class="newImage3">
                </div>
                <h4><a href="sait/katalog.php">Тетрадь</a></h4>
                <p>Тетрадь фиолетово-розовая с пандами 48 листов</p>
            </div>
            <div class="imageBlockProduct">
                <div class="newImage4">
                </div>
                <h4><a href="sait/katalog.php">Копилка</a></h4>
                <p>Парные копилки в виде панд которые приносят удачу</p>
            </div>
        </div>
    </main>
    <?php
$root = $_SERVER['DOCUMENT_ROOT'];
  include "$root/sait/footer.php";
?>