<form action="{{route('contacto')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name" class="mb-0 font-weight-bold">Nombre</label>
        <input type="text" class="form-control mt-0 @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="nameHelp" placeholder="Indica tu nombre y apellido" value="{{old('name')}}">
        <small id="nameHelp" class="form-text invalid-feedback">Es necesario indicar un nombre</small>
    </div>
    <div class="d-flex justify-content-around">
        <div class="form-group flex-fill mr-3">
            <label for="email" class="mb-0 font-weight-bold">Correo electrónico</label>
            <input type="email" class="form-control mt-0 @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" value="{{old('email')}}">
            @if ($errors->isEmpty())<small id="emailHelp" class="form-text text-muted">Tu direccion nunca sera compartida.</small>@endif
            @error('email')<small id="emailHelp" class="form-text invalid-feedback">Es necesario una dirección de correo valida.</small>@enderror
        </div>
        <div class="form-group flex-fill ml-3">
            <label for="phone" class="mb-0 font-weight-bold">Teléfono</label>
            <input type="tel" class="form-control mt-0 @error('phone') is-invalid @enderror" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="Indica tu numero a 10 digitos" value="{{old('phone')}}">
            @error('phone')<small id="phoneHelp" class="form-text invalid-feedback">Es necesario indicar un telefono de contacto</small>@enderror
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="mb-0 font-weight-bold">Comentarios</label>
        <textarea name="message" id="message" rows="7" class="form-control mt-0 @error('message') is-invalid @enderror" aria-describedby="messageHelp" placeholder="Escribe aqui tu duda, comentario o sugerencia.">{{old('message')}}</textarea>
        @error('message')<small id="messageeHelp" class="form-text invalid-feedback">Escribe un comentario.</small>@enderror
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar Cometarios</button>
</form>
