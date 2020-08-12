const initialFilters = {
    search: '',
    type: '',
    location: '',
    timeOfYear: '',
    timeOfDay: '',
    duration: '',
    numberOfVolunteers: '',
};

export default function(space, accessToken) {
    return {
        loading: false,
        client: null,
        entries: [],
        ...initialFilters,
        init() {
            this.client = contentful.createClient({
                space,
                accessToken,
            });

            this.getEntries();

            this.watchFilters();
        },
        getEntries() {
            this.loading = true;

            this.client
                .getEntries({
                    content_type: 'serviceOpportunity',
                    query: this.search,
                    order: 'sys.createdAt',
                    ...this.getFilterValues(),
                })
                .then(data => {
                    this.entries = data.items;

                    this.loading = false;
                })
                .catch(err => {
                    this.loading = false;
                });
        },
        watchFilters() {
            Object.keys(initialFilters).forEach(key => {
                this.$watch(key, () => this.getEntries());
            });
        },
        clearFilters() {
            Object.keys(initialFilters).forEach(key => {
                this[key] = initialFilters[key];
            });
        },
        getFilterValues() {
            return Object.keys(initialFilters).reduce((carry, key) => {
                return { ...carry, ...this.getFilterValue(key) };
            }, {});
        },
        getFilterValue(filter) {
            console.log(filter, this[filter]);

            if (!this[filter] || this[filter] === 'any') {
                return {};
            }

            return {
                [`fields.${filter}`]: this[filter],
            };
        },
    };
}
