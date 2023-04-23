<div>
    <input wire:model.lazy="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodby</option>
        <option>Adios</option>
    </select>
    {{implode(', ',$greeting)}} {{strtoupper($name)}}
    @if ($loud) ! @endif

</div>
