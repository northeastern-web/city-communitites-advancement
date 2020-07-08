require('@northeastern-web/kernl-ui');
require('@northeastern-web/global-elements');

import { format, add } from 'date-fns';

window.contentful = require('contentful');

window.contentfulComponent = function(space, accessToken) {
    return {
        loading: false,
        client: null,
        entries: [],
        search: '',
        date: null,
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

            const dateFilters = this.getDateFilters();

            this.client
                .getEntries({
                    content_type: 'event',
                    order: '-fields.featured,fields.date',
                    query: this.search,
                    ...dateFilters,
                    'fields.tag.sys.contentType.sys.id': 'tag',
                    'fields.tag.sys.id': '4HFWnzy4RKURB0liNY3NVR',
                })
                .then(data => {
                    this.entries = data.items;

                    this.loading = false;
                })
                .catch(err => {
                    this.loading = false;
                });
        },
        getDateFilters() {
            if (this.date === 'less-than-90') {
                return {
                    'fields.date[lte]': add(new Date(), {
                        days: 90,
                    }).toISOString(),
                    'fields.date[gte]': new Date().toISOString(),
                };
            }

            return {
                'fields.date[gte]': new Date().toISOString(),
            };
        },
        formatDate(str) {
            const date = new Date(str);
            const hours = date.getHours();

            return format(date, 'M.d.Y h:mm a');
        },
    };
};
