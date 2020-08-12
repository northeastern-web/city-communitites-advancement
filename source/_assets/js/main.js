require('@northeastern-web/kernl-ui');

import lunr from 'lunr';

window.searchIndex = lunr(function() {
    this.ref('slug');
    this.field('slug');
    this.field('title');
    this.field('description');

    Object.values(pageIndex).forEach(function(doc) {
        this.add(doc);
    }, this);
});

import Cleave from 'cleave.js';

window.Cleave = Cleave;

window.mergeObjects = function(a, b) {
    return { ...a, ...b };
};

window.contentful = require('contentful');

window.contentfulServiceOpportunities = require('./components/contentful-service-opportunities.js').default;
