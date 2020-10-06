const defaultConfig = require('@northeastern-web/kernl-ui/defaultConfig');

module.exports = {
    purge: {
        content: [
            ...defaultConfig.purge.content,
            'source/**/*.php',
            'source/**/*.md',
            'source/**/*.js',
        ],
        options: {
            whitelistPatternsChildren: [
                ...defaultConfig.purge.options.whitelistPatternsChildren,
            ],
        },
    },
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
                    color: theme('colors.gray.800'),
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
                        fontWeight: 700,
                    },
                    h4: {
                        color: theme('colors.gray.900'),
                        fontWeight: 700,
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
                    '.lead': {
                        color: theme('colors.gray.700'),
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
