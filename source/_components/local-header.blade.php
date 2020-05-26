<nav
    x-init="init"
    x-data="{
        navIsOpen: false,
        activeSection: null,
        focusableElements: [],
        init: function () {
            this.focusableElements = Array.from(this.$refs.desktopNav.querySelectorAll(`a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), [tabindex='0']`));
        },
        toggle: function (section) {
            if (this.activeSection === section) {
                return this.activeSection = null;
            }

            this.activeSection = section;
        },
        focusPreviousLink: function (event) {
            var index = this.focusableElements.indexOf(event.target);

            this.focusableElements[index - 1].focus();
        },
        focusNextLink: function (event, section = null) {
            if (section && this.activeSection !== section) {
                return this.activeSection = section;
            }

            var index = this.focusableElements.indexOf(event.target);

            this.focusableElements[index + 1].focus();
        }
    }"
    class="py-3 bg-white"
>
    <div class="max-w-screen-xl mx-auto px-8 text-gray-900 lg:flex lg:items-center lg:justify-between">
        <div class="flex items-center justify-between">
            <a class="inline-block focus:outline-none focus:shadow-outline" href="#">
                <svg
                    aria-label="Northeastern University"
                    title="Northeastern University"
                    width="195"
                    height="18"
                    viewBox="0 0 195 18"
                    fill="none"
                >
                    <path d="M189.958 15.114l3.166-7.2c.599-1.389.856-1.736 1.455-1.91v-.52h-3.337v.52c1.112.26 1.198.781.684 1.996l-1.283 3.123-1.54-3.557c-.343-.78-.257-1.301.855-1.388v-.52h-4.449v.52c.513.173.77.347 1.198 1.301l2.823 6.16-.513 1.041c-.257.608-.513 1.041-.77 1.302-.171-.694-.599-1.041-1.198-1.041s-1.112.433-1.112 1.214c0 .781.684 1.388 1.369 1.388 1.112 0 1.797-.52 2.652-2.429zm-4.535-2.169l-.257-.52c-.427.173-.855.347-1.197.347-.771 0-1.027-.434-1.027-.955V6.612h2.139v-.955h-2.139V4.096h-.343l-3.08 1.995v.52h1.198v5.64c0 1.128.599 1.735 1.882 1.735 1.027-.087 2.054-.347 2.824-1.04zm-6.417.26c-1.027-.173-1.198-.347-1.198-1.301V5.31h-.856l-2.481 1.649v.347h1.198v4.598c0 .954-.172 1.128-1.198 1.301v.52h4.535v-.52zm-2.482-9.196c.685 0 1.284-.607 1.284-1.301s-.514-1.215-1.198-1.215c-.77 0-1.284.607-1.284 1.301.086.694.514 1.215 1.198 1.215zm-2.909 7.288c0-1.562-1.284-2.082-2.567-2.516-1.198-.434-2.054-.608-2.054-1.562 0-.52.343-.954 1.027-.954.856 0 1.626.52 2.567 1.561l.428-.173-.599-2.082h-.257l-.342.26c-.513-.174-1.027-.347-1.626-.347-1.797 0-2.995 1.041-2.995 2.603 0 1.561 1.284 2.082 2.567 2.429 1.198.434 2.054.607 2.054 1.562 0 .607-.428 1.04-1.198 1.04-1.112 0-1.968-.78-3.08-2.082l-.428.174.684 2.69h.257l.514-.348c.598.26 1.197.434 1.882.434 1.711 0 3.166-1.04 3.166-2.69zm-8.813 1.995c-1.113-.173-1.284-.434-1.284-1.475V8.26a6.397 6.397 0 011.027-1.388c0 .694.428 1.128 1.027 1.128s1.112-.434 1.112-1.388c0-.781-.428-1.215-1.198-1.215-.856 0-1.455.694-2.053 1.735V5.397h-.771l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.214-1.112 1.301v.52h4.535v-.52zm-10.696-4.685c0-1.388.599-2.255 1.711-2.255.77 0 1.284.607 1.455 1.648l-3.166 1.128v-.52zm5.305 3.644l-.428-.347c-.428.52-1.112.868-1.968.868-1.54 0-2.481-1.215-2.738-2.777l5.048-1.735c-.085-1.822-1.454-2.776-3.08-2.776-2.396 0-4.107 1.909-4.107 4.338 0 2.342 1.54 4.164 4.107 4.164 1.626 0 2.652-.694 3.166-1.735zm-8.813-4.164c.598-1.388.855-1.736 1.454-1.909v-.52h-3.337v.52c1.112.26 1.198.78.685 1.995l-1.284 3.124-1.626-3.644c-.342-.781-.256-1.301.856-1.388v-.52h-4.449v.52c.513.173.77.347 1.197 1.301l2.91 6.333h.855l2.739-5.812zm-7.787 5.205c-1.027-.173-1.198-.347-1.198-1.301V5.397h-.856l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.128-1.198 1.301v.52h4.535v-.52zm-2.396-9.196c.685 0 1.284-.608 1.284-1.302 0-.694-.514-1.214-1.198-1.214-.77 0-1.284.607-1.284 1.301s.514 1.215 1.198 1.215zm-8.557 9.196c-.941-.173-1.112-.347-1.112-1.301V8c.856-.78 1.54-1.128 2.139-1.128.856 0 1.027.434 1.113 1.215v3.904c0 .954-.172 1.214-1.113 1.301v.52h4.364v-.52c-.941-.173-1.112-.347-1.112-1.301V7.913c0-1.388-.599-2.342-2.311-2.342-1.026 0-2.053.694-3.08 1.561V5.484h-.77l-2.481 1.648v.347h1.197v4.599c0 .954-.171 1.214-1.112 1.3v.521h4.364l-.086-.607zM113.29 3.228v5.119c0 3.297 1.712 5.64 6.076 5.64s6.075-2.343 5.989-5.64V4.183c0-1.996.514-2.516 1.541-2.777v-.52h-4.108v.52c.942.26 1.541.781 1.541 2.777v4.164c0 2.95-1.541 4.251-4.364 4.251-2.824 0-4.364-1.301-4.364-4.251V3.14c0-1.3.342-1.561 1.454-1.648V.886h-5.134v.607c1.027.26 1.369.434 1.369 1.735zM99.77 13.379c-.94-.174-1.112-.347-1.112-1.301V8.087c.856-.781 1.541-1.128 2.14-1.128.855 0 1.026.434 1.112 1.214v3.905c0 .954-.171 1.214-1.112 1.3v.521h4.363v-.52c-.941-.174-1.112-.347-1.112-1.301V8c0-1.388-.599-2.343-2.31-2.343-1.027 0-2.054.695-3.08 1.562V5.571h-.77l-2.482 1.648v.347h1.198v4.598c0 .955-.171 1.215-1.113 1.302v.52h4.364l-.085-.607zm-6.759 0c-1.112-.174-1.283-.434-1.283-1.475V8.347a6.393 6.393 0 011.026-1.388c0 .694.428 1.128 1.027 1.128s1.112-.434 1.112-1.388c0-.781-.427-1.215-1.198-1.215-.855 0-1.454.694-2.053 1.735V5.484h-.77L88.39 7.132v.347h1.198v4.599c0 .954-.17 1.214-1.112 1.3v.521h4.535v-.52zM82.401 8.78c0-1.388.599-2.256 1.711-2.256.77 0 1.284.607 1.455 1.648L82.4 9.301v-.52zm5.305 3.644l-.428-.347c-.428.52-1.112.867-1.968.867-1.54 0-2.481-1.215-2.738-2.776l5.048-1.735c-.085-1.822-1.454-2.777-3.08-2.777-2.396 0-4.107 1.91-4.107 4.252 0 2.342 1.54 4.164 4.107 4.164 1.626 0 2.567-.694 3.166-1.648zm-7.872.78l-.257-.607c-.428.174-.856.347-1.198.347-.77 0-1.027-.434-1.027-.954V6.785h2.14v-.954h-2.14V4.269h-.342l-3.08 1.996v.52h1.197v5.64c0 1.127.6 1.735 1.883 1.735 1.112 0 2.054-.347 2.824-.955zm-6.418-1.735c0-1.561-1.283-2.082-2.567-2.516-1.198-.434-2.053-.607-2.053-1.561 0-.52.342-.955 1.026-.955.856 0 1.626.52 2.567 1.562l.428-.174-.684-2.169h-.257l-.342.26c-.514-.173-1.027-.346-1.626-.346-1.797 0-2.995 1.04-2.995 2.602 0 1.562 1.284 2.083 2.567 2.43 1.198.434 2.054.607 2.054 1.561 0 .608-.428 1.041-1.198 1.041-1.113 0-1.968-.78-3.08-2.082l-.428.174.684 2.69h.257l.513-.348c.6.26 1.198.434 1.883.434 1.882.087 3.251-.954 3.251-2.603zm-13.006.347c0-.867.428-1.301 2.396-1.822v2.516c-.514.347-.856.52-1.284.52-.77 0-1.112-.433-1.112-1.214zm3.68 2.256c.77 0 1.54-.347 2.053-.694l-.171-.52c-.856.173-1.112 0-1.112-.521V7.74c0-1.388-.6-2.083-2.482-2.083-2.14 0-3.765 1.215-3.765 2.256 0 .52.342.955.941.955.685 0 1.027-.434 1.113-.955.085-.52-.086-.954-.343-1.128.428-.173.856-.347 1.284-.347.77 0 1.112.26 1.112.955v1.735c-2.995.78-4.45 1.475-4.45 3.036 0 1.215.771 1.909 2.054 1.909.77 0 1.712-.347 2.482-.954.171.607.599.954 1.283.954zM52.11 8.781c0-1.388.6-2.256 1.711-2.256.77 0 1.284.607 1.455 1.648L52.11 9.301v-.52zm5.305 3.644l-.428-.347c-.427.52-1.112.867-1.968.867-1.54 0-2.481-1.215-2.738-2.776l5.049-1.735c-.086-1.822-1.455-2.777-3.08-2.777-2.397 0-4.108 1.91-4.108 4.338 0 2.343 1.54 4.165 4.107 4.165 1.626 0 2.567-.694 3.166-1.735zm-13.52 1.04c-.94-.086-1.112-.346-1.112-1.3V8.172c.856-.78 1.455-1.127 2.14-1.127.855 0 1.026.433 1.112 1.214v3.904c0 .955-.171 1.215-1.112 1.302v.52h4.363v-.52c-.94-.174-1.112-.347-1.112-1.302V8.087c0-1.388-.599-2.343-2.31-2.343-1.027 0-2.054.608-3.08 1.475V.365h-.6l-2.823 1.822v.347h1.198v9.63c0 .955-.171 1.215-1.113 1.302v.52h4.364l.086-.52zm-4.877-.173l-.256-.52c-.428.173-.856.347-1.198.347-.77 0-1.027-.434-1.027-.955V6.96h2.14v-.954h-2.14V4.442h-.342l-3.08 1.995v.52h1.197v5.64c0 1.128.6 1.735 1.883 1.735a5.616 5.616 0 002.823-1.04zm-8.3.26c-1.112-.173-1.283-.433-1.283-1.474V8.52a6.4 6.4 0 011.027-1.388c0 .694.428 1.128 1.026 1.128.6 0 1.113-.434 1.113-1.388 0-.78-.428-1.215-1.198-1.215-.856 0-1.455.695-2.054 1.736V5.657h-.77l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.215-1.113 1.301v.521h4.535v-.52zM18.482 9.128c0-1.562.685-2.516 2.054-2.516 1.797 0 2.31 2.256 2.31 4.251 0 1.562-.684 2.516-2.053 2.516-1.797 0-2.31-2.256-2.31-4.251zm6.503.78c0-2.255-1.54-4.164-4.192-4.164-2.738 0-4.364 1.996-4.364 4.338 0 2.256 1.54 4.164 4.193 4.164 2.652 0 4.363-1.995 4.363-4.337zM13.862 4.53c0-1.996.513-2.516 1.54-2.777v-.52h-4.107v.52c.941.26 1.54.781 1.54 2.777v6.073l-8.642-8.85c-.514-.52-.685-.52-1.027-.52H0v.52c.685.087 1.112.347 1.882 1.128.257.174.514.52.514.955v6.853c0 1.996-.514 2.516-1.54 2.777v.52h4.107v-.52c-.941-.174-1.54-.694-1.54-2.69V4.27l9.754 9.89h.685V4.53z" fill="currentColor"/>
                </svg>

                <h2 class="mt-1 text-black font-black">{{ $page->title }}</h2>
            </a>
            <button
                class="ml-6 lg:hidden focus:outline-none focus:shadow-outline"
                type="button"
                data-toggle="collapse"
                data-target="#navbarContent"
                aria-controls="navbarContent"
                :aria-expanded="navIsOpen"
                aria-label="Toggle navigation"
                @click="navIsOpen = ! navIsOpen"
            >
                <i data-feather="menu" class="w-6 h-6 text-gray-900"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div>
            <div
                x-show="navIsOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-black-semi-5 transition-opacity lg:hidden"
                @click="navIsOpen = false"
            ></div>
            <div
                id="navbarContent"
                x-show="navIsOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                class="fixed inset-y-0 left-0 px-4 pt-6 pb-16 bg-white overflow-y-auto transition-transform lg:hidden"
            >
                <div class="flex items-start justify-between">
                    <a class="inline-block focus:outline-none focus:shadow-outline" href="#">
                        <svg
                            aria-label="Northeastern University"
                            title="Northeastern University"
                            width="195"
                            height="18"
                            viewBox="0 0 195 18"
                            fill="none"
                        >
                            <path d="M189.958 15.114l3.166-7.2c.599-1.389.856-1.736 1.455-1.91v-.52h-3.337v.52c1.112.26 1.198.781.684 1.996l-1.283 3.123-1.54-3.557c-.343-.78-.257-1.301.855-1.388v-.52h-4.449v.52c.513.173.77.347 1.198 1.301l2.823 6.16-.513 1.041c-.257.608-.513 1.041-.77 1.302-.171-.694-.599-1.041-1.198-1.041s-1.112.433-1.112 1.214c0 .781.684 1.388 1.369 1.388 1.112 0 1.797-.52 2.652-2.429zm-4.535-2.169l-.257-.52c-.427.173-.855.347-1.197.347-.771 0-1.027-.434-1.027-.955V6.612h2.139v-.955h-2.139V4.096h-.343l-3.08 1.995v.52h1.198v5.64c0 1.128.599 1.735 1.882 1.735 1.027-.087 2.054-.347 2.824-1.04zm-6.417.26c-1.027-.173-1.198-.347-1.198-1.301V5.31h-.856l-2.481 1.649v.347h1.198v4.598c0 .954-.172 1.128-1.198 1.301v.52h4.535v-.52zm-2.482-9.196c.685 0 1.284-.607 1.284-1.301s-.514-1.215-1.198-1.215c-.77 0-1.284.607-1.284 1.301.086.694.514 1.215 1.198 1.215zm-2.909 7.288c0-1.562-1.284-2.082-2.567-2.516-1.198-.434-2.054-.608-2.054-1.562 0-.52.343-.954 1.027-.954.856 0 1.626.52 2.567 1.561l.428-.173-.599-2.082h-.257l-.342.26c-.513-.174-1.027-.347-1.626-.347-1.797 0-2.995 1.041-2.995 2.603 0 1.561 1.284 2.082 2.567 2.429 1.198.434 2.054.607 2.054 1.562 0 .607-.428 1.04-1.198 1.04-1.112 0-1.968-.78-3.08-2.082l-.428.174.684 2.69h.257l.514-.348c.598.26 1.197.434 1.882.434 1.711 0 3.166-1.04 3.166-2.69zm-8.813 1.995c-1.113-.173-1.284-.434-1.284-1.475V8.26a6.397 6.397 0 011.027-1.388c0 .694.428 1.128 1.027 1.128s1.112-.434 1.112-1.388c0-.781-.428-1.215-1.198-1.215-.856 0-1.455.694-2.053 1.735V5.397h-.771l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.214-1.112 1.301v.52h4.535v-.52zm-10.696-4.685c0-1.388.599-2.255 1.711-2.255.77 0 1.284.607 1.455 1.648l-3.166 1.128v-.52zm5.305 3.644l-.428-.347c-.428.52-1.112.868-1.968.868-1.54 0-2.481-1.215-2.738-2.777l5.048-1.735c-.085-1.822-1.454-2.776-3.08-2.776-2.396 0-4.107 1.909-4.107 4.338 0 2.342 1.54 4.164 4.107 4.164 1.626 0 2.652-.694 3.166-1.735zm-8.813-4.164c.598-1.388.855-1.736 1.454-1.909v-.52h-3.337v.52c1.112.26 1.198.78.685 1.995l-1.284 3.124-1.626-3.644c-.342-.781-.256-1.301.856-1.388v-.52h-4.449v.52c.513.173.77.347 1.197 1.301l2.91 6.333h.855l2.739-5.812zm-7.787 5.205c-1.027-.173-1.198-.347-1.198-1.301V5.397h-.856l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.128-1.198 1.301v.52h4.535v-.52zm-2.396-9.196c.685 0 1.284-.608 1.284-1.302 0-.694-.514-1.214-1.198-1.214-.77 0-1.284.607-1.284 1.301s.514 1.215 1.198 1.215zm-8.557 9.196c-.941-.173-1.112-.347-1.112-1.301V8c.856-.78 1.54-1.128 2.139-1.128.856 0 1.027.434 1.113 1.215v3.904c0 .954-.172 1.214-1.113 1.301v.52h4.364v-.52c-.941-.173-1.112-.347-1.112-1.301V7.913c0-1.388-.599-2.342-2.311-2.342-1.026 0-2.053.694-3.08 1.561V5.484h-.77l-2.481 1.648v.347h1.197v4.599c0 .954-.171 1.214-1.112 1.3v.521h4.364l-.086-.607zM113.29 3.228v5.119c0 3.297 1.712 5.64 6.076 5.64s6.075-2.343 5.989-5.64V4.183c0-1.996.514-2.516 1.541-2.777v-.52h-4.108v.52c.942.26 1.541.781 1.541 2.777v4.164c0 2.95-1.541 4.251-4.364 4.251-2.824 0-4.364-1.301-4.364-4.251V3.14c0-1.3.342-1.561 1.454-1.648V.886h-5.134v.607c1.027.26 1.369.434 1.369 1.735zM99.77 13.379c-.94-.174-1.112-.347-1.112-1.301V8.087c.856-.781 1.541-1.128 2.14-1.128.855 0 1.026.434 1.112 1.214v3.905c0 .954-.171 1.214-1.112 1.3v.521h4.363v-.52c-.941-.174-1.112-.347-1.112-1.301V8c0-1.388-.599-2.343-2.31-2.343-1.027 0-2.054.695-3.08 1.562V5.571h-.77l-2.482 1.648v.347h1.198v4.598c0 .955-.171 1.215-1.113 1.302v.52h4.364l-.085-.607zm-6.759 0c-1.112-.174-1.283-.434-1.283-1.475V8.347a6.393 6.393 0 011.026-1.388c0 .694.428 1.128 1.027 1.128s1.112-.434 1.112-1.388c0-.781-.427-1.215-1.198-1.215-.855 0-1.454.694-2.053 1.735V5.484h-.77L88.39 7.132v.347h1.198v4.599c0 .954-.17 1.214-1.112 1.3v.521h4.535v-.52zM82.401 8.78c0-1.388.599-2.256 1.711-2.256.77 0 1.284.607 1.455 1.648L82.4 9.301v-.52zm5.305 3.644l-.428-.347c-.428.52-1.112.867-1.968.867-1.54 0-2.481-1.215-2.738-2.776l5.048-1.735c-.085-1.822-1.454-2.777-3.08-2.777-2.396 0-4.107 1.91-4.107 4.252 0 2.342 1.54 4.164 4.107 4.164 1.626 0 2.567-.694 3.166-1.648zm-7.872.78l-.257-.607c-.428.174-.856.347-1.198.347-.77 0-1.027-.434-1.027-.954V6.785h2.14v-.954h-2.14V4.269h-.342l-3.08 1.996v.52h1.197v5.64c0 1.127.6 1.735 1.883 1.735 1.112 0 2.054-.347 2.824-.955zm-6.418-1.735c0-1.561-1.283-2.082-2.567-2.516-1.198-.434-2.053-.607-2.053-1.561 0-.52.342-.955 1.026-.955.856 0 1.626.52 2.567 1.562l.428-.174-.684-2.169h-.257l-.342.26c-.514-.173-1.027-.346-1.626-.346-1.797 0-2.995 1.04-2.995 2.602 0 1.562 1.284 2.083 2.567 2.43 1.198.434 2.054.607 2.054 1.561 0 .608-.428 1.041-1.198 1.041-1.113 0-1.968-.78-3.08-2.082l-.428.174.684 2.69h.257l.513-.348c.6.26 1.198.434 1.883.434 1.882.087 3.251-.954 3.251-2.603zm-13.006.347c0-.867.428-1.301 2.396-1.822v2.516c-.514.347-.856.52-1.284.52-.77 0-1.112-.433-1.112-1.214zm3.68 2.256c.77 0 1.54-.347 2.053-.694l-.171-.52c-.856.173-1.112 0-1.112-.521V7.74c0-1.388-.6-2.083-2.482-2.083-2.14 0-3.765 1.215-3.765 2.256 0 .52.342.955.941.955.685 0 1.027-.434 1.113-.955.085-.52-.086-.954-.343-1.128.428-.173.856-.347 1.284-.347.77 0 1.112.26 1.112.955v1.735c-2.995.78-4.45 1.475-4.45 3.036 0 1.215.771 1.909 2.054 1.909.77 0 1.712-.347 2.482-.954.171.607.599.954 1.283.954zM52.11 8.781c0-1.388.6-2.256 1.711-2.256.77 0 1.284.607 1.455 1.648L52.11 9.301v-.52zm5.305 3.644l-.428-.347c-.427.52-1.112.867-1.968.867-1.54 0-2.481-1.215-2.738-2.776l5.049-1.735c-.086-1.822-1.455-2.777-3.08-2.777-2.397 0-4.108 1.91-4.108 4.338 0 2.343 1.54 4.165 4.107 4.165 1.626 0 2.567-.694 3.166-1.735zm-13.52 1.04c-.94-.086-1.112-.346-1.112-1.3V8.172c.856-.78 1.455-1.127 2.14-1.127.855 0 1.026.433 1.112 1.214v3.904c0 .955-.171 1.215-1.112 1.302v.52h4.363v-.52c-.94-.174-1.112-.347-1.112-1.302V8.087c0-1.388-.599-2.343-2.31-2.343-1.027 0-2.054.608-3.08 1.475V.365h-.6l-2.823 1.822v.347h1.198v9.63c0 .955-.171 1.215-1.113 1.302v.52h4.364l.086-.52zm-4.877-.173l-.256-.52c-.428.173-.856.347-1.198.347-.77 0-1.027-.434-1.027-.955V6.96h2.14v-.954h-2.14V4.442h-.342l-3.08 1.995v.52h1.197v5.64c0 1.128.6 1.735 1.883 1.735a5.616 5.616 0 002.823-1.04zm-8.3.26c-1.112-.173-1.283-.433-1.283-1.474V8.52a6.4 6.4 0 011.027-1.388c0 .694.428 1.128 1.026 1.128.6 0 1.113-.434 1.113-1.388 0-.78-.428-1.215-1.198-1.215-.856 0-1.455.695-2.054 1.736V5.657h-.77l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.215-1.113 1.301v.521h4.535v-.52zM18.482 9.128c0-1.562.685-2.516 2.054-2.516 1.797 0 2.31 2.256 2.31 4.251 0 1.562-.684 2.516-2.053 2.516-1.797 0-2.31-2.256-2.31-4.251zm6.503.78c0-2.255-1.54-4.164-4.192-4.164-2.738 0-4.364 1.996-4.364 4.338 0 2.256 1.54 4.164 4.193 4.164 2.652 0 4.363-1.995 4.363-4.337zM13.862 4.53c0-1.996.513-2.516 1.54-2.777v-.52h-4.107v.52c.941.26 1.54.781 1.54 2.777v6.073l-8.642-8.85c-.514-.52-.685-.52-1.027-.52H0v.52c.685.087 1.112.347 1.882 1.128.257.174.514.52.514.955v6.853c0 1.996-.514 2.516-1.54 2.777v.52h4.107v-.52c-.941-.174-1.54-.694-1.54-2.69V4.27l9.754 9.89h.685V4.53z" fill="currentColor"/>
                        </svg>

                        <h2 class="mt-1 text-black font-black">{{ $page->title }}</h2>
                    </a>

                    <button
                        class="ml-8 focus:outline-none focus:shadow-outline"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarContent"
                        aria-controls="navbarContent"
                        :aria-expanded="navIsOpen"
                        aria-label="Close navigation"
                        @click="navIsOpen = false"
                    >
                        <i data-feather="x" class="w-6 h-6 text-gray-600"></i>
                    </button>
                </div>

                <ul class="mt-8 w-full">
                    <li class="block">
                        <a
                            id="mobile-programs-dropdown"
                            class="inline-flex items-center justify-between w-full py-4 font-medium border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/programs"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            :aria-expanded="activeSection === 'programs'"
                            @keydown.space="toggle('programs')"
                            @click.prevent="toggle('programs')"
                        >
                            Our Programs

                            <i class="ml-2 w-4 h-4 text-gray-600" data-feather="chevron-down"></i>
                        </a>
                        <ul
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-show="activeSection == 'programs'"
                            aria-labelledby="mobile-programs-dropdown"
                        >
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Action</a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Another action</a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="block">
                        <a
                            id="mobile-engage-dropdown"
                            class="inline-flex items-center justify-between w-full py-4 font-medium border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/engage"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            :aria-expanded="activeSection === 'engage'"
                            @keydown.space="toggle('engage')"
                            @click.prevent="toggle('engage')"
                        >
                            Engage With Us

                            <i class="ml-2 w-4 h-4 text-gray-600" data-feather="chevron-down"></i>
                        </a>
                        <ul
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-show="activeSection == 'engage'"
                            aria-labelledby="mobile-engage-dropdown"
                        >
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Action</a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Another action</a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="block">
                        <a
                            class="inline-block w-full py-4 font-medium border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/events"
                        >
                            Events
                        </a>
                    </li>
                    <li class="block">
                        <a
                            class="inline-block w-full py-4 font-medium border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/news"
                        >
                            News
                        </a>
                    </li>

                    <li class="block">
                        <a
                            id="mobile-about-dropdown"
                            class="inline-flex items-center justify-between w-full py-4 font-medium border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            :aria-expanded="activeSection === 'about'"
                            @keydown.space="toggle('about')"
                            @click.prevent="toggle('about')"
                        >
                            About

                            <i class="ml-2 w-4 h-4 text-gray-600" data-feather="chevron-down"></i>
                        </a>
                        <ul
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-show="activeSection == 'about'"
                            aria-labelledby="mobile-about-dropdown"
                        >
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Action</a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Another action</a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <div x-ref="desktopNav" class="hidden lg:block">
            <ul class="-mx-2 flex items-center">
                <li
                    class="relative"
                    @mouseenter="activeSection = 'programs'"
                    @mouseleave="activeSection = null"
                >
                    <a
                        id="navbar-programs-dropdown"
                        class="inline-flex items-center p-4 text-sm font-medium rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/programs"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        :aria-expanded="activeSection === 'programs'"
                        @keydown.space="toggle('programs')"
                        @keydown.enter="toggle('programs')"
                        @keydown.arrow-down="focusNextLink($event, 'programs')"
                    >
                        Our Programs

                        <i class="ml-2 w-4 h-4 text-gray-600" data-feather="chevron-down"></i>
                    </a>
                    <div
                        :class="{ 'flex': activeSection === 'programs', 'hidden': activeSection !== 'programs' }"
                        aria-labelledby="navbar-programs-dropdown"
                        class="absolute right-0 top-0 mt-12 flex-col items-start justify-start py-1 bg-white border rounded-sm"
                    >
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Action
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Another action
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                        >
                            Something else here
                        </a>
                    </div>
                </li>
                <li
                    class="relative"
                    @mouseenter="activeSection = 'engage'"
                    @mouseleave="activeSection = null"
                >
                    <a
                        id="navbar-engage-dropdown"
                        class="inline-flex items-center p-4 text-sm font-medium rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/engage"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        :aria-expanded="activeSection === 'engage'"
                        @keydown.space="toggle('engage')"
                        @keydown.enter="toggle('engage')"
                        @keydown.arrow-down="focusNextLink($event, 'engage')"
                    >
                        Engage With Us

                        <i class="ml-2 w-4 h-4 text-gray-600" data-feather="chevron-down"></i>
                    </a>
                    <div
                        :class="{ 'flex': activeSection === 'engage', 'hidden': activeSection !== 'engage' }"
                        aria-labelledby="navbar-engage-dropdown"
                        class="absolute right-0 top-0 mt-12 flex-col items-start justify-start py-1 bg-white border rounded-sm"
                    >
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Action
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Another action
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                        >
                            Something else here
                        </a>
                    </div>
                </li>
                <li>
                    <a
                        class="p-4 text-sm font-medium rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/event"
                    >
                        Events
                    </a>
                </li>
                <li>
                    <a
                        class="p-4 text-sm font-medium rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/news"
                    >
                        News
                    </a>
                </li>
                <li
                    class="relative"
                    @mouseenter="activeSection = 'about'"
                    @mouseleave="activeSection = null"
                >
                    <a
                        id="navbar-about-dropdown"
                        class="inline-flex items-center p-4 text-sm font-medium rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/about"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        :aria-expanded="activeSection === 'about'"
                        @keydown.space="toggle('about')"
                        @keydown.enter="toggle('about')"
                        @keydown.arrow-down="focusNextLink($event, 'about')"
                    >
                        About

                        <i class="ml-2 w-4 h-4 text-gray-600" data-feather="chevron-down"></i>
                    </a>
                    <div
                        :class="{ 'flex': activeSection === 'about', 'hidden': activeSection !== 'about' }"
                        aria-labelledby="navbar-about-dropdown"
                        class="absolute right-0 top-0 mt-12 flex-col items-start justify-start py-1 bg-white border rounded-sm"
                    >
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Action
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Another action
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm font-medium whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                        >
                            Something else here
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>