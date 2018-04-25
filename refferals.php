<?php $page_title = "Мои рефералы" ?>
<?php include('page-parts/header.inc.php'); ?>
<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="page-header">
			<h1>Мои рефералы</h1>
		</div>
		<div class="main-content-inner">
			<div class="page-content page-text">
				<ul class="tabs-nav">
					<li><a href="#tab_main">Главная</a></li>
					<li><a href="#tab_materials">Рекламные материалы</a></li>
				</ul>
				<div class="tabs-containers">
					<div class="tab" id="tab_main">
						<div class="small-title small-margin">
							<h5 class="green">Вознаграждение: 15%</h5>
						</div>
						<p class="black no-margin">Приглашайте в систему новых пользователей и получайте доход от их активности в системе.</p>
						<div class="margin-bottom-30px"></div>
						<p class="black small-margin">Реферальная ссылка</p>
						<div class="refferal-link-form gray-fields">
							<div class="refferal-link">
								<input type="text" value="http://test.com/Y3W3N6Q2D9L7J6K9X">
							</div>
							<div class="refferal-button">
								<a href="#" class="btn btn-default btn-bold">Копировать</a>
							</div>
						</div>
						<hr>
						<div class="small-title medium-margin">
							<h5>Статистика</h5>
						</div>
						<div class="gray-section small-paddings">
							<div class="scrollable-container">
								<table class="table">
									<tr>
										<th>Логин</th>
										<th width="150">Заработок</th>
									</tr>
									<tr>
										<td>User123</td>
										<td>25.00</td>
									</tr>
									<tr>
										<td>User123</td>
										<td>15.00</td>
									</tr>
									<tr>
										<td>User123</td>
										<td>110.00</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="tab" id="tab_materials">
						<div class="materials-card">
							<div class="card-preview wide"></div>
							<div class="card-descr">
								<p class="card-caption">Код для вставки на сайт</p>
								<p class="card-insert-link">
									&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;
								</p>
								<div class="card-button">
									<a href="#" class="btn btn-default btn-small">Скопировать</a>
								</div>
							</div>
						</div>
						<div class="materials-card">
							<div class="card-preview wide"></div>
							<div class="card-descr">
								<p class="card-caption">Код для вставки на сайт</p>
								<p class="card-insert-link">
									&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;
								</p>
								<div class="card-button">
									<a href="#" class="btn btn-default btn-small">Скопировать</a>
								</div>
							</div>
						</div>
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-4 col-sm-6 col-xs-12">
									<div class="materials-card">
										<div class="card-preview"></div>
										<div class="card-descr">
											<p class="card-caption">Код для вставки на сайт</p>
											<p class="card-insert-link">
												&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;
											</p>
											<div class="card-button">
												<a href="#" class="btn btn-default btn-small">Скопировать</a>
											</div>
										</div>
									</div>
								</div>
								<div class="flex-col col-4 col-sm-6 col-xs-12">
									<div class="materials-card">
										<div class="card-preview"></div>
										<div class="card-descr">
											<p class="card-caption">Код для вставки на сайт</p>
											<p class="card-insert-link">
												&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;
											</p>
											<div class="card-button">
												<a href="#" class="btn btn-default btn-small">Скопировать</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php'); ?>