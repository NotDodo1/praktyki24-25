
<form action="{{$absolute_url}}/index.php?controller=authuser&do=login" method="post">
    <h2>Logowanie</h2>

    <label for="name">Nazwa:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Zaloguj się">
</form>