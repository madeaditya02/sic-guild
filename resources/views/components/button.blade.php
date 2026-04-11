<a {{ $attributes }} @class([
  'rounded-lg border border-primary-500',
  'px-3 py-2' => $size == 'regular',
  'px-3 py-2 md:px-4.5 md:py-3 md:text-xl' => $size == 'large',
  'bg-primary-500 text-white' => $variant == 'primary',
  'text-primary' => $variant == 'outline'
])>
  {{ $slot }}
</a>