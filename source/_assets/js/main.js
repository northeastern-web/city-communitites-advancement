require('@northeastern-web/kernl-ui');

import { format, add } from 'date-fns';

window.contentful = require('contentful');

window.mergeObjects = function(a, b) {
    return { ...a, ...b };
};

window.contentfulServiceOpportunities = function(space, accessToken) {
    return {
        loading: false,
        client: null,
        entries: [],
        search: '',
        date: '',
        init() {
            this.client = contentful.createClient({
                space,
                accessToken,
            });

            this.getEntries();

            this.$watch('search', () => this.getEntries());
            this.$watch('date', () => this.getEntries());
        },
        getEntries() {
            this.loading = true;

            this.client
                .getEntries({
                    content_type: 'serviceOpportunity',
                    query: this.search,
                    order: 'sys.createdAt',
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
