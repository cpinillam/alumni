<form method="POST" action="/kata">
    @csrf
    <label>Nombre de la kata</label>
    <input type="text" name="name"> 
    <br>
    <label>Descripción de la kata</label>
    <input type="text" name="description"> 
    <br>
    <label>Usuario de Github</label>
    <input type="text" name="username">
    <br>
    <input type="submit">
</form>