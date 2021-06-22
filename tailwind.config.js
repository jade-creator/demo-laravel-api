module.exports = {
  purge: [
    './resources/views/components/button.blade.php',
    './resources/views/components/dropdown.blade.php',
    './resources/views/components/input.blade.php',
    './resources/views/components/result.blade.php',
    './resources/views/components/title.blade.php',
    './resources/views/layouts/app.blade.php',
    './resources/views/livewire/product/destroy-component.blade.php',
    './resources/views/livewire/product/index-component.blade.php',
    './resources/views/livewire/product/show-component.blade.php',
    './resources/views/livewire/product/store-component.blade.php',
    './resources/views/livewire/product/update-component.blade.php',
    './resources/views/navbar.blade.php',
    './resources/views/sidebar.blade.php',
    './resources/views/welcome.blade.php',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
