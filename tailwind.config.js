module.exports = {
    purge: [
        'source/**/*.php',
        'source/**/*.md',
        'source/**/*.js',
        'node_modules/@northeastern-web/global-elements/dist/**/*.js',
    ],
    theme: {
        extend: {
            maxWidth: {
                'screen-2xl': '1440px',
            },
            gradients: theme => ({
                colors: {
                    'black-semi-6-black-semi-1': [
                        theme('colors.black-semi-6'),
                        theme('colors.black-semi-1'),
                    ],
                    'black-semi-4-transparent': [
                        theme('colors.black-semi-4'),
                        theme('colors.transparent'),
                    ],
                },
            }),
        },
    },
    variants: {},
    plugins: [
        require('@northeastern-web/kernl-ui/plugins/base.js'),
        require('@northeastern-web/kernl-ui/plugins/aspectRatios.js'),
        require('@northeastern-web/kernl-ui/plugins/buttons.js'),
        require('@northeastern-web/kernl-ui/plugins/gradients.js'),
        require('@tailwindcss/custom-forms'),
    ],
};
