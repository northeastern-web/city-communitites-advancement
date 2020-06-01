module.exports = {
    purge: ['source/**/*.php', 'source/**/*.md', 'source/**/*.js'],
    theme: {
        extend: {
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
