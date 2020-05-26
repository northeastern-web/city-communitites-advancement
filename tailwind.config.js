module.exports = {
    purge: ['source/**/*.php', 'source/**/*.md', 'source/**/*.js'],
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [require('@northeastern-web/kernl-ui/plugins/base.js')],
};
