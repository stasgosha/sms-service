<?php $page_title = "Пополнение" ?>
<?php include('page-parts/header.inc.php'); ?>
<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="page-header">
			<h1>Пополнение</h1>
		</div>
		<div class="main-content-inner">
			<div class="page-content page-text">
				<ul class="tabs-nav">
					<li><a href="#tab_pay">Оплата</a></li>
					<li><a href="#tab_history">История пополнений</a></li>
				</ul>
				<div class="tabs-containers">
					<div class="tab" id="tab_pay">
						<div class="small-title">
							<h5>Выберите способ оплаты</h5>
						</div>
						<div class="radio-blocks">
							<div class="flex-container">
								<div class="flex-row">
									<div class="flex-col col-4">
										<div class="radio-item">
											<input type="radio" name="pay-system" value="visa-mastercard" id="visa-mastercard">
											<label for="visa-mastercard" class="item-content">
												<img src="img/pay-systems/visa-mastercard.png" alt="">
											</label>
										</div>
									</div>
									<div class="flex-col col-4">
										<div class="radio-item">
											<input type="radio" name="pay-system" value="qiwi" id="qiwi">
											<label for="qiwi" class="item-content">
												<img src="img/pay-systems/qiwi.png" alt="">
											</label>
										</div>
									</div>
									<div class="flex-col col-4">
										<div class="radio-item">
											<input type="radio" name="pay-system" value="webmoney" id="webmoney">
											<label for="webmoney" class="item-content">
												<img src="img/pay-systems/webmoney.png" alt="">
											</label>
										</div>
									</div>
									<div class="flex-col col-4">
										<div class="radio-item">
											<input type="radio" name="pay-system" value="yandex" id="yandex">
											<label for="yandex" class="item-content">
												<img src="img/pay-systems/yandex.png" alt="">
											</label>
										</div>
									</div>
									<div class="flex-col col-4">
										<div class="radio-item">
											<input type="radio" name="pay-system" value="privat" id="privat">
											<label for="privat" class="item-content">
												<img src="img/pay-systems/privat.png" alt="">
											</label>
										</div>
									</div>
									<div class="flex-col col-4">
										<div class="radio-item">
											<input type="radio" name="pay-system" value="moneygram" id="moneygram">
											<label for="moneygram" class="item-content">
												<img src="img/pay-systems/moneygram.png" alt="">
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="margin-bottom-20px"></div>
						<div class="small-title">
							<h5>Введите сумму и нажмите кнопку «Пополнить баланс»</h5>
						</div>
						<div class="refill-form">
							<div class="form gray-fields">
								<div class="form-row">
									<div class="field">
										<input type="tel">
									</div>
									<div class="label left-margin">
										<button class="btn btn-default btn-bold">Пополнить баланс</button>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="small-title">
							<h5>или выберите тарифный план</h5>
						</div>
						<div class="tariff-plans-section">
							<div class="flex-container">
								<div class="flex-row">
									<div class="flex-col col-4 stretch-items">
										<div class="tariff-plan-block">
											<h4 class="plan-caption">Стандарт</h4>
											<div class="plan-descr">
												<p>Повседневная практика показывает, что реализация намеченных плановых заданий </p>
											</div>
											<div class="plan-price">$10.00</div>
											<div class="plan-button">
												<a href="#" class="btn btn-default btn-bold">Оплатить</a>
											</div>
										</div>
									</div>
									<div class="flex-col col-4 stretch-items">
										<div class="tariff-plan-block">
											<h4 class="plan-caption">Люкс</h4>
											<div class="plan-descr">
												<p><strong>Демонтрация внешнего вида блока, когда его длина текста отличается от соседних.</strong></p>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ut quo excepturi sapiente, veniam, magni!</p>
											</div>
											<div class="plan-price">$30.00</div>
											<div class="plan-button">
												<a href="#" class="btn btn-default btn-bold">Оплатить</a>
											</div>
										</div>
									</div>
									<div class="flex-col col-4 stretch-items">
										<div class="tariff-plan-block">
											<h4 class="plan-caption">VIP</h4>
											<div class="plan-descr">
												<p>Повседневная практика показывает, что реализация намеченных плановых заданий </p>
											</div>
											<div class="plan-price">$50.00</div>
											<div class="plan-button">
												<a href="#" class="btn btn-default btn-bold">Оплатить</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab" id="tab_history">
						<div class="gray-section small-paddings">
							<table class="table">
								<tr>
									<th>
										<div class="sort-by">
											<span>Дата</span>
											<i class="icon icon-sort"></i>
										</div>
									</th>
									<th>
										<div class="sort-by">
											<span>Вид активности</span>
											<i class="icon icon-sort"></i>
										</div>
									</th>
									<th>
										<div class="sort-by">
											<span>Сумма</span>
											<i class="icon icon-sort"></i>
										</div>
									</th>
									<th>
										<div class="sort-by">
											<span>Операция</span>
											<i class="icon icon-sort"></i>
										</div>
									</th>
								</tr>
								<tr>
									<td>01.01.2018  10:45:22</td>
									<td>Пополнение личного счета</td>
									<td>10$</td>
									<td>
										<div class="status-block">
											<div class="block-icon">
												<div class="round-icon cursor-default small">
													<span>+</span>
												</div>
											</div>
											<span class="block-text">Приход</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>01.01.2018  10:45:22</td>
									<td>Начисление от рефералов</td>
									<td>10$</td>
									<td>
										<div class="status-block">
											<div class="block-icon">
												<div class="round-icon cursor-default small">
													<span>+</span>
												</div>
											</div>
											<span class="block-text">Приход</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>01.01.2018  10:45:22</td>
									<td>Другая активность</td>
									<td>10$</td>
									<td>
										<div class="status-block">
											<div class="block-icon">
												<div class="round-icon cursor-default small">
													<span>+</span>
												</div>
											</div>
											<span class="block-text">Приход</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>01.01.2018  10:45:22</td>
									<td>Начисление от рефералов</td>
									<td>10$</td>
									<td>
										<div class="status-block">
											<div class="block-icon">
												<div class="round-icon cursor-default small">
													<span>+</span>
												</div>
											</div>
											<span class="block-text">Приход</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>01.01.2018  10:45:22</td>
									<td>Вывод средств</td>
									<td>10$</td>
									<td>
										<div class="status-block">
											<div class="block-icon">
												<div class="round-icon cursor-default small coral">
													<span>-</span>
												</div>
											</div>
											<span class="block-text">Расход</span>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<a href="#" class="btn btn-light">Показать ещё</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php'); ?>