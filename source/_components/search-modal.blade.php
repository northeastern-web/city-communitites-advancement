<div
    x-init="init()"
    x-data="{
        searchTerm: '',
        searchResults: [],
        init: function () {
            var self = this;

            this.$watch('searchTerm', function (val) {
                if (! val) {
                    return self.searchResults = [];
                }

                self.searchResults = searchIndex.search(val + ' *' + val + '*').map(function (result) {
                    return pageIndex[result.ref];
                })
                .slice(0, 5);
            });
        },
        open: false,
        toggle: function () {
            this.open = !this.open;
            if (this.open) {
                document.body.classList.add('overflow-hidden');

                this.focusDialog();
            } else {
                document.body.classList.remove('overflow-hidden');

                this.previouslyFocusedElement.focus();

                if (this.removedTabIndexFromFirstFocusableElement) {
                    this.firstFocusableElement.setAttribute('tabindex', 0);
                }
            }
        },
        focusDialog: function () {
            this.previouslyFocusedElement = document.activeElement;
            var $this = this;

            setTimeout(function () {
                var focusableElements = $this.$refs.dialog.querySelectorAll('a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), [tabindex=\'0\']');

                if (focusableElements.length) {
                    $this.firstFocusableElement = focusableElements[0];
                    $this.lastFocusableElement = focusableElements[focusableElements.length - 1];

                    $this.firstFocusableElement.focus();

                    if ($this.firstFocusableElement.tabIndex == 0) {
                        $this.firstFocusableElement.removeAttribute('tabindex');
                        $this.removedTabIndexFromFirstFocusableElement = true;
                    } else {
                        $this.removedTabIndexFromFirstFocusableElement = false;
                    }
                }
            }, 200);
        },
        handleBackwardTab: function (e) {
            if (! this.open) {
                return;
            }

            if (document.activeElement === this.firstFocusableElement) {
                e.preventDefault();
            }
        },
        handleForwardTab: function (e) {
            if (! this.open) {
                return;
            }

            if (document.activeElement === this.lastFocusableElement) {
                e.preventDefault();
                this.firstFocusableElement.focus();
            }
        },
        handleEscape: function () {
            if (this.open) {
                this.toggle();
            }
        },
        previouslyFocusedElement: null,
        firstFocusableElement: null,
        lastFocusableEl: null,
        removedTabIndexFromFirstFocusableElement: false,
    }"
    @keydown.window.tab="handleForwardTab"
    @keydown.window.shift.tab="handleBackwardTab"
    @keydown.window.escape="handleEscape"
>
    <button
        aria-label="Toggle search dialog"
        class="py-2 px-3"
        @click="toggle"
    >
        <i aria-hidden="true" focusable="false" data-feather="search" class="w-5 h-5"></i>
    </button>

    <div
        role="dialog"
        aria-label="Search dialog"
        x-ref="dialog"
        x-show="open"
        class="h-screen w-full fixed bottom-0 inset-x-0 z-50 sm:inset-0 sm:flex"
        x-cloak
    >
        <div class="sr-only" aria-live="polite" x-text="`${searchResults.length} results found`"></div>

        <div
            x-show.transition.opacity.duration.500ms="open"
            tabindex="-1"
        >
            <div class="absolute inset-0 bg-black bg-opacity-90"></div>
        </div>

        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="relative w-full h-full flex items-center justify-center p-4 transition-all transform"
        >
            <div
                style="max-height: 80vh"
                class="w-full h-full overflow-y-auto"
            >
                <div
                    class="max-w-3xl mx-auto px-4 py-8"
                    @click.away="toggle"
                >
                    <input
                        x-model.debounce.500ms="searchTerm"
                        type="text"
                        class="block w-full py-3 text-white text-xl bg-transparent border-b border-white placeholder-gray-200 md:text-2xl focus:outline-none focus:border-blue-700"
                        placeholder="Type here to begin searching"
                    >
                    <div x-show.transition.opacity.500ms="searchResults.length" class="mt-3 -mx-4">
                        <ul>
                            <template x-for="(result, index) in searchResults" :key="index">
                                <li>
                                    <a :href="result.slug" class="block px-4 py-3 text-white rounded-md hover:text-gray-200 hover:bg-white hover:bg-opacity-10 focus:outline-none focus:ring focus:ring-blue-500">
                                        <h2 x-text="result.title" class="font-bold"></h2>
                                        <p x-show="result.description" x-text="result.description" class="mt-1 text-gray-100 text-sm truncate"></p>
                                    </a>
                                </li>
                            </template>
                        </ul>
                    </div>
                    <div
                        x-show.transition.opacity.500ms="searchTerm && ! searchResults.length"
                        class="mt-8 text-white text-lg uppercase tracking-wide"
                    >
                        There are no results for that search term.
                    </div>
                </div>
            </div>
        </div>

        <button
            aria-label="Close dialog"
            title="Close dialog"
            type="button"
            class="hidden absolute top-0 right-0 m-4 text-gray-200 sm:inline-block hover:text-gray-300 focus:outline-none focus:ring focus:ring-blue-500"
            @click.stop="toggle"
        >
            <svg aria-hidden="true" focusable="false" class="w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
</div>
