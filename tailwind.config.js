const defaultConfig = require('@northeastern-web/kernl-ui/defaultConfig');

module.exports = {
    presets: [defaultConfig],
    purge: {
        ...defaultConfig.purge,
        content: [
            ...defaultConfig.purge.content,
            'source/**/*.php',
            'source/**/*.md',
            'source/**/*.js',
        ],
    },
    theme: {
        extend: {
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
    },
    variants: {},
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@northeastern-web/kernl-ui/plugins/buttons.js'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
