<!DOCTYPE html>
<html>
<header>
	<table width="100%">
		<tr >
			<td><center><h2>Header</h2></center></td>
		</tr>
	</table>
	<main>
    <table width="100%" height="5px">
        <hr>
			<tr>
				<td>
                <a href="/home">Home</a>
				&nbsp
                <a href="/info">Info</a>
				&nbsp
                <a href="/mahasiswa">Mahasiswa</a>
				&nbsp
                <a href="/pegawai">Pegawai</a>
				&nbsp
                <a href="/logout">Logout</a>
                </td>
			</tr>
        </table>	
	</main>
    <hr>
</header>

<body>
    <table width="100%" height="440px">
			<tr>
				<td><center><h2>
                    <?= $this->renderSection('content') ?>
                </h2></center></td>
			</tr>
	</table>	
	</main>

	<footer>
	<table width="100%">
    <hr>
		<tr>
			<td><center><h2>Footer</h2></center></td>
		</tr>
	</table>
	</footer>
</body>
</html>