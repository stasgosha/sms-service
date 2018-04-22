<div class="sidebar">
	<?php
		if (!isset($sidebar_classes)) {
			$sidebar_classes = '';
		}
	?>
	<ul class="sidebar-nav <?= $sidebar_classes ?>">
		<li>
			<a href="activation.php">
				<span class="item-icon">
					<i class="icon icon-activation"></i>
				</span>
				<span class="item-text">Активация получения SMS</span>
			</a>
		</li>
		<li>
			<a href="sim-rent.php">
				<span class="item-icon">
					<i class="icon icon-sim"></i>
				</span>
				<span class="item-text">Аренда SIM</span>
			</a>
		</li>
		<li>
			<a href="history.php">
				<span class="item-icon">
					<i class="icon icon-history"></i>
				</span>
				<span class="item-text">История</span>
			</a>
		</li>
		<li>
			<a href="refill.php">
				<span class="item-icon">
					<i class="icon icon-fill"></i>
				</span>
				<span class="item-text">Пополнение</span>
			</a>
		</li>
		<li>
			<a href="settings.php">
				<span class="item-icon">
					<i class="icon icon-settings"></i>
				</span>
				<span class="item-text">Настройки</span>
			</a>
		</li>
		<li>
			<a href="sms-api.php">
				<span class="item-icon">
					<i class="icon icon-api"></i>
				</span>
				<span class="item-text">API</span>
			</a>
		</li>
		<li>
			<a href="refferals.php">
				<span class="item-icon">
					<i class="icon icon-persons"></i>
				</span>
				<span class="item-text">Мои рефералы</span>
			</a>
		</li>
		<li>
			<a href="withdraw.php">
				<span class="item-icon">
					<i class="icon icon-wallet"></i>
				</span>
				<span class="item-text">Вывод средств</span>
			</a>
		</li>
		<li>
			<a href="support.php">
				<span class="item-icon">
					<i class="icon icon-support"></i>
				</span>
				<span class="item-text">Поддержка</span>
			</a>
		</li>
	</ul>
</div>