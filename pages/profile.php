<?php
session_start();
require_once realpath(dirname(__DIR__, 2) . '/hertahub/api_core/auth.php');
if (!isLoggedIn()) {
	header("Location: login.php");
	exit;
}
?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>HertaHub - Profile</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="stylesheet" href="/assets/css/style.css">
	<noscript>
		<link rel="stylesheet" href="/assets/css/noscript.css" />
	</noscript>
	<link rel="stylesheet" href="/assets/css/profile.css">
</head>

<body class="is-preload">
	<!-- Popup -->
	<div id="toast" class="toast"></div>

	<!-- Wrapper -->
	<div id="wrapper" class="fade-in">
		<div id="box">
			<!-- Intro -->
			<div id="intro">
				<div class="planet-border">
					<div class="planet"></div>
					<h1 class="introAnime">
						Herta<br />
						Hub
					</h1>
					<p style="font-size: x-small; line-height: 1px;">Pusat Forum & Diskusi</p>
				</div>
			</div>
			<p class="introDesc">
				<span class="text kuru">Kuru Kuru</span>
				<span class="text kururin">Kururin</span>
			</p>
			<ul class="actions">
				<li>
					<a href="#header" class="button icon solid solo fa-arrow-down scrolly"></a>
				</li>
			</ul>
		</div>
	</div>

	<!-- Header -->
	<div id="boxes">
		<header id="header">
			<a href="#main" class="logo">HertaHub</a>
		</header>
	</div>

	<!-- Nav -->
	<nav id="nav">
		<ul class="links">
			<?php if (isset($_SESSION['user_id'])): ?>
				<li><a href="/index.php">Home</a></li>
				<li class="active"><a href="profile.php">Profile</a></li>
				<li><a href="forum.php">Forum</a></li>
				<?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
					<li><a href="kelolaUser.php">Kelola User</a></li>
				<?php endif; ?>
				<li><a href="#" id="logoutBtn">Logout</a></li>
			<?php else: ?>
				<li><a href="login.php">Login / Register</a></li>
			<?php endif; ?>
		</ul>
		<ul class="icons">
			<li><a href="https://twitter.com/" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
			</li>
			<li><a href="https://facebook.com/" class="icon brands fa-facebook-f"><span
						class="label">Facebook</span></a></li>
			<li><a href="https://instagram.com/" class="icon brands fa-instagram"><span
						class="label">Instagram</span></a></li>
			<li><a href="https://github.com/" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
		</ul>
	</nav>

	<!-- Main -->
	<div id="main">
		<!-- Profile Header -->
		<div id="profileHeader" class="profile-header">
			<!-- Background image set via JS -->
			<div class="avatar-container">
				<div class="imgContainer">
					<img id="avatarImg" src="/assets/img/avatars/herta-kurukuru.gif" alt="Avatar" />
				</div>
				<img id="borderOverlay" class="border-overlay" src="/assets/img/borders/default-border.png"
					alt="Border Overlay" />
				<button id="editAvatarBtn" style="position:absolute; bottom:5px; right:5px;">Edit</button>
			</div>
		</div>

		<!-- Profile Info -->
		<div class="profile-info">
			<div id="toast" class="toast"></div>
			<h2 id="displayUsername">Username</h2>
			<div class="info-group">
				<label for="usernameInput">Username</label>
				<input type="text" id="usernameInput" />
				<button id="saveUsernameBtn">Simpan</button>
				<hr>
			</div>
			<div class="info-group">
				<div id="oldPasswordDiv">
					<label>Password Lama</label>
					<input type="password" id="oldPassword" />
					<br>
				</div>
				<label>Password Baru</label>
				<input type="password" id="newPassword" />
				<br>
				<label>Konfirmasi Password Baru</label>
				<input type="password" id="confirmNewPassword" />
				<button id="savePasswordBtn">Ganti Password</button>
				<hr>
			</div>
			<div class="info-group" id="profile-admin-only">
				<label for="roleSelect">Role</label>
				<select id="roleSelect">
					<option value="user">User</option>
					<option value="admin">Admin</option>
				</select>
				<button id="saveRoleBtn">Simpan Role</button>
				<hr>
			</div>
			<div class="info-group">
				<label>Border Profil</label>
				<button id="editBorderBtn">Pilih Border</button>
				<div id="selectedBorderName"></div>
			</div>
		</div>

		<!-- Border Gallery Modal -->
		<div id="borderModal" class="modal">
			<div class="modal-content">
				<h3>Pilih Border</h3>
				<div id="borderGallery" class="border-gallery">
					<!-- Foto border akan diisi via JS -->
				</div>
				<br>
				<button id="addBorderBtn" style="display: none;">+ Tambah Border</button>
				<button id="closeBorderModal">Tutup</button>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer id="footer">
		<section class="split contact">
			<section class="alt">
				<h3>Address</h3>
				<p>1234 Somewhere Road #87257<br />
					Nashville, TN 00000-0000</p>
			</section>
			<section>
				<h3>Phone</h3>
				<p><a href="#">(000) 000-0000</a></p>
			</section>
			<section>
				<h3>Email</h3>
				<p><a href="#">info@untitled.tld</a></p>
			</section>
			<section>
				<h3>Social</h3>
				<ul class="icons alt">
					<li><a href="https://twitter.com/" class="icon brands alt fa-twitter"><span
								class="label">Twitter</span></a></li>
					<li><a href="https://facebook.com/" class="icon brands alt fa-facebook-f"><span
								class="label">Facebook</span></a></li>
					<li><a href="https://instagram.com/" class="icon brands alt fa-instagram"><span
								class="label">Instagram</span></a></li>
					<li><a href="https://github.com/" class="icon brands alt fa-github"><span
								class="label">GitHub</span></a></li>
				</ul>
			</section>
		</section>
	</footer>

	<!-- Copyright -->
	<div id="copyright">
		<ul>
			<li>&copy; Untitled</li>
			<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>

	</div>

	<!-- Scripts -->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/jquery.scrollex.min.js"></script>
	<script src="/assets/js/jquery.scrolly.min.js"></script>
	<script src="/assets/js/browser.min.js"></script>
	<script src="/assets/js/breakpoints.min.js"></script>
	<script src="/assets/js/util.js"></script>
	<script src="/assets/js/main.js"></script>
	<script src="/assets/js/profile.js"></script>

	<script src="/widget/live2d-widget/L2Dwidget.min.js"></script>
	<script src="/assets/js/miku.js"></script>
</body>

</html>