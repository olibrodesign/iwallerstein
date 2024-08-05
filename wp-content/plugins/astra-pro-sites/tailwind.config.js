/* @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./inc/lib/onboarding/assets/src/**/*.{jsx,js}',
		'./inc/lib/nps-survey/src/**/*.{jsx,js}',
	],
	theme: {
		extend: {
			colors: {
				'browser-bar': '#FAFAFA',
				'accent-st': '#3D4592',
				'accent-st-secondary': '#2563EB',
				'accent-wp-primary': '#0073AA',
				'accent-wp-primary-alt': '#70CFFF',
				'accent-wp-secondary': '#00A0D2',
				'heading-text': '#030712',
				'body-text': '#374151',
				'nps-button-text': '#020617',
				'secondary-text': '#9CA3AF',
				'disabled-text': '#D1D5DB',
				'nav-active': '#111827',
				'nav-inactive': '#374151',
				'background-primary': '#FFFFFF',
				'background-secondary': '#F3F4F6',
				'background-tertiary': '#F0F0FF',
				'nps-button-background': '#2271B1',
				'nps-placeholder-text': '#64748B',
				'border-primary': '#D1D5DB',
				'border-secondary': '#6B7280',
				'border-tertiary': '#D8DFE9',
				'border-nps-primary': '#E2E8F0',
				'icon-primary': '#5A03EF',
				'icon-secondary': '#374151',
				'alert-info': '#3B82F6',
				'alert-info-bg': '#EFF6FF',
				'alert-info-text': '#3D4592',
				'alert-success': '#22C55E',
				'alert-success-bg': '#F0FDF4',
				'alert-success-text': '#16a34a',
				'alert-warning': '#FACC15',
				'alert-warning-bg': '#FEFCE8',
				'alert-warning-text': '#ca8a04',
				'alert-error': '#EF4444',
				'alert-error-bg': '#FEF2F2',
				'alert-error-text': '#dc2626',
				favorite: '#FD3997',
				tooltip: '#334155',
				'credit-warning': '#FB7E0A',
				'button-bg': '#2F327E',
				'credit-danger': '#EA1522',
				'button-disabled': '#E5E7EB',
				'blue-crayola': '#3D4592',
				'zip-body-text': '#475569',
				'zip-app-highlight-bg': '#F6FAFE',
				'zip-app-heading': '#0F172A',
				'zip-dark-theme-heading': '#FCFCFD',
				'zip-dark-theme-content-background': '#27313F',
				'zip-dark-theme-body': '#E4EAF1',
				'zip-dark-theme-border': '#333E52',
				'zip-dark-theme-icon-active': '#BCC9DC',
				'zip-dark-theme-bg': '#1F2733',
				'zip-light-border-primary': '#E5E7EB',
				'zip-app-border-hover': '#D1DAE5',
				'gradient-color-1': '#B809A7',
				'gradient-color-2': '#E90B76',
				'gradient-color-3': '#FC8536',
				'step-gradient':
					'linear-gradient(to bottom, #FFF 0%, #0000FF 100%)',
				'zip-app-inactive-icon': '#94A3B8',
				'zip-app-light-bg': '#F0F4FA',
				'st-background-secondary': '#f7f7f9',
				'outline-color': '#FF580E',
				'preview-background': '#F2F4F7',
			},
			backgroundImage: {
				'gradient-1':
					'linear-gradient(90deg, #B809A7 0%, #E90B76 46.88%, #FC8536 100%)',
				'gradient-2':
					'linear-gradient(180deg, #B809A7 0%, #E90B76 46.88%, #FC8536 100%)',
			},
			animation: {
				rotate: 'rotation 7s linear infinite',
			},
			fontFamily: {
				sans: [ 'Figtree', 'sans-serif' ],
			},
			maxWidth: {
				container: '800px',
			},
			boxShadow: {
				small: '0px 2px 4px -2px rgba(0, 0, 0, 0.06), 0px 4px 8px -2px rgba(0, 0, 0, 0.10)',
				medium: '0px 4px 6px -2px rgba(0, 0, 0, 0.03), 0px 12px 16px -4px rgba(0, 0, 0, 0.08)',
				xlarge: '0px 24px 48px -12px rgba(0, 0, 0, 0.10)',
				'action-buttons': '0px 0px 40px -8px rgba(0, 0, 0, 0.20)',
				card: '0px 24px 64px -16px rgba(0, 0, 0, 0.16)',
				error: '0px 1px 1px 0px #EF4444, 0px 0px 0px 1px #EF4444',
				sm: '0px 1px 2px 0px rgba(0, 0, 0, 0.05)',
				'template-preview': '0px 40px 120px -16px rgba(0, 0, 0, 0.30)',
				'template-info': '0px -20px 25px -5px rgba(0, 0, 0, 0.10)',
				nps: '0px 10px 10px -5px rgba(0, 0, 0, 0.04), 0px 20px 25px -5px rgba(0, 0, 0, 0.1)',
			},
			gradientColorStopPositions: {
				0: '0%',
				46.88: '46.88%',
				100: '100%',
			},
		},
	},
	plugins: [],
	corePlugins: {
		preflight: false,
	},
};
