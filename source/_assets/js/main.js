require('@northeastern-web/kernl-ui');

window.contentful = require('contentful');

window.contentfulComponent = function(space, accessToken) {
    return {
        loading: false,
        client: null,
        entries: [],
        search: '',
        init() {
            this.client = contentful.createClient({
                space,
                accessToken,
            });

            this.getEntries();

            this.$watch('search', () => this.getEntries());
        },
        getEntries() {
            this.loading = true;

            this.client
                .getEntries({
                    content_type: 'event',
                    order: '-fields.featured,-fields.date',
                    query: this.search,
                })
                .then(data => {
                    this.entries = data.items;

                    this.loading = false;
                })
                .catch(err => {
                    this.loading = false;
                });
        },
    };
};
