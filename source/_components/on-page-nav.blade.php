<nav
    x-data="{
        links: {{ collect($links) }},
        sections: [],
        active: null,
        init: function() {
            this.initializeLinks()

            this.active = this.sections[0].id;

            this.setupScrollListeners();
        },
        initializeLinks: function() {
            var self = this;
            this.links.forEach(function (title) {
                id = '#' + title.toLowerCase().replace(' ', '-');

                var el = document.querySelector(id);

                if (el) {
                    self.sections.push({
                        id: id,
                        title: title,
                        el: el,
                    });
                } else {
                    console.log(id + ' not found!');
                }
            });
        },
        setupScrollListeners: function () {
            var self = this;
            window.addEventListener('scroll', function (e) {
                self.sections.forEach(function (section) {
                    if (window.scrollY > section.el.offsetTop - 60) {
                        self.active = section.id;
                    }
                });
            });
        },
    }"
    x-init="init()"
    aria-label="On page navigation"
    class="sticky top-0 flex flex-col py-8 text-gray-600"
>
    <span class="leading-tight uppercase tracking-wide text-gray-900">On this page</span>
    <template
        x-for="section in sections"
    >
        <a
            class="mt-3 px-2 leading-tight border-l-2 transition-colors duration-300"
            :class="active == section.id ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900'"
            :href="section.id"
            x-text="section.title"
            @click="active = section.id"
        >
        </a>
    </template>
</nav>
