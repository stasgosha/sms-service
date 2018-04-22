<?php $page_title = "Техническая поддержка" ?>
<?php include('page-parts/header.inc.php'); ?>
<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="page-header">
			<h1>Техническая поддержка</h1>
		</div>
		<div class="main-content-inner">
			<div class="page-content page-text">
				<p>Служба технической поддержки работает специально для Вас 24/7
					<br>Мы всегда рады будем ответить на интересующие Вас вопросы!
					<br>Пожалуйста, описывайте проблему достаточно подробно! Не следует дублировать вопрос, если Вы ещё не получили ответ на предыдущий! Спасибо что Вы с нами!
				</p>
				<p class="green"><strong>E-mail адрес: <a href="mailto:support@domen.com">support@domen.com</a></strong></p>
				<hr>
				<div class="support-form">
					<div class="form in-column gray-fields">
						<div class="form-row">
							<div class="label">Выберите тему запроса: <span class="asterisk">*</span></div>
							<div class="field">
								<select>
									<option value="1">Вывод средств</option>
									<option value="2">Зачисление средств</option>
									<option value="3">Ошибка в работе</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="label">Ваше сообщение: <span class="asterisk">*</span></div>
							<div class="field">
								<textarea></textarea>
							</div>
						</div>
						<div class="form-row">
							<button class="btn btn-default">Отправить</button>
						</div>
					</div>
				</div>
				<hr>
				<div class="small-title">
					<h5>История обращений</h5>
				</div>
				<div class="gray-section small-paddings">
					<table class="table">
						<tr>
							<th>Дата</th>
							<th>Тема</th>
							<th>Статус</th>
							<th>Действие</th>
						</tr>
						<tr>
							<td>01.01.2018  10:45:22</td>
							<td>Вывод средств</td>
							<td>Закрыт</td>
							<td>
								<a href="#" class="btn btn-light btn-small btn-azure">Удалить</a>
							</td>
						</tr>
						<tr>
							<td>01.01.2018  10:45:22</td>
							<td>Вывод средств</td>
							<td>Есть ответ</td>
							<td>
								<a href="#" class="btn btn-light btn-small btn-azure">Открыть</a>
							</td>
						</tr>
						<tr>
							<td>01.01.2018  10:45:22</td>
							<td>Вывод средств</td>
							<td>В обработке</td>
							<td>&nbsp;</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php'); ?>