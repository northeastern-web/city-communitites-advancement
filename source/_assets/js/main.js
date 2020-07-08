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
                    order: '-fields.featured,fields.startDate',
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
                    'fields.startDate[lte]': add(new Date(), {
                        days: 90,
                    }).toISOString(),
                    'fields.startDate[gte]': new Date().toISOString(),
                };
            }

            return {
                'fields.startDate[gte]': new Date().toISOString(),
            };
        },
        formatDate(str) {
            if (!str) {
                return;
            }

            const date = new Date(str);

            return format(date, 'M.d.Y');
        },
        formatTime(str) {
            if (!str) {
                return;
            }

            const date = new Date(str);

            return format(date, 'h:mma');
        },
    };
};
