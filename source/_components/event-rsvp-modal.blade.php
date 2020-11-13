<div
    x-data="{
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
    x-cloak
    class="p-4 font-sans"
    @keydown.window.tab="handleForwardTab"
    @keydown.window.shift.tab="handleBackwardTab"
    @keydown.window.escape="handleEscape"
>
    <button
        class="btn px-16 text-black border-black hover:bg-black hover:text-white"
        @click="toggle()"
    >
        RSVP
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
            <div class="absolute inset-0 bg-black-semi-5"></div>
        </div>

        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative w-full h-full flex items-center justify-center p-4"
        >
            <div
                style="max-height: 95vh"
                class="relative max-w-3xl w-full bg-white rounded-sm p-4 shadow-xl overflow-y-auto transition-all sm:p-8"
                @click.away="toggle"
            >
                <h3 id="dialog-title" class="text-xl leading-tight sm:text-2xl md:text-3xl" tabindex="0">
                    RSVP for {{ $title }}
                </h3>
                <p class="mt-2 text-gray-800">Enter your information below to RSVP for the event.</p>

                <form
                    id="form1633"
                    name="form1633"
                    accept-charset="UTF-8"
                    autocomplete="off"
                    enctype="multipart/form-data"
                    method="post"
                    action="https://provostweb.wufoo.com/forms/z874vb0m1sxb0/#public"
                >
                    <input id="Field6" name="Field6" type="hidden" value="{!! $title !!}" maxlength="255" tabindex="0" onkeyup="" required placeholder="" />

                    <div class="-mx-2 md:flex md:items-start">
                        <div class="p-2 flex-1">
                            <label for="Field1" class="mb-1 inline-block text-gray-600 text-sm leading-tight">First Name</label>
                            <input id="Field1" name="Field1" type="text" class="form-input" placeholder="John" required>
                        </div>
                        <div class="p-2 flex-1">
                            <label for="Field2" class="mb-1 inline-block text-gray-600 text-sm leading-tight">Last Name</label>
                            <input id="Field2" name="Field2" type="text" class="form-input" placeholder="Doe" required>
                        </div>
                    </div>

                    <div class="-mx-2 mt-2 md:flex md:items-start">
                        <div class="p-2 flex-1">
                            <label for="Field3" class="mb-1 inline-block text-gray-600 text-sm leading-tight">Email Address</label>
                            <input id="Field3" name="Field3" type="text" class="form-input" placeholder="johndoe@example.com" required>
                        </div>
                    </div>

                    <div class="mt-6 -mx-1 flex items-center">
                        <div class="px-1">
                            <input id="saveForm" name="saveForm" class="btn text-white bg-black border-black hover:bg-gray-800" type="submit" value="Submit" />
                        </div>
                        <div class="px-1">
                            <button
                                type="button"
                                class="btn text-gray-800 border-black-semi-4 hover:bg-gray-200"
                                @click.prevent="toggle"
                            >
                                Cancel
                            </button>
                        </div>
                    </div>
                    <div class="hidden">
                        <label for="comment">Do Not Fill This Out</label>
                        <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                        <input type="hidden" id="idstamp" name="idstamp" value="tF/EB/adSHZqJ58oLTfExqMuftBtbnnFQ6ghniEWvzA=" />
                        <input type="hidden" id="encryptedPassword" name="encryptedPassword" value="" />
                    </div>
                </form>
                <button
                    aria-label="Close dialog"
                    title="Close dialog"
                    type="button"
                    class="inline-block absolute top-0 right-0 m-4 text-gray-600 hover:text-gray-800 focus:outline-none focus:shadow-outline"
                    @click.stop="toggle"
                >
                    <svg aria-hidden="true" focusable="false" class="w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
        </div>
    </div>
</div>
