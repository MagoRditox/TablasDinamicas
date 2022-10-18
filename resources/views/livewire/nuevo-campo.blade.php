<div>
    <table class="w-full text-sm text-left text-slate-500">
        <thead class text-xs text-slate-700 uppercase bg-slate-50">
        <button type="button"wire:click="add()" class="btn btn-success">Agregar Campos</a>
        <tbody>
        <tr>
            <th scope="col" class="px-6 py-3">
                @foreach ($dinamicos as $index => $dinamico)
                <td>
                Tipo de dato a agregar:
                <input wire:model="dinamicos.{{$index}}.name" class='form-control' value="">
                @error('dinamicos.' . $index . '.name') <span class="font-medium text-sm text-pink-500">{{$message}}</span> @enderror
</td>
<td>
    Valor dato (puede ser nulo):
    <input wire:model="dinamicos.{{$index}}.value" class='form-control' value="">
</td>
@endforeach
</th>
</tr>
</thead>
</table>
<button wire:click="save()"type="button" class="focus:outline-none text-white bg-purple-700">
    Guardar
</button>
</div>