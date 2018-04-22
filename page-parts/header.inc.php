<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?= $page_title ?></title>
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
</head>
<body>
	<div class="wrapper">
		<div class="page">
			<div class="header">
				<div class="header-inner">
					<div class="header-left">
						<a href="#" class="site-logo">SMS service</a>
					</div>
					<div class="header-middle">
						<div class="middle-left">
							<ul class="main-nav">
								<li><a href="#">Главная</a></li>
								<li>
									<a href="#">Инфо <i class="icon icon-opener"></i></a>
									<ul class="sub-menu">
										<li><a href="sms-api.php">API</a></li>
										<li><a href="referrals.php">Заработок на сервисе</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Статьи</a></li>
									</ul>
								</li>
							</ul>
							<a href="support.php" class="btn btn-default btn-small btn-darken">Задать вопрос</a>
						</div>
						<div class="middle-right">
							<div class="wallets-list">
								<div class="item">
									<div class="wallet-block">
										<div class="wallet-icon">
											<i class="icon icon-coin-dollar"></i>
										</div>
										<span class="wallet-amount">10$</span>
										<div class="wallet-button">
											<a href="refill.php" class="btn btn-default btn-small btn-darken">Пополнить</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="wallet-block">
										<div class="wallet-icon">
											<i class="icon icon-wallet-white"></i>
										</div>
										<span class="wallet-amount">15$</span>
										<div class="wallet-button">
											<a href="withdraw.php" class="btn btn-default btn-small btn-darken">Вывести</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-right">
						<div class="header-account-block">
							<div class="user-notifications">
								<div class="notifications-icon">
									<i class="icon icon-notification"></i>
								</div>
								<span class="count">2</span>
								<div class="popover-block corner-right">
									<div class="item">
										<p class="item-title"><strong>Повышение уровня</strong></p>
										<p>Ваш уровень повышен на 1</p>
									</div>
									<div class="item">
										<p class="item-title"><strong>Повышение уровня</strong></p>
										<p>Ваш уровень повышен на 1</p>
									</div>
									<div class="item">
										<div class="flex-center">
											<a href="notifications.php" class="btn btn-default btn-small btn-darken">Показать все</a>
										</div>
									</div>
								</div>
							</div>
							<div class="user-block">
								<div class="user-avatar">
									<img src="img/user-avatar.png" alt="">
									<div class="popover-block">
										<div class="item">
											<div class="user-block black-text top-aligned">
												<div class="user-avatar">
													<img src="img/user-avatar.png" alt="">
												</div>
												<div class="user-info">
													<div class="name">Иванов Иван</div>
													<a href="mailto:user@gmail.com" class="email">user@gmail.com</a>
													<ul class="user-nav margin-top-1rem">
														<li><a href="settings.php">Настройки</a></li>
														<li><a href="#">Выход</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="user-info">
									<div class="name">Иванов Иван</div>
									<ul class="user-nav">
										<li class="user-nav-item-settings">
											<a href="settings.php">Настройки</a>
											<div class="popover-block corner-right">
												<div class="item">
													<div class="user-block black-text top-aligned">
														<div class="user-avatar">
															<img src="img/user-avatar.png" alt="">
														</div>
														<div class="user-info">
															<div class="name">Константин</div>
															<p class="position">Ваш персональный менеджер</p>
															<p class="worktime">09:00 - 18:00, пн-пт</p>
															<a href="tel:380123456789" class="phone">+38 012 345 67 89</a>
															<a href="#" class="email">manager@test.com</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li><a href="#">Выход</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>