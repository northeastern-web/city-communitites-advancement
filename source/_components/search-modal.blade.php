<div
    x-init="init()"
    x-data="{
        searchTerm: '',
        searchResults: [],
        init: function () {
            var self = this;

            this.$watch('searchTerm', function (val) {
                self.searchResults = searchIndex.search('*' + val + '*').map(function (result) {
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
    class="p-4 font-sans"
    @keydown.window.tab="handleForwardTab"
    @keydown.window.shift.tab="handleBackwardTab"
    @keydown.window.escape="handleEscape"
>
    <button
        class="py-2 px-3"
        @click="toggle"
    >
        <i data-feather="search" class="w-5 h-5"></i>
    </button>

    <div
        role="dialog"
        aria-labelledby="dialog-title"
        x-ref="dialog"
        x-show="open"
        class="h-screen w-full fixed bottom-0 inset-x-0 z-50 sm:inset-0 sm:flex"
    >
        <div
            x-show.transition.opacity.duration.300ms="open"
            tabindex="-1"
        >
            <div class="absolute inset-0 bg-black-semi-9"></div>
        </div>

        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="relative w-full h-full flex items-center justify-center p-4 transition-all"
        >
            <div
                style="max-height: 85vh"
                class="max-w-3xl w-full"
                @click.away="toggle"
            >
                <input
                    x-model.debounce.500ms="searchTerm"
                    type="text"
                    class="block w-full h-full py-3 px-1 text-white text-xl bg-transparent border-b border-white placeholder-gray-200 md:text-2xl focus:outline-none focus:border-blue-700"
                    placeholder="Type here to begin searching"
                >
                <div x-show="searchResults.length">
                    <ul class="text-white">
                        <template x-for="(result, index) in searchResults">
                            <li>
                                <a :href="result.slug" x-text="result.title" class="block px-2 py-2 text-lg hover:text-gray-200"></a>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>

        <button
            aria-label="Close dialog"
            title="Close dialog"
            type="button"
            class="hidden absolute top-0 right-0 m-4 text-gray-200 sm:inline-block hover:text-gray-300 focus:outline-none focus:shadow-outline"
            @click.stop="toggle"
        >
            <svg class="w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
</div>
