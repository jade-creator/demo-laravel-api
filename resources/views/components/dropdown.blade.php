@props(['name', 'value'])

<select name="{{ $name }}" id="{{ $name }}" class="px-3 py-2 leading-8 text-black border-2 border-gray-200 bg-blueGray-100 flex-grow">
    <option value="{{ $value }}" selected>{{ $value }}</option>
</select>