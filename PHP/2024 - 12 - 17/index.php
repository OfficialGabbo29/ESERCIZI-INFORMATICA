<?php
session_start(); //inizia la sessione
$file = 'utenti.json';
$utenti =[]; 
if(file_exists($file)){
	$dati=json_decode(file_get_contents($file), true);
	$utenti=$dati['utenti'];
}

// creo una variabile per i messaggi
$messaggio = '';

// gestione del login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['azione']) && $_POST['azione'] === 'login') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// come cercare l'utente nel file JSON
	foreach ($utenti as $utente) {
		if ($utente['username'] === $username && $utente['password'] === $password) {
			$_SESSION['utente'] = $utente; // Salva i dati dell'utente nella sessione
			$messaggio = "Login effettuato con successo!";
		}
	}
	//setto il messaggio nel caso di errore
	if (!isset($_SESSION['utente'])) {
		$messaggio = "Username o password errati!";
	}
}


// come gestire il logout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['azione']) && $_POST['azione'] === 'logout') {
	session_destroy(); //distruggo la sessione
	header("Location: " . $_SERVER['PHP_SELF']); //ricarico la pagina
	exit;
}

// come gestire la modifica dei dati
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['azione']) && $_POST['azione'] === 'modifica') {
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];

// come aggiornare i dati nella sessione
$_SESSION['utente']['nome'] = $nome;
$_SESSION['utente']['cognome'] = $cognome;
$_SESSION['utente']['email'] = $email;

// come aggiornare i dati nel file JSON
foreach ($utenti as &$utente) {
if ($utente['username'] === $_SESSION['utente']['username']) {
$utente['nome'] = $nome;
$utente['cognome'] = $cognome;
$utente['email'] = $email;
}
}
$dati["utenti"]=$utenti;
file_put_contents($file, json_encode($dati));
$messaggio = "Dati aggiornati con successo!";
}
?>


<!DOCTYPE html>
<html>
	<h1>Gestione Utente</h1>
	<p><?= $messaggio ?></p>

	<?php if (!isset($_SESSION['utente'])){ ?>
		<!--Form di login -->
		<h2>Login</h2>
		<form method="POST">
			<input type="hidden" name="azione" value="login">
			Username: <input type="text" name="username" required><br>
			Password: <input type="password" name="password" required><br>
			<button type="submit">Login</button>
		</form>
	<?php } else{ ?>
		<!--Visualizzazione e modifica dei dati -->
		<h2>Benvenuto, <?= htmlspecialchars($_SESSION['utente']['nome']) ?></h2>
		<p><strong>Username:</strong> <?= htmlspecialchars($_SESSION['utente']['username']) ?></p>
		<p><strong>Nome:</strong> <?= htmlspecialchars($_SESSION['utente']['nome']) ?></p>
		<p><strong>Cognome:</strong> <?= htmlspecialchars($_SESSION['utente']['cognome']) ?></p>
		<p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['utente']['email']) ?></p>
		<h2>Modifica i tuoi dati</h2>
		<form method="POST">
			<input type="hidden" name="azione" value="modifica">
			Nome: <input type="text" name="nome" value="<?= htmlspecialchars($_SESSION['utente']['nome']) ?>" required><br>
			Cognome: <input type="text" name="cognome" value="<?= htmlspecialchars($_SESSION['utente']['cognome']) ?>" required><br>
			Email: <input type="email" name="email" value="<?= htmlspecialchars($_SESSION['utente']['email']) ?>" required><br>
			<button type="submit">Salva Modifiche</button>
		</form>

		<form method="POST">
			<input type="hidden" name="azione" value="logout">
			<button type="submit">Logout</button>
		</form>
	<?php }?>

</html>
