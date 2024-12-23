@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 pooorborder-gray-700 pooorbg-gray-900 pooortext-gray-300 focus:border-indigo-500 pooorfocus:border-indigo-600 focus:ring-indigo-500 pooorfocus:ring-indigo-600 rounded-md shadow-sm']) !!}>
