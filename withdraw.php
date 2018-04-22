<?php $page_title = "Вывод средств" ?>
<?php include('page-parts/header.inc.php'); ?>
<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="page-header">
			<h1>Вывод средств</h1>
		</div>
		<div class="main-content-inner">
			<div class="page-content page-text">
				<div class="small-title no-margin">
					<h5 class="green">Доступно для вывода: 15$</h5>
				</div>
				<hr class="medium-margins">
				<!--  -->
				<!--  -->
				<p class="black no-margin">
					<strong>Выберите систему для вывода средств</strong>
				</p>
				<div class="margin-bottom-20px"></div>
				<div class="radio-blocks">
					<div class="flex-container">
						<div class="flex-row">
							<div class="flex-col col-3">
								<div class="radio-item">
									<input type="radio" name="pay-system" value="visa-mastercard" id="visa-mastercard">
									<label for="visa-mastercard" class="item-content">
										<img src="img/pay-systems/visa-mastercard.png" alt="">
									</label>
								</div>
							</div>
							<div class="flex-col col-3">
								<div class="radio-item">
									<input type="radio" name="pay-system" value="qiwi" id="qiwi">
									<label for="qiwi" class="item-content">
										<img src="img/pay-systems/qiwi.png" alt="">
									</label>
								</div>
							</div>
							<div class="flex-col col-3">
								<div class="radio-item">
									<input type="radio" name="pay-system" value="webmoney" id="webmoney">
									<label for="webmoney" class="item-content">
										<img src="img/pay-systems/webmoney.png" alt="">
									</label>
								</div>
							</div>
							<div class="flex-col col-3">
								<div class="radio-item">
									<input type="radio" name="pay-system" value="yandex" id="yandex">
									<label for="yandex" class="item-content">
										<img src="img/pay-systems/yandex.png" alt="">
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="btn btn-light btn-azure btn-bold">Добавить способ вывода</a>
				<div class="margin-bottom-30px"></div>
				<!--  -->
				<!--  -->
				<p class="black no-margin">
					<strong>Укажите номер кошелька и сумму для вывода средств</strong>
				</p>
				<div class="margin-bottom-15px"></div>
				<div class="withdraw-form gray-fields">
					<div class="withdraw-wallet">
						<input type="tel" placeholder="Номер кошелька">
					</div>
					<div class="withdraw-amount">
						<input type="tel" placeholder="Сумма">
					</div>
					<div class="withdraw-button">
						<div class="btn btn-default btn-bold">Заказать вывод</div>
					</div>
				</div>
				<hr>
				<!--  -->
				<!--  -->
				<div class="small-title medium-margin">
					<h5>История вывода</h5>
				</div>
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
									<span>Сумма</span>
									<i class="icon icon-sort"></i>
								</div>
							</th>
							<th>
								<div class="sort-by">
									<span>Способ вывода</span>
									<i class="icon icon-sort"></i>
								</div>
							</th>
							<th>
								<div class="sort-by">
									<span>Статус</span>
									<i class="icon icon-sort"></i>
								</div>
							</th>
						</tr>
						<tr>
							<td>01.01.2018 10:45:22</td>
							<td>150,00</td>
							<td>Карта Mastercard</td>
							<td>
								<div class="status-block">
									<div class="block-icon">
										<div class="round-icon cursor-default medium">
											<span>
												<i class="icon icon-tick"></i>
											</span>
										</div>
									</div>
									<span class="block-text">Выполнено</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>01.01.2018 10:45:22</td>
							<td>150,00</td>
							<td>Карта Mastercard</td>
							<td>
								<div class="status-block">
									<div class="block-icon">
										<div class="round-icon cursor-default medium">
											<span>
												<i class="icon icon-tick"></i>
											</span>
										</div>
									</div>
									<span class="block-text">Выполнено</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>01.01.2018 10:45:22</td>
							<td>150,00</td>
							<td>Яндекс.Деньги</td>
							<td>
								<div class="status-block">
									<div class="block-icon">
										<div class="round-icon coral cursor-default medium">
											<span>
												<i class="icon icon-cancel"></i>
											</span>
										</div>
									</div>
									<span class="block-text">Отменено</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>01.01.2018 10:45:22</td>
							<td>150,00</td>
							<td>Яндекс.Деньги</td>
							<td>
								<div class="status-block">
									<div class="block-icon">
										<div class="round-icon cursor-default medium">
											<span>
												<i class="icon icon-tick"></i>
											</span>
										</div>
									</div>
									<span class="block-text">Выполнено</span>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php'); ?>