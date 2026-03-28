<a href="/login" @class([
  'rounded-lg border border-green-500',
  'px-3 py-2' => $size == 'regular',
  'px-3 py-2 md:px-4.5 md:py-3 md:text-xl' => $size == 'large',
  'bg-green-500 text-white' => $variant == 'primary',
  'text-primary' => $variant == 'outline'
])>
  {{ $slot }}
</a>