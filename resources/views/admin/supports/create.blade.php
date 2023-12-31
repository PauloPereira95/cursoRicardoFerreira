<h1>Novo Duvida</h1>
<form action="{{ route('supports.store') }}" method="POST">
    <input type="text" name="subject" id="">
    @csrf
    {{-- <select name="sta" id=""></select> --}}
    <textarea name="body" id="" cols="30" rows="5"></textarea>
    <button type="submit">Enviar</button>
</form>