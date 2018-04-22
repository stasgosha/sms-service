<?php $page_title = "Настройки" ?>
<?php include('page-parts/header.inc.php'); ?>
<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="page-header">
			<h1>Настройки</h1>
		</div>
		<div class="main-content-inner">
			<div class="page-content page-text">
				<ul class="tabs-nav">
					<li><a href="#tab_user_data">Мои данные</a></li>
					<li><a href="#tab_security">Безопасность</a></li>
				</ul>
				<div class="tabs-containers">
					<div class="tab" id="tab_user_data">
						<div class="big-title">
							<h3>Личная информация</h3>
						</div>
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-6">
									<div class="settings-form gray-fields">
										<div class="form in-column">
											<div class="form-row">
												<div class="label black">
													<strong>Имя</strong>
												</div>
												<div class="field">
													<input type="text">
												</div>
											</div>
											<div class="form-row">
												<div class="label black">
													<strong>Фамилия</strong>
												</div>
												<div class="field">
													<input type="text">
												</div>
											</div>
											<div class="form-row">
												<div class="label black">
													<strong>Логин</strong>
												</div>
												<div class="field">
													<input type="text">
												</div>
											</div>
											<div class="form-row">
												<div class="label black">
													<strong>E-mail</strong>
												</div>
												<div class="field">
													<input type="email">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="flex-col col-6">
									<div class="user-avatar-block">
										<p class="block-caption">Аватар</p>
										<div class="block-image">
											<img src="img/user-avatar-square.png" alt="">
										</div>
										<div class="block-button">
											<a href="#" class="btn btn-light btn-azure btn-medium">Сменить аватар</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="big-title">
							<h3>Социальные сети</h3>
						</div>
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-6">
									<div class="settings-form gray-fields">
										<div class="form in-column">
											<div class="form-row">
												<div class="label black">
													<strong>Facebook</strong>
												</div>
												<div class="field">
													<input type="url" placeholder="Укажите ссылку на свой профиль" class="italic-placeholder">
												</div>
											</div>
											<div class="form-row">
												<div class="label black">
													<strong>Google+</strong>
												</div>
												<div class="field">
													<input type="url" placeholder="Укажите ссылку на свой профиль" class="italic-placeholder">
												</div>
											</div>
											<div class="form-row">
												<div class="label black">
													<strong>Vkontakte</strong>
												</div>
												<div class="field">
													<input type="url" placeholder="Укажите ссылку на свой профиль" class="italic-placeholder">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="big-title">
							<h3>Переадресация</h3>
						</div>
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-6">
									<div class="settings-form gray-fields">
										<div class="form in-column">
											<div class="form-row">
												<div class="label black">
													<strong>Номер для переадресации по умолчанию</strong>
												</div>
												<div class="field">
													<input type="tel">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="flex-container align-center">
							<div class="item with-right-margin">
								<button class="btn btn-default">Сохранить</button>
							</div>
							<div class="item with-right-margin">
								<a href="#" class="azure underlined">Отмена</a>
							</div>
						</div>
					</div>
					<div class="tab" id="tab_security">
						<div class="big-title">
							<h3>Смена пароля</h3>
						</div>
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-6">
									<div class="settings-form gray-fields">
										<div class="form in-column">
											<div class="form-row">
												<div class="label black">
													<strong>Старый пароль</strong>
												</div>
												<div class="field">
													<input type="password">
												</div>
											</div>
											<div class="form-row">
												<div class="label black">
													<strong>Новый пароль</strong>
												</div>
												<div class="field">
													<input type="password">
												</div>
											</div>
											<div class="form-row">
												<div class="label black">
													<strong>Повторить новый пароль</strong>
												</div>
												<div class="field">
													<input type="password">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="flex-container align-center">
							<div class="item with-right-margin">
								<button class="btn btn-default">Сохранить</button>
							</div>
							<div class="item with-right-margin">
								<a href="#" class="azure underlined">Отмена</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php'); ?>