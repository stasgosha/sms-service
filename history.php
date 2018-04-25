<?php $page_title = "История" ?>
<?php // $sidebar_classes = "narrow"; ?>
<?php include('page-parts/header.inc.php'); ?>
<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="page-header">
			<h1>История</h1>
		</div>
		<div class="main-content-inner">
			<div class="page-content page-text">
				<div class="gray-section big-side-paddings">
					<div class="history-filter">
						<div class="form">
							<div class="form-row">
								<div class="label">
									<p>Показать историю за период</p>
								</div>
								<div class="field">
									<div class="input-with-icon with-right-icon">
										<input type="text">
										<div class="right-icon">
											<i class="icon icon-calendar"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="gray-section small-paddings">
					<div class="scrollable-container">
						<table class="table">
							<tr>
								<th>
									<div class="sort-by">
										<span>ID</span>
										<i class="icon icon-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Дата</span>
										<i class="icon icon-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Осталось <wbr>мин</span>
										<i class="icon icon-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Сервис</span>
										<i class="icon icon-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Номер</span>
										<i class="icon icon-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Статус</span>
										<i class="icon icon-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Код <wbr>из СМС</span>
											<i class="icon icon-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Действия</span>
										<i class="icon icon-sort"></i>
									</div>
								</th>
							</tr>
							<tr>
								<td>123</td>
								<td>01.04.2018</td>
								<td class="text-center">20</td>
								<td>Одноклассники</td>
								<td>+380123456789</td>
								<td>Ожидание кода</td>
								<td>Загрузка...</td>
								<td>
									<a href="#" class="btn btn-light btn-small btn-azure">Отмена</a>
								</td>
							</tr>
							<tr>
								<td>123</td>
								<td>01.04.2018</td>
								<td class="text-center">20</td>
								<td>Одноклассники</td>
								<td>+380123456789</td>
								<td>Ожидание кода</td>
								<td>Загрузка...</td>
								<td>
									<a href="#" class="btn btn-light btn-small btn-azure">Отмена</a>
								</td>
							</tr>
							<tr>
								<td>123</td>
								<td>01.04.2018</td>
								<td class="text-center">20</td>
								<td>Одноклассники</td>
								<td>+380123456789</td>
								<td>Ожидание кода</td>
								<td>Загрузка...</td>
								<td>
									<a href="#" class="btn btn-light btn-small btn-azure">Отмена</a>
								</td>
							</tr>
							<tr>
								<td>123</td>
								<td>01.04.2018</td>
								<td class="text-center">20</td>
								<td>Одноклассники</td>
								<td>+380123456789</td>
								<td>Ожидание кода</td>
								<td>Загрузка...</td>
								<td>
									<a href="#" class="btn btn-light btn-small btn-azure">Отмена</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php'); ?>