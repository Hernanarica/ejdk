/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./resources/**/*.blade.php',
		'./resources/**/**/*.blade.php'
	],
	theme: {
		extend: {
			backgroundImage: {
				'hero-banner': "url('/public/src/assets/imgs/banners/banner-hero.jpg')"
			}
		}
	},
	plugins: [
		require('@tailwindcss/aspect-ratio'),
		require('@tailwindcss/forms')
	]
};
