@props([
    'color' => 'twitter'
])

<svg viewBox="0 0 24 24" aria-hidden="true"
    {{ $attributes->class([
        'h-5 w-6',
        'fill-twitter' => $color == 'twitter',
        'fill-gray-500' => $color == 'gray',
        'fill-white' => $color == 'white',
        'fill-gray-500 group-hover:fill-blue-400' => $color == 'blue',
        'fill-blue-500 group-hover:fill-blue-400' => $color == 'full-blue',
        'fill-gray-500 group-hover:fill-green-400' => $color == 'green',
        'fill-gray-500 group-hover:fill-pink-400' => $color == 'pink',
    ]) }}>
    <g>
        <path
            d="M2.504 21.866l.526-2.108C3.04 19.719 4 15.823 4 12s-.96-7.719-.97-7.757l-.527-2.109L22.236 12 2.504 21.866zM5.981 13c-.072 1.962-.34 3.833-.583 5.183L17.764 12 5.398 5.818c.242 1.349.51 3.221.583 5.183H10v2H5.981z"></path>
    </g>
</svg>
