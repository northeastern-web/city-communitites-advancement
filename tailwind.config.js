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
        typography: theme => ({
            default: {
                css: {
                    color: theme('colors.gray.700'),
                    h1: {
                        color: theme('colors.gray.900'),
                        fontWeight: null,
                    },
                    h2: {
                        color: theme('colors.gray.900'),
                        fontWeight: null,
                    },
                    h3: {
                        color: theme('colors.gray.900'),
                        fontWeight: null,
                    },
                    h4: {
                        color: theme('colors.gray.900'),
                        fontWeight: null,
                    },
                    h5: {
                        color: theme('colors.gray.900'),
                        fontWeight: null,
                    },
                    h6: {
                        color: theme('colors.gray.900'),
                        fontWeight: null,
                    },
                    strong: {
                        color: theme('colors.gray.900'),
                    },
                    a: {
                        color: theme('colors.gray.900'),
                    },
                },
            },
        }),
    },
    variants: {},
    plugins: [
        require('@northeastern-web/kernl-ui/plugins/base.js'),
        require('@northeastern-web/kernl-ui/plugins/aspectRatios.js'),
        require('@northeastern-web/kernl-ui/plugins/buttons.js'),
        require('@northeastern-web/kernl-ui/plugins/gradients.js'),
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/typography'),
    ],
};
