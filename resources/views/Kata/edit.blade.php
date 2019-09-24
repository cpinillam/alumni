

<div>
        <form action='/kata/{{$kata->id}}' method='POST' >
            @csrf
            @method ('PATCH')
            {{ csrf_field() }}
            <label>Nombre de la kata</label>
            <input type="text" name="name" value="{{$kata->name}}">
            <br>
            <label>Descripción de la kata</label>
            <input type="text" name="description" value="{{$kata->description}}">
            <br>
            <label>Usuario de Github</label>
            <input type="text" name="username" value="{{$kata->username}}">
            <br>
            <select name="repository" >
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <br>
            <input type="submit" value="Confirmar" class="btn btn-success">
            <a href="/kata" class="btn btn-primary ml-auto">Listado de Katas</a>
        </form>
    </div>