<?php
    session_start();
?>

<form method="POST" action="index.php">
    <label>
        Qual seu nome?<br/>
        <input type="text" name="nome"/><br/>
    </label>
    <input type="submit" value="Salvar"/>
</form>